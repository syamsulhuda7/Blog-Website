<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Syamsul',
            'username' => 'syamsul',
            'email' => 'syamsul@gmail.com',
            'password' => bcrypt('syamsul')
        ]);

        // User::create([
        //     'name' => 'Huda',
        //     'email' => 'Huda@gmail.com',
        //     'password' => bcrypt('huda')
        // ]);
        
        User::factory(5)->create();

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
        //     'title' => 'Artikel Pertama',
        //     'slug' => 'artikel-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, ipsa! Obcaecati delectus aliquam natus, ex nemo facilis tempora a fugit accusamus voluptas velit quasi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, ipsa! Obcaecati delectus aliquam natus, ex nemo facilis tempora a fugit accusamus voluptas velit quasi nam tempore animi itaque necessitatibus id culpa mollitia dolorum, enim dicta eius unde blanditiis! Alias dolores laboriosam nostrum totam eum ad velit, ut ullam, sit saepe autem quia culpa? Esse harum reiciendis nobis sit animi ea, deserunt accusantium eos beatae corporis nesciunt, officia maxime magni adipisci quas? Repudiandae atque omnis, accusantium a voluptates delectus culpa repellat. Officiis ipsa consequuntur, enim voluptatibus dolorum nihil vitae quas culpa? Ipsa vitae debitis architecto nesciunt voluptatum sunt deserunt veniam itaque.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus dolores officia totam. Ipsa, exercitationem reprehenderit. Doloribus velit non veniam. Fugiat corporis consequuntur sunt eaque eum voluptatem eius reiciendis architecto sapiente officia exercitationem minus obcaecati illum maiores ab voluptatibus, provident perferendis doloribus pariatur esse harum impedit cumque atque cum! Vero, dolores.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Artikel Kedua',
        //     'slug' => 'artikel-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, ipsa! Obcaecati delectus aliquam natus, ex nemo facilis tempora a fugit accusamus voluptas velit quasi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, ipsa! Obcaecati delectus aliquam natus, ex nemo facilis tempora a fugit accusamus voluptas velit quasi nam tempore animi itaque necessitatibus id culpa mollitia dolorum, enim dicta eius unde blanditiis! Alias dolores laboriosam nostrum totam eum ad velit, ut ullam, sit saepe autem quia culpa? Esse harum reiciendis nobis sit animi ea, deserunt accusantium eos beatae corporis nesciunt, officia maxime magni adipisci quas? Repudiandae atque omnis, accusantium a voluptates delectus culpa repellat. Officiis ipsa consequuntur, enim voluptatibus dolorum nihil vitae quas culpa? Ipsa vitae debitis architecto nesciunt voluptatum sunt deserunt veniam itaque.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus dolores officia totam. Ipsa, exercitationem reprehenderit. Doloribus velit non veniam. Fugiat corporis consequuntur sunt eaque eum voluptatem eius reiciendis architecto sapiente officia exercitationem minus obcaecati illum maiores ab voluptatibus, provident perferendis doloribus pariatur esse harum impedit cumque atque cum! Vero, dolores.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Artikel Ketiga',
        //     'slug' => 'artikel-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, ipsa! Obcaecati delectus aliquam natus, ex nemo facilis tempora a fugit accusamus voluptas velit quasi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, ipsa! Obcaecati delectus aliquam natus, ex nemo facilis tempora a fugit accusamus voluptas velit quasi nam tempore animi itaque necessitatibus id culpa mollitia dolorum, enim dicta eius unde blanditiis! Alias dolores laboriosam nostrum totam eum ad velit, ut ullam, sit saepe autem quia culpa? Esse harum reiciendis nobis sit animi ea, deserunt accusantium eos beatae corporis nesciunt, officia maxime magni adipisci quas? Repudiandae atque omnis, accusantium a voluptates delectus culpa repellat. Officiis ipsa consequuntur, enim voluptatibus dolorum nihil vitae quas culpa? Ipsa vitae debitis architecto nesciunt voluptatum sunt deserunt veniam itaque.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus dolores officia totam. Ipsa, exercitationem reprehenderit. Doloribus velit non veniam. Fugiat corporis consequuntur sunt eaque eum voluptatem eius reiciendis architecto sapiente officia exercitationem minus obcaecati illum maiores ab voluptatibus, provident perferendis doloribus pariatur esse harum impedit cumque atque cum! Vero, dolores.</p>',
        //     'category_id' => 1,
        //     'user_id' => 3
        // ]);

        // Post::create([
        //     'title' => 'Artikel Keempat',
        //     'slug' => 'artikel-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, ipsa! Obcaecati delectus aliquam natus, ex nemo facilis tempora a fugit accusamus voluptas velit quasi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, ipsa! Obcaecati delectus aliquam natus, ex nemo facilis tempora a fugit accusamus voluptas velit quasi nam tempore animi itaque necessitatibus id culpa mollitia dolorum, enim dicta eius unde blanditiis! Alias dolores laboriosam nostrum totam eum ad velit, ut ullam, sit saepe autem quia culpa? Esse harum reiciendis nobis sit animi ea, deserunt accusantium eos beatae corporis nesciunt, officia maxime magni adipisci quas? Repudiandae atque omnis, accusantium a voluptates delectus culpa repellat. Officiis ipsa consequuntur, enim voluptatibus dolorum nihil vitae quas culpa? Ipsa vitae debitis architecto nesciunt voluptatum sunt deserunt veniam itaque.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus dolores officia totam. Ipsa, exercitationem reprehenderit. Doloribus velit non veniam. Fugiat corporis consequuntur sunt eaque eum voluptatem eius reiciendis architecto sapiente officia exercitationem minus obcaecati illum maiores ab voluptatibus, provident perferendis doloribus pariatur esse harum impedit cumque atque cum! Vero, dolores.</p>',
        //     'category_id' => 2,
        //     'user_id' => 4
        // ]);

    }
}
