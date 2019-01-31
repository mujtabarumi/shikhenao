<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestCourse extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'requestCourseId';
    protected $table = 'request_course';
}
