<template>
  <AdminAppLayout>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <form @submit.prevent="store">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1>Contacts <button type="submit" class="btn btn-block btn-primary">Submit</button></h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Contacts</li>
                </ol>
                </div>
            </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
            <div class="row mb-2">
                <!-- <form @submit.prevent="submit"> -->
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                            <h3 class="card-title">Personal Identification</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Company Name:</label>
                                        <input id="name" class="form-control" v-model="form.name" />
                                    </div>
                                    <div class="form-group">
                                        <label for="first_name">First Name:</label>
                                        <input id="first_name" class="form-control" v-model="form.first_name" />
                                    </div>
                                    <div class="form-group">
                                        <label for="middle_name">Middle Name:</label>
                                        <input id="middle_name" class="form-control" v-model="form.middle_name" />
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name">Last Name:</label>
                                        <input id="last_name" class="form-control" v-model="form.last_name" />
                                    </div>
                                    <div class="form-group">
                                        <label for="name_suffix">Name Suffix:</label>
                                        <input id="name_suffix" class="form-control" v-model="form.name_suffix" />
                                    </div>
                                    <div class="form-group">
                                        <label for="nickname">Nickname:</label>
                                        <input id="nickname" class="form-control" v-model="form.nickname" />
                                    </div>
                                    <div class="form-group">
                                        <label for="dob">Date of Birth:</label>
                                        <div class="input-group date" id="dob" data-target-input="nearest">
                                            <input type="text" class="form-control daterangepicker-input" data-target="#dob" v-model="form.dob" />
                                            <div class="input-group-append" data-target="#dob" data-toggle="daterangepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                            <h3 class="card-title">Location Information</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input id="address" class="form-control" v-model="form.address" />
                                    </div>
                                    <div class="form-group">
                                        <label for="address2">Address Continue:</label>
                                        <input id="address2" class="form-control" v-model="form.address2" />
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="city">City:</label>
                                                <input id="city" class="form-control" v-model="form.city" />
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="state">State:</label>
                                                <input id="state" class="form-control" v-model="form.state" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="zip">Zip:</label>
                                                <input id="zip" class="form-control" v-model="form.zip" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="zipext">Zip Ext:</label>
                                                <input id="zipext" class="form-control" v-model="form.zipext" />
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="form-group">
                                        <label for="mail_address">Mail Address</label>
                                        <input id="mail_address" class="form-control" v-model="form.mail_address" />
                                    </div>
                                    <div class="form-group">
                                        <label for="mail_address2">Mail Address Continue:</label>
                                        <input id="mail_address2" class="form-control" v-model="form.mail_address2" />
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="mail_city">Mail City:</label>
                                                <input id="mail_city" class="form-control" v-model="form.mail_city" />
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="mail_state">State:</label>
                                                <input id="mail_state" class="form-control" v-model="form.mail_state" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="mail_zip">Zip:</label>
                                                <input id="mail_zip" class="form-control" v-model="form.mail_zip" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="mail_zipext">Zip Ext:</label>
                                                <input id="mail_zipext" class="form-control" v-model="form.mail_zipext" />
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                            <h3 class="card-title">Communication Information</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="primary_phone">Primary Phone</label>
                                                <input id="primary_phone" class="form-control" v-model="form.primary_phone" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="cell_phone">Cell Phone:</label>
                                                <input id="cell_phone" class="form-control" v-model="form.cell_phone" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="work_phone">Work Phone:</label>
                                                <input id="work_phone" class="form-control" v-model="form.work_phone" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="fax">Fax:</label>
                                                <input id="fax" class="form-control" v-model="form.fax" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="primary_email">Primary Email:</label>
                                                <input id="primary_email" class="form-control" v-model="form.primary_email" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="alt_email">Alternate Email:</label>
                                                <input id="alt_email" class="form-control" v-model="form.alt_email" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="website">Web:</label>
                                                <input id="website" class="form-control" v-model="form.website" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="twitter_handle">Twitter Name:</label>
                                                <input id="twitter_handle" class="form-control" v-model="form.twitter_handle" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="facebook_handle">Facebook Name:</label>
                                                <input id="facebook_handle" class="form-control" v-model="form.facebook_handle" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="instagram_handle">Instagram Name:</label>
                                                <input id="instagram_handle" class="form-control" v-model="form.instagram_handle" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="linkedin_handle">LinkedIn Name:</label>
                                                <input id="linkedin_handle" class="form-control" v-model="form.linkedin_handle" />
                                            </div>
                                        </div>
                                    </div>
                                <button type="submit" class="btn btn-block btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                <!-- </form> -->
            </div>
            </div>
        </section>
        </form>
    </div>
  </AdminAppLayout>
</template>

<script>

    import { Head, Link, useForm } from '@inertiajs/inertia-vue3'
    import AdminAppLayout from '@/Layouts/AdminAppLayout.vue'

    export default {
        props: {
            contact: Object,
        },

        components: {
            Head,
            Link,
            AdminAppLayout,
        },

        data() {
            return {
                form: this.$inertia.form({
                    company: null,
                    first_name: null,
                    middle_name: null,
                    last_name: null,
                    name_suffix: null,
                    nickname: null,
                    dob: null,
                    address: null,
                    address2: null,
                    city: null,
                    state: null,
                    zip: null,
                    zipext: null,
                    mail_address: null,
                    mail_address2: null,
                    mail_city: null,
                    mail_state: null,
                    mail_zip: null,
                    mail_zipext: null,
                    primary_email: null,
                    alt_email: null,
                    cell_phone: null,
                    primary_phone: null,
                    work_phone: null,
                    fax: null,
                    website: null,
                    twitter_handle: null,
                    facebook_handle: null,
                    instagram_handle: null,
                    linkedin_handle: null,
                })
            }
        },
        methods: {
            store(){
                this.form.post('/admin/contacts/store')
            },
        },
    }
</script>
