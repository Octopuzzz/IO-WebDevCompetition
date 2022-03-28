<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Food::create([
            'category_id' => 1,
            'Daerah' => 'Betawi',
            'Food_Name' => 'Sayur Babanci',
            'Food_Excerpt' => 'Sayur Babanci adalah salah satu hidangan ikonik khas Betawi yang kini mulai langka. Kelangkaan ini disebabkan karena bahan dan rempah-rempah untuk membuat hidangan ini sudah sulit ditemukan di Jakarta.',
            'Recipes_Excerpt' => '1 ikat daun melinjo',
            'Recipes' => '
            1 buah bawang merah
            1 buah bawang putih
            2 sendok ketumbar
            2 buah bunga lawang
            3 buah cabe merah
            2 buah kemiri
            1 buah kunyit
            ',
            'image' => 'food-1.png',
            'Cooking_Level' => 'Easy',
            'Cooking_Image' => 'component-2.png',
            'Cooking_Time' => 85,
            'Rating' => '4.5',
            'Total_Rating' => '978',
        ]);
        Food::create([
            'category_id' => 2,
            'Food_Name' => 'Soto Padang',
            'Daerah' => 'Padang',
            'Food_Excerpt' => 'Soto Padang adalah hidangan berkuah kaldu sapi dengan bahan irisan daging sapi yang sudah digoreng kering, bihun (mie dari tepung beras), ditambah perkedel kentang dan dihidangkan panas-panas. ',
            'Recipes_Excerpt' => '5 ikat daun pandan',
            'Recipes' => 'Bahan :
            - 500 gram daging sapi (campur dengan tulang supaya kaldunya lebih kerasa).
            - 2 liter air.
            - minyak goreng untuk menumis.
            Bahan cemplung :
            - 2 batang sereh digeprek.
            - 3 lembar daun salam.
            - 4 lembar daun jeruk.
            - 5 buah kapulaga.
            - 8 kelopak bunga lawang.
            - 5 buah cengkeh.
            - 4 cm kayu manis.
            - 2 batang daun bawang diiris.
            Bumbu halus :
            - 10 siung bawang putih.
            - 6 buah bawang merah.
            - 3 ruas lengkuas.
            - 2 ruas jahe.
            - 1 ruas kunyi.
            - 1 sdt pala bubuk.
            - 1 sdm ketumbar bubuk.
            - 2 sdt lada bubuk.
            - garam.
            Bumbu pelengkap :
            - sohun siram dengan air panas, rendam sebentar, angkat dan tiriskan.
            - perkedel kentang.
            - kerupuk merah.
            - sambal.
            - seledri diiris halus.
            - bawang goreng.
            - kecap.
            - cuka.',
            'image' => 'component-3.png',
            'Cooking_Level' => 'Easy',
            'Cooking_Image' => 'component-2.png',
            'Cooking_Time' => 90,
            'Rating' => '4.2',
            'Total_Rating' => '147',
        ]);
        Food::create([
            'category_id' => 1,
            'Food_Name' => 'Bubur Manado',
            'Daerah' => 'Manado',
            'Food_Excerpt' => 'Bubur Manado adalah salah satu kuliner khas dari Manado (Sulawesi Utara). Bahan dasar masakan ini adalah beras yang dicampur sayuran seperti kangkung, daun kemangi, ubi merah/ kuning, dan jagung pipil. Disantap dengan hidangan pelengkap seperti ikan tongkol atau ikan asin bersama sambal dabu-dabu.',
            'Recipes_Excerpt' => '
            Bahan:
            - 200 gram beras.
            - 2 buah jagung manis dipipil.
            - 150 gram singkong potong dadu.
            - 100 gram ubi kuning, potong dadu.
            ...
            ',
            'Recipes' => '
            Bahan:
            - 200 gram beras.
            - 2 buah jagung manis dipipil.
            - 150 gram singkong potong dadu.
            - 100 gram ubi kuning, potong dadu .
            - 1 kg labu kuning, kukus dan lumatkan dengan garpu.
            - 4 liter air atau tambahkan sesuai kebutuhan.
            Bahan sayur:
            - 5 lembar daun gedi,rajang halus .
            - 1 lembar daun kunyit,rajang sehalus mungkin.
            - 2 batang daun bawang, rajang halus.
            - 1 ikat kangkung, ambil daun dan pucuk mudanya, rajang kasar
            - 1 ikat kecil bayam, ambil daun.
            - 1 mangkuk kemangi, dari 5 ikat kecil kemangi, ambil daun dan pucuk mudanya saja.
            Cara memasak :
            a. Cuci bersih beras,lalu di panci masukkan air, beras, singkong, ubi masak dengan api kecil sampai singkong dan ubi lembut.
            b. Masukkan bawang putih, bawang merah, daun salam dan serai sambil terus diaduk, masukkan jagung dan labu kuning.
            c. Tambahkan air bila diperlukan, masukkan garam lada dan kaldu jamur aduk rata lagi.
            d. Setelah beras sudah menjadi bubur terakhir masukan semua sayuran aduk rata, koreksi rasa, angkat.
            ',
            'image' => 'component-3.png',
            'Cooking_Level' => 'Easy',
            'Cooking_Image' => 'component-2.png',
            'Cooking_Time' => 90,
            'Rating' => '4.0',
            'Total_Rating' => '278',
        ]);
        Food::create([
            'category_id' => 1,
            'Food_Name' => 'Sop Konro',
            'Daerah' => 'Betawi',
            'Food_Excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'Recipes_Excerpt' => '5 ikat daun pandan',
            'Recipes' => 'Bahan :
            - 1 kg iga sapi.
            - 1700 ml air.
            - 1/2 butir kelapa parut kemudian disangrai hingga kering lalu dihaluskan.
            - 1 lembar daun salam.
            - 2 lembar daun jeruk.
            - 2 cm kayu manis.
            - Daun bawang dan Daun Seledri secukupnya.
            - Minyak secukupnya untuk menumis.
            - Gula pasir,garam,kaldu sapi bubuk secukupnya.
            Bumbu halus :
            - 10 siung bawang merah.
            - 6 siung bawang putih.
            - 4 butir kemiri.
            - 1 buah kluwak.
            - 5 batang sereh.
            - Serimpang lengkuas.
            - 2 cm kunyit.
            - 1/2 sdt merica bubuk.
            - 1 sdt jinten bubuk.
            - 1 sdt ketumbar bubuk.
            - 1/4 pala bubuk.
            Bahan pelengkap :
            - Nasi putih atau buras.
            - Bawang goreng.
            - Sambel & jeruk nipis.
            Cara memasak :
            a. Presto iga sapi hingga empuk dengan air secukupnya,saring ambil kaldunya 1 liter.
            b. Pindahkan kepanci biasa,masukan iga dan kaldunya lalu tambah air biasa 700 ml atau secukupnya.
            c. Tumis bumbu halus dengan minyak secukupnya hingga wangi,lalu masukan kedalam panci iga,masukan juga daun salam,daun jeruk,kayu manis dan kelapa sangrai yang dihaluskan,aduk rata,beri gula garam dan kaldu sapi bubuk,didihkan cek rasa.
            d. Masukan potongan daun seledri dan daun bawang secukupnya didihkan sebentar matikan api.
            e. Sajikan dimangkok saji lalu taburi bawang goreng.
            ',
            'image' => 'component-3.png',
            'Cooking_Level' => 'Easy',
            'Cooking_Image' => 'component-2.png',
            'Cooking_Time' => 90,
            'Rating' => '4.7',
            'Total_Rating' => '278',
        ]);
        Food::create([
            'category_id' => 1,
            'Food_Name' => 'Kolak surabaya',
            'Daerah' => 'Betawi',
            'Food_Excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'Recipes_Excerpt' => '5 ikat daun pandan',
            'Recipes' => '
            1 ikat daun melinjo
            2 ikat daun melinjo
            3 ikat daun melinjo
            6 ikat daun melinjo
            ',
            'image' => 'component-3.png',
            'Cooking_Level' => 'Easy',
            'Cooking_Image' => 'component-2.png',
            'Cooking_Time' => 90,
            'Rating' => '4.7',
            'Total_Rating' => '278',
        ]);
        Food::create([
            'category_id' => 1,
            'Food_Name' => 'Kolak surabaya',
            'Daerah' => 'Betawi',
            'Food_Excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'Recipes_Excerpt' => '5 ikat daun pandan',
            'Recipes' => '
            1 ikat daun melinjo
            2 ikat daun melinjo
            3 ikat daun melinjo
            6 ikat daun melinjo
            ',
            'image' => 'component-3.png',
            'Cooking_Level' => 'Easy',
            'Cooking_Image' => 'component-2.png',
            'Cooking_Time' => 90,
            'Rating' => '4.7',
            'Total_Rating' => '278',
        ]);
        Food::create([
            'category_id' => 1,
            'Food_Name' => 'Kolak surabaya',
            'Daerah' => 'Betawi',
            'Food_Excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'Recipes_Excerpt' => '5 ikat daun pandan',
            'Recipes' => '
            1 ikat daun melinjo
            2 ikat daun melinjo
            3 ikat daun melinjo
            6 ikat daun melinjo
            ',
            'image' => 'component-3.png',
            'Cooking_Level' => 'Easy',
            'Cooking_Image' => 'component-2.png',
            'Cooking_Time' => 90,
            'Rating' => '4.7',
            'Total_Rating' => '278',
        ]);
        Food::create([
            'category_id' => 1,
            'Food_Name' => 'Kolak surabaya',
            'Daerah' => 'Betawi',
            'Food_Excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'Recipes_Excerpt' => '5 ikat daun pandan',
            'Recipes' => '
            1 ikat daun melinjo
            2 ikat daun melinjo
            3 ikat daun melinjo
            6 ikat daun melinjo
            ',
            'image' => 'component-3.png',
            'Cooking_Level' => 'Easy',
            'Cooking_Image' => 'component-2.png',
            'Cooking_Time' => 90,
            'Rating' => '4.7',
            'Total_Rating' => '278',
        ]);
        Food::create([
            'category_id' => 1,
            'Food_Name' => 'Kolak surabaya',
            'Daerah' => 'Betawi',
            'Food_Excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'Recipes_Excerpt' => '5 ikat daun pandan',
            'Recipes' => '
            1 ikat daun melinjo
            2 ikat daun melinjo
            3 ikat daun melinjo
            6 ikat daun melinjo
            ',
            'image' => 'component-3.png',
            'Cooking_Level' => 'Easy',
            'Cooking_Image' => 'component-2.png',
            'Cooking_Time' => 90,
            'Rating' => '4.7',
            'Total_Rating' => '278',
        ]);
    }
}
