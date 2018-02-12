<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObrasController extends Controller
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
        return view('obras.create');
    }
}
