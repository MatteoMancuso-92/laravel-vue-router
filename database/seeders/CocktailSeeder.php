<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cocktail;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('cocktails') as $cocktail) {

            Cocktail::create([
                'title' => $cocktail['title'],
                'description' => $cocktail['description'],
                'thumb' => $cocktail['thumb'],
                'price' => $cocktail['price'],
                'series' => $cocktail['series'],
                'sale_date' => $cocktail['sale_date'],
                'type' => $cocktail['type'],
            ]);
        }
    }
}
