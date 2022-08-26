<?php


use Illuminate\Database\Seeder;
use App\Order;
use Faker\Generator as Faker;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $newOrder = new Order();
        $newOrder->client_name = $faker->name();
        $newOrder->client_surname = $faker->word();
        $newOrder->address = $faker->streetAddress();
        $newOrder->phone = $faker->phoneNumber();
        $newOrder->status = $faker->boolean();
        $newOrder->total_price = $faker->randomFloat(2, 1, 300);
        $newOrder->save();
    }
}
