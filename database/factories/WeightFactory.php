<?php

namespace Database\Factories;

use App\Models\Weight;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class WeightFactory extends Factory
{
    protected $model = Weight::class;

    public function definition()
    {
        return [
            'weight' => $this->faker->numberBetween(170, 250),
            'date' => Carbon::range(
                Carbon::now()->subMonths(30),
                Carbon::now()
            )->random(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
