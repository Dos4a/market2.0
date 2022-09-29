<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::firstOrCreate([
            'user_id' => '1',
            'product_id' => '1',
            'comment' => 'Some TEXT',
            'rating' => '4'
        ]);
        Comment::firstOrCreate([
            'user_id' => '2',
            'product_id' => '1',
            'comment' => 'Some TEXT',
            'rating' => '3'
        ]);
        Comment::firstOrCreate([
            'user_id' => '3',
            'product_id' => '2',
            'comment' => 'Some TEXT',
            'rating' => '2'
        ]);
        Comment::firstOrCreate([
            'user_id' => '4',
            'product_id' => '2',
            'comment' => 'Some TEXT',
            'rating' => '1'
        ]);
        Comment::firstOrCreate([
            'user_id' => '5',
            'product_id' => '3',
            'comment' => 'Some TEXT',
            'rating' => '5'
        ]);
        Comment::firstOrCreate([
            'user_id' => '6',
            'product_id' => '3',
            'comment' => 'Some TEXT',
            'rating' => '5'
        ]);
        Comment::firstOrCreate([
            'user_id' => '7',
            'product_id' => '4',
            'comment' => 'Some TEXT',
            'rating' => '3'
        ]);
        Comment::firstOrCreate([
            'user_id' => '8',
            'product_id' => '4',
            'comment' => 'Some TEXT',
            'rating' => '2'
        ]);
        Comment::firstOrCreate([
            'user_id' => '9',
            'product_id' => '5',
            'comment' => 'Some TEXT',
            'rating' => '2'
        ]);
        Comment::firstOrCreate([
            'user_id' => '10',
            'product_id' => '5',
            'comment' => 'Some TEXT',
            'rating' => '1'
        ]);
        Comment::firstOrCreate([
            'user_id' => '11',
            'product_id' => '6',
            'comment' => 'Some TEXT',
            'rating' => '3'
        ]);
        Comment::firstOrCreate([
            'user_id' => '12',
            'product_id' => '6',
            'comment' => 'Some TEXT',
            'rating' => '2'
        ]);
        Comment::firstOrCreate([
            'user_id' => '13',
            'product_id' => '7',
            'comment' => 'Some TEXT',
            'rating' => '2'
        ]);
        Comment::firstOrCreate([
            'user_id' => '14',
            'product_id' => '7',
            'comment' => 'Some TEXT',
            'rating' => '4'
        ]);
        Comment::firstOrCreate([
            'user_id' => '15',
            'product_id' => '8',
            'comment' => 'Some TEXT',
            'rating' => '5'
        ]);
        Comment::firstOrCreate([
            'user_id' => '16',
            'product_id' => '8',
            'comment' => 'Some TEXT',
            'rating' => '3'
        ]);
    }
}
