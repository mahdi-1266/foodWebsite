<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\table;
use function Laravel\Prompts\password;
use DB;

class UserSeeder extends Seeder
{
	public function run(): void
	{
    DB::table('users')->insert([
			[
        'name'=>'admin',
        'username'=>'admin',
        'email'=>'admin@gmail.com',
        'password'=>Hash::make('111'),
        'role'=>'admin',
        'status'=>'1',
      ],
      [
        'name'=>'user',
        'username'=>'user',
        'email'=>'user@gmail.com',
        'password'=>Hash::make('222'),
        'role'=>'user',
        'status'=>'1',
      ],
		]);
	}
}
