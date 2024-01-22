<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Genre;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Genre::truncate();
        User::truncate();
        Book::truncate();

        $user1 = User::factory()->create();
        $user2 = User::factory()->create();

        $gen1 = Genre::factory()->create();
        $gen2 = Genre::factory()->create();
        $gen3 = Genre::factory()->create();

        Book::factory(2)->create([
            'user_id' => $user1->id,
            'genre_id' => $gen1->id
        ]);

        Book::factory(3)->create([
            'user_id' => $user2->id,
            'genre_id' => $gen2->id
        ]);

        Book::factory(2)->create([
            'user_id' => $user1->id,
            'genre_id' => $gen3->id
        ]);
    }
}
