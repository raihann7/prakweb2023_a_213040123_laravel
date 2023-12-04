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
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Ahmad Raihan',
            'username' => 'ahmadraihan',
            'email' => 'ahmadraihan@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Daffa',
        //     'email' => 'daffa@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

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
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem rem, qui eveniet, architecto reprehenderit iste neque exercitationem molestiae maiores soluta, a molestias commodi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem rem, qui eveniet, architecto reprehenderit iste neque exercitationem molestiae maiores soluta, a molestias commodi. Ratione officiis itaque, placeat repellat error dignissimos sit harum! Consectetur porro voluptate maxime corrupti sapiente. Minima fugiat consectetur quae a beatae sed obcaecati veritatis fugit! Libero, optio facere adipisci, asperiores ratione voluptatibus culpa assumenda nemo harum facilis magni sequi odit ab explicabo placeat atque aliquid aperiam mollitia repellendus autem. Recusandae excepturi provident doloribus expedita nobis? Praesentium repellendus labore saepe nam. Nemo ipsa nulla perspiciatis, porro magnam nisi laudantium totam qui. Beatae atque voluptate inventore asperiores id numquam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem rem, qui eveniet, architecto reprehenderit iste neque exercitationem molestiae maiores soluta, a molestias commodi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem rem, qui eveniet, architecto reprehenderit iste neque exercitationem molestiae maiores soluta, a molestias commodi. Ratione officiis itaque, placeat repellat error dignissimos sit harum! Consectetur porro voluptate maxime corrupti sapiente. Minima fugiat consectetur quae a beatae sed obcaecati veritatis fugit! Libero, optio facere adipisci, asperiores ratione voluptatibus culpa assumenda nemo harum facilis magni sequi odit ab explicabo placeat atque aliquid aperiam mollitia repellendus autem. Recusandae excepturi provident doloribus expedita nobis? Praesentium repellendus labore saepe nam. Nemo ipsa nulla perspiciatis, porro magnam nisi laudantium totam qui. Beatae atque voluptate inventore asperiores id numquam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem rem, qui eveniet, architecto reprehenderit iste neque exercitationem molestiae maiores soluta, a molestias commodi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem rem, qui eveniet, architecto reprehenderit iste neque exercitationem molestiae maiores soluta, a molestias commodi. Ratione officiis itaque, placeat repellat error dignissimos sit harum! Consectetur porro voluptate maxime corrupti sapiente. Minima fugiat consectetur quae a beatae sed obcaecati veritatis fugit! Libero, optio facere adipisci, asperiores ratione voluptatibus culpa assumenda nemo harum facilis magni sequi odit ab explicabo placeat atque aliquid aperiam mollitia repellendus autem. Recusandae excepturi provident doloribus expedita nobis? Praesentium repellendus labore saepe nam. Nemo ipsa nulla perspiciatis, porro magnam nisi laudantium totam qui. Beatae atque voluptate inventore asperiores id numquam.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem rem, qui eveniet, architecto reprehenderit iste neque exercitationem molestiae maiores soluta, a molestias commodi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem rem, qui eveniet, architecto reprehenderit iste neque exercitationem molestiae maiores soluta, a molestias commodi. Ratione officiis itaque, placeat repellat error dignissimos sit harum! Consectetur porro voluptate maxime corrupti sapiente. Minima fugiat consectetur quae a beatae sed obcaecati veritatis fugit! Libero, optio facere adipisci, asperiores ratione voluptatibus culpa assumenda nemo harum facilis magni sequi odit ab explicabo placeat atque aliquid aperiam mollitia repellendus autem. Recusandae excepturi provident doloribus expedita nobis? Praesentium repellendus labore saepe nam. Nemo ipsa nulla perspiciatis, porro magnam nisi laudantium totam qui. Beatae atque voluptate inventore asperiores id numquam.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
