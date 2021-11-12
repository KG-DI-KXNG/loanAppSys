<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BorrowerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $dob = \rand(1940,2021)."-". \rand(1,12)."-". \rand(1,30);
        $newDate = date("Y-m-d", strtotime($dob));
        return [
            'loan_type_id'=>\rand(1,3),
            'profile_photo' => 'kglogo.jpg',
            'fname' => $this->faker->firstName(),
            'lname' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'contact' => $this->faker->phoneNumber(),
            'age' => date_diff(date_create($newDate), date_create('now'))->y,
            'dob' => $newDate,
            'address' => $this->faker->address(),
            'loan_amt' => 1000,
            'proof_of_id' => "kglogo.jpg",
            'proof_of_income' => "kglogo.jpg",
            'trn' => $this->faker->randomDigit(),
        ];
    }
}
