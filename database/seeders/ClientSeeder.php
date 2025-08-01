<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    public function run()
    {
        Client::create([
            'nom' => 'Bourhil',
            'prenom' => 'Yannis',
            'email' => 'yannis.bourhil@gmail.com',
            'telephone' => '0612345678',
        ]);
    }
}
