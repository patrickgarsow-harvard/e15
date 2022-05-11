<template>
  <AdminAppLayout>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Events</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Events</li>
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
                  <h3 class="card-title">Event Listing<Link href="/admin/events/create" type="button" class="btn btn-block btn-primary"><i class="fa-solid fa-plus"></i>New Event</Link></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="events" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Action</th>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Start Date/Time</th>
                      <th>End Date/Time</th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr v-for="event in events" :key="event.id">
                        <td><Link :href="`/admin/events/edit/${event.id}`"><i class="fa-solid fa-pencil" color="blue"></i></Link> | <Link :href="`/admin/events/delete/${event.id}`"><i class="fa-solid fa-circle-xmark" color="red"></i></Link></td>
                        <td>{{ event.id }}</td>
                        <td>{{ event.name }}</td>
                        <td>{{ event.description }}</td>
                        <td>{{ event.start_datetime }}</td>
                        <td>{{ event.end_datetime }}</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <th>Action</th>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Start Date/Time</th>
                      <th>End Date/Time</th>
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
      events: Object,
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
    $('#events').DataTable();
  } );
</script>
