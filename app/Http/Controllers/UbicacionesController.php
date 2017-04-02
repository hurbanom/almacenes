<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Inventory\Models\Location;
use DataGrid;

class UbicacionesController extends Controller
{
    protected $_location;

    public function __construct(Location $location)
    {
        $this->_location = $location;
        $this->middleware('auth');
    }

    public function index()
    {
        $grid = DataGrid::source(new Location);
        $grid->add('name','Ubicación', true);
        $grid->paginate(10);
        return view('ubicaciones.index', compact('grid'));
    }

    public function create()
    {
        return view('ubicaciones.add');
    }

    public function save(Request $request)
    {
        $location = new $this->_location;
        $location->name = $request->ubicacion;
        $location->save();

        return redirect('ubicaciones/create')->with('status', 'Ubicación Guardada');
    }

}
