<template>
  <AdminAppLayout>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Employees</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Employees</li>
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
                  <h3 class="card-title">Employee Listing<Link href="#" type="button" class="btn btn-block btn-primary"><i class="fa-solid fa-plus"></i>New Employee</Link></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="contacts" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Action</th>
                      <th>ID</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Department</th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr v-for="employee in employees" :key="employee.id">
                        <td><Link :href="`/admin/employees/edit/${employee.id}`"><i class="fa-solid fa-pencil" color="blue"></i></Link> | <Link :href="`/admin/employees/delete/${employee.id}`"><i class="fa-solid fa-circle-xmark" color="red"></i></Link></td>
                        <td>{{ employee.id }}</td>
                        <td>{{ employee.contact.first_name }}</td>
                        <td>{{ employee.contact.last_name }}</td>
                        <td>{{ employee.contact.primary_phone }}</td>
                        <td>{{ employee.contact.primary_email }}</td>
                        <td>{{ employee.department.name }}</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <th>Action</th>
                      <th>ID</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Department</th>
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
      employees: Object,
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
    $('#contacts').DataTable();
  } );
</script>
