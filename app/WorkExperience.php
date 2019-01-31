<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'workExperienceId';
    protected $table = 'workexperience';
}
