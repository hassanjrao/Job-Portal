<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for( $i=0; $i<10; $i++ ){
            Job::create([
                "title_en"=>"Cooperative training in the Board of Grievances courts",
                "description_en"=>"Cooperative training in the Board of Grievances courts - all cities Cooperative training in the Board of Grievances courts - all citiesCooperative training in the Board of Grievances courts - all cities Cooperative training in the Board of Grievances courts - all citiesCooperative training in the Board of Grievances courts - all cities Cooperative training in the Board of Grievances courts - all citiesCooperative training in the Board of Grievances courts - all cities Cooperative training in the Board of Grievances courts - all citiesCooperative training in the Board of Grievances courts - all cities Cooperative training in the Board of Grievances courts - all citiesCooperative training in the Board of Grievances courts - all cities Cooperative training in the Board of Grievances courts - all citiesCooperative training in the Board of Grievances courts - all cities Cooperative training in the Board of Grievances courts - all citiesCooperative training in the Board of Grievances courts - all cities Cooperative training in the Board of Grievances courts - all cities",
                "image"=>"https://via.placeholder.com/150",
            ]);
        }
    }
}
