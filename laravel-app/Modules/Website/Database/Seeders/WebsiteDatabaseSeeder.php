<?php

namespace Modules\Website\Database\Seeders;

use Illuminate\Database\Seeder;

class WebsiteDatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $this->call([
      ServiceCategorySeeder::class,
      ServiceSeeder::class,
      SettingSeeder::class,
      BindingSeeder::class,
      BindingDirectionSeeder::class,
      CellophaneSeeder::class,
      ColorSeeder::class,
      CoverSeeder::class,
      PaperSeeder::class,
      SizeSeeder::class,
      FaqSeeder::class,
      AchievementSeeder::class,
    ]);
  }
}
