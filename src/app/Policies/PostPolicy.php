<?php

namespace App\Policies;

use Illuminate\Support\Facades\Gate;
use TeamTeaTime\Forum\Models\Post;
use TeamTeaTime\Forum\Policies\PostPolicy as Base;

class PostPolicy extends Base
{
    public function edit($user, Post $post): bool
    {
        return $user->id === $post->author_id || in_array($user->name, ['DemoModerator', 'DemoAdmin']);
    }
}
