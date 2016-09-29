<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\News;

class NewsController extends Controller
{
    protected $entity;
	public function __construct(News $entity){
		$this->entity = $entity;
	}

    public function select_all(){
    	$data = $this->entity->select('id','title','content','img_url','created_at')->orderBy('order','DESC')->paginate(4);
    	return view('pages.news',compact('data'));
    }
}
