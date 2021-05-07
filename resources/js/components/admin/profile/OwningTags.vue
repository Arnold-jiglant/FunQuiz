<template>
    <div class="card shadow mb-3">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                    <p class="text-primary m-0 font-weight-bold">Tags</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive table" id="dataTable-1" role="grid"
                 aria-describedby="dataTable_info">
                <table class="table dataTable my-0" id="dataTable">
                    <tbody>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Topics</th>
                    </tr>
                    <tr v-for="(tag,index) in tags">
                        <td>{{++index}}.</td>
                        <td>{{tag.name}}</td>
                        <td>{{tag.topic_count}}</td>
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
                                        @click="fetchTags(links.prev)">
                                    <span aria-hidden="true">«</span>
                                </button>
                            </li>
                            <li class="page-item"><a class="page-link">{{meta.current_page}}/{{meta.last_page}}</a>
                            </li>
                            <li class="page-item" :class="{disabled:!links.next}">
                                <button class="page-link" aria-label="Next"
                                        @click="fetchTags(links.next)">
                                    <span aria-hidden="true">»</span>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            user_id: String,
        },
        data() {
            return {
                tags: [],
                links: {},
                meta: {},
            };
        },
        methods: {
            fetchTags: function (url = '/v1/admin/user/' + this.user_id + '/tags') {
                this.isLoading = true;
                window.axios.get(url)
                    .then(response => {
                        console.log(response.data);
                        this.tags = response.data.data;
                        this.links = response.data.links;
                        this.meta = response.data.meta;
                    }).catch(error => {
                    console.log(error)
                }).then(() => {
                    this.isLoading = false;
                });
            },
        },
        created() {
            this.fetchTags();
        }
    }
</script>

<style scoped>

</style>
