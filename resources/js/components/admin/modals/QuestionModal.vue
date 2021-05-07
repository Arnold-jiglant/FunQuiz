<template>
    <div class="modal fade" role="dialog" tabindex="-1" id="question-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{edit_mode?"Edit":"Add"}} Question</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label><strong>Topic</strong></label>
                            <input class="form-control form-control-sm" type="text" placeholder="topic name"
                                   readonly="" v-model="topic.name">
                        </div>
                        <div class="form-group">
                            <label><strong>Body</strong></label>
                            <textarea id="answer-body" class="form-control form-control-sm" rows="4"
                                      v-model="question.body"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input class="custom-control-input" type="checkbox" id="formCheck-1"
                                       :checked="hasImage" @change="hasImage=!hasImage">
                                <label class="custom-control-label" for="formCheck-1">
                                    {{hasImage?'Has Image':'No Image'}}</label>
                            </div>
                            <div v-if="hasImage" class="text-center border p-2 animate__animated animate__fadeIn">
                                <img id="imagePreview" class="rounded" width="200px" height="200px">
                                <input type="file" ref="image" accept="image/*" style="visibility: hidden"
                                       @change="changeImage">
                                <div class="mt-2">
                                    <button class="btn btn-primary btn-sm" type="button" @click="$refs.image.click()">
                                        Choose Image
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label><strong>Answers</strong></label>
                            <div v-for="(answer,index) in question.answers" class="form-row mb-2">
                                <div class="col">
                                    <input class="form-control form-control-sm" type="text"
                                           :placeholder="answerPlaceholder(index)" v-model="answer.body">
                                </div>
                                <div class="col-2">
                                    <input type="radio" :value="answer.id" v-model="selectedAnswer">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div v-if="errors" class="form-row">
                        <div class="col">
                            <ul>
                                <li v-for="error in errors" class="text-danger"><small>{{error}}</small></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button v-if="edit_mode" class="btn btn-danger btn-sm" type="button" @click="deleteQuestion">
                        Delete
                    </button>
                    <button class="btn btn-light btn-sm" type="button" data-dismiss="modal">Close</button>
                    <button v-if="edit_mode" class="btn btn-primary btn-sm" type="button" @click="updateQuestion">
                        Update
                    </button>
                    <button v-else class="btn btn-primary btn-sm" type="button" @click="addQuestion">Add</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            topic: {
                type: Object,
                required: true,
            },
            edit_mode: {
                type: Boolean,
                default: false,
            },
            question: {
                type: Object,
                default: function () {
                    return {
                        answers: [
                            {id: 1, body: ''}, {id: 2, body: ''}, {id: 3, body: ''}, {id: 4, body: ''},
                        ],
                    };
                }
            }
        },
        data() {
            return {
                errors: [],
                selectedImage: null,
                hasImage: true,
                selectedAnswer: 1,
                imageChanged: false,
            }
        },
        methods: {
            answerPlaceholder: function (index) {
                return "answer " + (++index);
            },
            changeImage: function () {
                this.selectedImage = this.$refs.image.files[0];
                this.hasImage = true;
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
            addQuestion: function () {
                console.log('adding Question');
                this.errors = [];

                if ($.trim(this.question.body).length < 1) {
                    this.errors.push('Enter the answer first');
                    $('#answer-body').focus();
                    return;
                }
                if (this.hasImage && this.selectedImage == null) {
                    this.errors.push('Choose Image');
                    $('#imagePreview').focus();
                    return;
                }

                let check = false;
                this.question.answers.forEach(answer => {
                    this.selectedAnswer === answer.id ? answer.correct = true : answer.correct = false;
                    if (answer.body.length < 1) {
                        check = true;
                    }
                });
                if (check) {
                    this.errors.push('Enter all answers');
                    return;
                }

                let question = new FormData();
                question.append('body', this.question.body);
                if (this.hasImage) question.append('image', this.selectedImage);
                question.append('answers', JSON.stringify(this.question.answers));

                window.axios.post('v1/admin/' + this.topic.id + '/question', question, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                    .then(response => {
                        console.log('response', response.data);
                        if (response.data.error) {
                            this.errors = response.data.error;
                        } else {
                            this.$emit('fetch_questions');
                            $('#question-modal').modal('hide');
                        }
                    })
                    .catch(error => {
                        console.log('error', error);
                    });
            },
            updateQuestion: function () {
                console.log('updating Question');
                this.errors = [];

                if ($.trim(this.question.body).length < 1) {
                    this.errors.push('Enter the answer first');
                    $('#answer-body').focus();
                    return;
                }
                if (this.hasImage && this.imageChanged && this.selectedImage == null) {
                    this.errors.push('Choose Image');
                    $('#imagePreview').focus();
                    return;
                }

                let check = false;
                this.question.answers.forEach(answer => {
                    this.selectedAnswer === answer.id ? answer.correct = true : answer.correct = false;
                    if (answer.body.length < 1) {
                        check = true;
                    }
                });
                if (check) {
                    this.errors.push('Enter all answers');
                    return;
                }

                let question = new FormData();
                question.append('body', this.question.body);
                if (this.hasImage && !this.imageChanged) question.append('preserve', 1);
                if (this.hasImage && this.imageChanged) question.append('image', this.selectedImage);
                question.append('answers', JSON.stringify(this.question.answers));

                window.axios.post('v1/admin/update/question/' + this.question.id, question, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                    .then(response => {
                        console.log('response', response.data);
                        // return;
                        if (response.data.error) {
                            this.errors = response.data.error;
                        } else {
                            this.$emit('fetch_questions');
                            $('#question-modal').modal('hide');
                        }
                    })
                    .catch(error => {
                        console.log('error', error);
                    });
            },
            deleteQuestion: function () {
                if (!confirm('Delete this question?')) return;
                console.log('delete Question');
                window.axios.delete('v1/admin/question/' + this.question.id)
                    .then(response => {
                        console.log('response', response.data);
                        if (response.data.error) {
                            this.errors = response.data.error;
                        } else {
                            this.$emit('delete_question', this.question);
                            $('#question-modal').modal('hide');
                        }
                    })
                    .catch(error => {
                        console.log('error', error);
                    });
            }
        },
        mounted() {
            let question_modal = $('#question-modal');
            let vm = this;
            question_modal.modal('show');
            question_modal.on('hidden.bs.modal', function (e) {
                vm.$emit('modal_closed');
            });
            this.edit_mode && this.question.image_url ? $('#imagePreview').attr('src', this.question.image_url) : this.hasImage = false;
        }
    }
</script>

<style scoped>

</style>
