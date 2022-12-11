<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\worker;

class WorkersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer1=new worker;
        $customer1->last_name='Rodiguez';
        $customer1->name="James";        
        $customer1->base_salary=15000000;
        $customer1->marital_status="Single";  
        $customer1->confirmed=true;
        $customer1->save();

        $customer2=new worker;
        $customer2->last_name='Cruz';
        $customer2->name="Santiago";
        $customer2->base_salary=5000000;  
        $customer2->marital_status="Married";  
        $customer2->confirmed=true;
        $customer2->save();

        $customer3=new worker;
        $customer3->last_name='Monrroy';
        $customer3->name="Kevin";  
        $customer3->base_salary=2300000;  
        $customer3->marital_status="Free_union";   
        $customer3->confirmed=true;
        $customer3->save();
    }
}
