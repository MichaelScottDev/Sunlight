<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        Admin::updateOrCreate(
            ['email' => 'kostakondratenko77@yahoo.com'],
            [
                'name'     => 'Kosta',
                'password' => Hash::make('SunlightQ@2026!'),
            ]
        );
    }
}
