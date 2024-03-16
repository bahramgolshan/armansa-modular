<?php

namespace Modules\Website\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Website\App\Models\BindingDirection;

class BindingDirectionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $data = [
      // ['name', 'code']
      ['فارسی افقی', 'fa_v'],
      ['فارسی عمودی', 'fa_h'],
      ['انگلیسی افقی', 'en_v'],
      ['انگلیسی عمودی', 'en_h'],
    ];

    foreach ($data as $value) {
      BindingDirection::updateOrCreate([
        'name' => $value[0],
        'code' => $value[1],
      ]);
    }
  }
}
