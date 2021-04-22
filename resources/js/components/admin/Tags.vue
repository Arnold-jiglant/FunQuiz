<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3 class="text-dark mb-1">Tags</h3>
            </div>
            <div class="col text-right">
                <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#add-tag-modal">
                    <i class="fa fa-plus"/>&nbsp;Add
                </button>
            </div>
        </div>
        <div class="tags-container p-2 text-center mb-2">
            <button class="btn btn-outline-primary active btn-sm m-1 font-weight-bold letter" type="button">A</button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold letter" type="button">B</button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold letter"
                    type="button">C
            </button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold letter" type="button">D</button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold letter" type="button">E</button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold"
                    type="button">F
            </button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold" type="button">G</button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold" type="button">H</button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold"
                    type="button">I
            </button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold" type="button">J</button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold" type="button">K</button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold"
                    type="button">L
            </button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold" type="button">M</button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold" type="button">N</button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold"
                    type="button">O
            </button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold" type="button">P</button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold" type="button">Q</button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold"
                    type="button">R
            </button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold" type="button">S</button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold" type="button">T</button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold"
                    type="button">U
            </button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold" type="button">V</button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold" type="button">W</button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold"
                    type="button">X
            </button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold" type="button">Y</button>
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold" type="button">Z</button>
        </div>
        <div class="letters-container p-2 mb-1">
            <button class="btn btn-success btn-sm m-1 tag" type="button">Agriculture&nbsp;&nbsp;<span>20</span></button>
            <button class="btn btn-success btn-sm m-1 tag" type="button">Agriculture&nbsp;&nbsp;<span>20</span></button>
            <button class="btn btn-success btn-sm m-1 tag"
                    type="button">Agriculture&nbsp;&nbsp;<span>20</span></button>
            <button class="btn btn-success btn-sm m-1 tag" type="button">Agriculture&nbsp;&nbsp;<span>20</span></button>
            <button class="btn btn-success btn-sm m-1 tag" type="button">Agriculture&nbsp;&nbsp;<span>20</span></button>
            <button
                class="btn btn-success btn-sm m-1 tag" type="button">Agriculture&nbsp;&nbsp;<span>20</span></button>
            <button class="btn btn-success btn-sm m-1 tag" type="button">Agriculture&nbsp;&nbsp;<span>20</span></button>
        </div>
        <div class="row">
            <div class="col-md-6 align-self-center">
                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of
                    27</p>
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
        <div class="modal fade" role="dialog" tabindex="-1" id="add-tag-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Tag</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group"><label for="username"><strong>Name</strong></label><input
                                class="form-control form-control-sm" type="text" placeholder="tag name"></div>
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
        name: "Tags"
    }
</script>

<style scoped>

</style>
