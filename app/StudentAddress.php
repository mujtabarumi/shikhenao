<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAddress extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'studentAddressId';
    protected $table = 'studentaddress';
}
