<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
        	'name' => 'Finish Laravel Project',
        	'priorty' => 10,
        	'create_at' => Carbon::now(),
        	'updated_at' => Carbon::now()
        ]);
    }
}
