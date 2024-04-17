<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subject_name' => $this->faker->cityPrefix(),
            'class' => $this->faker->randomElement(['JSS1', 'JSS2', 'JSS3', 'SS1', 'SS2', 'SS3']),
        ];
    }
}
