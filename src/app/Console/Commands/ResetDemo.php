<?php

namespace App\Console\Commands;

use App\Models\User;
use Database\Seeders\ForumCategoriesSeeder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ResetDemo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Truncates the category/thread/post/reader tables and re-seeds them.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info("Truncating Posts table...");
        DB::table('forum_posts')->truncate();

        $this->info("Truncating Readers table...");
        DB::table('forum_threads_read')->truncate();

        $this->info("Truncating Threads table...");
        DB::table('forum_threads')->truncate();

        $this->info("Truncating Categories table...");
        DB::table('forum_categories')->truncate();

        $this->info("Seeding forum categories table...");
        $seeder = new ForumCategoriesSeeder();
        $seeder->run();

        $this->info("Seeding demo users...");
        DB::table('users')->truncate();
        User::factory()->create([
            'name' => 'DemoUser',
            'email' => 'user@laravel-forum-demo',
            'password' => bcrypt('secret'),
        ]);
        User::factory()->create([
            'name' => 'DemoModerator',
            'email' => 'moderator@laravel-forum-demo',
            'password' => bcrypt('secret'),
        ]);
        User::factory()->create([
            'name' => 'DemoAdmin',
            'email' => 'admin@laravel-forum-demo',
            'password' => bcrypt('secret'),
        ]);

        $this->info("Done!");
    }
}
