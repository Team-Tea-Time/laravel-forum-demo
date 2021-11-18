<?php

namespace App\Policies;

use TeamTeaTime\Forum\Models\Category;
use TeamTeaTime\Forum\Policies\CategoryPolicy as Base;

class CategoryPolicy extends Base
{
    public function deleteThreads($user, Category $category): bool
    {
        return true;
    }

    public function enableThreads($user, Category $category): bool
    {
        return in_array($user->name, ['DemoModerator', 'DemoAdmin']);
    }

    public function moveThreadsFrom($user, Category $category): bool
    {
        return in_array($user->name, ['DemoModerator', 'DemoAdmin']);
    }

    public function moveThreadsTo($user, Category $category): bool
    {
        return in_array($user->name, ['DemoModerator', 'DemoAdmin']);
    }

    public function lockThreads($user, Category $category): bool
    {
        return in_array($user->name, ['DemoModerator', 'DemoAdmin']);
    }

    public function pinThreads($user, Category $category): bool
    {
        return in_array($user->name, ['DemoModerator', 'DemoAdmin']);
    }

    public function view($user, Category $category): bool
    {
        return $user->name == 'DemoAdmin';
    }

    public function delete($user, Category $category): bool
    {
        return $user->name == 'DemoAdmin';
    }
}
