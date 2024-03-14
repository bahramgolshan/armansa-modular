<?php

namespace Modules\Website\Database\Seeders;

use Modules\Website\App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $data = [
      // ['name', 'code', 'service_category]
      ['digital', 'digital-print', 1]
    ];

    foreach ($data as $value) {
      Service::updateOrCreate([
        'name' => $value[0],
        'code' => $value[1],
        'service_category_id' => $value[2],
      ]);
    }
  }
}
