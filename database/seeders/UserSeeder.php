<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
            'name' => 'Elsie',
            'email' => 'elsie@email.com',
            'password' => Hash::make('123123123'),
        ]);
        User::firstOrCreate([
            'name' => 'Annie',
            'email' => 'annie@email.com',
            'password' => Hash::make('123123123'),
        ]);
        User::firstOrCreate([
            'name' => 'Katie',
            'email' => 'katie@email.com',
            'password' => Hash::make('123123123'),
        ]);
        User::firstOrCreate([
            'name' => 'Alma',
            'email' => 'alma@email.com',
            'password' => Hash::make('123123123'),
        ]);
        User::firstOrCreate([
            'name' => 'Thelma',
            'email' => 'thelma@email.com',
            'password' => Hash::make('123123123'),
        ]);
        User::firstOrCreate([
            'name' => 'Ellen',
            'email' => 'ellen@email.com',
            'password' => Hash::make('123123123'),
        ]);
        User::firstOrCreate([
            'name' => 'Rebecca',
            'email' => 'rebecca@email.com',
            'password' => Hash::make('123123123'),
        ]);
        User::firstOrCreate([
            'name' => 'Estella',
            'email' => 'estella@email.com',
            'password' => Hash::make('123123123'),
        ]);
        User::firstOrCreate([
            'name' => 'Corine',
            'email' => 'corine@email.com',
            'password' => Hash::make('123123123'),
        ]);
        User::firstOrCreate([
            'name' => 'Margie',
            'email' => 'margie@email.com',
            'password' => Hash::make('123123123'),
        ]);
        User::firstOrCreate([
            'name' => 'Emmie',
            'email' => 'emmie@email.com',
            'password' => Hash::make('123123123'),
        ]);
        User::firstOrCreate([
            'name' => 'Myrtis',
            'email' => 'myrtis@email.com',
            'password' => Hash::make('123123123'),
        ]);
        User::firstOrCreate([
            'name' => 'Pinkie',
            'email' => 'pinkie@email.com',
            'password' => Hash::make('123123123'),
        ]);
        User::firstOrCreate([
            'name' => 'Myrtie',
            'email' => 'myrtie@email.com',
            'password' => Hash::make('123123123'),
        ]);
        User::firstOrCreate([
            'name' => 'Jeanette',
            'email' => 'jeanette@email.com',
            'password' => Hash::make('123123123'),
        ]);
        User::firstOrCreate([
            'name' => 'drdev',
            'email' => 'drdev@email.com',
            'password' => Hash::make('drdev123'),
        ]);
    }
}
