<template>
    <div class="container-fluid">
        <h3 class="text-dark mb-1">Players</h3>
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 font-weight-bold">Players Info</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 text-nowrap">
                        <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select
                            class="form-control form-control-sm custom-select custom-select-sm">
                            <option value="10" selected="">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>&nbsp;</label></div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right dataTables_filter" id="dataTable_filter"><label class="mr-5"><input
                            type="search" class="form-control form-control-sm" aria-controls="dataTable"
                            placeholder="filter players"></label></div>
                    </div>
                </div>
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table dataTable my-0" id="dataTable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>E-mail</th>
                            <th>Phone#</th>
                            <th>Status</th>
                            <th><strong>Level</strong><br></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><img class="rounded-circle mr-2" width="30" height="30"
                                     src="assets/img/avatars/avatar1.jpeg"><small
                                class="d-inline-block font-weight-lighter">123-2342-345</small></td>
                            <td>username1<br></td>
                            <td>airi@email.com</td>
                            <td>0795123321</td>
                            <td>Active</td>
                            <td><span>6</span>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                         style="width: 50%;"><span class="sr-only">50%</span></div>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-outline-primary btn-sm" type="button"><i
                                    class="fa fa-pencil"></i>&nbsp;edit
                                </button>
                                <button class="btn btn-outline-danger btn-sm ml-1" type="button"><i
                                    class="icon ion-android-delete"></i>&nbsp;delete
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle mr-2" width="30" height="30"
                                     src="assets/img/avatars/avatar1.jpeg"><small
                                class="d-inline-block font-weight-lighter">123-2342-345</small></td>
                            <td>username1<br></td>
                            <td>airi@email.com</td>
                            <td>0795123321</td>
                            <td>Active</td>
                            <td><span>6</span>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                         style="width: 50%;"><span class="sr-only">50%</span></div>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-outline-primary btn-sm" type="button"><i
                                    class="fa fa-pencil"></i>&nbsp;edit
                                </button>
                                <button class="btn btn-outline-danger btn-sm ml-1" type="button"><i
                                    class="icon ion-android-delete"></i>&nbsp;delete
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle mr-2" width="30" height="30"
                                     src="assets/img/avatars/avatar1.jpeg"><small
                                class="d-inline-block font-weight-lighter">123-2342-345</small></td>
                            <td>username1<br></td>
                            <td>airi@email.com</td>
                            <td>0795123321</td>
                            <td>Active</td>
                            <td><span>6</span>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                         style="width: 50%;"><span class="sr-only">50%</span></div>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-outline-primary btn-sm" type="button"><i
                                    class="fa fa-pencil"></i>&nbsp;edit
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
                        <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10
                            of 27</p>
                    </div>
                    <div class="col-md-6">
                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                            <ul class="pagination">
                                <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span
                                    aria-hidden="true">«</span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                    aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Players"
    }
</script>

<style scoped>

</style>
