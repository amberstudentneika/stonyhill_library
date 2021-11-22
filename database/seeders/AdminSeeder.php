<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fName'     => 'Shaneika',
            'lName'     => 'Lewis',
            'gender'    => 'Female',
            'email'     => 'slewis@gmail.com',
            'password'  => Hash::make('password'),
        ]);
    }
}
