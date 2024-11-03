<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\InitialState;

class InitialStateController extends Controller
{
    public function welcome()
    {
        return response()->json(['message' => 'Welcome to the API']);
    }

    public function status()
    {
        return response()->json(['status' => 'OK']);
    }

    public function getAllData()
    {
        $data = InitialState::all()
            ->pluck('value', 'key')
            ->toArray();

        return response()->json($data);
    }

    public function getByKey($key)
    {
        $value = InitialState::getValue($key);

        if ($value === null) {
            return response()->json(['error' => 'Not found'], 404);
        }

        return response()->json([
            $key => $value
        ]);
    }
}
