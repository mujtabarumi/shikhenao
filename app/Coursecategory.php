<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coursecategory extends Model
{
    //
    use SoftDeletes;
    protected $table = 'coursecategory';
//    public $timestamps = false;
    public $primaryKey = 'categoryId';
    protected $dates = ['deleted_at'];
}
