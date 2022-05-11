<template>
  <AdminAppLayout>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <form @submit.prevent="update">
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
                                        <label for="company">Company Name:</label>
                                        <input id="company" class="form-control" v-model="form.company" />
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
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                            <h3 class="card-title">Other Details / Options</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="checkbox" v-model="form.is_employee" v-bind:true-value="`if(this.employee.id > 0){ document.write(1); }`"  />
                                                <label for="form.is_employee">Employee</label>
                                            </div>
                                        </div>
                                        <div v-if="this.employee.id > 0" class="col-6">
                                            <Link :href="`/admin/employee/edit/${employee.id}`" class="btn btn-block btn-primary">Edit Employee Info</Link>
                                        </div>
                                    </div>
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
    import { defineComponent } from 'vue';

    export default defineComponent({
        props: {
            contact: Object,
            employee: Object,
        },

        components: {
            Head,
            Link,
            AdminAppLayout,
        },

        data() {
            return {
                form: this.$inertia.form({
                    company: this.contact.company,
                    first_name: this.contact.first_name,
                    middle_name: this.contact.middle_name,
                    last_name: this.contact.last_name,
                    name_suffix: this.contact.name_suffix,
                    nickname: this.contact.nickname,
                    dob: this.contact.dob,
                    address: this.contact.address,
                    address2: this.contact.address2,
                    city: this.contact.city,
                    state: this.contact.state,
                    zip: this.contact.zip,
                    zipext: this.contact.zipext,
                    mail_address: this.contact.mail_address,
                    mail_address2: this.contact.mail_address2,
                    mail_city: this.contact.mail_city,
                    mail_state: this.contact.mail_state,
                    mail_zip: this.contact.mail_zip,
                    mail_zipext: this.contact.mail_zipext,
                    primary_email: this.contact.primary_email,
                    alt_email: this.contact.alt_email,
                    cell_phone: this.contact.cell_phone,
                    primary_phone: this.contact.primary_phone,
                    work_phone: this.contact.work_phone,
                    fax: this.contact.fax,
                    website: this.contact.website,
                    twitter_handle: this.contact.twitter_handle,
                    facebook_handle: this.contact.facebook_handle,
                    instagram_handle: this.contact.instagram_handle,
                    linkedin_handle: this.contact.linkedin_handle,
                    is_employee: this.employee.id,
                })
            }
        },

        methods: {
            update(){
                //this.form.post(this.route('admin.contacts.update', `${this.contact.id}`))
                this.form.put(`/admin/contacts/update/${this.contact.id}`)
            },
        },
    });
</script>
