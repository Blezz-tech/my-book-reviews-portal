<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $books = Book::all();

        foreach ($books as $book) {
            foreach ($users as $user) {
                if (rand(0, 1) === 1) {
                    Review::factory()->create([
                        'user_id' => $user->id,
                        'book_id' => $book->id,
                    ]);
                }
            }
        }
    }
}
