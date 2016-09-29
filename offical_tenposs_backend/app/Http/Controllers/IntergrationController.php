<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Intergration;

class IntergrationController extends Controller
{
    protected $entity;
	public function __construct(Intergration $entity){
		$this->entity = $entity;
	}

    public function select_all(){
    	$data = $this->entity->select('id','title','created_at')->orderBy('order','DESC')->paginate(4);
    	return view('pages.news',compact('data'));
    }
}
