<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'teacherId';
    protected $table = 'teacher';
}
