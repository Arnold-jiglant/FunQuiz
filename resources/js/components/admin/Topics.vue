<template>
    <div class="container-fluid">
        <h3 class="text-dark mb-1">Topics</h3>
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 font-weight-bold">Available topics</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 text-nowrap">
                        <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                            <label>Show&nbsp;
                                <select v-model="per_page"
                                        class="form-control form-control-sm custom-select custom-select-sm">
                                    <option value="10" selected="">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>&nbsp;
                                <div v-if="filter" class="d-inline-block ml-2">Search for '{{filter}}'</div>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right dataTables_filter" id="dataTable_filter-1">
                            <label class="mr-5">
                                <input type="search" class="form-control form-control-sm" aria-controls="dataTable"
                                       placeholder="filter topics" v-model.lazy="filter"></label>
                            <button class="btn btn-primary btn-sm" type="button" @click="addTopic">
                                <i class="fa fa-user-plus"></i>&nbsp;Add
                            </button>
                        </div>
                    </div>
                </div>
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table dataTable my-0" id="dataTable">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Followers</th>
                            <th>Questions</th>
                            <th>Tags</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="topic in topics">
                            <td><img class="rounded-circle mr-2" width="40" height="40"
                                     :src="topic.image_url"></td>
                            <td>{{topic.name}}</td>
                            <td>{{topic.followers}}</td>
                            <td>{{topic.qns_count}}</td>
                            <td>{{topic.tags.length}}</td>
                            <td>
                                <button class="btn btn-outline-primary btn-sm" type="button"
                                        @click="$router.push({name:'topic.questions',params:{id:topic.id}})">
                                    <i class="fa fa-list"></i>&nbsp;view
                                </button>
                                <button class="btn btn-outline-primary btn-sm" type="button" @click="editTopic(topic)">
                                    <i class="fa fa-pencil"></i>&nbsp;edit
                                </button>
                                <button class="btn btn-outline-danger btn-sm ml-1" type="button"><i
                                    class="icon ion-android-delete"></i>&nbsp;delete
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
                                            @click="fetchTopics(links.prev)">
                                        <span aria-hidden="true">«</span>
                                    </button>
                                </li>
                                <li class="page-item"><a class="page-link">{{meta.current_page}}/{{meta.last_page}}</a>
                                </li>
                                <li class="page-item" :class="{disabled:!links.next}">
                                    <button class="page-link" aria-label="Next"
                                            @click="fetchTopics(links.next)">
                                        <span aria-hidden="true">»</span>
                                    </button>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <topic-modal v-if="selectedTopic!=null && showModal"
                     :topic="selectedTopic" @modal_closed="modalClosed" edit_mode @fetch_topics="fetchTopics"/>
        <topic-modal v-else-if="showModal" @modal_closed="modalClosed" @fetch_topics="fetchTopics"/>
    </div>
</template>

<script>
    import TopicModal from "./modals/TopicModal";

    export default {
        data() {
            return {
                topics: [],
                links: {},
                meta: {},
                per_page: 10,
                filter: null,
                selectedTopic: null,
                showModal: false,
            };
        },
        components: {
            TopicModal
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
            fetchTopics: function (url = '/v1/admin/topics') {
                this.isLoading = true;
                window.axios.get(url, {
                    params: {
                        per_page: this.per_page,
                        filter: this.filter,
                    }
                }).then(response => {
                    console.log(response.data);
                    this.topics = response.data.data;
                    this.links = response.data.links;
                    this.meta = response.data.meta;
                }).catch(error => {
                    console.log(error)
                }).then(() => {
                    this.isLoading = false;
                });
            },
            addTopic: function () {
                this.showModal = true;
            },
            editTopic: function (topic) {
                this.selectedTopic = topic;
                this.showModal = true;
            },
            modalClosed: function () {
                this.showModal = false;
                this.selectedTopic = null;
            },
        },
        created() {
            this.fetchTopics();
        }
    }
</script>

<style scoped>

</style>
