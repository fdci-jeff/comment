<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comments;
use App\Models\User;
use App\Models\Post;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $parentComment = new Comments();
        $parentComment->user()->associate(User::first());
        $parentComment->content = 'test';
        $parentComment->commentable()->associate(Post::first());
        $parentComment->save();

        $comment = new Comments();
        $comment->user()->associate(User::first());
        $comment->content = 'test test test';
        $comment->parent()->associate($parentComment);
        $comment->commentable()->associate(Post::first());
        $comment->save();
    }
}
