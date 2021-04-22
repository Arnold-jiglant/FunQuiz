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
                            placeholder="filter users"></label>
                            <button class="btn btn-primary btn-sm" type="button" data-toggle="modal"
                                    data-target="#user-modal"><i class="fa fa-user-plus"></i>&nbsp;Add
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
                            <th>Start date</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><img class="rounded-circle mr-2" width="30" height="30"
                                     src="assets/img/avatars/avatar1.jpeg">username1
                            </td>
                            <td>Accountant</td>
                            <td>airi@email.com</td>
                            <td>0795123321</td>
                            <td>Active</td>
                            <td>2008/11/28</td>
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
                                     src="assets/img/avatars/avatar1.jpeg">username1
                            </td>
                            <td>Accountant</td>
                            <td>airi@email.com</td>
                            <td>0795123321</td>
                            <td>Active</td>
                            <td>2008/11/28</td>
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
                                     src="assets/img/avatars/avatar1.jpeg">username1
                            </td>
                            <td>Accountant</td>
                            <td>airi@email.com</td>
                            <td>0795123321</td>
                            <td>Active</td>
                            <td>2008/11/28</td>
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
                                     src="assets/img/avatars/avatar1.jpeg">username1
                            </td>
                            <td>Accountant</td>
                            <td>airi@email.com</td>
                            <td>0795123321</td>
                            <td>Active</td>
                            <td>2008/11/28</td>
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
                                     src="assets/img/avatars/avatar1.jpeg">username1
                            </td>
                            <td>Accountant</td>
                            <td>airi@email.com</td>
                            <td>0795123321</td>
                            <td>Active</td>
                            <td>2008/11/28</td>
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
                                     src="assets/img/avatars/avatar1.jpeg">username1
                            </td>
                            <td>Accountant</td>
                            <td>airi@email.com</td>
                            <td>0795123321</td>
                            <td>Active</td>
                            <td>2008/11/28</td>
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
        <div class="modal fade" role="dialog" tabindex="-1" id="user-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group"><label
                                        for="username"><strong>Username</strong></label><input
                                        class="form-control form-control-sm" type="text" placeholder="user.name"></div>
                                </div>
                                <div class="col">
                                    <div class="form-group"><label for="email"><strong>Email
                                        Address</strong></label><input class="form-control form-control-sm" type="email"
                                                                       placeholder="user@example.com"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group"><label
                                        for="first_name"><strong>Phone#</strong></label><input
                                        class="form-control form-control-sm" type="text" placeholder="0796 852 258">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group"><label for="last_name"><strong>Status</strong></label>
                                        <div class="custom-control custom-switch"><input class="custom-control-input"
                                                                                         type="checkbox"
                                                                                         id="formCheck-1"><label
                                            class="custom-control-label" for="formCheck-1">Inactive</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group"><label for="first_name"><strong>Role</strong></label><select
                                        class="custom-select custom-select-sm">
                                        <option value="12" selected="">This is item 1</option>
                                        <option value="13">This is item 2</option>
                                        <option value="14">This is item 3</option>
                                    </select></div>
                                </div>
                                <div class="col">
                                    <div class="form-group"><label
                                        for="first_name"><strong>Verified?</strong></label><small
                                        class="d-block text-success font-italic">verified at 21 Mar 2021</small></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-light btn-sm" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary btn-sm" type="button">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Users"
    }
</script>

<style scoped>

</style>
