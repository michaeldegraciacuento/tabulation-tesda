<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Qualification;

class QualificationTableSeeder extends Seeder
{
    public function run()
    {
        Qualification::create(['code' => 'IT' , 'name' => 'Information Technology']); 
        Qualification::create(['code' => 'EIM' , 'name' => 'Electrical Installation Maintenance']); 
        Qualification::create(['code' => 'CSS' , 'name' => 'Computer System Servicing']); 
        Qualification::create(['code' => 'VGD' , 'name' => 'Visual Graphics Design']); 
        Qualification::create(['code' => 'BPP' , 'name' => 'Bread and Pastry ProductionTechnology']); 
    }
}
