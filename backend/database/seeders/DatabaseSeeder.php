<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tag;
use App\Models\Draw;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::factory()->count(6)->create();
        $users = User::factory()->count(25)->create();
        $tags = Tag::factory()->count(15)->create();
        $draws = Draw::factory()->count(30)
            ->state(
                fn() => ['category_id' => $categories->random()]
            )
            ->create()
            ->each(
                fn($draw) => $draw->tags()->attach($tags->random(rand(1, 8)))
            );
        
        Comment::factory()->count(80)
            ->state(
            fn() => [
                'draw_id' => $draws->random(),
                'user_id' => $users->random()
            ])
            ->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
