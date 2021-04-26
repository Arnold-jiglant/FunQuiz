<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3 class="text-dark mb-1">Tags <i class="fa fa-angle-double-right"/> <span class="text-muted">{{selectedLetter}}</span>
                </h3>
            </div>
            <div class="col text-right">
                <button class="btn btn-primary btn-sm" type="button"
                        @click="showModal=true">
                    <i class="fa fa-plus"/>&nbsp;Add
                </button>
            </div>
        </div>
        <div class="tags-container p-2 text-center mb-2">
            <button class="btn btn-outline-primary btn-sm m-1 font-weight-bold"
                    type="button" :class="{active:selectedLetter==null}"
                    @click="selectedLetter=null">All
            </button>
            <button v-for="letter in letters"
                    class="btn btn-outline-primary btn-sm m-1 font-weight-bold letter"
                    type="button"
                    :class="{active:letter==selectedLetter}"
                    @click="selectedLetter=letter">{{letter}}
            </button>
        </div>
        <div class="letters-container p-2 mb-1">
            <button v-for="tag in tags"
                    class="btn btn-outline-dark btn-sm m-1 tag"
                    type="button" @dblclick="editTag(tag)"
            >{{tag.name}}&nbsp;&nbsp;<span v-if="tag.topic_count>0">{{tag.topic_count}}</span>
            </button>
        </div>
        <div v-if="meta.total>0" class="row">
            <div class="col-md-6 align-self-center">
                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing
                    {{meta.from}} to {{meta.to}}
                    of {{meta.total}}</p>
            </div>
            <div class="col-md-6">
                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                    <ul class="pagination">
                        <li class="page-item" :class="{disabled:!links.prev}">
                            <button class="page-link" aria-label="Previous"
                                    @click="fetchTags(links.prev)">
                                <span aria-hidden="true">«</span>
                            </button>
                        </li>
                        <li class="page-item"><a class="page-link">{{meta.current_page}}/{{meta.last_page}}</a></li>
                        <li class="page-item" :class="{disabled:!links.next}">
                            <button class="page-link" aria-label="Next"
                                    @click="fetchTags(links.next)">
                                <span aria-hidden="true">»</span>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <tag-modal v-if="selectedTag && showModal" :tag="selectedTag" @modal_closed="modalClosed"
                   :edit_mode="selectedTag!=null"/>
        <tag-modal v-else-if="showModal" @modal_closed="modalClosed"/>
    </div>
</template>

<script>
    import TagModal from "./modals/TagModal";

    export default {
        data() {
            return {
                letters: [],
                tags: [],
                links: {},
                meta: {},
                selectedLetter: null,
                selectedTag: null,
                showModal: false,
            }
        },
        components: {
            TagModal
        },
        watch: {
            selectedLetter: function () {
                this.fetchTags();
            }
        },
        methods: {
            fetchTags: function (url = 'v1/admin/tags') {
                window.axios.get(url,
                    {
                        params: {
                            tag: this.selectedLetter
                        }
                    })
                    .then(resp => {
                        console.log(resp.data);
                        this.tags = resp.data.data;
                        this.links = resp.data.links;
                        this.meta = resp.data.meta;
                    })
                    .catch(error => console.log(error))
            },
            addTag: function () {
                this.showModal = true;
            },
            editTag: function (tag) {
                this.selectedTag = tag;
                this.showModal = true;
            },
            modalClosed: function () {
                this.showModal = false;
                this.selectedTag = null;
            }
        },
        created() {
            for (let i = "A".charCodeAt(0); i <= "Z".charCodeAt(0); i++) {
                this.letters.push(String.fromCharCode(i))
            }
            this.fetchTags();
        }
    }
</script>

<style scoped>

</style>
