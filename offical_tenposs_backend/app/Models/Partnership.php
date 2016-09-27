<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partnership extends Model
{
    public $table = "partnerships";

    protected $fillable =['title','content','img_url','status','order'];
}
