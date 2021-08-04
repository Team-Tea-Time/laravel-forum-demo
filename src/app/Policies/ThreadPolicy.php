<?php

namespace App\Policies;

use Illuminate\Support\Facades\Gate;
use TeamTeaTime\Forum\Models\Thread;
use TeamTeaTime\Forum\Policies\ThreadPolicy as Base;

class ThreadPolicy extends Base
{
    /**
     * Permission: Delete posts in thread.
     *
     * @param  object  $user
     * @param  Thread  $thread
     * @return bool
     */
    public function deletePosts($user, Thread $thread): bool
    {
        return in_array($user->name, ['DemoModerator', 'DemoAdmin']);
    }

    /**
     * Permission: Rename thread.
     *
     * @param  object  $user
     * @param  Thread  $thread
     * @return bool
     */
    public function rename($user, Thread $thread): bool
    {
        return $user->id === $thread->author_id || in_array($user->name, ['DemoModerator', 'DemoAdmin']);
    }

    /**
     * Permission: Reply to thread.
     *
     * @param  object  $user
     * @param  Thread  $thread
     * @return bool
     */
    public function reply($user, Thread $thread): bool
    {
        return !$thread->locked || in_array($user->name, ['DemoModerator', 'DemoAdmin']);
    }
}
