<?php

namespace Database\Factories;

use App\Models\Horarioatencion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Horarioatencion>
 */
class HorarioatencionFactory extends Factory
{
    protected $model = Horarioatencion::class;

    public function definition()
    {
        return [
            'Nombre' => $this->faker->company,
            'HoraInicio' => $this->faker->company,
            'HoraFin' => $this->faker->company,
            'HoraInicioReceso' => $this->faker->company,
            'HoraFinReceso' => $this->faker->company,
        ];
    }
}
