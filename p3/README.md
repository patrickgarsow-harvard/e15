# Project 3 - Synergy Town Management Software
+ By: Patrick Garsow
+ URL: <http://e15p3.patrickgarsow.me>
+ Live URL: https://schuylerfallsny.com

## Login Information
Default User: pgarsow@northeasterncomputer.net
Password: W3lc0m3NEC275!

## Outside resources

### References / Packages
+ <https://cdnjs.com/libraries> - Content Delivery Network Reference Library for easy package integration. Used for Datatables, Fontawesome, Jquery, Bootstrap, and misc packages
+ <https://github.com/designatedcoder/admin_o_matic> - Admin panel built with Laravel 8, Jetstream, Inertia, AdminLTE, Spatie's Laravel-permissions, Jetstrap, and Bootstrap 4
+ <https://github.com/khsing/laravel-world> - Helper package for Country, State, City codes
+ <https://github.com/nascent-africa/jetstrap> - Package To Convert from TailwindCSS to Bootstrap with Laravel, Inertia and Vuejs
+ <https://fontawesome.com/docs/web/use-with/vue/> - Fontawesome Alternate Integration into Vuejs
+ <https://www.positronx.io/vue-js-dynamic-jquery-datatables-tutorial-example/> - Datatables with Vuejs Option

### Laravel
+ <https://spatie.be/docs/laravel-permission/v5/advanced-usage/seeding> - Database seeding explained.
+ <https://laravel.com/docs/9.x/eloquent> - Eloquent Objection-relational mapper

### JS
+ <https://vue-chartjs.org/guide/#npm> - Using chart.js with vue
+ <https://vuejs.org/guide/components/registration.html#local-registration> - Custom Component Registration for Templating.
+ <https://webpack.js.org/concepts/> - Webpack
+ <https://inertiajs.com/> - Inertiajs
+ <https://getbootstrap.com/docs/5.1/getting-started/introduction/> - Bootstrap - Easy Stylizing & Layout Formatting

### CSS/JS - Administration
+ <https://adminlte.io/> - Administrative Panel
+ <https://larecipe.binarytorch.com.my/> - LaRecipe Documentation App

### Learned Information
+ <https://github.com/tighten/ziggy/issues/402> - You can use "named" routes but you need to know what your routes are actually being configured as so you should use `php artisan route:list` to determine how the system is recognizing your routes. If you are using Groupings it may not display as expected.
+ <https://laracasts.com/series/build-modern-laravel-apps-using-inertia-js/episodes/10> - Learned how to pass database data to a component withing my templates so that it is consisten on any/all pages being accessed. Key is to put the infor in `Middleware -> HandleInertiaRequests.php`

## Notes for instructor
For project 3 there are numerous additions including a more complete /admin/departments, /admin/upload_categories, /admin/article_categories, /admin/articles, /admin/users, and more. All of this is in rapid development for a real life project. Also, I am experimenting with a neat documentation tool called LaRecipe. There is a link that directs users to the documentation if they are logged in. This is functionally amazing and reminds me of the notes section for the coarse.

While I am still learning how to build an application that is deployable I am now understanding migrations, seeders, pivots, and ways to implement global settings throughout the application to make it unique for every implementation even though the backend code is the same.
