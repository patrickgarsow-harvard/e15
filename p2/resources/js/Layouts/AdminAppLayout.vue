<template>
  <div class="wrapper">

    <AdminNav></AdminNav>

    <AdminNavSidebar></AdminNavSidebar>

    <slot></slot>

    <AdminControlSidebar></AdminControlSidebar>

    <AdminFooter></AdminFooter>
  </div>
  <!-- ./wrapper -->
</template>

<script>
  import { Head, Link } from '@inertiajs/inertia-vue3'
  import { defineComponent } from 'vue'
  import AdminNavSidebar from '@/Shared/Admin/NavSidebar.vue'
  import AdminNav from '@/Shared/Admin/Nav.vue'
  import AdminControlSidebar from '@/Shared/Admin/ControlSidebar.vue'
  import AdminFooter from '@/Shared/Admin/Footer.vue';

  export default defineComponent({
    props: {
      },

      components: {
          Head,
          Link,
          AdminNavSidebar,
          AdminNav,
          AdminControlSidebar,
          AdminFooter,
      },
  })


</script>
