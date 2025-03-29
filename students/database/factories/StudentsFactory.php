<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
              //中文必須
        $faker = \Faker\Factory::create('zh_TW');

        return [
             //只回傳⼀筆資料的記錄
             'cName'=>$faker->name(3,4),
             'cSex' => $faker->randomElement($array = array ('F','M')),
             'cBirthday'=> $faker->dateTimeThisCentury->format('Y-m-d'),
             'cEmail' => $faker->email,
             'cPhone' => '09' . str_pad(mt_rand(0, 99999999), 8, '0', STR_PAD_LEFT),
             'cAddr'=> $faker->address(50),
             'cHeight'=> $faker->numberBetween($min = 150, $max = 200),
             'cWeight'=> $faker->numberBetween($min = 50, $max = 100)
        ];
    }
}