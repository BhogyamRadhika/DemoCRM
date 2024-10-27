<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BusinessInfoDetails;


class BusinessInfoDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BusinessInfoDetails::create([
            'name' => 'Business One',
            'description' => 'Description for Business One',
            'country' => 'Country A',
            'state' => 'State A',
            'city' => 'City A',
            'address' => 'Address One',
            'pincode' => '123456',
            'email' => 'contact@businessone.com',
            'phone' => '123-456-7890',
            'website' => 'https://businessone.com',
            'status' => 'Active',
            'source' => 'Referral',
            'opportunity' => 'Opportunity 1',
            'industry' => 'Industry 1',
            'assign_user' => 1, // Assuming user ID 1 exists
            'intelligence_description' => 'Business One intelligence description.',
            'remark_date' => '2024-09-29',
            'remark_description' => 'First remark for Business One.',
        ]);

    }
}
