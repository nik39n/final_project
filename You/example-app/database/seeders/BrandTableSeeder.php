<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandTableSeeder extends Seeder {
    public function run() {
        // создать 4 категории
        Brand::factory()->count(10)->create();
    }
}