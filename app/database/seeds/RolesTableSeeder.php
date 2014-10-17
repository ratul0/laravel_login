<?php

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        

		$roles = [
			[
				'role_title'	=>	'Admin',
				'system_delete' => true
			]



		];

        DB::table('roles')->insert($roles);
    }

}