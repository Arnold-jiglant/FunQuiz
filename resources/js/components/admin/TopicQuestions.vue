<template>
    <div class="container-fluid">
        <h3 class="text-dark mb-1">Topics<i class="fa fa-angle-right ml-2 text-gray-600"/>&nbsp;{{topic.name}}</h3>
        <div class="row">
            <div class="col">
                <div class="card shadow mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <h4>Topic Info</h4>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-outline-info text-dark" type="button"
                                                data-toggle="collapse" data-target="#topic-info"
                                                @click="infoExpanded=!infoExpanded">
                                            <i class="fa  font-weight-bolder"
                                               style="font-size: 17pt;"
                                               :class="infoExpanded?'fa-angle-double-up':'fa-angle-double-down'"/>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row collapse" id="topic-info">
                            <div class="col-md-5 col-lg-3 text-center">
                                <img class="rounded-circle mb-3 mt-4"
                                     :src="topic.image_url"
                                     width="160" height="160">
                            </div>
                            <div class="col pt-3">
                                <p>Topic name:&nbsp;<span class="font-weight-bold">{{topic.name}}</span></p>
                                <p>Followers:&nbsp;<span class="font-weight-bold">{{topic.followers}}</span></p>
                                <p>Questions:&nbsp;<span class="font-weight-bold">{{topic.qns_count}}</span></p>
                                <p>Owner:&nbsp;<span class="font-weight-bold">{{topic.creator.name}}</span></p>
                                <p>Created at:&nbsp;<span class="font-weight-bold">{{topic.create_date}}</span></p>
                                <div>
                                    <span>Tags:</span>
                                    <div class="selected-tags p-2 mb-2">
                                        <button v-for="tag in topic.tags"
                                                class="btn btn-outline-success btn-sm m-1 tag tag-sm tag-view"
                                                type="button">{{tag.name}}&nbsp;&nbsp;<i class="fa fa-remove"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 font-weight-bold">Topic Questions</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 text-nowrap">
                        <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                            <label>Show&nbsp;<select
                                class="form-control form-control-sm custom-select custom-select-sm" v-model="per_page">
                                <option value="10" selected="">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>&nbsp;</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right dataTables_filter" id="dataTable_filter-1">
                            <label class="mr-5">
                                <input type="search" class="form-control form-control-sm" aria-controls="dataTable"
                                       placeholder="filter question" v-model.lazy="filter">
                            </label>
                            <button class="btn btn-primary btn-sm" type="button" @click="showModal=true"><i
                                class="fa fa-user-plus"/>&nbsp;Add
                            </button>
                        </div>
                    </div>
                </div>
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table dataTable my-0" id="dataTable">
                        <thead>
                        <tr>
                            <th>Body</th>
                            <th>Answers</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="question in questions">
                            <td>
                                <p>{{question.body}}<br></p>
                                <div v-if="question.image_url" class="text-center">
                                    <img class="rounded" :src="question.image_url"
                                         width="100px">
                                </div>
                                <br>
                            </td>
                            <td>
                                <ul class="list-group">
                                    <li v-for="answer in question.answers" class="list-group-item answer">
                                        <div v-if="answer.correct" class="row">
                                            <div class="col"><span>{{answer.body}}</span></div>
                                            <div class="col-2">
                                                <i class="fa fa-check text-success" style="font-size: 17pt;"/>
                                            </div>
                                        </div>
                                        <span v-else>{{answer.body}}</span>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <button class="btn btn-outline-primary btn-sm" type="button"
                                        @click="editQuestion(question)">
                                    <i class="fa fa-pencil"/>&nbsp;edit
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing
                            {{meta.from}} to {{meta.to}}
                            of {{meta.total}}</p>
                    </div>
                    <div class="col-md-6">
                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                            <ul class="pagination">
                                <li class="page-item" :class="{disabled:!links.prev}">
                                    <button class="page-link" aria-label="Previous"
                                            @click="fetchQuestions(links.prev)">
                                        <span aria-hidden="true">«</span>
                                    </button>
                                </li>
                                <li class="page-item"><a class="page-link">{{meta.current_page}}/{{meta.last_page}}</a>
                                </li>
                                <li class="page-item" :class="{disabled:!links.next}">
                                    <button class="page-link" aria-label="Next"
                                            @click="fetchQuestions(links.next)">
                                        <span aria-hidden="true">»</span>
                                    </button>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <question-modal v-if="selectedQuestion && showModal" :topic="topic" :question="selectedQuestion"
                        @modal_closed="modalClosed" @fetch_questions="fetchQuestions"
                        :edit_mode="selectedQuestion!=null" @delete_question="deleteQuestion($event)"/>
        <question-modal v-else-if="showModal" :topic="topic" @modal_closed="modalClosed"
                        @fetch_questions="fetchQuestions"/>
    </div>
</template>

<script>
    import QuestionModal from "./modals/QuestionModal";

    export default {
        data() {
            return {
                topic: {
                    creator: {
                        name: ''
                    }
                },
                questions: [],
                links: {},
                meta: {},
                per_page: 10,
                filter: null,
                selectedQuestion: null,
                showModal: false,
                infoExpanded: false,
            };
        },
        components: {
            QuestionModal
        },
        watch: {
            per_page: function () {
                this.fetchTopics();
            },
            filter: function () {
                this.fetchTopics();
            },
        },
        methods: {
            fetchTopicInfo: function () {
                window.axios.get('v1/admin/topic/' + this.$route.params.id).then(response => {
                    console.log('found topic', response.data);
                    this.topic = response.data.data;
                    this.fetchQuestions();
                }).catch(error => {
                    console.log(error)
                })
                    .then(() => {
                        this.isLoading = false;
                    });
            },
            fetchQuestions: function (url = '/v1/admin/' + this.topic.id + '/questions') {
                this.isLoading = true;
                window.axios.get(url, {
                    params: {
                        per_page: this.per_page,
                        filter: this.filter,
                    }
                }).then(response => {
                    console.log('Questions:', response.data);
                    this.questions = response.data.data;
                    this.links = response.data.links;
                    this.meta = response.data.meta;
                }).catch(error => {
                    console.log(error)
                }).then(() => {
                    this.isLoading = false;
                });
            },
            addQuestion: function () {
                this.showModal = true;
            },
            editQuestion: function (question) {
                this.selectedQuestion = question;
                this.showModal = true;
            },
            deleteQuestion: function (question) {
                this.questions = this.questions.filter(function (item) {
                    return item.id !== question.id;
                })
            },
            modalClosed: function () {
                this.showModal = false;
                this.selectedQuestion = null;
            },
        },
        created() {
            this.fetchTopicInfo();
        }
    }
</script>

<style scoped>

</style>
