<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Inventory\Models\Inventory;
use Stevebauman\Inventory\Models\Metric;
use Stevebauman\Inventory\Models\Category;
use Stevebauman\Inventory\Models\Location;
use Stevebauman\Inventory\Models\InventoryStock;
use DataGrid;


class InventarioController extends Controller
{
    protected $_inventory;
    protected $_metric;
    protected $_category;
    protected $_inventorystock;

    public function __construct(Inventory $inventory, Metric $metric, Category $category, InventoryStock $inventorystock)
    {
        $this->_inventory = $inventory;
        $this->_metric = $metric;
        $this->_category = $category;
        $this->_inventorystock = $inventorystock;
        $this->middleware('auth');
    }

    public function index()
    {
        $grid = DataGrid::source(Inventory::with('category'));
        $grid->add('name','Producto', true);
        $grid->add('description','Descripción', true);
        $grid->add('category.name','Categoría', 'name');
        $grid->paginate(10);
        return view('inventario.index', compact('grid'));
    }

    public function indexStock()
    {
        $grid = DataGrid::source(InventoryStock::with('item','location'));
        $grid->add('item.name','Producto', 'name');
        $grid->add('item.description','Descripción', 'description');
        $grid->add('quantity','Cantidad', 'description');
        $grid->add('location.name','Ubicación', 'name');
        $grid->paginate(10);
        return view('stock.index', compact('grid'));
    }

    public function create()
    {
        return view('inventario.add');
    }

    public function createStockProduct()
    {
        $data['ubicaciones'] = Location::pluck('name', 'id');
        $data['productos'] = Inventory::pluck('name', 'id');

        return view('stock.add', $data);
    }

    public function save()
    {
        $item = new $this->_inventory;
        $item->metric_id = 2;
        $item->category_id = 1;
        $item->name = 'Máquina 1';
        $item->description = 'Descipción de la máquina';
        $item->save();
    }

    public function saveStockProduct(Request $request)
    {
        try{
            $location = Location::find($request->ubicacion);
            $item = Inventory::find($request->producto);
            $stock = $item->getStockFromLocation($location);
            $stock->add($request->cantidad);
            return redirect('inventario/createStockProduct')->with('status', 'Stock Guardado');
        }
        catch(\Exception $e){
            $mensaje = $e->getMessage();
            if(strpos($mensaje, 'No stock was found from location') !== FALSE) {
                $stock = new $this->_inventorystock;
                $stock->inventory_id = $request->producto;
                $stock->location_id = $request->ubicacion;
                $stock->quantity = $request->cantidad;
                $stock->save();
                return redirect('inventario/createStockProduct')->with('status', 'Stock Guardado');
            }else{
                return $mensaje;
            }
        }
    }
}
