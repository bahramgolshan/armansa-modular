<?php

namespace Database\Seeders;

use App\Models\Paper;
use Illuminate\Database\Seeder;

class PaperSeeder extends Seeder
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
            ['تحریر ۷۰ گرم', 'tahrir-70'],
            ['تحریر ۸۰ گرم', 'tahrir-80'],
            ['گلاسه ۱۳۵ گرم', 'gelase-135'],
        ];

        foreach ($data as $value) {
            Paper::updateOrCreate([
                'name' => $value[0],
                'code' => $value[1],
            ]);
        }
    }
}
