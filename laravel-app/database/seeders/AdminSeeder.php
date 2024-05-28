<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
  public function run(): void
  {
    $data = [
      // ['username', 'email', 'password']
      ['admin', 'admin@chaparmansa.com', 'password']
    ];

    foreach ($data as $value) {
      Admin::updateOrCreate([
        'username' => $value[0],
        'email' => $value[1],
        'password' => Hash::make($value[2])
      ]);
    }
  }
}
