<?php

use Illuminate\Database\Seeder;
use App\Item;
use Faker\Generator as Faker;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $newItem = new Item();
        $newItem->name = $faker->name();
        $newItem->description = $faker->text();
        $newItem->price = $faker->randomFloat(2, 1, 100);
        $newItem->is_visible = $faker->boolean();
        $newItem->save();
    }
}
