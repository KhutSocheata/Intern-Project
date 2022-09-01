<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Property;
  
class CreatePropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = [
            [
                'name'=>'Big House',
                'address'=>'Sihanu city',
                'bedroom'=>2,
                'bathroom'=>2,
                'size'=>30,
                'price_sale'=>10000,
                'price_rent'=>1000,
                'price_rental'=>100,
                'cover'=>'1.jpg',
                //'image'=>'1.jpg',
                'description'=>'Search for House Painting Prices info. Research & compare results on Alot Home today. Find all the info you need for House Painting Prices online on Alot Home. Search now! Browse Online Resources. Large Search Network. Comprehensive Information.',           
             ],
            [
                'name'=>'Small House',
                'address'=>'Siem Reab city',
                'bedroom'=>2,
                'bathroom'=>2,
                'size'=>20,
                'price_sale'=>9999,
                'price_rent'=>1050,
                'price_rental'=>99,
                'cover'=>'4.jpg',
                //'image'=>'1.jpg',
                'description'=>'Search for House Painting Prices info. Research & compare results on Alot Home today. Find all the info you need for House Painting Prices online on Alot Home. Search now! Browse Online Resources. Large Search Network. Comprehensive Information.',           
             ],
            [
                'name'=>'Cute Villa',
                'address'=>'Toulkouk, Phnom Penh',
                'bedroom'=>5,
                'bathroom'=>3,
                'size'=>50,
                'price_sale'=>50000,
                'price_rent'=>5000,
                'price_rental'=>500,
                'cover'=>'3.jpg',
                //'image'=>'1.jpg',
                'description'=>'Search for House Painting Prices info. Research & compare results on Alot Home today. Find all the info you need for House Painting Prices online on Alot Home. Search now! Browse Online Resources. Large Search Network. Comprehensive Information.',           
             ],
            [
                'name'=>'Smart Condo',
                'address'=>'Phnom Penh city',
                'bedroom'=>1,
                'bathroom'=>1,
                'size'=>30,
                'price_sale'=>20000,
                'price_rent'=>2000,
                'price_rental'=>200,
                'cover'=>'5.jpg',
                //'image'=>'1.jpg',
                'description'=>'Search for House Painting Prices info. Research & compare results on Alot Home today. Find all the info you need for House Painting Prices online on Alot Home. Search now! Browse Online Resources. Large Search Network. Comprehensive Information.',           
             ],
            [
                'name'=>'New Build',
                'address'=>'Siem Reab city',
                'bedroom'=>10,
                'bathroom'=>5,
                'size'=>60,
                'price_sale'=>100000,
                'price_rent'=>10000,
                'price_rental'=>1000,
                'cover'=>'8.jpg',
                //'image'=>'1.jpg',
                'description'=>'Search for House Painting Prices info. Research & compare results on Alot Home today. Find all the info you need for House Painting Prices online on Alot Home. Search now! Browse Online Resources. Large Search Network. Comprehensive Information.',           
             ],
            [
                'name'=>'Korea House',
                'address'=>'Phnom Penh city',
                'bedroom'=>12,
                'bathroom'=>6,
                'size'=>50,
                'price_sale'=>99999,
                'price_rent'=>10009,
                'price_rental'=>1009,
                'cover'=>'7.jpg',
                //'image'=>'1.jpg',
                'description'=>'Search for House Painting Prices info. Research & compare results on Alot Home today. Find all the info you need for House Painting Prices online on Alot Home. Search now! Browse Online Resources. Large Search Network. Comprehensive Information.',           
             ],
            
        ];
    
        foreach ($properties as $key => $property) {
            Property::create($property);
        }
    }
}