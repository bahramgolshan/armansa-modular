<?php

namespace Database\Seeders;

use App\Models\Cover;
use Illuminate\Database\Seeder;

class CoverSeeder extends Seeder
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
            ['گلاسه ۲۵۰ گرم', 'gelase-250'],
        ];

        foreach ($data as $value) {
            Cover::updateOrCreate([
                'name' => $value[0],
                'code' => $value[1],
            ]);
        }
    }
}
