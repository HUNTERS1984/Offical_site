<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Partnership;


class PartnershipController extends Controller
{
    protected $entity;
	public function __construct(Partnership $entity){
		$this->entity = $entity;
	}

    public function select_all(){
    	$data = $this->entity->select('id','title','content','img_url','created_at')->orderBy('order','DESC')->paginate(6);
    	return view('pages.partnership02',compact('data'));
    }
}
