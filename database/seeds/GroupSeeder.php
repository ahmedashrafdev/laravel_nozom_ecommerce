<?php

use App\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $groups = [
            // [ "icon" => "human-male" , "Home" => 1 , "GroupNameEn"=> "Men" , "GroupName"=>"رجالي ","FatherCode"=>null, "Featured" => 1, "image" => "https://spinneys-egypt.com/storage/slider_images/Spinneys%20Online%20Shop/jAnOLwsIMdXEgEGBcz90TBRfUsRn7uPZXvRc5yRZ.jpeg"],
            // [ "icon" => "human-female" , "Home" => 1 , "GroupNameEn"=> "Women" , "GroupName"=>"نسائي","FatherCode"=>null, "image" => null , "Featured" => 1],
            [ "icon" => "fruit-grapes-outline" , "Home" => 1 , "GroupNameEn"=> "fruits" , "GroupName"=>"الفواكهه ","FatherCode"=>null, "Featured" => 1, "image" => "https://spinneys-egypt.com/storage/slider_images/Spinneys%20Online%20Shop/jAnOLwsIMdXEgEGBcz90TBRfUsRn7uPZXvRc5yRZ.jpeg"],
            [ "icon" => "carrot" , "Home" => 1 , "GroupNameEn"=> "vigitables" , "GroupName"=>"الخضروات","FatherCode"=>null, "image" => null , "Featured" => 1],
        ];
        
            Group::insert($groups);
        
    }
}
