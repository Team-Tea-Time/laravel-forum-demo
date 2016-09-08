<?php

namespace App\Policies;

use Illuminate\Support\Facades\Gate;
use Riari\Forum\Models\Post;
use Riari\Forum\Policies\PostPolicy as Base;

class PostPolicy extends Base
{
    /**
     * Permission: Edit post.
     *
     * @param  object  $user
     * @param  Post  $post
     * @return bool
     */
    public function edit($user, Post $post)
    {
        return $user->id === $post->author_id || in_array($user->name, ['DemoModerator', 'DemoAdmin']);
    }
}
