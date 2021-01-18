<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->word();
        $category_id = $this->faker->randomDigitNot(0);
        $description = $this->faker->realText($maxNbChars = 400, $indexSize = 2);
        $price = $this->faker->randomDigitNot(0);
        $SKU = $this->faker->randomDigit; 
        $picture = $this->faker->imageUrl($width = 640, $height = 480);

        return [
            'name' => $name,
            'category_id' => $category_id,
            'description' => $description,
            'price' => $price,
            'SKU' => $SKU,
            'picture' => $picture,
        ];
    }
}
