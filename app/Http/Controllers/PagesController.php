<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about()
	{	
	
		return view('paginas.about',compact('people'));

	}

	public function contact()
	{
		return view('paginas.contacto');

	}

}
