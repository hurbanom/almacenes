<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('auth.index');
    }

    public function create()
    {
        return view('auth.register');
    }

    public function save()
    {
        $user = User::find(1);
        // $user->obras()->attach(1, ['cargo_id' => 1, 'cargo' => 'Nombre Cargo']);
        $user->obras()->detach(1);
    }
}
