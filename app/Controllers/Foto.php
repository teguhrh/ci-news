<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Foto extends BaseController
{
	public function index()
	{
		return view('vw_register');
	}

	public function create()
	{
		return view('form_upload');
	}
}