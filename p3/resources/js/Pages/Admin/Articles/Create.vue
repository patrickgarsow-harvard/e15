<template>
  <AdminAppLayout>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <form @submit.prevent="store">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1>Application Page <button type="submit" class="btn btn-block btn-primary">Submit</button></h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Application Pages</li>
                </ol>
                </div>
            </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
            <div class="row mb-2">
                <!-- <form @submit.prevent="submit"> -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                            <h3 class="card-title">Article Information</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">Title</label>
                                                <input id="name" class="form-control" v-model="form.name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="short">Short:</label>
                                                <textarea id="short" class="form-control" v-model="form.short"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="description">Description:</label>
                                                <textarea id="description" class="form-control" v-model="form.description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="keywords">Keywords:</label>
                                                <textarea id="keywords" class="form-control" v-model="form.keywords"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="gallery_id">Gallery:</label>
                                                <input id="gallery_id" class="form-control" v-model="form.gallery_id" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="page_content">Page Content:</label>
                                                <textarea id="page_content" class="form-control" v-model="form.page_content"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                <button type="submit" class="btn btn-block btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                <!-- </form> -->
            </div>
            </div>
        </section>
        </form>
    </div>
  </AdminAppLayout>
</template>

<script>

    import { Head, Link, useForm } from '@inertiajs/inertia-vue3'
    import AdminAppLayout from '@/Layouts/AdminAppLayout.vue'

    export default {
        props: {
            article: Object,
        },

        components: {
            Head,
            Link,
            AdminAppLayout,
        },

        data() {
            return {
                form: this.$inertia.form({
                    name: null,
                    short: null,
                    description: null,
                    keywords: null,
                    gallery_id: null,
                    page_content: null,
                })
            }
        },
        methods: {
            store(){
                this.form.post('/admin/articles/store')
            },
        },
    }
</script>
