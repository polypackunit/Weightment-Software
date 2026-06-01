<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use App\Models\WeightReading;
use App\Models\Weightment;

// Save weight to database AND cache
Route::post('/weight', function () {
    $weight = request()->input('weight') ?? request()->json('weight');

    if (!$weight) {
        return response()->json(['error' => 'No weight received'], 400);
    }

    $weight = trim($weight);
    
    if (!is_numeric($weight)) {
        return response()->json(['error' => 'Invalid weight value'], 400);
    }

    // MAIN FIX: Save to weightments table (1st weight) instead of just weight_readings
    $weightment = Weightment::create([
        'ist_weight' => (float)$weight,
        'ist_time' => now()->format('H:i:s'),
        'ist_date' => now()->format('Y-m-d'),
        'vehicle_no' => request()->input('vehicle_no') ?? null,
        'customer_name' => request()->input('customer_name') ?? null,
        'supplier_name' => request()->input('supplier_name') ?? null,
        'driver_name' => request()->input('driver_name') ?? null,
        'gate_pass_no' => request()->input('gate_pass_no') ?? null,
        'description' => request()->input('description') ?? null,
        'created_by' => auth()->id() ?? null,
    ]);

    // Also save to weight_readings for logging
    $reading = WeightReading::create([
        'weight' => (float)$weight,
        'reading_type' => 'first'
    ]);

    // Store in cache (fast access)
    Cache::put('current_weight', $weight, now()->addMinutes(60));
    
    // Fallback: Also write to file
    file_put_contents(public_path('weight.txt'), $weight);

    return response()->json([
        'status' => 'ok', 
        'weight' => $weight, 
        'timestamp' => now(),
        'weightment_id' => $weightment->id,
        'id' => $reading->id
    ]);
});

// Get last weight from database
Route::get('/get-weight', function () {
    // Try cache first (fastest)
    $weight = Cache::get('current_weight');
    
    if (!$weight) {
        // Get from weightments table (last recorded 1st weight)
        $lastWeightment = Weightment::latest('ist_date')
            ->latest('ist_time')
            ->first();
        
        if ($lastWeightment && $lastWeightment->ist_weight) {
            $weight = $lastWeightment->ist_weight;
            // Store in cache for next time
            Cache::put('current_weight', $weight, now()->addMinutes(60));
        }
    }
    
    // Fallback to file if DB is empty
    if (!$weight && file_exists(public_path('weight.txt'))) {
        $weight = file_get_contents(public_path('weight.txt'));
    }
    
    $weight = trim($weight ?? '0');

    return response()->json([
        'weight' => $weight,
        'timestamp' => now()
    ]);
});

// Get weight history (last N readings)
Route::get('/weight-history', function () {
    $limit = request()->input('limit', 10);
    
    $readings = WeightReading::latest('reading_time')
        ->limit($limit)
        ->get();

    return response()->json([
        'status' => 'ok',
        'count' => count($readings),
        'readings' => $readings
    ]);
});

// Save second weight to database
Route::post('/weight/second', function () {
    $weight = request()->input('weight') ?? request()->json('weight');

    if (!$weight || !is_numeric($weight)) {
        return response()->json(['error' => 'Invalid weight value'], 400);
    }

    $reading = WeightReading::create([
        'weight' => (float)$weight,
        'reading_type' => 'second',
        'vehicle_no' => request()->input('vehicle_no'),
        'customer_name' => request()->input('customer_name'),
        'supplier_name' => request()->input('supplier_name'),
        'driver_name' => request()->input('driver_name'),
        'gate_pass_no' => request()->input('gate_pass_no'),
        'description' => request()->input('description')
    ]);

    return response()->json([
        'status' => 'ok',
        'weight' => $weight,
        'id' => $reading->id
    ]);
});