<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'category_id' => Category::find(2)->id,
            'title' => 'Сессии',
            'excerpt' => 'Сессии представляют набор переменных, которые хранятся на сервере.',
            'body' => 'Сессии представляют набор переменных, которые хранятся на сервере (либо часть на сервере, а часть - в cookie браузера) и которые относятся только к текущему пользователю. В какой-то степени сессии являются альтернативой кукам в плане сохранения данных о пользователе.
    Для запуска сессии необходимо вызвать функцию session_start(). Она должна вызываться до отправки ответа пользователю.'
        ]);

        Post::create([
            'category_id' => Category::find(2)->id,
            'title' => 'Генераторы yield(). Что это такое?',
            'excerpt' => 'Возвращает значения из функции оператор yield.',
            'body' => 'Возвращает значения из функции оператор yield. Но в отличие от return оператор yield сохраняет состояние функции, позволяя ей продолжать работу с того места, когда остановилось ее выполнение.'
        ]);
    }
}
