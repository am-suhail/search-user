<?php

namespace Database\Seeders;
use App\Models\Userdetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Mark Hentry',
                'fk_department' => 1,
                'fk_designation' => 1,
                'phone_number' => '9876543210'
            ],
            [
                'name' => 'Bob Smith',
                'fk_department' => 2,
                'fk_designation' => 2,
                'phone_number' => '3456547653'
            ],
            [
                'name' => 'John Doe',
                'fk_department' => 3,
                'fk_designation' => 3,
                'phone_number' => '0956734123'
            ],
            [
                'name' => 'Tommy Mark',
                'fk_department' => 4,
                'fk_designation' => 4,
                'phone_number' => '9089097678'
            ],
            [
                'name' => 'David Lee',
                'fk_department' => 5,
                'fk_designation' => 5,
                'phone_number' => '9375657465'
            ],
            [
                'name' => 'Daniel Wilson',
                'fk_department' => 6,
                'fk_designation' => 6,
                'phone_number' => '1232314232'
            ],
          
        ];

        foreach ($data as $item) {
            Userdetails::create($item);
        }
    }
}
