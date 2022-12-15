<?php

namespace Database\Seeders;

use App\Models\admin\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Admin::query()->updateOrCreate([
           'name'=>'Admin',
           'email'=>'admin@gmail.com',
           'status' => 1,
           'password'=>Hash::make(12345),
       ]);
    }
}
