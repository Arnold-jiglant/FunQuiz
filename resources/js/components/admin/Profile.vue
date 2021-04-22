<template>
    <div class="container-fluid">
        <h3 class="text-dark mb-1">Layout</h3>
        <div class="row mb-3">
            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="assets/img/dogs/image2.jpeg" width="160" height="160"><span class="d-block mb-1">Admin</span>
                        <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Change Photo</button></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row mb-3 d-none">
                    <div class="col">
                        <div class="card text-white bg-primary shadow">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col">
                                        <p class="m-0">Peformance</p>
                                        <p class="m-0"><strong>65.2%</strong></p>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                </div>
                                <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-success shadow">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col">
                                        <p class="m-0">Peformance</p>
                                        <p class="m-0"><strong>65.2%</strong></p>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                </div>
                                <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 font-weight-bold">User Info</p>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="username"><strong>Username</strong></label><input class="form-control form-control-sm" type="text" placeholder="user.name"></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="email"><strong>Email Address</strong></label><input class="form-control form-control-sm" type="email" placeholder="user@example.com"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Phone#</strong></label><input class="form-control form-control-sm" type="text" placeholder="0796 852 258"></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="last_name"><strong>Status</strong></label>
                                                <div class="custom-control custom-switch"><input class="custom-control-input" type="checkbox" id="formCheck-1"><label class="custom-control-label" for="formCheck-1">Inactive</label></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Player ID</strong></label><input class="form-control form-control-sm" type="text" placeholder="234-463-56-2"></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="last_name"><strong>Score</strong></label>
                                                <div class="form-row">
                                                    <div class="col-sm-4 col-xl-3"><span>6 level</span></div>
                                                    <div class="col">
                                                        <div class="progress" style="height: 10px;margin-top: 5px;">
                                                            <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="sr-only">50%</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-right"><button class="btn btn-primary btn-sm" type="button">Save Settings</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-4">
                <ul class="list-group mb-2">
                    <li class="list-group-item active">
                        <div class="row">
                            <div class="col"><span>Topic created 20</span></div>
                            <div class="col-2"><i class="fa fa-angle-right font-weight-bolder" style="font-size: 17pt;"></i></div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col"><span>Tag created 40</span></div>
                            <div class="col-2"><i class="fa fa-angle-down font-weight-bolder" style="font-size: 17pt;"></i></div>
                        </div>
                    </li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col"><span>Following Topic 2</span></div>
                            <div class="col-2"><i class="fa fa-angle-right font-weight-bolder" style="font-size: 17pt;"></i></div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col"><span>Following Friend 6</span></div>
                            <div class="col-2"><i class="fa fa-angle-down font-weight-bolder" style="font-size: 17pt;"></i></div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col"><span>Followers 56</span></div>
                            <div class="col-2"><i class="fa fa-angle-down font-weight-bolder" style="font-size: 17pt;"></i></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8">
                <div class="row mb-3 d-none">
                    <div class="col">
                        <div class="card text-white bg-primary shadow">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col">
                                        <p class="m-0">Peformance</p>
                                        <p class="m-0"><strong>65.2%</strong></p>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                </div>
                                <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-success shadow">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col">
                                        <p class="m-0">Peformance</p>
                                        <p class="m-0"><strong>65.2%</strong></p>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                </div>
                                <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <div class="row">
                                    <div class="col">
                                        <p class="text-primary m-0 font-weight-bold">Topics</p>
                                    </div>
                                    <div class="col">
                                        <div class="text-md-right dataTables_filter"><label class="mr-5"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="filter topics"></label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive table" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                    <table class="table dataTable my-0" id="dataTable">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Qns</th>
                                            <th>Followers</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg"></td>
                                            <td>Simba SC</td>
                                            <td>123</td>
                                            <td>234</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg"></td>
                                            <td>Simba SC</td>
                                            <td>123</td>
                                            <td>234</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg"></td>
                                            <td>Simba SC</td>
                                            <td>123</td>
                                            <td>234</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 align-self-center">
                                        <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                    </div>
                                    <div class="col-md-6">
                                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                            <ul class="pagination">
                                                <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <div class="row">
                                    <div class="col">
                                        <p class="text-primary m-0 font-weight-bold">Tags</p>
                                    </div>
                                    <div class="col">
                                        <div class="text-md-right dataTables_filter"><label class="mr-5"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="filter tags"></label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive table" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                    <table class="table dataTable my-0" id="dataTable">
                                        <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Topics</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Football</td>
                                            <td>123</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Vichekesho</td>
                                            <td>123</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>BongoMovie</td>
                                            <td>123</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 align-self-center">
                                        <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                    </div>
                                    <div class="col-md-6">
                                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                            <ul class="pagination">
                                                <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <div class="row">
                                    <div class="col">
                                        <p class="text-primary m-0 font-weight-bold">Following Topics</p>
                                    </div>
                                    <div class="col">
                                        <div class="text-md-right dataTables_filter"><label class="mr-5"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="filter topics"></label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive table" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
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
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg"></td>
                                            <td>Simba SC</td>
                                            <td>123</td>
                                            <td>23</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg"></td>
                                            <td>Simba SC</td>
                                            <td>123</td>
                                            <td>1234</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg"></td>
                                            <td>Simba SC</td>
                                            <td>123</td>
                                            <td>3235</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 align-self-center">
                                        <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                    </div>
                                    <div class="col-md-6">
                                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                            <ul class="pagination">
                                                <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <div class="row">
                                    <div class="col">
                                        <p class="text-primary m-0 font-weight-bold">Following Friends</p>
                                    </div>
                                    <div class="col">
                                        <div class="text-md-right dataTables_filter"><label class="mr-5"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="filter friends"></label></div>
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
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg"><small class="d-inline-block font-weight-lighter">123-2342-345</small></td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-4 col-xl-3"><span>6&nbsp;</span></div>
                                                    <div class="col">
                                                        <div class="progress" style="height: 10px;margin-top: 5px;">
                                                            <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="sr-only">50%</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg"><small class="d-inline-block font-weight-lighter">123-2342-345</small></td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-4 col-xl-3"><span>6&nbsp;</span></div>
                                                    <div class="col">
                                                        <div class="progress" style="height: 10px;margin-top: 5px;">
                                                            <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="sr-only">50%</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg"><small class="d-inline-block font-weight-lighter">123-2342-345</small></td>
                                            <td>Cell 3</td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg"><small class="d-inline-block font-weight-lighter">123-2342-345</small></td>
                                            <td>Cell 3</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 align-self-center">
                                        <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                    </div>
                                    <div class="col-md-6">
                                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                            <ul class="pagination">
                                                <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <div class="row">
                                    <div class="col">
                                        <p class="text-primary m-0 font-weight-bold">Followers</p>
                                    </div>
                                    <div class="col">
                                        <div class="text-md-right dataTables_filter"><label class="mr-5"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="filter followers"></label></div>
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
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg"><small class="d-inline-block font-weight-lighter">123-2342-345</small></td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-4 col-xl-3"><span>6&nbsp;</span></div>
                                                    <div class="col">
                                                        <div class="progress" style="height: 10px;margin-top: 5px;">
                                                            <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="sr-only">50%</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg"><small class="d-inline-block font-weight-lighter">123-2342-345</small></td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-4 col-xl-3"><span>6&nbsp;</span></div>
                                                    <div class="col">
                                                        <div class="progress" style="height: 10px;margin-top: 5px;">
                                                            <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="sr-only">50%</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg"><small class="d-inline-block font-weight-lighter">123-2342-345</small></td>
                                            <td>Cell 3</td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg"><small class="d-inline-block font-weight-lighter">123-2342-345</small></td>
                                            <td>Cell 3</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 align-self-center">
                                        <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                    </div>
                                    <div class="col-md-6">
                                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                            <ul class="pagination">
                                                <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Profile"
    }
</script>

<style scoped>

</style>
