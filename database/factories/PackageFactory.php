<?php

namespace Database\Factories;

use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PackageFactory extends Factory
{
    protected $model = Package::class;

    public function definition()
    {
        return [

            'platform'=> 'TTS', 
            'tracking_number'=> Str::random(10),
            'order_id'=> $this->faker->numberBetween($min = 570000, $max = 999999),
            'country'=> Str::random(4),
            'method'=> Str::random(8),
            'paid_date'=> $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'shipped_month'=> '2022-10',
            'shipped_week'=> 'wk42',
            'shipped_date'=> '2022-10-15',
            'amount'=> 100,
            'ship_fee'=> 8,
            'currency'=> 'TTS',
            'items'=> 10,
            'weight'=> 10,
            'logistics_status'=> 0,
            'is_closed'=> 0,


        ];
    }
}

// php artisan migrate:refresh --seed