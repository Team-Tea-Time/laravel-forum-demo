<?php

namespace App\Policies;

use TeamTeaTime\Forum\Policies\ForumPolicy as Base;

class ForumPolicy extends Base
{
    /**
     * Permission: Create categories.
     *
     * @param  object  $user
     * @return bool
     */
    public function createCategories($user): bool
    {
        return $user->name == 'DemoAdmin';
    }

    /**
     * Permission: Move categories.
     *
     * @param  object  $user
     * @return bool
     */
    public function moveCategories($user): bool
    {
        return $user->name == 'DemoAdmin';
    }

    /**
     * Permission: Rename categories.
     *
     * @param  object  $user
     * @return bool
     */
    public function renameCategories($user): bool
    {
        return $user->name == 'DemoAdmin';
    }

    /**
     * Permission: View trashed threads.
     *
     * @param  object  $user
     * @return bool
     */
    public function viewTrashedThreads($user): bool
    {
        return in_array($user->name, ['DemoModerator', 'DemoAdmin']);
    }
}
