<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Userinfo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->has(\App\Models\Userinfo::factory()->count(1))->create();
    }
}
