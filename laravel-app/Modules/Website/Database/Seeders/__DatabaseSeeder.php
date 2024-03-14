<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ServiceCategorySeeder::class,
            ServiceSeeder::class,
            SettingSeeder::class,
            BindingSeeder::class,
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
