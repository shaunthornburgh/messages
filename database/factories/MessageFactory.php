<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        do {
            $from = User::all()->random()->id;
            $to = User::all()->random()->id;
        } while ($from === $to);

        return [
            'from' => $from,
            'to' => $to,
            'text' => $this->faker->sentence()
        ];
    }


}
