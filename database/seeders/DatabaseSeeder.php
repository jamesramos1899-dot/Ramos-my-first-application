<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Make sure tags exist first
        $tags = \App\Models\Tag::factory(10)->create();

        \App\Models\Job::factory(20)->create()->each(function($job) use ($tags) {
$job->tags()->attach($tags->random(2));
        });
    }

    
}