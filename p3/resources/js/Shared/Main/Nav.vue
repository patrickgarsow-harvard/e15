<template>
    <nav id="mainav" class="fl_right">
            <ul class="clear">
                <li><a class="drop" href="#">About</a>
                <ul>
                    <li><a href="pages/gallery.html">History</a></li>
                    <li><a href="pages/full-width.html">Facts</a></li>
                    <li><a href="pages/sidebar-left.html">Elected Officials</a></li>
                    <li><a href="pages/sidebar-right.html">Careers</a></li>
                </ul>
                </li>
                <li><a href="#">Events Calendar</a></li>
                <li><a href="#">News</a></li>
                <li><a class="drop" href="#">Departments</a>
                <ul>
                    <li v-for="department in departments" :key="department.id"><a href="`/department/${department.id}`">{{department.name}}</a></li>
                </ul>
                </li>
                <li><a class="drop" href="#">Resources</a>
                <ul>
                    <li><a href="pages/sidebar-left.html">Forms</a></li>
                    <li><a href="pages/gallery.html">Documents</a></li>
                    <li><a href="pages/sidebar-left.html">Recordings</a></li>
                    <li><a href="pages/full-width.html">Community Links</a></li>
                </ul>
                </li>
            </ul>
            </nav>
</template>
<script>

    export default {

        computed: {
            // departments(){
            //     return $page.props.main.departments;
            // }

            departments(){
                return this.$page.props.main.departments
            }
        },
    }
</script>
