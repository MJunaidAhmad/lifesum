<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\Address;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       for ($i=0;$i<50;$i++){
           \App\Item::create([
               'name' => str_random('5'),
               'calories' => 100
           ]);
       }
    }
}
