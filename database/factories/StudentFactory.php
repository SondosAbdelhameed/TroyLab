<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Student;
use App\Models\School;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class StudentFactory extends Factory
{

  protected $model = Student::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $school_id = $this->faker->randomElement(School::all()->pluck('id')->toArray());
        $order = Student::where('school_id',$school_id)->count();
        return [
            'name' => $this->faker->name(30),
            'status' => 'active',
            'order' => $order+1,
            'school_id' => $school_id,
        ];
    }
}
