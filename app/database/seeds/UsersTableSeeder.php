<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $users = array(
        	array(
                'email'    =>  'admin@sust.com',
                'password'      =>  Hash::make('admin'),
        		'role_id'	    =>	1,
                
        		'created_at'	=>	date('Y-m-d H:i:s'),
        		'updated_at'	=>	date('Y-m-d H:i:s')
        	),
            array(
                'email'    =>  'ratulcse27@gmail.com',
                'password'      =>  Hash::make('ratulcse27'),
                'role_id'       =>  1,
                
                'created_at'    =>  date('Y-m-d H:i:s'),
                'updated_at'    =>  date('Y-m-d H:i:s')
            )
        );

        DB::table('users')->insert($users);
    }

}