<?php

use App\emp_to_empsModel;
use App\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this ->call(ProductLineSeesder::class);
         $this ->call(ProductSeeder::class);
         $this ->call(OfficeSeeder::class);
         $this ->call(EmployeeSeeder::class);
         $this ->call(CustomerSeeder::class);
         $this ->call(OrdersSeeder::class);
         $this ->call(PaymentSeeder::class);
         $this ->call(OrderProductSeeder::class);
    }
}
