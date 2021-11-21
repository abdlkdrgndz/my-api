<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * @var int $max
     */
    private $max = 10000;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i <= $this->max; $i++) {
            DB::table('products')->insert([
                'provider_id' => $faker->randomDigit,
                'name' => $faker->domainWord,
                'order_code' => Str::random(20),
                'price' => $faker->randomFloat(2, 2, 100),
                'quantity' => $faker->randomDigit,
                'address' => $faker->address,
                'shipping_date' => $faker->date('Y-m-d')
            ]);
        }
    }
}
