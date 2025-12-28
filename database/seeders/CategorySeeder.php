<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'White Hacker',
            'slug' => 'white-hacker',
            'color' => 'red'
        ]);
        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux',
            'color' => 'green'
        ]);
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'blue'
        ]);
        Category::create([
            'name' => 'Data Structure',
            'slug' => 'data-structure',
            'color' => 'yellow'
        ]);
    }
}
