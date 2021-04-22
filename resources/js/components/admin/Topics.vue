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
                        <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select
                            class="form-control form-control-sm custom-select custom-select-sm">
                            <option value="10" selected="">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>&nbsp;</label></div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right dataTables_filter" id="dataTable_filter-1"><label class="mr-5"><input
                            type="search" class="form-control form-control-sm" aria-controls="dataTable"
                            placeholder="filter topics"></label>
                            <button class="btn btn-primary btn-sm" type="button" data-toggle="modal"
                                    data-target="#add-topic-modal"><i class="fa fa-user-plus"></i>&nbsp;Add
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
                        <tr>
                            <td><img class="rounded-circle mr-2" width="30" height="30"
                                     src="assets/img/avatars/avatar1.jpeg"></td>
                            <td>Simba SC<br></td>
                            <td>2034</td>
                            <td>234</td>
                            <td>5</td>
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
                                     src="assets/img/avatars/avatar1.jpeg"></td>
                            <td>Simba SC<br></td>
                            <td>2034</td>
                            <td>234</td>
                            <td>5</td>
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
                                     src="assets/img/avatars/avatar1.jpeg"></td>
                            <td>Simba SC<br></td>
                            <td>2034</td>
                            <td>234</td>
                            <td>5</td>
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
                                     src="assets/img/avatars/avatar1.jpeg"></td>
                            <td>Simba SC<br></td>
                            <td>2034</td>
                            <td>234</td>
                            <td>5</td>
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
                                     src="assets/img/avatars/avatar1.jpeg"></td>
                            <td>Simba SC<br></td>
                            <td>2034</td>
                            <td>234</td>
                            <td>5</td>
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
                                     src="assets/img/avatars/avatar1.jpeg"></td>
                            <td>Simba SC<br></td>
                            <td>2034</td>
                            <td>234</td>
                            <td>5</td>
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
        <div class="modal fade" role="dialog" tabindex="-1" id="add-topic-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Topic</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group"><label for="username"><strong>Name</strong></label><input
                                class="form-control form-control-sm" type="text" placeholder="topic name"></div>
                            <div class="form-group">
                                <div class="custom-control custom-switch"><input class="custom-control-input"
                                                                                 type="checkbox" id="formCheck-1"><label
                                    class="custom-control-label" for="formCheck-1">Has Image?</label></div>
                                <div class="text-center border p-2"><img class="rounded"
                                                                         src="assets/img/dogs/image3.jpeg"
                                                                         width="100px">
                                    <div class="mt-2">
                                        <button class="btn btn-primary btn-sm" type="button">Choose Image</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"><label for="username"><strong>Tags</strong></label>
                                <div class="selected-tags p-2 mb-2">
                                    <button class="btn btn-outline-success btn-sm m-1 tag tag-sm" type="button">
                                        Agriculture&nbsp;&nbsp;<i class="fa fa-remove"></i></button>
                                    <button class="btn btn-outline-success btn-sm m-1 tag tag-sm" type="button">
                                        Agriculture&nbsp;&nbsp;<i class="fa fa-remove"></i></button>
                                    <button
                                        class="btn btn-outline-success btn-sm m-1 tag tag-sm" type="button">Agriculture&nbsp;&nbsp;<i
                                        class="fa fa-remove"></i></button>
                                    <button class="btn btn-outline-success btn-sm m-1 tag tag-sm" type="button">
                                        Agriculture&nbsp;&nbsp;<i class="fa fa-remove"></i></button>
                                    <button class="btn btn-outline-success btn-sm m-1 tag tag-sm"
                                            type="button">Agriculture&nbsp;&nbsp;<i class="fa fa-remove"></i></button>
                                    <button class="btn btn-outline-success btn-sm m-1 tag tag-sm" type="button">
                                        Agriculture&nbsp;&nbsp;<i class="fa fa-remove"></i></button>
                                    <button
                                        class="btn btn-outline-success btn-sm m-1 tag tag-sm" type="button">Agriculture&nbsp;&nbsp;<i
                                        class="fa fa-remove"></i></button>
                                    <button class="btn btn-outline-success btn-sm m-1 tag tag-sm" type="button">
                                        Agriculture&nbsp;&nbsp;<i class="fa fa-remove"></i></button>
                                    <button
                                        class="btn btn-outline-success btn-sm m-1 tag tag-sm" type="button">Agriculture&nbsp;&nbsp;<i
                                        class="fa fa-remove"></i></button>
                                    <button class="btn btn-outline-success btn-sm m-1 tag tag-sm" type="button">
                                        Agriculture&nbsp;&nbsp;<i class="fa fa-remove"></i></button>
                                </div>
                                <input
                                    class="form-control form-control-sm" type="text" id="search-tag"
                                    placeholder="search tag"></div>
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
        name: "Topics"
    }
</script>

<style scoped>

</style>
