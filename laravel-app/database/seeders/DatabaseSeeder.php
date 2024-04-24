<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    $this->call([
      AdminSeeder::class,
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

      // WebsiteDatabaseSeeder::class,
    ]);
  }
}
