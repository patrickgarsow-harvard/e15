<template>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">SynTMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Schuyler Falls</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-user nav-icon"></i>
              <p>
                Contacts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/contacts/index" class="nav-link">
                    <i class="fa-solid fa-user nav-icon"></i>
                    <p>
                      Contacts
                    </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/employees/index" class="nav-link">
                  <i class="fa-solid fa-id-card nav-icon"></i>
                  <p>Employees</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/invoice.html" class="nav-link">
                  <i class="fa-solid fa-building nav-icon"></i>
                  <p>Vendors</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/admin/departments/index" class="nav-link">
              <i class="fa-solid fa-user-group nav-icon"></i>
              <p>
                Departments
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/settings/index" class="nav-link">
              <i class="fa-solid fa-gear nav-icon"></i>
              <p>
                Settings
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Documentation
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</template>

<script>
  import { Head, Link } from '@inertiajs/inertia-vue3';

  export default({
    components: {
        Head,
        Link,
    },
  });
</script>
