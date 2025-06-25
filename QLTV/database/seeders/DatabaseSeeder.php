<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Book; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        User::factory()->create([
            'name' => 'abc User',
            'email' => 'abc@example.com',
        ]);

        
        Book::create([
            'bookName' => 'Lap trinh Web',
            'bookCode' => 'LTW12394',
            'bookAuthor' => 'Phenikaa Univeristy',
        ]);

        Book::create([
            'bookName' => 'Lap trinh Web 2',
            'bookCode' => 'LTW12294',
            'bookAuthor' => 'Phenikaa Univeristy',
        ]);

        Book::create([
            'bookName' => 'Lap trinh Web 2',
            'bookCode' => 'LTW12294',
            'bookAuthor' => 'Phenikaa Univeristy',
        ]);
    }
}
