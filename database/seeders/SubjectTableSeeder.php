<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = [
            [
                'name' => 'Math',
                'description' => 'Math 1',
                'requirements' => 'Basic Math',
                'max_capacity' => '20',
            ],

            [
                'name' => 'Science',
                'description' => 'Science 1',
                'requirements' => 'Basic Science',
                'max_capacity' => '20',
            ],

            [
                'name' => 'Filipino',
                'description' => 'Filipino 1',
                'requirements' => 'Basic Filipino',
                'max_capacity' => '20',
            ],

            [
                'name' => 'English',
                'description' => 'English 1',
                'requirements' => 'Basic English',
                'max_capacity' => '20',
            ],
        ];

        foreach ($subjects as $subject) {
            DB::table('subjects')->insert([
                'name' => $subject['name'],
                'description' => $subject['description'],
                'requirements' => $subject['requirements'],
                'max_capacity' => $subject['max_capacity'],
            ]);
        }
    }
}
