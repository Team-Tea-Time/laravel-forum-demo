<?php

use Illuminate\Database\Seeder;

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
                'color' => '#3F51B5'
            ],
            [
                'title' => "Top Level Category 2",
                'description' => "Contains threads",
                'accepts_threads' => 1,
                '_lft' => 7,
                '_rgt' => 8,
                'parent_id' => null,
                'color' => '#F44336'
            ],
            [
                'title' => "Subcategory A",
                'description' => "Contains threads",
                'accepts_threads' => 1,
                '_lft' => 2,
                '_rgt' => 3,
                'parent_id' => 1,
                'color' => '#00BCD4'
            ],
            [
                'title' => "Subcategory B",
                'description' => "Also contains threads",
                'accepts_threads' => 1,
                '_lft' => 4,
                '_rgt' => 5,
                'parent_id' => 1,
                'color' => '#009688'
            ]
        ]);
    }
}
