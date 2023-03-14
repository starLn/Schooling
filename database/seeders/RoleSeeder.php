<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //jangan lupa Use Schema
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => 'Admin'],
            ['name' => 'Teacher'],
            ['name' => 'Student'],
        ];

            foreach ($data as $value) {
                //ClassRoom = nama model
            Role::insert([
            'name' => $value['name'],
            //waktu otomatis use Carbon
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
            }
    }
}
