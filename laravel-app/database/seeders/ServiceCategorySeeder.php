<?php

namespace Database\Seeders;

use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;

class ServiceCategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $data = [
      // ['name', 'description']
      ['print', 'پرینت']
    ];

    foreach ($data as $value) {
      ServiceCategory::updateOrCreate([
        'name' => $value[0],
        'description' => $value[1],
      ]);
    }
  }
}
