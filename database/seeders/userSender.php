<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
             'name'=>'vinny',
             'email' =>'mwangangimusyoka1998@gmail.com',
             'phone'=>'0742572324',
             'password'=>Hash::make("mwangangi")
            ]
            );
    }
}
