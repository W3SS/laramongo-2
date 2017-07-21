<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
	public function __construct()
    {
        $this->db = \Mongo::get()->mo;
    }

    public function store(Request $request)
    {
    	$collection = $this->db->projects
		$insertOneResult = $collection->insertOne([
		    'name' => $request->name,
		    'details' => $request->details,
		 ]);
    	 
    	 return back();
    }
}
