<?php

namespace Database\Seeders;

use App\Models\JobCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            JobCategory::create([
                "name_en"=>"Public",
                "name_ar"=>"عام",
            ]);

            JobCategory::create([
                "name_en"=>"Private",
                "name_ar"=>"خاص",
            ]);

            JobCategory::create([
                "name_en"=>"Governmnetal",
                "name_ar"=>"حكومي",
            ]);



    }
}
