<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class InitialStateSeeder extends Seeder
{
    public function run()
    {
        $jsonPath = database_path('data/initialState.json');
        
        if (!file_exists($jsonPath)) {
            Log::error('Initial state JSON file not found at: ' . $jsonPath);
            return;
        }

        $jsonContent = file_get_contents($jsonPath);
        $jsonData = json_decode($jsonContent, true);
        
        if (json_last_error() !== JSON_ERROR_NONE) {
            Log::error('JSON decode error: ' . json_last_error_msg());
            return;
        }

        DB::table('initial_state')->truncate();

        foreach ($jsonData as $key => $value) {
            try {
                DB::table('initial_state')->insert([
                    'key' => $key,
                    'value' => json_encode($value),
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
                $this->command->info("Seeded: {$key}");
            } catch (\Exception $e) {
                Log::error("Error seeding key {$key}: " . $e->getMessage());
            }
        }
    }
}
