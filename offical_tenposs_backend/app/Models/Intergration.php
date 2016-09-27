<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intergration extends Model
{
    public $table= 'intergrations';

    protected $fillable =['title','content','img_url','status','order'];
}
