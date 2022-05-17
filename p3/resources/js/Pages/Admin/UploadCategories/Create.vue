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
    });

    import { Head, Link, useForm } from '@inertiajs/inertia-vue3'
    import AdminAppLayout from '@/Layouts/AdminAppLayout.vue'

    export default {
        props: {
            event: Object,
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
                    start_datetime: null,
                    end_datetime: null,
                    gallery_id: null,
                    page_content: null,
                    event_category_id: null,
                    hidden: null,
                    listed: null,
                })
            }
        },
        methods: {
            store(){
                this.form.post('/admin/upload_categories/store')
            },
        },
    }
</script>
