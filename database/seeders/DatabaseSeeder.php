<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        User::create([
//            'name' => 'anton',
//            'email' => 'antonknjzev@yandex.ru',
//            'password' => Hash::make($password)
//        ]);

        Category::create([
            'category' => 'php'
        ]);
    }
}
