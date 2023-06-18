<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // user::create([
        //     "name" => "saeful mu'minin",
        //     "email" => "saeful2026027@gmail.com",
        //     "password" => bcrypt("123")
        // ]);
        // user::create([
        //     "name" => "muhammad hasyim",
        //     "email" => "muhammad hasyim@gmail.com",
        //     "password" => bcrypt("12345")
        // ]);


        User::factory(5)->create();
        Category::create([
            'name' => 'Web proramming',
            'slug' => 'web-progmaming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'LARAVEL',
            'slug' => 'laravel'
        ]);
        post::factory(20)->create();
        // post::create([
        //     'title' => 'judul pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem recusandae nulla esse asperiores omnis. Minima eligendi placeat quae enim eos',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem recusandae nulla esse asperiores omnis. Minima eligendi placeat quae enim eos asperiores libero facere reiciendis porro, sint possimus soluta nisi culpa accusamus sit aliquam suscipit laboriosam harum corrupti impedit vel facilis? Mollitia et, quas adipisci eos necessitatibus inventore, magni quos voluptatum vitae error voluptate voluptatem voluptatibus earum facilis voluptates tenetur facere velit cupiditate quod quis totam ratione ducimus vero soluta. Deleniti, officia? Exercitationem nostrum vero, incidunt a quidem magni? Facere hic, odit culpa a cumque asperiores ex nostrum perspiciatis nemo, velit nisi? Impedit animi, dignissimos veniam explicabo sit nemo perspiciatis maxime?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // post::create([
        //     'title' => 'judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem recusandae nulla esse asperiores omnis. Minima eligendi placeat quae enim eos',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem recusandae nulla esse asperiores omnis. Minima eligendi placeat quae enim eos asperiores libero facere reiciendis porro, sint possimus soluta nisi culpa accusamus sit aliquam suscipit laboriosam harum corrupti impedit vel facilis? Mollitia et, quas adipisci eos necessitatibus inventore, magni quos voluptatum vitae error voluptate voluptatem voluptatibus earum facilis voluptates tenetur facere velit cupiditate quod quis totam ratione ducimus vero soluta. Deleniti, officia? Exercitationem nostrum vero, incidunt a quidem magni? Facere hic, odit culpa a cumque asperiores ex nostrum perspiciatis nemo, velit nisi? Impedit animi, dignissimos veniam explicabo sit nemo perspiciatis maxime?',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
        // post::create([
        //     'title' => 'judul ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem recusandae nulla esse asperiores omnis. Minima eligendi placeat quae enim eos',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem recusandae nulla esse asperiores omnis. Minima eligendi placeat quae enim eos asperiores libero facere reiciendis porro, sint possimus soluta nisi culpa accusamus sit aliquam suscipit laboriosam harum corrupti impedit vel facilis? Mollitia et, quas adipisci eos necessitatibus inventore, magni quos voluptatum vitae error voluptate voluptatem voluptatibus earum facilis voluptates tenetur facere velit cupiditate quod quis totam ratione ducimus vero soluta. Deleniti, officia? Exercitationem nostrum vero, incidunt a quidem magni? Facere hic, odit culpa a cumque asperiores ex nostrum perspiciatis nemo, velit nisi? Impedit animi, dignissimos veniam explicabo sit nemo perspiciatis maxime?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // post::create([
        //     'title' => 'judul keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem recusandae nulla esse asperiores omnis. Minima eligendi placeat quae enim eos',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem recusandae nulla esse asperiores omnis. Minima eligendi placeat quae enim eos asperiores libero facere reiciendis porro, sint possimus soluta nisi culpa accusamus sit aliquam suscipit laboriosam harum corrupti impedit vel facilis? Mollitia et, quas adipisci eos necessitatibus inventore, magni quos voluptatum vitae error voluptate voluptatem voluptatibus earum facilis voluptates tenetur facere velit cupiditate quod quis totam ratione ducimus vero soluta. Deleniti, officia? Exercitationem nostrum vero, incidunt a quidem magni? Facere hic, odit culpa a cumque asperiores ex nostrum perspiciatis nemo, velit nisi? Impedit animi, dignissimos veniam explicabo sit nemo perspiciatis maxime?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // post::create([
        //     'title' => 'judul kelima',
        //     'slug' => 'judul-kelima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem recusandae nulla esse asperiores omnis. Minima eligendi placeat quae enim eos',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem recusandae nulla esse asperiores omnis. Minima eligendi placeat quae enim eos asperiores libero facere reiciendis porro, sint possimus soluta nisi culpa accusamus sit aliquam suscipit laboriosam harum corrupti impedit vel facilis? Mollitia et, quas adipisci eos necessitatibus inventore, magni quos voluptatum vitae error voluptate voluptatem voluptatibus earum facilis voluptates tenetur facere velit cupiditate quod quis totam ratione ducimus vero soluta. Deleniti, officia? Exercitationem nostrum vero, incidunt a quidem magni? Facere hic, odit culpa a cumque asperiores ex nostrum perspiciatis nemo, velit nisi? Impedit animi, dignissimos veniam explicabo sit nemo perspiciatis maxime?',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);
        // post::create([
        //     'title' => 'judul keenam',
        //     'slug' => 'judul-keenam',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem recusandae nulla esse asperiores omnis. Minima eligendi placeat quae enim eos',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem recusandae nulla esse asperiores omnis. Minima eligendi placeat quae enim eos asperiores libero facere reiciendis porro, sint possimus soluta nisi culpa accusamus sit aliquam suscipit laboriosam harum corrupti impedit vel facilis? Mollitia et, quas adipisci eos necessitatibus inventore, magni quos voluptatum vitae error voluptate voluptatem voluptatibus earum facilis voluptates tenetur facere velit cupiditate quod quis totam ratione ducimus vero soluta. Deleniti, officia? Exercitationem nostrum vero, incidunt a quidem magni? Facere hic, odit culpa a cumque asperiores ex nostrum perspiciatis nemo, velit nisi? Impedit animi, dignissimos veniam explicabo sit nemo perspiciatis maxime?',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);
    }
}
