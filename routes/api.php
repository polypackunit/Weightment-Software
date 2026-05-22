<?php

use Illuminate\Support\Facades\Route;



Route::post('/weight', function () {
    // $weight = request('weight');

    $weight = request()->input('weight') ?? request()->json('weight');

    if (!$weight) {
        return response()->json(['error' => 'No weight received']);
    }

    $result = file_put_contents(public_path('weight.txt'), $weight);

    if ($result === false) {
        return response()->json(['error' => 'Failed to write file']); // you'll see this
    }

    return response()->json(['status' => 'ok', 'weight' => $weight]);
});

Route::get('/get-weight', function () {
    $weight = file_get_contents(public_path('weight.txt'));

    return response()->json([
        'weight' => $weight
    ]);
});


