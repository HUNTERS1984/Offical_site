<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Startguide extends Model
{
    public $table = "start_guides";

    protected $fillable =['title','content','img_url','video_url','status','order'];
}
