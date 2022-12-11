<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products1=new product;
        $products1->description='wireless keyboard hp brand';
        $products1->price=120000;
        $products1->confirmed=true;
        $products1->save();

        $products2=new product;
        $products2->description='bose brand wireless headband';
        $products2->price=960000;
        $products2->confirmed=true;
        $products2->save();

        $products3=new product;
        $products3->description='lenovo brand wireless mouse';
        $products3->price=270000;
        $products3->confirmed=true;
        $products3->save();
    }
}
