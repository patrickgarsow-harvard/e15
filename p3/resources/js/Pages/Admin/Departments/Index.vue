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
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Department Listing<Link href="/admin/departments/create" type="button" class="btn btn-block btn-primary"><i class="fa-solid fa-plus"></i>New Department</Link></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="departments" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Action</th>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Extension</th>
                      <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr v-for="department in departments" :key="department.id">
                        <td><Link :href="`/admin/departments/edit/${department.id}`"><i class="fa-solid fa-pencil" color="blue"></i></Link> | <Link :href="`/admin/departments/delete/${department.id}`"><i class="fa-solid fa-circle-xmark" color="red"></i></Link></td>
                        <td>{{ department.id }}</td>
                        <td>{{ department.name }}</td>
                        <td>{{ department.phone }}</td>
                        <td>{{ department.extension }}</td>
                        <td>{{ department.email }}</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <th>Action</th>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Extension</th>
                      <th>Email</th>
                    </tfoot>
                  </table>
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
  import { defineComponent } from 'vue'
  import AdminAppLayout from '@/Layouts/AdminAppLayout.vue'

  export default defineComponent({
    props: {
      departments: Object,
      },

      components: {
          Head,
          Link,
          AdminAppLayout,
      },
      data() {
        return {}
      },
  })

  $(document).ready(function() {
    $('#departments').DataTable();
  } );
</script>
