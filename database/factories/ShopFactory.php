<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shop::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->word();
        $picture = $this->faker->imageUrl($width = 640, $height = 480);
        $description = $this->faker->realText($maxNbChars = 200, $indexSize = 2);
        $phone = $this->faker->PhoneNumber;
        $adress = $this->faker->address;
        $code_postal = $this->faker->postcode;
        $country = $this->faker->country;

        return [
            'name' => $name,
            'picture' => $picture,
            'description' => $description,
            'phone' => $phone,
            'adress' => $adress,
            'code_postal' => $code_postal,
            'country' => $country,
        ];
    }
}
