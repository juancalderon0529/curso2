<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BodegaController extends Controller
{
    public function index()
    {
        return view('admin.bodega');
    }
}
