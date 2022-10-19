<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Kalam',
        //     'email' => 'kalam@mail.com',
        //     'password' => bcrypt('kalam123'),
        // ]);

        // User::create([
        //     'name' => 'Eva',
        //     'email' => 'eva@mail.com',
        //     'password' => bcrypt('eva123'),
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(15)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ab earum accusamus reiciendis rem, adipisci perferendis sed quo labore nulla? Quos officia, eum ipsum sed unde corrupti voluptatum doloribus error beatae voluptates, modi neque incidunt inventore asperiores rem aliquam odit facilis tempore, odio expedita. Tempora quaerat dolorem nesciunt a commodi beatae cumque aut repellendus tenetur recusandae! Delectus omnis, fuga exercitationem, mollitia sequi voluptates impedit molestiae nobis reiciendis deserunt consequuntur. Velit aliquam numquam hic ut in explicabo rerum eius eos cumque exercitationem debitis pariatur quas maxime, similique temporibus illum necessitatibus quam deleniti rem architecto, dicta ipsum commodi. Ratione eius similique laborum.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ab earum accusamus reiciendis rem, adipisci perferendis sed quo labore nulla? Quos officia, eum ipsum sed unde corrupti voluptatum doloribus error beatae voluptates, modi neque incidunt inventore asperiores rem aliquam odit facilis tempore, odio expedita. Tempora quaerat dolorem nesciunt a commodi beatae cumque aut repellendus tenetur recusandae! Delectus omnis, fuga exercitationem, mollitia sequi voluptates impedit molestiae nobis reiciendis deserunt consequuntur. Velit aliquam numquam hic ut in explicabo rerum eius eos cumque exercitationem debitis pariatur quas maxime, similique temporibus illum necessitatibus quam deleniti rem architecto, dicta ipsum commodi. Ratione eius similique laborum.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ab earum accusamus reiciendis rem, adipisci perferendis sed quo labore nulla? Quos officia, eum ipsum sed unde corrupti voluptatum doloribus error beatae voluptates, modi neque incidunt inventore asperiores rem aliquam odit facilis tempore, odio expedita. Tempora quaerat dolorem nesciunt a commodi beatae cumque aut repellendus tenetur recusandae! Delectus omnis, fuga exercitationem, mollitia sequi voluptates impedit molestiae nobis reiciendis deserunt consequuntur. Velit aliquam numquam hic ut in explicabo rerum eius eos cumque exercitationem debitis pariatur quas maxime, similique temporibus illum necessitatibus quam deleniti rem architecto, dicta ipsum commodi. Ratione eius similique laborum.',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ab earum accusamus reiciendis rem, adipisci perferendis sed quo labore nulla? Quos officia, eum ipsum sed unde corrupti voluptatum doloribus error beatae voluptates, modi neque incidunt inventore asperiores rem aliquam odit facilis tempore, odio expedita. Tempora quaerat dolorem nesciunt a commodi beatae cumque aut repellendus tenetur recusandae! Delectus omnis, fuga exercitationem, mollitia sequi voluptates impedit molestiae nobis reiciendis deserunt consequuntur. Velit aliquam numquam hic ut in explicabo rerum eius eos cumque exercitationem debitis pariatur quas maxime, similique temporibus illum necessitatibus quam deleniti rem architecto, dicta ipsum commodi. Ratione eius similique laborum.',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
