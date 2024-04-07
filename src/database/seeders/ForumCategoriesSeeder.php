<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ForumCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forum_categories')->insert([
            [
                'title' => "Top Level Category 1",
                'description' => "Contains categories",
                'accepts_threads' => 0,
                '_lft' => 1,
                '_rgt' => 6,
                'parent_id' => null,
                'color_light_mode' => '#ffb400',
                'color_dark_mode' => '#ffb400',
            ],
            [
                'title' => "Top Level Category 2",
                'description' => "Contains threads",
                'accepts_threads' => 1,
                '_lft' => 7,
                '_rgt' => 8,
                'parent_id' => null,
                'color_light_mode' => '#f6511d',
                'color_dark_mode' => '#f6511d'
            ],
            [
                'title' => "Subcategory A",
                'description' => "Contains threads",
                'accepts_threads' => 1,
                '_lft' => 2,
                '_rgt' => 3,
                'parent_id' => 1,
                'color_light_mode' => '#ffb400',
                'color_dark_mode' => '#ffb400'
            ],
            [
                'title' => "Subcategory B",
                'description' => "Also contains threads",
                'accepts_threads' => 1,
                '_lft' => 4,
                '_rgt' => 5,
                'parent_id' => 1,
                'color_light_mode' => '#ffb400',
                'color_dark_mode' => '#ffb400'
            ],
            [
                'title' => "Top Level Category 3",
                'description' => "Contains threads",
                'accepts_threads' => 1,
                '_lft' => 9,
                '_rgt' => 10,
                'parent_id' => null,
                'color_light_mode' => '#00a6ed',
                'color_dark_mode' => '#00a6ed'
            ],
        ]);
    }
}
