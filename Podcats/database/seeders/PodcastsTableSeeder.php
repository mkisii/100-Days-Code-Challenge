<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PodcastsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('podcasts')->insert([
            'title' => 'How I become Programmer',
            'file_name' => 'Dance.mp3',
            'user_id' => 1
        ]);
    }
}