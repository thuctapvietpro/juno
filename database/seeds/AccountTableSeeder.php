<?php

use Illuminate\Database\Seeder;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data=[
				'user_name'=>'Admin',
        		'user_email'=>'vietpro@gmail.com',
        		'password'=>bcrypt('123456'),
        		'user_avatar'=>'',
        		'user_phone'=>'01658015035', 
        		'user_role'=>1
        ];
        DB::table('accounts')->insert($data);
    }
}
