<?php

namespace App\Policies;

use Illuminate\Support\Facades\Gate;
use TeamTeaTime\Forum\Models\Post;
use TeamTeaTime\Forum\Policies\PostPolicy as Base;

class PostPolicy extends Base
{
    /**
     * Permission: Edit post.
     *
     * @param  object  $user
     * @param  Post  $post
     * @return bool
     */
    public function edit($user, Post $post): bool
    {
        return $user->id === $post->author_id || in_array($user->name, ['DemoModerator', 'DemoAdmin']);
    }
}
