# Project 2 - Synergy Town Management Software
+ By: Patrick Garsow
+ URL: <http://e15p2.patrickgarsow.me>

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

## Notes for instructor
The part of this application that is for P2 is the /admin/departments/ section of the routes. This includes /index, /edit, /create, /store, /update. You can create a login simply by going to the main page and chosing register. Use an email and pick a password. No restrictions have been put on the implementation yet but obviously if this project was completed and put in production users wouldn't be able to create "admin" accounts but rather just "user" accounts.

The form fields used was text inputs (multiple), textarea, and checkbox. Textarea will hold html for the "department's" public page. I am thinking of adding CKeditor or TinyMCE for formatting the textarea box. The hidden field will be used to determine if the department will be listed in the public menu under departments.

Still learning how to build an application that is deployable in a way that allows for implementation customizations including database migrations.
