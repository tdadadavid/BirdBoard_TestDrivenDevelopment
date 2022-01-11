<?php

namespace Database\Seeders;

use App\Models\Reply;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Thread::factory(50)->create()->each(
            function ($thread) {
                Reply::factory(10)->create(['thread_id' => $thread->id]);
            }
        );

    }


}
