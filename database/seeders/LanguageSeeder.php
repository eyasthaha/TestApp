<?php

namespace Database\Seeders;

use App\Models\Languages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Languages::create([
            'name' => 'English'
        ]);
        Languages::create([
            'name' => 'Spanish'
        ]);
        Languages::create([
            'name' => 'French'
        ]);
        Languages::create([    
            'name' => 'German'
        ]);
    }
}
