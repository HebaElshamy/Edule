<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'title'=>'Create Amazing Color Schemes for Your UX Design Projects',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'image'=>'courses/SXKYizHLxI8sKdt9jn9mBbbFBS09UCvWgKpSRH03.jpg',
            'price'=>440,
            'subject_id'=>9,
            'discount_type'=>'fixed',
            'discoun_value'=>0,
            'max_discount'=>0,
        ]);
        Course::create([
            'title'=>'Data Science and Machine Learning with Python - Hands On!',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'image'=>'courses/qQC378AQklaVDCBCI0mdj7ttkU8YNW89aebFniNT.jpg',
            'price'=>420,
            'subject_id'=>8,
            'discount_type'=>'fixed',
            'discoun_value'=>0,
            'max_discount'=>0,
        ]);
        Course::create([
            'title'=>'Culture & Leadership: Strategies for a Successful Business',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'image'=>'courses/E68iAyW7AAathSq8WrRdBQK983rPJkkZzgHxTZum.jpg',
            'price'=>340,
            'subject_id'=>16,
            'discount_type'=>'fixed',
            'discoun_value'=>0,
            'max_discount'=>0,
        ]);
        Course::create([
            'title'=>'Build Brand Into Marketing: Tackling the New Marketing Landscape',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'image'=>'courses/AbH6FDHMyKNmjkx3WbVVnfMqraSEnzRGL3sz6ZNh.jpg',
            'price'=>136,
            'subject_id'=>11,
            'discount_type'=>'fixed',
            'discoun_value'=>0,
            'max_discount'=>0,
        ]);
        Course::create([
            'title'=>'Graphic Design: Illustrating Badges and Icons with Geometric Shapes',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'image'=>'courses/eQELPpgXgc9hZcTZayIPkTGUcOftAwzF2RpzSGYb.jpg',
            'price'=>237,
            'subject_id'=>15,
            'discount_type'=>'fixed',
            'discoun_value'=>0,
            'max_discount'=>0,
        ]);
        Course::create([
            'title'=>'Learn Ethical Hacking From Scratch',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'image'=>'courses/TJ4iHxnz9rvItV0ZLHYS70JkY0WbmXwuHFbBlTmr.jpg',
            'price'=>1299,
            'subject_id'=>8,
            'discount_type'=>'fixed',
            'discoun_value'=>0,
            'max_discount'=>0,
        ]);
        Course::create([
            'title'=>'Learn Social Engineering From Scratch',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'image'=>'courses/X6qgFUC5ktfTkYZV68XIzmvTqGQJwg8UiKmdpF29.jpg',
            'price'=>1399,
            'subject_id'=>8,
            'discount_type'=>'fixed',
            'discoun_value'=>0,
            'max_discount'=>0,
        ]);
        Course::create([
            'title'=>'TOTAL: CompTIA CySA+ Cybersecurity Analyst (CS0-002)',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'image'=>'courses/gIm348eVW0eXPth6xNvbgITfl0iA3cFByLnZjIwz.jpg',
            'price'=>1199,
            'subject_id'=>13,
            'discount_type'=>'fixed',
            'discoun_value'=>0,
            'max_discount'=>0,
        ]);
        Course::create([
            'title'=>'The Corporate Finance Course 2023',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'image'=>'courses/WUetP0r4MpYNlSBYkwho5GEkHjzWgdT6ojZebYfB.jpg',
            'price'=>1399,
            'subject_id'=>16,
            'discount_type'=>'fixed',
            'discoun_value'=>0,
            'max_discount'=>0,
        ]);
        Course::create([
            'title'=>'The Complete Financial Analyst Course 2023',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'image'=>'courses/U0JSLaWAYl8nK8ZPp3EgkNK4RE7n9d2ZPgSPMV43.jpg',
            'price'=>1299,
            'subject_id'=>16,
            'discount_type'=>'fixed',
            'discoun_value'=>0,
            'max_discount'=>0,
        ]);
        Course::create([
            'title'=>'Web Design for Beginners: Real World Coding in HTML & CSS',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'image'=>'courses/p3W7jUcfwvCZJEISjnPeVF9stOhiMeYcj04cHgx1.jpg',
            'price'=>500,
            'subject_id'=>9,
            'discount_type'=>'fixed',
            'discoun_value'=>0,
            'max_discount'=>0,
        ]);
    }
}
