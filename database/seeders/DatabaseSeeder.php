<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $id = DB::table('users')->InsertGetId(
            [
                'name' => 'admin',
                'email' => 'admin@email.com',
                'user_privilege' => '1',
                'password' => password_hash('password', PASSWORD_DEFAULT)
                
            ]
        );
        // \App\Models\User::factory(10)->create();
    }
}
