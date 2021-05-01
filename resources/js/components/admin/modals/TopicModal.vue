<template>
    <div class="modal fade" role="dialog" tabindex="-1" id="topic-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{edit_mode?"Edit":"Add"}} Topic</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group"><label>
                            <strong>Name</strong></label>
                            <input id="topic-name" class="form-control form-control-sm" type="text"
                                   placeholder="topic name"
                                   v-model="topic.name">
                        </div>
                        <div class="form-group">
                            <label><strong>Image</strong></label>
                            <div class="text-center border p-2 animate__animated animated--fade-in">
                                <img class="rounded" id="imagePreview" width="200px" height="200px"><br>
                                <input type="file" ref="image" accept="image/*" @change="changeImage"
                                       style="visibility: hidden">
                                <div class="mt-2">
                                    <button class="btn btn-primary btn-sm" type="button" @click="$refs.image.click()">
                                        Choose
                                        Image
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label><strong>Tags</strong></label>
                            <div class="selected-tags p-2 mb-2">
                                <p v-if="!topic.tags.length" class="text-muted font-italic">Choose Tags</p>
                                <button v-for="tag in topic.tags" class="btn btn-outline-dark btn-sm m-1 tag tag-sm"
                                        type="button">
                                    {{tag.name}}&nbsp;&nbsp;<i class="fa fa-remove" @click="removeTag(tag)"/></button>

                            </div>
                            <input class="form-control form-control-sm" type="text" id="search-tag"
                                   placeholder="search tag" @keyup="searchTags">
                            <div v-if="foundedTags.length" id="suggestion-box">
                                <ul id="tag-list" class="shadow">
                                    <li v-for="tag in foundedTags" @click="addTag(tag)">{{tag.name}}</li>
                                </ul>
                            </div>
                        </div>
                        <div v-if="errors" class="form-row">
                            <div class="col">
                                <ul>
                                    <li v-for="error in errors" class="text-danger"><small>{{error}}</small></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light btn-sm" type="button" data-dismiss="modal">Close</button>
                    <button v-if="edit_mode" class="btn btn-primary btn-sm" type="button" @click="updateTopic">Update
                    </button>
                    <button v-else class="btn btn-primary btn-sm" type="button" @click="addTopic">Add</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            edit_mode: {
                type: Boolean,
                default: false,
            },
            topic: {
                type: Object,
                default: function () {
                    return {
                        tags: [],
                    };
                }
            }
        },
        data() {
            return {
                errors: [],
                selectedImage: null,
                foundedTags: [],
                imageChanged: false,
            }
        },
        methods: {
            changeImage: function () {
                this.selectedImage = this.$refs.image.files[0];
                this.imageChanged = true;
                if (this.selectedImage) {
                    let reader = new FileReader();
                    let vm = this;

                    reader.onload = function (e) {
                        $('#imagePreview').attr('src', e.target.result);
                    };

                    reader.readAsDataURL(this.selectedImage); // convert to base64 string
                }
            },
            searchTags: function (e) {
                if (e.target.value.length < 1) return;
                $("#search-tag").css("background", "#FFF url(assets/img/LoaderIcon.gif) no-repeat 165px");
                window.axios.get('v1/admin/search/tag/' + e.target.value)
                    .then(response => {
                        console.log(response);
                        this.foundedTags = response.data.data;
                    }).catch(error => console.log(error))
                    .then(() => {
                        $("#search-tag").css("background", "#FFF");
                    });
            },
            addTag: function (tag) {
                let exists = false;
                this.topic.tags.forEach(item => {
                    if (item.id === tag.id) {
                        exists = true;
                    }
                });
                if (!exists) {
                    this.topic.tags.push(tag);
                }
                this.foundedTags = [];
                $('#search-tag').val('').focus();
            },
            removeTag: function (tag) {
                console.log('removing tag');
                this.topic.tags = this.topic.tags.filter(function (item) {
                    return item.id !== tag.id;
                });
            },
            addTopic: function () {
                console.log('adding Topic');
                this.errors = [];

                if ($.trim(this.topic.name).length < 1) {
                    this.errors.push('Enter name first');
                    $('#topic-name').focus();
                    return;
                }
                if (this.selectedImage == null) {
                    this.errors.push('Choose Image');
                    $('#imagePreview').focus();
                    return;
                }
                if (this.topic.tags.length < 1) {
                    this.errors.push('Add at least one tag');
                    $('#search-tag').focus();
                    return;
                }
                let topic = new FormData();
                topic.append('name', this.topic.name);
                topic.append('image', this.selectedImage);
                this.topic.tags.forEach(function (item) {
                    let i = 0;
                    topic.append('tags[' + i + ']', item.id);
                    i++;
                });


                window.axios.post('v1/admin/topic', topic, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                    .then(response => {
                        console.log('response', response.data);
                        if (response.data.error) {
                            this.errors = response.data.error;
                        } else {
                            this.$emit('fetch_topics');
                            $('#topic-modal').modal('hide');
                        }
                    })
                    .catch(error => {
                        console.log('error', error);
                    });
            },
            updateTopic: function () {
                console.log('updating Topic');
                this.errors = [];

                if ($.trim(this.topic.name).length < 1) {
                    this.errors.push('Enter name first');
                    $('#topic-name').focus();
                    return;
                }
                if (this.imageChanged && this.selectedImage == null) {
                    this.errors.push('Choose Image');
                    $('#imagePreview').focus();
                    return;
                }
                if (this.topic.tags.length < 1) {
                    this.errors.push('Add at least one tag');
                    $('#search-tag').focus();
                    return;
                }
                let topic = new FormData();
                topic.append('name', this.topic.name);
                if (this.imageChanged) topic.append('image', this.selectedImage);
                this.topic.tags.forEach(function (item) {
                    let i = 0;
                    topic.append('tags[' + i + ']', item.id);
                    i++;
                });

                window.axios.put('v1/admin/topic/' + this.topic.id, topic, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                    .then(response => {
                        console.log('response', response.data);
                        if (response.data.error) {
                            this.errors = response.data.error;
                        } else {
                            this.$emit('fetch_topics');
                            $('#topic-modal').modal('hide');
                        }
                    })
                    .catch(error => {
                        console.log('error', error);
                    });
            },
        },
        mounted() {
            let topic_modal = $('#topic-modal');
            let vm = this;
            topic_modal.modal('show');
            topic_modal.on('hidden.bs.modal', function (e) {
                vm.$emit('modal_closed');
            });
            if (this.edit_mode) $('#imagePreview').attr('src', this.topic.image_url);
        }
    }
</script>

<style scoped>
    #tag-list {
        float: left;
        list-style: none;
        margin-top: -2px;
        padding: 0 0 30px;
        width: 190px;
        height: 190px;
        overflow-y: auto;
        position: absolute;
        background: white;
    }

    #tag-list li {
        padding: 10px;
        border-bottom: #e6e6e6 1px solid;
    }

    #tag-list li:hover {
        background: lightskyblue;
        cursor: pointer;
    }

    #search-tag {
        padding: 10px;
        border: #a8d4b1 1px solid;
        border-radius: 4px;
    }
</style>
