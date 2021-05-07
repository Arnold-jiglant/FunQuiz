<template>
    <div class="container-fluid">
        <h3 class="text-dark mb-1">User Profile</h3>
        <div class="row mb-3">
            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="card-body text-center shadow">
                        <img id="imagePreview" class="rounded-circle mb-3 mt-4" width="160"
                             height="160" :src="user.image_url">
                        <span class="d-block mb-1">{{user.role}}</span>
                        <div class="mb-3">
                            <input type="file" ref="image" style="visibility: hidden" @change="changeImage">
                            <button class="btn btn-primary btn-sm" type="button" @click="$refs.image.click()">Change
                                Photo
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
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
                                            <div class="form-group">
                                                <label for="username"><strong>Username</strong></label>
                                                <input class="form-control form-control-sm" type="text"
                                                       placeholder="user.name" v-model="user.name">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="email"><strong>Email Address</strong></label>
                                                <input class="form-control form-control-sm"
                                                       type="email" placeholder="user@example.com" v-model="user.email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="first_name"><strong>Phone#</strong></label>
                                                <input class="form-control form-control-sm" type="text"
                                                       placeholder="0796 852 258" v-model="user.phone_number">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="last_name"><strong>Status</strong></label>
                                                <p class="font-weight-bold"
                                                   :class="user.isActive?'text-success':'text-danger'">
                                                    {{user.isActive?'Active':"Inactive"}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div v-if="user.role_id===2" class="form-row">
                                        <div class="col-6">
                                            <div class="form-group"><label
                                                    for="last_name"><strong>Score</strong></label>
                                                <div class="form-row">
                                                    <div class="col-sm-4 col-xl-3"><span>6 level</span></div>
                                                    <div class="col">
                                                        <div class="progress" style="height: 10px;margin-top: 5px;">
                                                            <div class="progress-bar" aria-valuenow="50"
                                                                 aria-valuemin="0" aria-valuemax="100"
                                                                 style="width: 50%;"><span class="sr-only">50%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div v-if="user.role_id===2" class="form-group text-right">
                                        <button class="btn btn-primary btn-sm" type="button">Save Settings</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-4">
                <ul v-if="user.role_id===1" class="list-group mb-2">
                    <li class="list-group-item" @click="component='OwningTopics'"
                        :class="{active:component==='OwningTopics'}">
                        <div class="row">
                            <div class="col">
                                <p>My Topics <span class="ml-2">{{user.topic_created_count}}</span></p>
                            </div>
                            <div class="col-2">
                                <i class="fa font-weight-bolder"
                                   :class="component==='OwningTopics'?'fa-angle-right':'fa-angle-down'"
                                   style="font-size: 17pt;"/>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item" @click="component='OwningTags'"
                        :class="{active:component==='OwningTags'}">
                        <div class="row">
                            <div class="col">
                                <p>My Tags <span class="ml-2">{{user.tag_created_count}}</span></p>
                            </div>
                            <div class="col-2">
                                <i class="fa font-weight-bolder"
                                   :class="component==='OwningTags'?'fa-angle-right':'fa-angle-down'"
                                   style="font-size: 17pt;"/>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul v-else class="list-group">
                    <li class="list-group-item" @click="component='FollowingTopics'"
                        :class="{active:component==='FollowingTopics'}">
                        <div class="row">
                            <div class="col"><span>Following Topic 2</span></div>
                            <div class="col-2">
                                <i class="fa font-weight-bolder"
                                   :class="component==='FollowingTopics'?'fa-angle-right':'fa-angle-down'"
                                   style="font-size: 17pt;"/>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item" @click="component='FollowingFriends'"
                        :class="{active:component==='FollowingFriends'}">
                        <div class="row">
                            <div class="col"><span>Following Friend 6</span></div>
                            <div class="col-2">
                                <i class="fa font-weight-bolder"
                                   :class="component==='FollowingFriends'?'fa-angle-right':'fa-angle-down'"
                                   style="font-size: 17pt;"/>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item" @click="component='Followers'"
                        :class="{active:component==='Followers'}">
                        <div class="row">
                            <div class="col"><span>Followers 56</span></div>
                            <div class="col-2">
                                <i class="fa font-weight-bolder"
                                   :class="component==='Followers'?'fa-angle-right':'fa-angle-down'"
                                   style="font-size: 17pt;"/>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8">
                <transition mode="out-in"
                            enter-active-class="animate__animated animated--fade-in"
                            leave-active-class="animate_animated animated--fade-out">
                    <component :is="component" :user_id="user_id"/>
                </transition>
            </div>
        </div>
    </div>
</template>

<script>
    import Followers from "./profile/Followers";
    import FollowingFriends from "./profile/FollowingFriends";
    import FollowingTopics from "./profile/FollowingTopics";
    import OwningTags from "./profile/OwningTags";
    import OwningTopics from "./profile/OwningTopics";

    export default {
        data() {
            return {
                user: {},
                user_id: this.$route.params.id,
                component: '',
            };
        },
        components: {
            FollowingTopics, FollowingFriends, Followers, OwningTopics, OwningTags,
        },
        watch: {
            "$route": function () {
                this.user_id = this.$route.params.id;
                this.fetchUserInfo();
            },
            user: function () {
                this.user.role_id === 1 ? this.component = 'OwningTopics' : this.component = 'FollowingTopics';
            }
        },
        methods: {
            changeImage: function () {
                let image = this.$refs.image.files[0];
                if (image) {
                    let data = new FormData();
                    data.append('image', image);
                    window.axios.post('v1/admin/user/' + this.user.id + '/update/image', data, {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    })
                        .then(response => {
                            console.log('Before', this.user);
                            this.user.image_url = response.data;
                            // $('#imagePreview').attr('src', this.user.image_url);
                            console.log('After', this.user);
                        })
                        .catch(error => console.log(error));
                }
            },
            fetchUserInfo: function () {
                window.axios.get('/v1/admin/user/' + this.user_id)
                    .then(response => {
                        console.log(response.data);
                        this.user = response.data.data;
                    })
                    .catch(error => console.log(error))
            }
        },
        created() {
            this.fetchUserInfo();
        }
    }
</script>

<style>
    .container-fluid {
        font-size: 11pt !important;
    }

    .table {
        font-size: 10pt !important;
    }
</style>
