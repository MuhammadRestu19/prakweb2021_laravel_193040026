<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
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
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Muhammad Restu',
        //     'email' => 'Muhammadrestu1909@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'aji fattah',
        //     'email' => 'ajifattah@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'judul pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem labore vel sunt suscipit molestias doloribus cupiditate architecto animi distinctio exercitationem nostrum reiciendis reprehenderit ducimus voluptatem, tempore dolorum perspiciatis odio quos, neque provident. Voluptas consectetur animi culpa, ipsam cumque nostrum nesciunt dolore doloribus, perspiciatis error modi obcaecati dolor eaque voluptates repellendus? Ipsam quod, eum ad maxime quos quibusdam natus repellendus. Doloremque accusamus aut iste adipisci perspiciatis nesciunt debitis officia natus facere distinctio vitae labore unde beatae, deleniti sed ex, reprehenderit nulla repellendus neque, saepe nobis dignissimos officiis? Dolorum voluptates ipsa quo ipsam dicta, voluptas amet incidunt sint itaque quaerat. ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem labore vel sunt suscipit molestias doloribus cupiditate architecto animi distinctio exercitationem nostrum reiciendis reprehenderit ducimus voluptatem, tempore dolorum perspiciatis odio quos, neque provident. Voluptas consectetur animi culpa, ipsam cumque nostrum nesciunt dolore doloribus, perspiciatis error modi obcaecati dolor eaque voluptates repellendus? Ipsam quod, eum ad maxime quos quibusdam natus repellendus. Doloremque accusamus aut iste adipisci perspiciatis nesciunt debitis officia natus facere distinctio vitae labore unde beatae, deleniti sed ex, reprehenderit nulla repellendus neque, saepe nobis dignissimos officiis? Dolorum voluptates ipsa quo ipsam dicta, voluptas amet incidunt sint itaque quaerat. Consequatur, temporibus.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem labore vel sunt suscipit molestias doloribus cupiditate architecto animi distinctio exercitationem nostrum reiciendis reprehenderit ducimus voluptatem, tempore dolorum perspiciatis odio quos, neque provident. Voluptas consectetur animi culpa, ipsam cumque nostrum nesciunt dolore doloribus, perspiciatis error modi obcaecati dolor eaque voluptates repellendus? Ipsam quod, eum ad maxime quos quibusdam natus repellendus. Doloremque accusamus aut iste adipisci perspiciatis nesciunt debitis officia natus facere distinctio vitae labore unde beatae, deleniti sed ex, reprehenderit nulla repellendus neque, saepe nobis dignissimos officiis? Dolorum voluptates ipsa quo ipsam dicta, voluptas amet incidunt sint itaque quaerat. ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem labore vel sunt suscipit molestias doloribus cupiditate architecto animi distinctio exercitationem nostrum reiciendis reprehenderit ducimus voluptatem, tempore dolorum perspiciatis odio quos, neque provident. Voluptas consectetur animi culpa, ipsam cumque nostrum nesciunt dolore doloribus, perspiciatis error modi obcaecati dolor eaque voluptates repellendus? Ipsam quod, eum ad maxime quos quibusdam natus repellendus. Doloremque accusamus aut iste adipisci perspiciatis nesciunt debitis officia natus facere distinctio vitae labore unde beatae, deleniti sed ex, reprehenderit nulla repellendus neque, saepe nobis dignissimos officiis? Dolorum voluptates ipsa quo ipsam dicta, voluptas amet incidunt sint itaque quaerat. Consequatur, temporibus.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem labore vel sunt suscipit molestias doloribus cupiditate architecto animi distinctio exercitationem nostrum reiciendis reprehenderit ducimus voluptatem, tempore dolorum perspiciatis odio quos, neque provident. Voluptas consectetur animi culpa, ipsam cumque nostrum nesciunt dolore doloribus, perspiciatis error modi obcaecati dolor eaque voluptates repellendus? Ipsam quod, eum ad maxime quos quibusdam natus repellendus. Doloremque accusamus aut iste adipisci perspiciatis nesciunt debitis officia natus facere distinctio vitae labore unde beatae, deleniti sed ex, reprehenderit nulla repellendus neque, saepe nobis dignissimos officiis? Dolorum voluptates ipsa quo ipsam dicta, voluptas amet incidunt sint itaque quaerat. ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem labore vel sunt suscipit molestias doloribus cupiditate architecto animi distinctio exercitationem nostrum reiciendis reprehenderit ducimus voluptatem, tempore dolorum perspiciatis odio quos, neque provident. Voluptas consectetur animi culpa, ipsam cumque nostrum nesciunt dolore doloribus, perspiciatis error modi obcaecati dolor eaque voluptates repellendus? Ipsam quod, eum ad maxime quos quibusdam natus repellendus. Doloremque accusamus aut iste adipisci perspiciatis nesciunt debitis officia natus facere distinctio vitae labore unde beatae, deleniti sed ex, reprehenderit nulla repellendus neque, saepe nobis dignissimos officiis? Dolorum voluptates ipsa quo ipsam dicta, voluptas amet incidunt sint itaque quaerat. Consequatur, temporibus.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'judul keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem labore vel sunt suscipit molestias doloribus cupiditate architecto animi distinctio exercitationem nostrum reiciendis reprehenderit ducimus voluptatem, tempore dolorum perspiciatis odio quos, neque provident. Voluptas consectetur animi culpa, ipsam cumque nostrum nesciunt dolore doloribus, perspiciatis error modi obcaecati dolor eaque voluptates repellendus? Ipsam quod, eum ad maxime quos quibusdam natus repellendus. Doloremque accusamus aut iste adipisci perspiciatis nesciunt debitis officia natus facere distinctio vitae labore unde beatae, deleniti sed ex, reprehenderit nulla repellendus neque, saepe nobis dignissimos officiis? Dolorum voluptates ipsa quo ipsam dicta, voluptas amet incidunt sint itaque quaerat. ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem labore vel sunt suscipit molestias doloribus cupiditate architecto animi distinctio exercitationem nostrum reiciendis reprehenderit ducimus voluptatem, tempore dolorum perspiciatis odio quos, neque provident. Voluptas consectetur animi culpa, ipsam cumque nostrum nesciunt dolore doloribus, perspiciatis error modi obcaecati dolor eaque voluptates repellendus? Ipsam quod, eum ad maxime quos quibusdam natus repellendus. Doloremque accusamus aut iste adipisci perspiciatis nesciunt debitis officia natus facere distinctio vitae labore unde beatae, deleniti sed ex, reprehenderit nulla repellendus neque, saepe nobis dignissimos officiis? Dolorum voluptates ipsa quo ipsam dicta, voluptas amet incidunt sint itaque quaerat. Consequatur, temporibus.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
}
}
