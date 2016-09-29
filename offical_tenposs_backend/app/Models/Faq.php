<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    public $table = "faqs";

    protected $fillable =['question','slug','answer','status','order'];
}
