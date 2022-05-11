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
                <h1>Article Category <button type="submit" class="btn btn-block btn-primary">Submit</button></h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Article Categories</li>
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
                            <h3 class="card-title">Article Category</h3>
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

    import { Head, Link, useForm } from '@inertiajs/inertia-vue3'
    import AdminAppLayout from '@/Layouts/AdminAppLayout.vue'

    export default {
        props: {
            article_category: Object,
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
                })
            }
        },
        methods: {
            store(){
                this.form.post('/admin/article_categories/store')
            },
        },
    }
</script>
