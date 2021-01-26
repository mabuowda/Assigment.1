<?php

use App\ProductLine;
use Illuminate\Database\Seeder;

class ProductLineSeesder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ProductLine::class,5)->create();
    }
}
