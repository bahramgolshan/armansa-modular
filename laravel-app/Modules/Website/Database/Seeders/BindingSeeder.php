<?php

namespace Database\Seeders;

use App\Models\Binding;
use Illuminate\Database\Seeder;

class BindingSeeder extends Seeder
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
            ['جلد سخت گالینگور', 'hard-galingor'],
            ['جلد سخت سلفون کاور', 'hard-cellophane'],
            ['مفتول (منگنه)', 'maftool-mangane'],
            ['شومیز (ته‌چسب)', 'shomiz-tahchasb'],
            ['سیمی (فنر دوبل)', 'simi-double'],
            ['سیمی (فنر تک)', 'simi-single'],
        ];

        foreach ($data as $value) {
            Binding::updateOrCreate([
                'name' => $value[0],
                'code' => $value[1],
            ]);
        }
    }
}
