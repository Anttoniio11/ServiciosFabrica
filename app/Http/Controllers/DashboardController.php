<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use App\Services\UsuariosService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $productService;
    protected $usuariosService;

    public function __construct(ProductService $productService, UsuariosService $usuariosService )
    {
        $this->productService = $productService;
        $this->usuariosService = $usuariosService;
    }

    public function index()
    {
        $products = $this->productService->getAll();
        return view('dashboard.index', compact('products'));
    }

    public function crearUsuario(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
        ]);

        $this->usuariosService->create($request->all());

        return redirect()->back()->with('success', 'Usuario creado correctamente');
    }

    public function createProduct(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'precio' => 'required|numeric|min:0',
        ]);

        $this->productService->create($request->all());

        return redirect()->back()->with('success', 'Producto creado correctamente');
    }

}
