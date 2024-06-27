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
           'Lokasi' => 'Jl. Manisi No.38, Cipadung, Kec. Cibiru, Kota Bandung, Jawa Barat 40614',
           'Deskripsi' => 'Anwar Musaddad Hall at UIN Sunan Gunung Djati Bandung is
            the ideal venue for your next event, offering a strategic location in the heart
             of Bandung and modern amenities to ensure seamless presentations. Named after a
              founding figure of the university, the hall combines historical significance with versatile space options,
               making it suitable for various event sizes and formats. The venue also provides comprehensive support services,
                including technical assistance and event management, to guarantee a smooth experience.'
          ],

          ['nama_fasilitas' => 'Aula Abdjan Solaiman',
           'Lokasi' => 'Jl. Manisi No.38, Cipadung, Kec. Cibiru, Kota Bandung, Jawa Barat 40614',
           'Deskripsi' => "Discover versatility at its finest in the Abdjan Solaiman Hall! This striking multi-function venue offers a spacious,
           modern setting for all your event needs.
            With its impressive two-story design and adaptable interior,
             it's perfect for conferences, performances, or grand celebrations.
              The hall's clean lines and ample parking make it both stylish and convenient.
               Book now to transform your next gathering in this premier multi-purpose space!"
          ],

          ['nama_fasilitas' => "Tennis court",
           'Lokasi' => 'Jl. Cimencrang, Kec. Gedebage, Kota Bandung, Jawa Barat – 40292',
           'Deskripsi' => "Elevate your tennis game on our premium covered court! This state-of-the-art facility offers the perfect blend of outdoor feel and indoor comfort. The vibrant green court surface ensures optimal ball visibility and consistent play, while the high-tech roof provides protection from the elements without sacrificing natural light. With ample surrounding space and seating areas, it's ideal for both intense matches and leisurely rallies. Experience year-round tennis in a setting that combines professional quality with a serene atmosphere. Book now to enjoy uninterrupted play in this exceptional tennis haven!"
          ],

          ['nama_fasilitas' => "Badminton court",
            'Lokasi' => 'Jl. Manisi No.38, Cipadung, Kec. Cibiru, Kota Bandung, Jawa Barat 40614',
            'Deskripsi' => "Experience the perfect badminton match on our top-tier court! Our spacious, brightly lit hall features a gleaming wooden floor with razor-sharp boundary lines for precise play. With high ceilings, convenient equipment storage, and a professional atmosphere, you'll feel like a pro whether you're a casual player or seasoned competitor. Book now to elevate your game in this ideal setting that caters to all skill levels!"
          ],

          ['nama_fasilitas' => "Volleyball court",
           'Lokasi' => 'Jl. Cimencrang, Kec. Gedebage, Kota Bandung, Jawa Barat – 40292',
           'Deskripsi' => "Experience the thrill of outdoor volleyball on our vibrant court! Our fenced facility offers a spacious playing area with crisp boundary lines and a professional-grade net. Surrounded by lush greenery, you'll enjoy fresh air and natural light as you spike and serve. The court buzzes with energy, perfect for friendly matches or spirited tournaments. With ample spectator space and a referee stand, it's ideal for all levels of play. Book now to join the excitement and elevate your game in this dynamic, open-air setting!"
          ],

          ['nama_fasilitas' => "Basketball court",
           'Lokasi' => 'Jl. Cimencrang, Kec. Gedebage, Kota Bandung, Jawa Barat – 40292',
           'Deskripsi' => "Experience top-tier basketball action at UIN Sunan Gunung Djati Bandung's Campus 1! Our outdoor court features a vibrant, multi-colored surface that enhances playability and excitement. Equipped with standard hoops, sturdy backboards, and reliable rims, it provides the ideal setting for both recreational and competitive games. The court is complemented by surrounding amenities, including a stone wall and a nearby tent, offering ample space for spectators and event support. Whether you're organizing a tournament or a casual game, our well-maintained basketball court is perfect for all your needs. Book now and enjoy a dynamic and lively sports environment!"
          ]


        ];

        foreach ($facilities as $facility) {
            Facility::create($facility);
        }
    }
}
?>
