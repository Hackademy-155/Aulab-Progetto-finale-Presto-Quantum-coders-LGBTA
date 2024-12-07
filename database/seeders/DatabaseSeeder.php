<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public $categories = [
        '1'=>'Elettronica',
        '2'=>'Abbigliamento',
        '3'=>'Salute e Benessere',
        '4'=>'Sport',
        '5'=>'Giocattoli',
        '6'=>'Libri e Riviste',
        '7'=>'Vinili e CD',
        '8'=>'Giardinaggio',
        '9'=>'Accessori',
        '10'=>'Motori',
        '11'=>'Pesca',
        '12'=>'Videogiochi',


    ];
    public function run(): void
    {
        foreach ($this->categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
        // // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


    }

}
