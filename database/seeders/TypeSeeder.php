<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'Web Development',
                'description' => 'Creazione di siti web e applicazioni web.',
            ],
            [
                'name' => 'Mobile App Development',
                'description' => 'Sviluppo di applicazioni mobile per iOS e Android.',
            ],
            [
                'name' => 'E-commerce',
                'description' => 'Realizzazione di piattaforme di vendita online.',
            ],
            [
                'name' => 'Gaming',
                'description' => 'Sviluppo di giochi per diverse piattaforme.',
            ],
            [
                'name' => 'Intelligenza Artificiale',
                'description' => 'Progetti basati su tecnologie di intelligenza artificiale.',
            ],
            [
                'name' => 'IoT (Internet of Things)',
                'description' => 'Sviluppo di soluzioni basate su IoT.',
            ],
        ];

        foreach ($types as $type) {
            $newType= new Type();
            $newType->fill($type);
            $newType->save();
        }
    }
}
    
