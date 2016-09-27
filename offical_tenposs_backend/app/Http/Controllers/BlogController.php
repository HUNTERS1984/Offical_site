<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Blog;

class BlogController extends Controller
{
	protected $entity;
	public function __construct(Blog $entity){
		$this->entity = $entity;
	}

    public function select_all(){
    	$data = $this->entity->select('id','title','content','img_url','created_at')->where('status',1)->orderBy('order','DESC')->paginate(4);
    	$random = $this->entity->select('id','title')->where('status',1)->orderByRaw("RAND()")->take(5)->get();
    	return view('pages.blog',compact('data','random'));
    }

    public function select_detail($id){
    	$data = $this->entity->select('id','title','content','img_url')->find($id);
    	return view('pages.blog_detail',compact('data'));
    }
}
