<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Company;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $users = collect();
        $companies = collect();

        $users->add(User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.hu',
            'password' => 'password'
        ]));

        $companyCount = rand(10,15);

        for ($i=0; $i < $companyCount; $i++) { 
            $companies->add(Company::factory()->create([
                'user_id' => $users->random()->id
            ]));
        }




    }
}
