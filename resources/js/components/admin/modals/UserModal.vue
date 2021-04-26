<template>
    <div class="modal fade" role="dialog" tabindex="-1" id="user-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{edit_mode?'Edit User':'Add User'}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div v-if="errors" class="form-row">
                            <div class="col">
                                <ul>
                                    <li v-for="error in errors" class="text-danger"><small>{{error}}</small></li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="username"><strong>Username</strong></label>
                                    <input class="form-control form-control-sm"
                                           type="text" placeholder="user.name"
                                           v-model="user.name">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="email"><strong>Email</strong></label>
                                    <input class="form-control form-control-sm" type="email"
                                           placeholder="user@example.com" v-model="user.email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label><strong>Phone#</strong></label>
                                    <input class="form-control form-control-sm" type="text"
                                           placeholder="0796 852 258" v-model="user.phone_number">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="last_name"><strong>Status</strong></label>
                                    <div class="custom-control custom-switch">
                                        <input class="custom-control-input" type="checkbox"
                                               id="user-status" v-model="user.isActive">
                                        <label class="custom-control-label" for="user-status">{{user.isActive?"Active":"Inactive"}}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="first_name"><strong>Role</strong></label>
                                    <select class="custom-select custom-select-sm" v-model="user.role_id">
                                        <option value="1" selected>Admin</option>
                                        <option value="2">Player</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div v-if="edit_mode" class="form-group">
                                    <label for="first_name"><strong>Verified?</strong></label>
                                    <label class="d-block font-italic ml-2"
                                           :class="user.verified?'text-success':'text-danger'">
                                        {{user.verified?"Yes":"Not verified"}}</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light btn-sm" type="button" data-dismiss="modal">Close</button>
                    <button v-if="edit_mode" class="btn btn-primary btn-sm" type="button"
                            @click="updateUser"> Update
                    </button>
                    <button v-else class="btn btn-primary btn-sm" type="button"
                            @click="addUser">
                        Add
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    // import axios from 'axios'
    export default {
        props: {
            edit_mode: {
                type: Boolean,
                default: false,
            },
            user: {
                type: Object,
                default: function () {
                    return {role_id:1};
                }
            }
        },
        data() {
            return {
                errors: []
            }
        },
        methods: {
            addUser: function () {
                console.log('adding');
                let user = {
                    username: this.user.name,
                    email: this.user.email,
                    phone: this.user.phone_number,
                    role_id: this.user.role_id,
                    status: this.user.isActive ? 1 : 2,
                };

                window.axios.post('v1/admin/user', user)
                    .then(response => {
                        // console.log('response',response.data);
                        if(response.data.error) {
                            this.errors = response.data.error;
                        }else {
                            this.$emit('fetch_user');
                            $('#user-modal').modal('hide');
                        }
                    })
                    .catch(error => {
                        console.log('error',error);
                    });
            },
            updateUser: function () {
                console.log('updating');
                let user = {
                    username: this.user.name,
                    email: this.user.email,
                    phone: this.user.phone_number,
                    role_id: this.user.role_id,
                    status: this.user.isActive ? 1 : 2,
                };

                window.axios.put('v1/admin/user/'+this.user.id, user)
                    .then(response => {
                        // console.log('response',response.data);
                        if(response.data.error) {
                            this.errors = response.data.error;
                        }else {
                            this.$emit('fetch_user');
                            $('#user-modal').modal('hide');
                        }
                    })
                    .catch(error => {
                        console.log('error',error);
                    });
            },
        },
        mounted() {
            let user_modal = $('#user-modal');
            let vm = this;
            user_modal.modal('show');
            user_modal.on('hidden.bs.modal', function (e) {
                vm.$emit('modal_closed');
            });
        }

    }
</script>

<style scoped>

</style>
