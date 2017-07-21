<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
	public function __construct()
    {
        $this->collection = \Mongo::get()->mo->projects;
    }

    public function index()
    {
    	$projects = $this->collection->find()->toArray();
    	return view('project.index', compact('projects'));
    }

    public function create()
    {
    	return view('project.create');
    }
    public function store(Request $request)
    {
		$insertOneResult = $this->collection->insertOne([
		    'name' => $request->name,
		    'details' => $request->details,
		 ]);

    	 return redirect()->route('project.index');
    }
}
