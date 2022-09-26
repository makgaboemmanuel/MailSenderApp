<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;


class ContactFactory extends Factory
{
    /**
     * @var string
    */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstname,
            'lastname' => $this->faker->lastname,
            'email' => $this->faker->name,
            'company' => $this->faker->company,
            'phone_number' => $this->faker->phone_number,
            'message' => $this->faker->message
        ];
    }
}
