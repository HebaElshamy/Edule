<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function lectures()
    {
        return $this->hasMany(Lecture::class);
    }
    public function userCourses() {

        return $this->hasMany(UserCourse::class);

   }
}
