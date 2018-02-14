<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HelloController extends Controller {

	public function index() {
		$title = 'laravel Dev';
		$subtitle = 'Welcome to laravel 5';
		return view('hello.index', ['title' => $title, 'subtitle' => $subtitle]);
	}

}
