<?php

namespace Modules\Website\Database\Seeders;

use Modules\Website\App\Models\Size;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
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
      ['رحلی - ۲۰×۱۴/۲ (بعد از برش)', 'rahli'],
      ['رحلی بیاضی - ۲۹×۲۰ (بعد از برش)', 'rahlibayazi'],
      ['وزیری - ۲۳/۵×۱۷ (بعد از برش)', 'vaziri'],
      ['نیمه‌وزیری - ۱۶/۵×۱۲ (بعد از برش)', 'nimevaziri'],
      ['رقعی - ۱۵×۱۴/۲ (بعد از برش)', 'roghei'],
      ['پالتویی - ۲۱×۱۱ (بعد از برش)', 'paltoei'],
      ['خشتی - ۲۰×۲۰ (بعد از برش)', 'kheshti'],
    ];

    foreach ($data as $value) {
      Size::updateOrCreate([
        'name' => $value[0],
        'code' => $value[1],
      ]);
    }
  }
}
