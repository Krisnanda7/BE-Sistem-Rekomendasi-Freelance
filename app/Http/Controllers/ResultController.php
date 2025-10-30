<?php

namespace App\Http\Controllers;
use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'answers' => 'required|array',
        ]);

        $result = Result::create([
            'answers' => json_encode($data['answers']),
            'recommendation' => 'pending', // nanti bisa di-update oleh sistem rekomendasi
        ]);

        return response()->json($result);
    }
}
