<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\models\Attribute;
use App\models\User;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $attributs=Attribute::all();
        $categorys=Category::all();
        $users=User::all();
        $max_att=max($attributs->id);
        $max_cat=max($categorys->id);
        $max_user=max($users->id);
        return [
            'category_id'=>random_int(1,$max_cat) ,
            'attribut_id'=>random_int(1,$max_att) ,
            'user_id'=>random_int(1,$max_user) ,
            'name' => fake()->name(),
            'description' => fake()->paragraph(),
            'evaluation' => fake()->STR::random_int(0,5),
            'quantity' => fake()->STR::random_int(2,9)(),
            'price' => fake()->Str::range(1500.00,3750.00),
            'old_price' => fake()->Str::range(1500.00,3750.00),
            'total' => fake()->Str::range(3500.00,1000000.00),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
