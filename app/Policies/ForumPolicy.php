<?php

namespace App\Policies;

use Riari\Forum\Policies\ForumPolicy as Base;

class ForumPolicy extends Base
{
    /**
     * Permission: Create categories.
     *
     * @param  object  $user
     * @return bool
     */
    public function createCategories($user)
    {
        return $user->name == 'DemoAdmin';
    }

    /**
     * Permission: Move categories.
     *
     * @param  object  $user
     * @return bool
     */
    public function moveCategories($user)
    {
        return $user->name == 'DemoAdmin';
    }

    /**
     * Permission: Rename categories.
     *
     * @param  object  $user
     * @return bool
     */
    public function renameCategories($user)
    {
        return $user->name == 'DemoAdmin';
    }

    /**
     * Permission: View trashed threads.
     *
     * @param  object  $user
     * @return bool
     */
    public function viewTrashedThreads($user)
    {
        return in_array($user->name, ['DemoModerator', 'DemoAdmin']);
    }
}
