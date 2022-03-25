<template>
  <AdminAppLayout>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Departments</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Departments</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-4">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Create Department</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form @submit.prevent="update">
                        <div class="form-group">
                            <label for="name">Department Name:</label>
                            <input id="name" class="form-control" v-model="form.name"/>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input id="description" class="form-control" v-model="form.description" />
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input id="phone" class="form-control" v-model="form.phone" />
                        </div>
                        <div class="form-group">
                            <label for="extension">Extension:</label>
                            <input id="extension" class="form-control" v-model="form.extension" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input id="email" class="form-control" v-model="form.email" />
                        </div>
                        <div class="form-group">
                            <input type="checkbox" v-model="form.hidden" v-bind:true-value=1 />
                            <label for="form.hidden">Hidden</label>
                        </div>
                        <div class="form-group">
                            <label for="page_content">Page Content:</label>
                            <textarea v-model="page_content"></textarea>
                        </div>
                    <button type="submit" class="btn btn-block btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </AdminAppLayout>
</template>

<script>
    import { Head, Link } from '@inertiajs/inertia-vue3'
    import AdminAppLayout from '@/Layouts/AdminAppLayout.vue'

    export default {
        props: {
            department: Object,
        },

        components: {
            Head,
            Link,
            AdminAppLayout,
        },

        remember: 'form',

        data() {
            return {
                form: this.$inertia.form({
                    name: this.department.name,
                    description: this.department.description,
                    phone: this.department.phone,
                    extension: this.department.extension,
                    email: this.department.email,
                    page_content: this.department.page_content,
                    hidden: this.department.hidden,
                }),
            }
        },

        methods: {
            update(){
                this.form.put(`/admin/departments/update/${this.department.id}`)
            },
        },
    }

    $(document).ready(function() {
        $('#departments').DataTable();
    } );
</script>
