<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create([
            'name'=>'IT Development',
            'image'=>'subjects/CYl9C5udVbWEobW06vN64kvzlWpfBW5Vm4dayILo.jpg'
        ]);
        Subject::create([
            'name'=>'Web Design',
            'image'=>'subjects/Q1hs8wwljCDAR1AB94B0rLww8Lny5EzvuDsX4jrV.jpg'
        ]);
        Subject::create([
            'name'=>'Illustration & Drawing',
            'image'=>'subjects/iJSknAEuJyjNuYUMSXxyF9DrLZ6EV1rsRiRPRU4N.jpg'
        ]);
        Subject::create([
            'name'=>'Social Media',
            'image'=>'subjects/sHEsTNTAmmKBbU71vnXhgkr83oE5lIe2UQT5wGKv.jpg'
        ]);
        Subject::create([
            'name'=>'Photoshop',
            'image'=>'subjects/9Ot1qIfzbwPARS10wZv8FExnIkcCzwi4dT7wEZ12.jpg'
        ]);
        Subject::create([
            'name'=>'Cryptocurrencies',
            'image'=>'subjects/tvcII4OLjiI0hF6SefhgRdfthF73wV1flXt15r7V.jpg'
        ]);
        Subject::create([
            'name'=>'Art & Crafts',
            'image'=>'subjects/3PRlRb3FhHYqJw0svxJ6EcFPbqb2WKgOr1WgWecX.jpg'
        ]);
        Subject::create([
            'name'=>'Graphic Design',
            'image'=>'subjects/FT2M37vvq54RuNcgazQq7QprnRSgBxEGg3ZSn0yb.jpg'
        ]);
        Subject::create([
            'name'=>'Finance',
            'image'=>'subjects/bQNy4n9GqDMih52FEFPt54cTyyiIYFAIddcnOk7W.jpg'
        ]);
    }
}
