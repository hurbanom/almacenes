<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Inventory\Models\Location;

class UnidadesController extends Controller
{
    protected $_location;

    public function __construct(Location $location)
    {
        $this->_location = $location;
        $this->middleware('auth');
    }

    public function create()
    {
        return view('unidades.add');
    }

    public function save()
    {

    }

}
