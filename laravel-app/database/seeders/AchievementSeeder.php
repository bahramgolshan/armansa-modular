<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
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
      ['بیش از', 111, 'توضیح آمار اول', 1, true],
      ['بیش از', 222, 'توضیح آمار دوم', 2, true],
      ['بیش از', 333, 'توضیح آمار سوم', 3, true],
      ['بیش از', 444, 'توضیح آمار چهارم', 4, false],
    ];

    foreach ($data as $value) {
      Achievement::updateOrCreate([
        'prefix' => $value[0],
        'number' => $value[1],
        'suffix' => $value[2],
        'order' => $value[3],
        'is_featured' => $value[4],
      ]);
    }
  }
}
