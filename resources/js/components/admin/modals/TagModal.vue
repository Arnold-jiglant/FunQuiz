<template>
    <div class="modal fade" role="dialog" tabindex="-1" id="tag-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{edit_mode?"Edit":"Add"}} Tag</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div v-if="errors" class="form-row">
                            <div class="col">
                                <ul>
                                    <li v-for="error in errors" class="text-danger"><small>{{error}}</small></li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group"><label><strong>Name</strong></label>
                            <input class="form-control form-control-sm"
                                   type="text" placeholder="tag name" v-model="tag.name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light btn-sm" type="button" data-dismiss="modal">Close</button>
                    <button v-if="edit_mode" class="btn btn-primary btn-sm"
                            type="button" @click="console.log('updating')">Update
                    </button>
                    <button v-else class="btn btn-primary btn-sm" type="button" @click="addTag">Add</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            tag: {
                type: Object,
                default: function () {
                    return {};
                }
            },
            edit_mode: {
                type: Boolean,
                default: false,
            },
        },
        data() {
            return {
                errors: []
            };
        },
        methods: {
            addTag: function () {
                console.log('adding');
                let tag = {
                    name: this.tag.name,
                };

                window.axios.post('v1/admin/tag', tag)
                    .then(response => {
                        console.log('response', response.data);
                        if (response.data.error) {
                            this.errors = response.data.error;
                        } else {
                            $('#tag-modal').modal('hide');
                        }
                    })
                    .catch(error => {
                        console.log('error', error);
                    });
            },
            updateTag: function () {
                console.log('updating');
                let tag = {
                    name: this.tag.name,
                };

                window.axios.put('v1/admin/tag/'+this.tag.id, tag)
                    .then(response => {
                        console.log('response', response.data);
                        if (response.data.error) {
                            this.errors = response.data.error;
                        } else {
                            $('#tag-modal').modal('hide');
                        }
                    })
                    .catch(error => {
                        console.log('error', error);
                    });
            },
        },
        mounted() {
            let tag_modal = $('#tag-modal');
            let vm = this;
            tag_modal.modal('show');
            tag_modal.on('hidden.bs.modal', function (e) {
                vm.$emit('modal_closed');
            });
        }
    }
</script>

<style scoped>

</style>
