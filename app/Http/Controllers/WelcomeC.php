<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeC extends Controller
{
	function index(){
		return view('welcome');
	}
}
