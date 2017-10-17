<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class AdminController extends Controller
{
    public function index(){

		return view("admin.index");

	}

	public function form(){

		return view("admin.form");

	}





	public function store(){
		
		Game::create([
			'name' => request('name'),

		]);


				return view("welcome");

		// $this->validate(request(), [

		// 		'title' => 'required|min:5',
		// 		'body' => 'required',
				

		// 	]);

		// Post::create([// nur daten uebermitteln die absolut sicher
		// 'title' => request('title'),

		// 'body' => request('body'),
		// ]);
	// 	Post::create([
	// 		'title' => request('title'),

	// 		'body'	=> request('body'),
			
	// 		'user_id' => auth()->id()// alt ->user()->id


	// ]);

	// 	return redirect()->home();

		// Create New post using request Data
		//Save it to the Database
		//And then redirect to Homepage
		
	}




}
