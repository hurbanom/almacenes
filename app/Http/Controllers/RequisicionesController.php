<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequisicionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

    }

    public function create()
    {
        return view('requisiciones.create');
    }
}
