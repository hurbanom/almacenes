<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obra;

class ObrasController extends Controller
{
    private $estados;

    /**
     * Constructor de la clase
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Muestra la lista de obras registradas
     *
     * @return view Vista con el listado de obras
     */
    public function index(Request $request)
    {
        $obras = Obra::all()->toArray();

        if ($request->ajax()) {
            return response()->json($obras);
        } else {
            return view('obras.index');
        }
    }

    /**
     * Muestra el formulario para crear una nueva obra
     *
     * @return view Vista con el formulario para crear una nueva obra
     */
    public function create()
    {
        return view('obras.create');
    }

    /**
     * Guarda los datos capturados en el formulario de crear nueva obra
     *
     * @param  Request $request Contiene los datos capturados
     *
     * @return json             Resultado del guardado de los datos
     */
    public function save(Request $request)
    {
        $id_obra = $request->id_obra;
        $datos = $request->except('id_obra');


        $obra = Obra::updateOrCreate(
            [
                'id_obra' => $id_obra,
            ],
            $datos
        );


        return response()->json([
            'success' => true
        ]);

    }

}
