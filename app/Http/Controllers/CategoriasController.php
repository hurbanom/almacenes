<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Inventory\Models\Category;

class CategoriasController extends Controller
{
    protected $_category;

    public function __construct(Category $category)
    {
        $this->_category = $category;
        $this->middleware('auth');
    }

    public function create()
    {
        return view('categorias.add');
    }

    public function save()
    {
        $category = new $this->_category;
        $category->name = 'Maquinaria';
        $category->save();
    }

}
