<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Ahmad Raihan",
        "email" => "ahmadraihan@gmail.com",
        "image" => "tes.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ahmad Raihan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, earum? Fugit maiores repudiandae et, sunt fuga itaque blanditiis asperiores dicta commodi veritatis doloremque aut esse nesciunt. Eveniet doloribus obcaecati eum nam sed quod maiores sint, eligendi corporis magnam laborum at soluta quia fugit tempore culpa corrupti officiis velit possimus pariatur ad ratione praesentium! Dolor laudantium repellat amet facilis animi accusamus aspernatur. Obcaecati vero magnam, exercitationem deleniti odio odit fugit, laborum numquam laudantium repellat consequatur adipisci assumenda voluptates repellendus et quisquam?"
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Jason",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque cumque aut quaerat magnam laudantium enim rem placeat excepturi ut, accusamus possimus vitae, earum quia dolores dolorem in obcaecati tenetur quae. Distinctio dolorum quo ipsa quia tenetur quam tempore ab! Vitae praesentium laudantium id rerum ipsam, deserunt, ea voluptas autem enim dignissimos voluptates possimus repellat quae earum corrupti, et eos impedit quasi? Culpa, qui vitae perferendis nobis est maiores id dolore debitis facere tempora ut quibusdam nihil sapiente quaerat harum modi odit libero quasi rerum. Repellendus, non! Deserunt, ex officia! Ullam corporis quasi architecto numquam natus eos error cumque cum excepturi."
        ]
        ];

    return view ('posts', [
        "tittle" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ahmad Raihan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, earum? Fugit maiores repudiandae et, sunt fuga itaque blanditiis asperiores dicta commodi veritatis doloremque aut esse nesciunt. Eveniet doloribus obcaecati eum nam sed quod maiores sint, eligendi corporis magnam laborum at soluta quia fugit tempore culpa corrupti officiis velit possimus pariatur ad ratione praesentium! Dolor laudantium repellat amet facilis animi accusamus aspernatur. Obcaecati vero magnam, exercitationem deleniti odio odit fugit, laborum numquam laudantium repellat consequatur adipisci assumenda voluptates repellendus et quisquam?"
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Jason",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque cumque aut quaerat magnam laudantium enim rem placeat excepturi ut, accusamus possimus vitae, earum quia dolores dolorem in obcaecati tenetur quae. Distinctio dolorum quo ipsa quia tenetur quam tempore ab! Vitae praesentium laudantium id rerum ipsam, deserunt, ea voluptas autem enim dignissimos voluptates possimus repellat quae earum corrupti, et eos impedit quasi? Culpa, qui vitae perferendis nobis est maiores id dolore debitis facere tempora ut quibusdam nihil sapiente quaerat harum modi odit libero quasi rerum. Repellendus, non! Deserunt, ex officia! Ullam corporis quasi architecto numquam natus eos error cumque cum excepturi."
        ],
        ];

        $new_post = [];
        foreach($blog_posts as $post) {
            if($post["slug"] === $slug) {
                $new_post = $post;
            }
        }

    return view('post', [
        "tittle" => "Single Post",
        "post" => $new_post
    ]);
});
