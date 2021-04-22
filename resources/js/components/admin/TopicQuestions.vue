<template>
    <div class="container-fluid">
        <h3 class="text-dark mb-1">Topics<i class="fa fa-angle-right ml-2 text-gray-600"></i>&nbsp;Simba SC</h3>
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
                                        <button class="btn btn-outline-light text-dark" type="button"
                                                data-toggle="collapse" data-target="#topic-info"><i
                                            class="fa fa-angle-double-down font-weight-bolder"
                                            style="font-size: 17pt;"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row collapse" id="topic-info">
                            <div class="col-md-5 col-lg-3 text-center"><img class="rounded-circle mb-3 mt-4"
                                                                            src="assets/img/dogs/image2.jpeg"
                                                                            width="160" height="160"></div>
                            <div class="col pt-3">
                                <p>Topic name:&nbsp;<span class="font-weight-bold">Simba SC</span></p>
                                <p>Followers:&nbsp;<span class="font-weight-bold">2,000</span></p>
                                <p>Questions:&nbsp;<span class="font-weight-bold">450</span></p>
                                <p>Owner:&nbsp;<span class="font-weight-bold">username</span></p>
                                <p>Created at:&nbsp;<span class="font-weight-bold">22 Mar 2020</span></p>
                                <div><span>Tags:</span>
                                    <div class="selected-tags p-2 mb-2">
                                        <button class="btn btn-outline-success btn-sm m-1 tag tag-sm tag-view"
                                                type="button">Agriculture&nbsp;&nbsp;<i class="fa fa-remove"></i>
                                        </button>
                                        <button class="btn btn-outline-success btn-sm m-1 tag tag-sm tag-view"
                                                type="button">Agriculture&nbsp;&nbsp;<i class="fa fa-remove"></i>
                                        </button>
                                        <button class="btn btn-outline-success btn-sm m-1 tag tag-sm tag-view"
                                                type="button">Agriculture&nbsp;&nbsp;<i class="fa fa-remove"></i>
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
                            placeholder="filter question"></label>
                            <button class="btn btn-primary btn-sm" type="button" data-toggle="modal"
                                    data-target="#add-question-modal"><i class="fa fa-user-plus"></i>&nbsp;Add
                            </button>
                        </div>
                    </div>
                </div>
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table dataTable my-0" id="dataTable">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Body</th>
                            <th>Answers</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Who is famous Simba club player in 2020<br></td>
                            <td>
                                <ul class="list-group">
                                    <li class="list-group-item answer"><span>Medi Kagere</span></li>
                                    <li class="list-group-item answer">
                                        <div class="row">
                                            <div class="col"><span>Mkude</span></div>
                                            <div class="col-2"><i class="fa fa-check text-success"
                                                                  style="font-size: 17pt;"></i></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item answer"><span>Chama</span></li>
                                    <li class="list-group-item answer"><span>No One</span></li>
                                </ul>
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
                            <td>2.</td>
                            <td>
                                <p>Who is famous Simba club player in 2020<br></p>
                                <div class="text-center"><img class="rounded" src="assets/img/avatars/avatar2.jpeg"
                                                              width="100px"></div>
                                <br></td>
                            <td>
                                <ul class="list-group">
                                    <li class="list-group-item answer"><span>Medi Kagere</span></li>
                                    <li class="list-group-item answer">
                                        <div class="row">
                                            <div class="col"><span>Mkude</span></div>
                                            <div class="col-2"><i class="fa fa-check text-success"
                                                                  style="font-size: 17pt;"></i></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item answer"><span>Chama</span></li>
                                    <li class="list-group-item answer"><span>No One</span></li>
                                </ul>
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
                            <td>1.</td>
                            <td>Who is famous Simba club player in 2020<br></td>
                            <td>
                                <ul class="list-group">
                                    <li class="list-group-item answer"><span>Medi Kagere</span></li>
                                    <li class="list-group-item answer">
                                        <div class="row">
                                            <div class="col"><span>Mkude</span></div>
                                            <div class="col-2"><i class="fa fa-check text-success"
                                                                  style="font-size: 17pt;"></i></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item answer"><span>Chama</span></li>
                                    <li class="list-group-item answer"><span>No One</span></li>
                                </ul>
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
                            <td>1.</td>
                            <td>Who is famous Simba club player in 2020<br></td>
                            <td>
                                <ul class="list-group">
                                    <li class="list-group-item answer"><span>Medi Kagere</span></li>
                                    <li class="list-group-item answer">
                                        <div class="row">
                                            <div class="col"><span>Mkude</span></div>
                                            <div class="col-2"><i class="fa fa-check text-success"
                                                                  style="font-size: 17pt;"></i></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item answer"><span>Chama</span></li>
                                    <li class="list-group-item answer"><span>No One</span></li>
                                </ul>
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
                            <td>1.</td>
                            <td>Who is famous Simba club player in 2020<br></td>
                            <td>
                                <ul class="list-group">
                                    <li class="list-group-item answer"><span>Medi Kagere</span></li>
                                    <li class="list-group-item answer">
                                        <div class="row">
                                            <div class="col"><span>Mkude</span></div>
                                            <div class="col-2"><i class="fa fa-check text-success"
                                                                  style="font-size: 17pt;"></i></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item answer"><span>Chama</span></li>
                                    <li class="list-group-item answer"><span>No One</span></li>
                                </ul>
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
                            <td>1.</td>
                            <td>Who is famous Simba club player in 2020<br></td>
                            <td>
                                <ul class="list-group">
                                    <li class="list-group-item answer"><span>Medi Kagere</span></li>
                                    <li class="list-group-item answer">
                                        <div class="row">
                                            <div class="col"><span>Mkude</span></div>
                                            <div class="col-2"><i class="fa fa-check text-success"
                                                                  style="font-size: 17pt;"></i></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item answer"><span>Chama</span></li>
                                    <li class="list-group-item answer"><span>No One</span></li>
                                </ul>
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
                            <td>1.</td>
                            <td>Who is famous Simba club player in 2020<br></td>
                            <td>
                                <ul class="list-group">
                                    <li class="list-group-item answer"><span>Medi Kagere</span></li>
                                    <li class="list-group-item answer">
                                        <div class="row">
                                            <div class="col"><span>Mkude</span></div>
                                            <div class="col-2"><i class="fa fa-check text-success"
                                                                  style="font-size: 17pt;"></i></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item answer"><span>Chama</span></li>
                                    <li class="list-group-item answer"><span>No One</span></li>
                                </ul>
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
                            <td>1.</td>
                            <td>Who is famous Simba club player in 2020<br></td>
                            <td>
                                <ul class="list-group">
                                    <li class="list-group-item answer"><span>Medi Kagere</span></li>
                                    <li class="list-group-item answer">
                                        <div class="row">
                                            <div class="col"><span>Mkude</span></div>
                                            <div class="col-2"><i class="fa fa-check text-success"
                                                                  style="font-size: 17pt;"></i></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item answer"><span>Chama</span></li>
                                    <li class="list-group-item answer"><span>No One</span></li>
                                </ul>
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
                            <td>1.</td>
                            <td>Who is famous Simba club player in 2020<br></td>
                            <td>
                                <ul class="list-group">
                                    <li class="list-group-item answer"><span>Medi Kagere</span></li>
                                    <li class="list-group-item answer">
                                        <div class="row">
                                            <div class="col"><span>Mkude</span></div>
                                            <div class="col-2"><i class="fa fa-check text-success"
                                                                  style="font-size: 17pt;"></i></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item answer"><span>Chama</span></li>
                                    <li class="list-group-item answer"><span>No One</span></li>
                                </ul>
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
        <div class="modal fade" role="dialog" tabindex="-1" id="add-question-modal">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Question</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group"><label for="username"><strong>Topic</strong></label><input
                                class="form-control form-control-sm" type="text" placeholder="topic name" readonly="">
                            </div>
                            <div class="form-group"><label for="username"><strong>Body</strong></label><textarea
                                class="form-control form-control-sm" rows="4"></textarea></div>
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
                            <div class="form-group"><label for="username"><strong>Answers</strong></label>
                                <div class="form-row mb-2">
                                    <div class="col"><input class="form-control form-control-sm" type="text"
                                                            placeholder="asnwer 1"></div>
                                    <div class="col-2"><input type="radio"></div>
                                </div>
                                <div class="form-row mb-2">
                                    <div class="col"><input class="form-control form-control-sm" type="text"
                                                            placeholder="asnwer 1"></div>
                                    <div class="col-2"><input type="radio"></div>
                                </div>
                                <div class="form-row mb-2">
                                    <div class="col"><input class="form-control form-control-sm" type="text"
                                                            placeholder="asnwer 1"></div>
                                    <div class="col-2"><input type="radio"></div>
                                </div>
                                <div class="form-row mb-2">
                                    <div class="col"><input class="form-control form-control-sm" type="text"
                                                            placeholder="asnwer 1"></div>
                                    <div class="col-2"><input type="radio"></div>
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
        name: "TopicQuestions"
    }
</script>

<style scoped>

</style>
