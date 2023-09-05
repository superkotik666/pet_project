<?php

namespace App\Observers;

use App\Models\Post;
use App\Models\Notification;
use App\Models\User;

class PostObserver
{
    public function created(Post $post)
    {
        $usersToNotify = User::all();

        foreach ($usersToNotify as $user) {
            Notification::create([
                'user_id' => $user->id,
                'message' => "New news article: '{$post->title}' has been posted.",
            ]);
        }
    }
}
