<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(JobsTableSeeder::class);
    }
}
class JobsTableSeeder extends Seeder{
    public function run(){
        $jobs = [
            ['name' => 'King'],
            ['name' => 'User']
        ];
        foreach ($jobs as $job){
            \App\Job::insert($job);
        }

    }
}
