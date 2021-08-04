<?php

namespace App\Support;

class Forum extends \TeamTeaTime\Forum\Frontend\Support\Forum
{
    /**
     * {@inheritdoc}
     */
    public static function slugify($string)
    {
        $string = parent::slugify($string);
        return empty($string) ? '-' : $string;
    }
}
