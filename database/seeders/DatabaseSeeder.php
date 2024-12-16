<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public $categories = [
        'Elettronica',
        'Abbigliamento',
        'Salute e Benessere',
        'Sport',
        'Giocattoli',
        'Libri e Riviste',
        'Vinili e CD',
        'Giardinaggio',
        'Accessori',
        'Motori',
        'Pesca',
        'Videogiochi',
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
