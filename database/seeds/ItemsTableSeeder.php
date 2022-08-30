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
       
        // ! USER ID NON SERVE IN SEEDER POI RIMUOVERE - GENERARE 2 UTENTI PRIMA DI LANCIARE IL SEEDER
        for($i=0; $i < 10; $i++){
            $newItem = new Item();
            $newItem->user_id = $faker->numberBetween(1, 2);
            $newItem->name = $faker->name();
            $newItem->description = $faker->text();
            $newItem->price = $faker->randomFloat(2, 1, 100);
            $newItem->is_visible = $faker->boolean();
            $newItem->save();
        }
    }
}
