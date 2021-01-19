<?php

namespace App\Http\Controllers;

class ClientController extends Controller{

	function index(){
		return view('client/index');
	}

	function detail(){
		return view('client/detail');
	}

	function home(){
		return view('client/home');
	}
}