<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function listar()
    {
        return view('admin/lista');
    }



    public function crear()
    {
		return view('admin/crear');
    }


    public function modificar()
    {

		return view('admin/modificar');    	
    }
}
