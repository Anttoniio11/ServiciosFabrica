<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        return response()->json($this->productService->getAll());
    }

    public function store(Request $request)
    {
        return response()->json($this->productService->create($request->all()), 201);
    }

    public function show($id)
    {
        return response()->json($this->productService->getById($id));
    }

    public function update(Request $request, $id)
    {
        return response()->json($this->productService->update($id, $request->all()));
    }

    public function destroy($id)
    {
        $this->productService->delete($id);
        return response()->json(['message' => 'Producto eliminado correctamente']);
    }
}
