<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer1=new customer;
        $customer1->last_name='Castaño';
        $customer1->name="Johan";        
        $customer1->business="Developer";  
        $customer1->confirmed=true;
        $customer1->save();

        $customer2=new customer;
        $customer2->last_name='Granados';
        $customer2->name="Sonia";
        $customer2->business="lawyer";  
        $customer2->confirmed=true;
        $customer2->save();

        $customer3=new customer;
        $customer3->last_name='Gonzalo';
        $customer3->name="Julian";  
        $customer3->business="engineer";   
        $customer3->confirmed=true;
        $customer3->save();
    }
}
