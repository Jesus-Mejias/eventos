<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events;
use App\Users;

class PageController extends Controller
{
    //
    public function index()
    {
    	
    	$events = Events::orderBy('id', 'DESC');
    	//dd($events);

    	return view('Users.index', compact('events'));
    }

    public function register(){
    	return view('Users.register');
    }

    public function myEvents(){
    	return view('Users.myEvents');
    }

    
}