<?php

namespace App\Policies;

use Riari\Forum\Models\Category;
use Riari\Forum\Policies\CategoryPolicy as Base;

class CategoryPolicy extends Base
{
    /**
     * Permission: Delete threads in category.
     *
     * @param  object  $user
     * @param  Category  $category
     * @return bool
     */
    public function deleteThreads($user, Category $category)
    {
        return in_array($user->name, ['Moderator', 'Admin']);
    }

    /**
     * Permission: Enable threads in category.
     *
     * @param  object  $user
     * @param  Category  $category
     * @return bool
     */
    public function enableThreads($user, Category $category)
    {
        return in_array($user->name, ['Moderator', 'Admin']);
    }

    /**
     * Permission: Move threads from category.
     *
     * @param  object  $user
     * @param  Category  $category
     * @return bool
     */
    public function moveThreadsFrom($user, Category $category)
    {
        return in_array($user->name, ['Moderator', 'Admin']);
    }

    /**
     * Permission: Move threads to category.
     *
     * @param  object  $user
     * @param  Category  $category
     * @return bool
     */
    public function moveThreadsTo($user, Category $category)
    {
        return in_array($user->name, ['Moderator', 'Admin']);
    }

    /**
     * Permission: Lock threads in category.
     *
     * @param  object  $user
     * @param  Category  $category
     * @return bool
     */
    public function lockThreads($user, Category $category)
    {
        return in_array($user->name, ['Moderator', 'Admin']);
    }

    /**
     * Permission: Pin threads in category.
     *
     * @param  object  $user
     * @param  Category  $category
     * @return bool
     */
    public function pinThreads($user, Category $category)
    {
        return in_array($user->name, ['Moderator', 'Admin']);
    }

    /**
     * Permission: View category. Only takes effect for 'private' categories.
     *
     * @param  object  $user
     * @param  Category  $category
     * @return bool
     */
    public function view($user, Category $category)
    {
        return $user->name == 'Admin';
    }

    /**
     * Permission: Delete category.
     *
     * @param  object  $user
     * @param  Category  $category
     * @return bool
     */
    public function delete($user, Category $category)
    {
        return $user->name == 'Admin';
    }
}
