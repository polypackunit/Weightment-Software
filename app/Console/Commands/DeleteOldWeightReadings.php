<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\WeightReading;
use Carbon\Carbon;

class DeleteOldWeightReadings extends Command
{
    protected $signature = 'weights:cleanup';

    protected $description = 'Delete weight readings older than 1 hour';

    public function handle()
    {
        WeightReading::where('created_at', '<', Carbon::now()->subHour())
            ->delete();

        $this->info('Old weight readings deleted.');
    }
}
