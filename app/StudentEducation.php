<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentEducation extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'studenteducationId';
    protected $table = 'studenteducation';
}
