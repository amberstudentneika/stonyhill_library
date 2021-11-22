<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::create([
            'fName'     => 'Solomon',
            'lName'     => 'Jones',
            'gender'    => 'Male',
            'address'   => 'Amber Academy',
            'phoneNum'   => '876-234-2777',
            'email'     => 'sjones@gmail.com',
        ]);
    }
}
