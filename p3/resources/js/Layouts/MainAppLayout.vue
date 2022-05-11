<template>
    <head>
        <title>Town of Schuyler Falls</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="css/mainlayout.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body id="top">
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ### Top Bar Navigation ### -->
        <div class="wrapper row0">
            <MainTopbarNav></MainTopbarNav>
        </div>
        <!-- ### End Top Bar Navigation ### -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <!-- ################################################################################################ -->
                <div id="logo" class="fl_left">
                <h1><a href="/">Town of Schuyler Falls</a></h1>
                </div>
                <!-- ### Main Navigation Menu ### -->
                <MainNav></MainNav>
                <!-- ################################################################################################ -->
            </header>
        </div>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <MainIntro></MainIntro>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <slot></slot>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <div class="wrapper row4">
        <footer id="footer" class="hoc clear">
            <!-- ################################################################################################ -->
            <h3 class="heading">Town of Schuyler Falls</h3>
            <ul class="nospace inline pushright uppercase">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
            </ul>
            <ul class="faico clear">
            <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="faicon-dribble" href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <div id="copyright">
            <p>Copyright &copy; 2021 - Town of Schuyler Falls - All Rights Reserved - <a href="#">Domain Name</a></p>
            <p class="font-xs">Site by: <a target="_blank" href="https://www.northeasterncomputer.com" title="Northeastern Computer">Northeastern Computer</a></p>
            </div>
            <!-- ################################################################################################ -->
        </footer>
        </div>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
        <!-- JAVASCRIPTS -->
        <!-- <script src="layout/scripts/jquery.backtotop.js"></script>
        <script src="layout/scripts/jquery.mobilemenu.js"></script> -->
    </body>
</template>

<script>
import MainNav from '@/Shared/Main/Nav.vue'
import MainTopbarNav from '@/Shared/Main/TopbarNav.vue'
import MainIntro from '@/Shared/Main/Intro.vue'
import { Head, Link } from '@inertiajs/inertia-vue3'

export default {
  props: {
    title: String,
  },

  components: {
    Head,
    MainNav,
    MainTopbarNav,
    MainIntro,
    Link,
  },

  data() {
    return {
      showingNavigationDropdown: false,
    }
  },

  methods: {
    switchToTeam(team) {
      this.$inertia.put(route('current-team.update'), {
        'team_id': team.id
      }, {
        preserveState: false
      })
    },

    logout() {
      this.$inertia.post(route('logout'));
    },
  },

  computed: {
    path() {
      return window.location.pathname
    }
  }
}
</script>
