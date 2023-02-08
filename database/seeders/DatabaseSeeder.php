<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            //PARENT TABLE HARUS YANG PALING ATAS DARI PADA CHILD TABLE (YANG ADA FOREIGN KEY DARI FOREIGN KEY YANG DI TABLE RELASI)
            ClassSeeder::class,
            StudentSeeder::class,
        ]);
    }
}
