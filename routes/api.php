<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

Route::post('/weight', function () {
    $weight = request()->input('weight') ?? request()->json('weight');

    if (!$weight) {
        return response()->json(['error' => 'No weight received'], 400);
    }

    $weight = trim($weight);
    
    if (!is_numeric($weight)) {
        return response()->json(['error' => 'Invalid weight value'], 400);
    }

    // Store in cache (fast, reliable, no file permission issues)
    Cache::put('current_weight', $weight, now()->addMinutes(60));
    
    // Fallback: Also write to file for backup
    file_put_contents(public_path('weight.txt'), $weight);

    return response()->json(['status' => 'ok', 'weight' => $weight, 'timestamp' => now()]);
});

Route::get('/get-weight', function () {
    // Try cache first (primary)
    $weight = Cache::get('current_weight');
    
    // Fallback to file if cache empty
    if (!$weight && file_exists(public_path('weight.txt'))) {
        $weight = file_get_contents(public_path('weight.txt'));
    }
    
    $weight = trim($weight ?? '0');

    return response()->json([
        'weight' => $weight,
        'timestamp' => now()
    ]);
});


