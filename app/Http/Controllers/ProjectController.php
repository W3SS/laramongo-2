<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
    	$collection = \Mongo::get()->mo->projects;
		$insertOneResult = $collection->insertOne([
		    'name' => $request->name,
		    'details' => $request->details,
		 ]);
    	 
    	 return back();
    }
}
