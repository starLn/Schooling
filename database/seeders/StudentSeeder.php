<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // //jangan lupa Use Schema
        // Schema::disableForeignKeyConstraints();
        // Student::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     ['name' => 'Novita', 'gender' => 'P', 'nis' => '0101001', 'class_id' => 2],
        //     ['name' => 'Gerald', 'gender' => 'L', 'nis' => '0101002', 'class_id' => 2],
        //     ['name' => 'Amarilis', 'gender' => 'P', 'nis' => '0101003', 'class_id' => 1],
        //     ['name' => 'Levt', 'gender' => 'L', 'nis' => '0101004', 'class_id' => 3],
        // ];

        // foreach ($data as $value) {
        //     //ClassRoom = nama model
        // Student::insert([
        // 'name' => $value['name'],
        // 'gender' => $value['gender'],
        // 'nis' => $value['nis'],
        // 'class_id' => $value['class_id'],
        // //waktu otomatis use Carbon
        // 'created_at' => Carbon::now(),
        // 'updated_at' => Carbon::now()
        // ]);
        // }
        Student::factory()->count(19)->create();
    }
}
