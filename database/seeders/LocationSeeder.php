<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $locations=[
            [
                "name_en"=>"Abha",
                "name_ar"=>"أبها",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "name_en"=>"Al-Baha",
                "name_ar"=>"الباحة",

                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "name_en"=>"Al-Dammam",
                "name_ar"=>"الدمام",

                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "name_en"=>"Al-Hofuf",
                "name_ar"=>"الهفوف",

                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "name_en"=>"Al-Jawf",
                "name_ar"=>"الجوف",

                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "name_en"=>"Al-Kharj",
                "name_ar"=>"الخرج",

                "created_at"=>now(),
                "updated_at"=>now()
            ]

            ];

            Location::insert($locations);


    }
}
