<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index()
    {
        return response()->json(Pendidikan::all(), 200);
    }

    public function store(Request $request)
    {
        $pendidikan = Pendidikan::create($request->all());
        return response()->json($pendidikan, 201);
    }

    public function show(string $id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        return response()->json($pendidikan, 200);
    }

    public function update(Request $request, string $id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        $pendidikan->update($request->all());
        return response()->json($pendidikan, 200);
    }

    public function destroy(string $id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        $pendidikan->delete();
        return response()->json(['message' => 'Data deleted successfully'], 200);
    }
}