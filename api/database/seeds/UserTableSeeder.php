<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        	[
        		'name'=>'emanuel',
        		'email'=>'emanuelcastillo9101@gmail.com',
        		'password'=>Hash::make('12345')
        	]
        ];
        foreach ($users as $user) {
        	\App\User::create($user);
        }
    }
}
