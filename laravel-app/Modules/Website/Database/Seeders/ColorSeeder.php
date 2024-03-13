<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
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
            ['تک رنگ', 'one-color'],
            ['چهار رنگ', 'four-colors'],
        ];

        foreach ($data as $value) {
            Color::updateOrCreate([
                'name' => $value[0],
                'code' => $value[1],
            ]);
        }
    }
}
