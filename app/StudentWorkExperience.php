<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentWorkExperience extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'studentWorkExperienceId';
    protected $table = 'studentworkexperience';
}
