<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Contact;

class SetupImplementationConfiguration extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Contact::create([
            'first_name' => 'NEC',
            'last_name' => 'Admin',
            'primary_email' => 'pgarsow@northeasterncomputer.net',
            'primary_phone' => '518.569.9244'
        ]);

        User::create([
            'contact_id' => 1,
            'permission_id' => 1,
            'email_verified_at' => now(),
            'password' => Hash::make('W3lc0m3NEC275!'),
            'remember_token' => Str::random(10),
        ]);
    }
}
