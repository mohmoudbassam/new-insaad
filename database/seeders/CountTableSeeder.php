<?php

namespace Database\Seeders;

use App\Models\Count;
use App\Models\AboutUs;
use App\Models\Policies;
use Illuminate\Database\Seeder;

class CountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $counts = [
            [
                'count' => 30000,
                'image' => 'assets/website/images/users.svg',
                "ar" => [
                    'name' => "طاقة تشغيلية عالية",
                    "item" => "طلب / يوم"
                ],
                "en" => [
                    'name' => "High operating capacity",
                    "item" => "request / day"
                ]
            ], [
                'count' => 25,
                'image' => 'assets/website/images/vehicle.svg',
                "ar" => [
                    'name' => "شركات شحن متعددة",
                    'item' => "ناقل بين يديك"
                ],
                "en" => [
                    'name' => "Multiple shipping companies",
                    'item' => "conveyor in your hands"
                ]
            ], [
                'count' => 15000,
                'image' => 'assets/website/images/spaces.svg',
                "ar" => [
                    'name' => "مساحات شاسعة",
                    "item" => "م2"
                ],
                "en" => [
                    'name' => "vast spaces",
                    "item" => "M2"
                ]
            ]
        ];
        foreach ($counts as $count) {
            Count::create($count);
        }

    }
}
