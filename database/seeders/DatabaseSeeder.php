<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Mockery\Generator\StringManipulation\Pass\Pass;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'dzika',
            'username' => 'dzixxxxa',
            'email' => 'dzaqqq@gmail.com',
            'password' => bcrypt('asdasda')
        ]);
        // User::create([
        //     'name' => 'huan',
        //     'email' => 'huqqq@gmail.com',
        //     'password' => bcrypt('123')

        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'SI',
            'slug' => 'si'
        ]);

        Category::create([
            'name' => 'Anime',
            'slug' => 'anime'
        ]);

        Category::create([
            'name' => 'Cartoon',
            'slug' => 'cartoon'
        ]);

        Category::create([
            'name' => 'Naruto',
            'slug' => 'naruto'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'jupe',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consecttur adipisicing elit. Voluptates at iste ipsam aliquam voluptas, fuga expedita iure similique natus nisi quasi atque laborum est .',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates at iste ipsam aliquam voluptas, fuga expedita iure similique natus nisi quasi atque laborum est obcaecati. Quod, reprehenderit ducimus accusamus fuga beatae sunt cumque harum quaerat repudiandae culpa sit laborum non quasi distinctio nam quam placeat asperiores minima? Delectus, architecto nesciunt.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'judu',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consecttur adipisicing elit. Voluptates at iste ipsam aliquam voluptas, fuga expedita iure similique natus nisi quasi atque laborum est .',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates at iste ipsam aliquam voluptas, fuga expedita iure similique natus nisi quasi atque laborum est obcaecati. Quod, reprehenderit ducimus accusamus fuga beatae sunt cumque harum quaerat repudiandae culpa sit laborum non quasi distinctio nam quam placeat asperiores minima? Delectus, architecto nesciunt.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'juga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consecttur adipisicing elit. Voluptates at iste ipsam aliquam voluptas, fuga expedita iure similique natus nisi quasi atque laborum est .',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates at iste ipsam aliquam voluptas, fuga expedita iure similique natus nisi quasi atque laborum est obcaecati. Quod, reprehenderit ducimus accusamus fuga beatae sunt cumque harum quaerat repudiandae culpa sit laborum non quasi distinctio nam quam placeat asperiores minima? Delectus, architecto nesciunt.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
