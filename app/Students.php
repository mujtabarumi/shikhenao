<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'studentId';
    protected $table = 'student';
}
