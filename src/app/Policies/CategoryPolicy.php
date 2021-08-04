<?php

namespace App\Policies;

use TeamTeaTime\Forum\Models\Category;
use TeamTeaTime\Forum\Policies\CategoryPolicy as Base;

class CategoryPolicy extends Base
{
    /**
     * Permission: Delete threads in category.
     *
     * @param  object  $user
     * @param  Category  $category
     * @return bool
     */
    public function deleteThreads($user, Category $category): bool
    {
        return in_array($user->name, ['DemoModerator', 'DemoAdmin']);
    }

    /**
     * Permission: Enable threads in category.
     *
     * @param  object  $user
     * @param  Category  $category
     * @return bool
     */
    public function enableThreads($user, Category $category): bool
    {
        return in_array($user->name, ['DemoModerator', 'DemoAdmin']);
    }

    /**
     * Permission: Move threads from category.
     *
     * @param  object  $user
     * @param  Category  $category
     * @return bool
     */
    public function moveThreadsFrom($user, Category $category): bool
    {
        return in_array($user->name, ['DemoModerator', 'DemoAdmin']);
    }

    /**
     * Permission: Move threads to category.
     *
     * @param  object  $user
     * @param  Category  $category
     * @return bool
     */
    public function moveThreadsTo($user, Category $category): bool
    {
        return in_array($user->name, ['DemoModerator', 'DemoAdmin']);
    }

    /**
     * Permission: Lock threads in category.
     *
     * @param  object  $user
     * @param  Category  $category
     * @return bool
     */
    public function lockThreads($user, Category $category): bool
    {
        return in_array($user->name, ['DemoModerator', 'DemoAdmin']);
    }

    /**
     * Permission: Pin threads in category.
     *
     * @param  object  $user
     * @param  Category  $category
     * @return bool
     */
    public function pinThreads($user, Category $category): bool
    {
        return in_array($user->name, ['DemoModerator', 'DemoAdmin']);
    }

    /**
     * Permission: View category. Only takes effect for 'private' categories.
     *
     * @param  object  $user
     * @param  Category  $category
     * @return bool
     */
    public function view($user, Category $category): bool
    {
        return $user->name == 'DemoAdmin';
    }

    /**
     * Permission: Delete category.
     *
     * @param  object  $user
     * @param  Category  $category
     * @return bool
     */
    public function delete($user, Category $category): bool
    {
        return $user->name == 'DemoAdmin';
    }
}
