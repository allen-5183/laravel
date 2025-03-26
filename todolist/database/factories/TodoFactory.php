<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Todo;

class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    //使用 $model 來指定使用的 Todo Model
    protected $model = Todo::class;

    /**
     * 建立一個新的工廠實例。
     *
     * @return void
     */

    public function definition()
    {
        return [
         // 使用 faker 來產生不同的繁體中文文字
         'body' => $this->faker->realText( 50)
        ];
    }
}
