<template>
    <div class="container-fluid">
        <h3 class="text-dark mb-1">Users</h3>
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 font-weight-bold">Users Info</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 text-nowrap">
                        <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                            <label>Show&nbsp;
                                <select class="form-control form-control-sm custom-select custom-select-sm"
                                        v-model="per_page">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>&nbsp;
                                <div v-if="filter" class="d-inline-block ml-2">Search for '{{filter}}'</div>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right dataTables_filter" id="dataTable_filter">
                            <label class="mr-5">
                                <input type="search" class="form-control form-control-sm" aria-controls="dataTable"
                                       placeholder="filter users" v-model.lazy.trim="filter">
                            </label>
                            <button class="btn btn-primary btn-sm" type="button" @click="addUser"><i
                                class="fa fa-user-plus"></i>&nbsp;Add
                            </button>
                        </div>
                    </div>
                </div>
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table dataTable my-0" id="dataTable">
                        <thead>
                        <tr>
                            <th>Username</th>
                            <th>Role</th>
                            <th>E-mail</th>
                            <th>Phone#</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="user in users" :key="user.id">
                            <td><img class="rounded-circle mr-2" width="30" height="30"
                                     src="assets/img/avatars/avatar1.jpeg">{{user.name}}
                            </td>
                            <td>{{user.role}}</td>
                            <td>{{user.email}}</td>
                            <td>{{user.phone_number}}</td>
                            <td>{{user.isActive?"Active":"Inactive"}}</td>
                            <td>
                                <button class="btn btn-outline-primary btn-sm" type="button" @click="editUser(user)">
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
                                            @click="fetchUsers(links.prev)">
                                        <span aria-hidden="true">«</span>
                                    </button>
                                </li>
                                <li class="page-item"><a class="page-link">{{meta.current_page}}/{{meta.last_page}}</a></li>
                                <li class="page-item" :class="{disabled:!links.next}">
                                    <button class="page-link" aria-label="Next"
                                            @click="fetchUsers(links.next)">
                                        <span aria-hidden="true">»</span>
                                    </button>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <user-modal v-if="selectedUser!=null && showModal"
                    :user="selectedUser" @modal_closed="modalClosed" edit_mode @fetch_user="fetchUsers"/>
        <user-modal v-else-if="showModal" @modal_closed="modalClosed" @fetch_user="fetchUsers"/>
    </div>
</template>

<script>
    import UserModal from "./modals/UserModal";

    export default {
        data() {
            return {
                users: [],
                links: {},
                meta: {},
                per_page: 10,
                filter: null,
                selectedUser: null,
                showModal: false,
            };
        },
        components: {
            UserModal
        },
        watch: {
            per_page: function () {
                this.fetchUsers();
            },
            filter: function () {
                this.fetchUsers();
            },
        },
        methods: {
            fetchUsers: function (url = '/v1/admin/users') {
                window.axios.get(url, {
                    params: {
                        per_page: this.per_page,
                        filter: this.filter,
                    }
                }).then(response => {
                    console.log(response.data);
                    this.users = response.data.data;
                    this.links = response.data.links;
                    this.meta = response.data.meta;
                }).catch(error => {
                    console.log(error)
                });
            },
            addUser: function () {
                this.showModal = true;
            },
            editUser: function (user) {
                this.selectedUser = user;
                this.showModal = true;
            },
            modalClosed: function () {
                this.showModal = false;
                this.selectedUser = null;
            },
        },
        created() {
            this.fetchUsers();
        }
    }
</script>

<style scoped>

</style>
