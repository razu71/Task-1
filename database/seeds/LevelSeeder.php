<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert(['level'=>'Urgent','created_at'=>now(),'updated_at'=>now()]);
        DB::table('levels')->insert(['level'=>'New','created_at'=>now(),'updated_at'=>now()]);
        DB::table('levels')->insert(['level'=>'Done','created_at'=>now(),'updated_at'=>now()]);
        DB::table('levels')->insert(['level'=>'In Progress','created_at'=>now(),'updated_at'=>now()]);
        DB::table('levels')->insert(['level'=>'Idea','created_at'=>now(),'updated_at'=>now()]);
    }
}
