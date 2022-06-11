<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\ContactForm;;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactForm>
 */
class ContactFormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Book::class;

    public function definition()
    {
        return [
            'your_name' => Str::random(20),
            'email'     => Str::random(20).'@email.com',
            'url'       => Str::random(20),
            'gender'    => rand(0,1),
            'age'       => rand(1,6),
            'contact'   => Str::random(200)
        ];
    }
}
