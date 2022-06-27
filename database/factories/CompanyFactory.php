<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Company::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email,
//            'image' => $this->faker->image(storage_path('app/public/cz_logo'),640,480, null, false),
            'website' => $this->faker->url(),
        ];
    }
}
