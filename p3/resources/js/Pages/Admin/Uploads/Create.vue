<template>
  <AdminAppLayout>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <form @submit.prevent="store" enctype="multipart/form-data">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1>Upload <button type="submit" class="btn btn-block btn-primary">Submit</button></h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Uploads</li>
                </ol>
                </div>
            </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
            <div class="row mb-2">
                <!-- <form @submit.prevent="submit"> -->
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                            <h3 class="card-title">Upload</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input id="name" class="form-control" v-model="form.name" />
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
                                                <label for="version">Version:</label>
                                                <input id="version" class="form-control" v-model="form.version" />
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
                                <button type="submit" class="btn btn-block btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                            <h3 class="card-title">Upload</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="custom-file">
                                                    @csrf
                                                    <input type="file" class="custom-file-input" id="upload" name="upload" v-on:change="onFileChange">
                                                    <label class="custom-file-label" for="upload">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6" v-for="upload_category in upload_categories" :key="upload_category.id">
                                            <div class="form-group">
                                                <input type="checkbox" v-model="form.upload_categories" v-bind:true-value="upload_category.id"  />
                                                <label for="form.upload_categories">{{upload_category.name}}</label>
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
    $(function() {
        $('input[name="start_datetime"]').daterangepicker({
            timePicker: true,
            singleDatePicker: true,
            showDropdowns: true,
            startDate: moment().startOf('hour'),
            locale: {
            format: 'M/DD/Y hh:mm A'
            }
        });
        $('input[name="end_datetime"]').daterangepicker({
            timePicker: true,
            singleDatePicker: true,
            showDropdowns: true,
            startDate: moment().startOf('hour'),
            locale: {
            format: 'M/DD/Y hh:mm A'
            }
        });
        bsCustomFileInput.init();
    });

    import { Head, Link, useForm } from '@inertiajs/inertia-vue3'
    import AdminAppLayout from '@/Layouts/AdminAppLayout.vue'

    export default {
        props: {
            upload: Object,
            upload_categories: Object,
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
                    description: null,
                    version: null,
                    keywords: null,
                    upload: null,
                    upload_categories: null,
                })
            }
        },
        methods: {
            onFileChange(e){
                console.log(e.target.files[0]);
                this.form.upload = e.target.files[0];
            },
            store(){
                this.form.post('/admin/uploads/store')
            },
        },
    }
</script>
