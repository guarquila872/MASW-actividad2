<?php


namespace Database\Factories;
use App\Models\Medico;
use App\Models\Persona;
use App\Models\Consultorio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medico>
 */
class MedicoFactory extends Factory
{
    protected $model = Medico::class;

    public function definition()
    {
        return [
            'Especialidad' => $this->faker->randomElement(['Cardiología', 'Dermatología', 'Neurología', 'Pediatría', 'Oftalmología']),
            'Subespecialidad' => $this->faker->randomElement(['Cardiología Intervencionista', 'Dermatopatología', 'Neurofisiología', 'Neonatología', 'Oftalmología Pediátrica']),
            'NumeroCarnet' => $this->faker->unique()->numerify('CARNET######'),
            'IdPersona' => Persona::factory(),
            'IdConsultorio' => Consultorio::factory(),
        ];
    }
}
