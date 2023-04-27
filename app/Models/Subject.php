<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Summary of Subject
 */
class Subject extends Model
{
    use HasFactory;
    protected $guarded=[];

    /**
     * Summary of courses
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courses() {

         return $this->hasMany(Course::class);

    }
}
