<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\customer;
use App\Models\product;
use App\Models\worker;
use App\Models\sale;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CustomersTableSeeder::class,
            ProductsTableSeeder::class,  
            WorkersTableSeeder::class                     
        ]);       
        sale::factory(100)->create();
    }
    
}
