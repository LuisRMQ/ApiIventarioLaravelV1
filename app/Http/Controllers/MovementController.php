<?php

namespace App\Http\Controllers;

use App\Models\Movement;
use App\Models\Product;
use Illuminate\Http\Request;

class MovementController extends Controller
{
    public function index()
    {
        $movements = Movement::with('product')->get();
        return response()->json($movements);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer',
            'movement_date' => 'nullable|date',
        ]);

        $movement = Movement::create($data);
        return response()->json($movement, 201); 
    }

    public function show(Movement $movement)
    {
        return response()->json($movement);
    }

    public function update(Request $request, Movement $movement)
    {
        $data = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer',
            'movement_date' => 'nullable|date',
        ]);

        $movement->update($data);
        return response()->json($movement);
    }

    public function destroy(Movement $movement)
    {
        $movement->delete();
        return response()->json(['message' => 'Movimiento eliminado exitosamente.']);
    }
}
