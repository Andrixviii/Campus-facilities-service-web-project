<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Facility;

class FacilitySeeder extends Seeder
{
    public function run()
    {
        $facilities = [
            ['name' => 'Gedung Serbaguna A'],
            ['name' => 'Gedung Serbaguna B'],
            ['name' => 'Gedung Pertemuan C'],
            ['name' => 'Gedung Seminar D'],
        ];

        foreach ($facilities as $facility) {
            Facility::create($facility);
        }
    }
}
?>
