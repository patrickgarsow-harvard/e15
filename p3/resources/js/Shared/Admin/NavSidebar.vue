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
          <!-- Departments Menu Items -->
          <li class="nav-item">
            <a href="/admin/departments/index" class="nav-link">
              <i class="fa-solid fa-user-group nav-icon"></i>
              <p>
                Departments
              </p>
            </a>
          </li>
            <!-- Articles Menu Items -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fa-solid fa-file nav-icon"></i>
                <p>Articles<i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/admin/articles/index" class="nav-link">
                        <i class="fa-solid fa-file nav-icon"></i>
                        <p>Current Articles</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/articles/past" class="nav-link">
                    <i class="fa-solid fa-copy nav-icon"></i>
                    <p>Past Articles</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/article_categories/index" class="nav-link">
                    <i class="fa-brands fa-buffer nav-icon"></i>
                    <p>Article Categories</p>
                    </a>
                </li>
                </ul>
            </li>
            <!-- Events Menu Items -->
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-calendar-days nav-icon"></i>
              <p>Events<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/events/index" class="nav-link">
                    <i class="fa-solid fa-file nav-icon"></i>
                    <p>Upcoming/Current Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/events/past" class="nav-link">
                  <i class="fa-solid fa-copy nav-icon"></i>
                  <p>Past Events</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Application Pages Menu Items -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-file-lines nav-icon"></i>
              <p>Pages<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/applicationpages/index" class="nav-link">
                    <i class="fa-solid fa-file-lines nav-icon"></i>
                    <p>Active Pages</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/applicationpages/hidden" class="nav-link">
                  <i class="fa-solid fa-file nav-icon"></i>
                  <p>Inactive Pages</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Users / Security -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-lock nav-icon"></i>
              <p>Security<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/users/index" class="nav-link">
                    <i class="fa-solid fa-user nav-icon"></i>
                    <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/groups/index" class="nav-link">
                  <i class="fa-solid fa-users nav-icon"></i>
                  <p>Groups</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/permissions/index" class="nav-link">
                  <i class="fa-solid fa-users nav-icon"></i>
                  <p>Permissions</p>
                </a>
              </li>
            </ul>
          </li>
            <!-- Uploads & Files -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-lock nav-icon"></i>
              <p>Uploads<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/uploads/index" class="nav-link">
                    <i class="fa-solid fa-user nav-icon"></i>
                    <p>Uploads</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/upload_categories/index" class="nav-link">
                  <i class="fa-solid fa-users nav-icon"></i>
                  <p>Upload Categories</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Settings -->
          <li class="nav-item">
            <a href="/admin/settings/index" class="nav-link">
              <i class="fa-solid fa-gear nav-icon"></i>
              <p>
                Settings
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/docs/" class="nav-link">
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
