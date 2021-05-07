<template>
    <div class="card shadow mb-3">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                    <p class="text-primary m-0 font-weight-bold">Following Topics</p>
                </div>
                <div class="col">
                    <div class="text-md-right dataTables_filter"><label class="mr-5"><input
                        type="search" class="form-control form-control-sm"
                        aria-controls="dataTable" placeholder="filter topics"></label></div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive table" id="dataTable-1" role="grid"
                 aria-describedby="dataTable_info">
                <table class="table dataTable my-0" id="dataTable">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Score</th>
                        <th>Rank</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><img class="rounded-circle mr-2" width="30" height="30"
                                 src="assets/img/avatars/avatar1.jpeg"></td>
                        <td>Simba SC</td>
                        <td>123</td>
                        <td>23</td>
                    </tr>
                    <tr>
                        <td><img class="rounded-circle mr-2" width="30" height="30"
                                 src="assets/img/avatars/avatar1.jpeg"></td>
                        <td>Simba SC</td>
                        <td>123</td>
                        <td>1234</td>
                    </tr>
                    <tr>
                        <td><img class="rounded-circle mr-2" width="30" height="30"
                                 src="assets/img/avatars/avatar1.jpeg"></td>
                        <td>Simba SC</td>
                        <td>123</td>
                        <td>3235</td>
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
        name: "FollowingTopics"
    }
</script>

<style scoped>

</style>
