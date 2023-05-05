<?php

namespace Database\Seeders;

use App\Models\UserCourse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  
        UserCourse::create([
            'user_id'=> 2,
            'course_id'=>6 ,
            'progress'=> 0,
            'lectures_ids'=>0 ,
        ]);
        UserCourse::create([
            'user_id'=> 2,
            'course_id'=>11 ,
            'progress'=> 0,
            'lectures_ids'=>0 ,
        ]);
    }
}
