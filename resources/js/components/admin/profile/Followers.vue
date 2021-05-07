<template>
    <div class="card shadow mb-3">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                    <p class="text-primary m-0 font-weight-bold">Followers</p>
                </div>
                <div class="col">
                    <div class="text-md-right dataTables_filter"><label class="mr-5"><input
                        type="search" class="form-control form-control-sm"
                        aria-controls="dataTable" placeholder="filter followers"></label></div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div id="dataTable-1" class="table" role="grid" aria-describedby="dataTable_info">
                <table class="table table-hover table-sm dataTable my-0" id="dataTable">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Friend</th>
                        <th>Level</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1.</td>
                        <td><img class="rounded-circle mr-2" width="30" height="30"
                                 src="assets/img/avatars/avatar1.jpeg"><small
                            class="d-inline-block font-weight-lighter">123-2342-345</small></td>
                        <td>
                            <div class="row">
                                <div class="col-sm-4 col-xl-3"><span>6&nbsp;</span></div>
                                <div class="col">
                                    <div class="progress" style="height: 10px;margin-top: 5px;">
                                        <div class="progress-bar" aria-valuenow="50"
                                             aria-valuemin="0" aria-valuemax="100"
                                             style="width: 50%;"><span class="sr-only">50%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td><img class="rounded-circle mr-2" width="30" height="30"
                                 src="assets/img/avatars/avatar1.jpeg"><small
                            class="d-inline-block font-weight-lighter">123-2342-345</small></td>
                        <td>
                            <div class="row">
                                <div class="col-sm-4 col-xl-3"><span>6&nbsp;</span></div>
                                <div class="col">
                                    <div class="progress" style="height: 10px;margin-top: 5px;">
                                        <div class="progress-bar" aria-valuenow="50"
                                             aria-valuemin="0" aria-valuemax="100"
                                             style="width: 50%;"><span class="sr-only">50%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td><img class="rounded-circle mr-2" width="30" height="30"
                                 src="assets/img/avatars/avatar1.jpeg"><small
                            class="d-inline-block font-weight-lighter">123-2342-345</small></td>
                        <td>Cell 3</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td><img class="rounded-circle mr-2" width="30" height="30"
                                 src="assets/img/avatars/avatar1.jpeg"><small
                            class="d-inline-block font-weight-lighter">123-2342-345</small></td>
                        <td>Cell 3</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">
                        Showing 1 to 10 of 27</p>
                </div>
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#"
                                                              aria-label="Previous"><span
                                aria-hidden="true">«</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#"
                                                     aria-label="Next"><span
                                aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Followers"
    }
</script>

<style scoped>

</style>
