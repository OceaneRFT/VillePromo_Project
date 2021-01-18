<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {

        $name = $this->faker->word();
        $product_id = $this->faker->randomDigitNot(0);
        $description = $this->faker->realText($maxNbChars = 200, $indexSize = 2);
        $picture = $this->faker->imageUrl($width = 640, $height = 480); 

        return [
            'name' => $name,
            'product_id' => $product_id,
            'description' => $description,
            'picture' => $picture,
        ];
     
    }
}