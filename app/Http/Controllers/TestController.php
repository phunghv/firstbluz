<?php namespace App\Http\Controllers;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;
 
class TestController extends Controller {
 
	public function about(){
		return view('home.ho');
	}
	public function you(){
		return view('test.aboutyou');
	}
 
}