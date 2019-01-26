<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'coursecategory';
}
