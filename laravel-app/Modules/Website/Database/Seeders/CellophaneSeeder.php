<?php

namespace Modules\Website\Database\Seeders;

use Modules\Website\App\Models\Cellophane;
use Illuminate\Database\Seeder;

class CellophaneSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $data = [
      // ['name', 'code']
      ['براق', 'shiny'],
      ['مات', 'matt'],
    ];

    foreach ($data as $value) {
      Cellophane::updateOrCreate([
        'name' => $value[0],
        'code' => $value[1],
      ]);
    }
  }
}
