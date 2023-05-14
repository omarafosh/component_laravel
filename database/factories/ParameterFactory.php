<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Attribute;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ParameterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $attributs = Attribute::all();
        $max_att=max($attributs->id);
        return [
            'attribut_id' => random_int(1, $max_att),
            'param_display' => fake()->name(),
            'param_value' => fake()->name(),
        ];
    }

}
