<?php

namespace App\Http\Controllers\Intranet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	private $section = array();

	public function __construct()
	{
		//Do your magic here
		$this->section = [
			'person' => 'Datos Personales',
			'library_books' => 'Estudios',
			'bubble_chart' => 'Experiencia',
			'archive' => 'Mis Trabajos',
		];

	}

	public function index(){

		$sections = $this->section;

		return view('intranet.index', ['sections' => $sections]);

	}
   	
}
