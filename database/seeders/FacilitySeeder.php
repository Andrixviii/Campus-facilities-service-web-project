<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Facility;

class FacilitySeeder extends Seeder
{
    public function run()
    {
        $facilities = [
          ['nama_fasilitas' => 'Aula Anwar Musaddad',
           'Lokasi' => 'Di seberang Fakultas Sains dan Teknologi',
           'Deskripsi' => 'Ya gitu deh'
          ],

          ['nama_fasilitas' => 'Aula Abdjan Solaiman',
           'Lokasi' => 'Di seberang Fakultas Ekonomi dan Bisnis',
           'Deskripsi' => 'Ya gitu deh'
          ],

          ['nama_fasilitas' => 'Lapangan Tenis',
           'Lokasi' => 'Di belakang Labolatorium saintek',
           'Deskripsi' => 'Ya gitu deh'
          ],

          ['nama_fasilitas' => 'Lapangan Badminton',
            'Lokasi' => 'Di belakang fakultas saintek',
            'Deskripsi' => 'Ya gitu deh'
          ],

          ['nama_fasilitas' => 'Lapangan Voli',
           'Lokasi' => 'Di dalam kampus 2',
           'Deskripsi' => 'Ya gitu deh'
          ],

          ['nama_fasilitas' => 'Lapangan Basket',
           'Lokasi' => 'Di pinggir gedung saintek',
           'Deskripsi' => 'Ya gitu deh'
          ]


        ];

        foreach ($facilities as $facility) {
            Facility::create($facility);
        }
    }
}
?>
