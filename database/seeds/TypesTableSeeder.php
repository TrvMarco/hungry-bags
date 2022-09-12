<?php

use Illuminate\Database\Seeder;
use App\Type;


class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['italiano','cinese','giapponese','messicano', 'indiano','carne','pesce','sushi','fusion', 'paninoteca', 'pizzeria', 'hamburger', 'pollo', 'dolci', 'poke', 'americano', 'francese', 'vegetariano'];
        
        foreach($types as $type) {
            $newType = new Type();
            $newType->name = $type;
            $newType->save();
        }
    }
}
