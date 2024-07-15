<?php

namespace Database\Seeders;

use App\Models\Consultorio;
use App\Models\Medico;
use App\Models\Paciente;
use App\Models\Persona;
use App\Models\Horarioatencion;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
// {
//     /**
//      * Seed the application's database.
//      */
//     public function run(): void
//     {
//         // User::factory(10)->create();

//         User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);
//     }
// }

{    public function run(): void
    {
        // Consultorio::factory()->create([
        //     'Nombre' => 'Consultorio Medico A',
        //     'Ruc' => '1234567890',
        //     'NombreComercial' => 'ConsultMedA',
        //     'Direccion' => '123 Calle Principal',
        //     'Telefono' => '0987654321',
        //     'PorcentajeIva' => 12.50,
        //     'Logo' => 'https://via.placeholder.com/100',
        //     'Correo' => 'contacto@consultmeda.com',
        //     'DireccionMatriz' => '123 Calle Principal',
        //     'FechaIn' => '2022-01-01',
        //     'FechaUp' => '2023-01-01',
        //     'Estado' => 'activo',
        // ]);

        // Consultorio::factory()->create([
        //     'Nombre' => 'Consultorio Medico B',
        //     'Ruc' => '0987654321',
        //     'NombreComercial' => 'ConsultMedB',
        //     'Direccion' => '456 Calle Secundaria',
        //     'Telefono' => '0123456789',
        //     'PorcentajeIva' => 10.00,
        //     'Logo' => 'https://via.placeholder.com/100',
        //     'Correo' => 'contacto@consultmedb.com',
        //     'DireccionMatriz' => '456 Calle Secundaria',
        //     'FechaIn' => '2022-02-01',
        //     'FechaUp' => '2023-02-01',
        //     'Estado' => 'activo',
        // ]);

        // Consultorio::factory()->create([
        //     'Nombre' => 'Consultorio Medico C',
        //     'Ruc' => '1122334455',
        //     'NombreComercial' => 'ConsultMedC',
        //     'Direccion' => '789 Calle Terciaria',
        //     'Telefono' => '1122334455',
        //     'PorcentajeIva' => 15.00,
        //     'Logo' => 'https://via.placeholder.com/100',
        //     'Correo' => 'contacto@consultmedc.com',
        //     'DireccionMatriz' => '789 Calle Terciaria',
        //     'FechaIn' => '2022-03-01',
        //     'FechaUp' => '2023-03-01',
        //     'Estado' => 'inactivo',
        // ]);

        // Consultorio::factory()->create([
        //     'Nombre' => 'Consultorio Medico D',
        //     'Ruc' => '2233445566',
        //     'NombreComercial' => 'ConsultMedD',
        //     'Direccion' => '123 Avenida Central',
        //     'Telefono' => '2233445566',
        //     'PorcentajeIva' => 20.00,
        //     'Logo' => 'https://via.placeholder.com/100',
        //     'Correo' => 'contacto@consultmedd.com',
        //     'DireccionMatriz' => '123 Avenida Central',
        //     'FechaIn' => '2022-04-01',
        //     'FechaUp' => '2023-04-01',
        //     'Estado' => 'activo',
        // ]);

        // Consultorio::factory()->create([
        //     'Nombre' => 'Consultorio Medico E',
        //     'Ruc' => '3344556677',
        //     'NombreComercial' => 'ConsultMedE',
        //     'Direccion' => '456 Avenida Secundaria',
        //     'Telefono' => '3344556677',
        //     'PorcentajeIva' => 18.00,
        //     'Logo' => 'https://via.placeholder.com/100',
        //     'Correo' => 'contacto@consultmede.com',
        //     'DireccionMatriz' => '456 Avenida Secundaria',
        //     'FechaIn' => '2022-05-01',
        //     'FechaUp' => '2023-05-01',
        //     'Estado' => 'activo',
        // ]);

        // Consultorio::factory()->create([
        //     'Nombre' => 'Consultorio Medico F',
        //     'Ruc' => '4455667788',
        //     'NombreComercial' => 'ConsultMedF',
        //     'Direccion' => '789 Avenida Terciaria',
        //     'Telefono' => '4455667788',
        //     'PorcentajeIva' => 22.00,
        //     'Logo' => 'https://via.placeholder.com/100',
        //     'Correo' => 'contacto@consultmedf.com',
        //     'DireccionMatriz' => '789 Avenida Terciaria',
        //     'FechaIn' => '2022-06-01',
        //     'FechaUp' => '2023-06-01',
        //     'Estado' => 'inactivo',
        // ]);

        // Consultorio::factory()->create([
        //     'Nombre' => 'Consultorio Medico G',
        //     'Ruc' => '5566778899',
        //     'NombreComercial' => 'ConsultMedG',
        //     'Direccion' => '123 Calle Cuarta',
        //     'Telefono' => '5566778899',
        //     'PorcentajeIva' => 25.00,
        //     'Logo' => 'https://via.placeholder.com/100',
        //     'Correo' => 'contacto@consultmedg.com',
        //     'DireccionMatriz' => '123 Calle Cuarta',
        //     'FechaIn' => '2022-07-01',
        //     'FechaUp' => '2023-07-01',
        //     'Estado' => 'activo',
        // ]);

        // Consultorio::factory()->create([
        //     'Nombre' => 'Consultorio Medico H',
        //     'Ruc' => '6677889900',
        //     'NombreComercial' => 'ConsultMedH',
        //     'Direccion' => '456 Calle Quinta',
        //     'Telefono' => '6677889900',
        //     'PorcentajeIva' => 8.00,
        //     'Logo' => 'https://via.placeholder.com/100',
        //     'Correo' => 'contacto@consultmedh.com',
        //     'DireccionMatriz' => '456 Calle Quinta',
        //     'FechaIn' => '2022-08-01',
        //     'FechaUp' => '2023-08-01',
        //     'Estado' => 'inactivo',
        // ]);

        // Consultorio::factory()->create([
        //     'Nombre' => 'Consultorio Medico I',
        //     'Ruc' => '7788990011',
        //     'NombreComercial' => 'ConsultMedI',
        //     'Direccion' => '789 Calle Sexta',
        //     'Telefono' => '7788990011',
        //     'PorcentajeIva' => 17.00,
        //     'Logo' => 'https://via.placeholder.com/100',
        //     'Correo' => 'contacto@consultmedi.com',
        //     'DireccionMatriz' => '789 Calle Sexta',
        //     'FechaIn' => '2022-09-01',
        //     'FechaUp' => '2023-09-01',
        //     'Estado' => 'activo',
        // ]);

        // Consultorio::factory()->create([
        //     'Nombre' => 'Consultorio Medico J',
        //     'Ruc' => '8899001122',
        //     'NombreComercial' => 'ConsultMedJ',
        //     'Direccion' => '123 Calle Séptima',
        //     'Telefono' => '8899001122',
        //     'PorcentajeIva' => 19.00,
        //     'Logo' => 'https://via.placeholder.com/100',
        //     'Correo' => 'contacto@consultmedj.com',
        //     'DireccionMatriz' => '123 Calle Séptima',
        //     'FechaIn' => '2022-10-01',
        //     'FechaUp' => '2023-10-01',
        //     'Estado' => 'inactivo',
        // ]);

        // Persona::factory()->create([
        //     'identificacion' => '1234567890',
        //     'tipo_id' => 'DNI',
        //     'nombres' => 'Juan',
        //     'apellidos' => 'Pérez',
        //     'genero' => 'M',
        //     'telefono' => '0987654321',
        //     'direccion' => '123 Calle Principal',
        //     'correo' => 'juan.perez@example.com',
        //     'grupo_sanguineo' => 'O+',
        //     'titulo' => 'Ingeniero',
        // ]);

        // Persona::factory()->create([
        //     'identificacion' => '0987654321',
        //     'tipo_id' => 'PASAPORTE',
        //     'nombres' => 'Ana',
        //     'apellidos' => 'Gómez',
        //     'genero' => 'F',
        //     'telefono' => '0123456789',
        //     'direccion' => '456 Calle Secundaria',
        //     'correo' => 'ana.gomez@example.com',
        //     'grupo_sanguineo' => 'A+',
        //     'titulo' => 'Doctora',
        // ]);

        // Persona::factory()->create([
        //     'identificacion' => '1111111111',
        //     'tipo_id' => 'DNI',
        //     'nombres' => 'Carlos',
        //     'apellidos' => 'Sánchez',
        //     'genero' => 'M',
        //     'telefono' => '1111111111',
        //     'direccion' => '789 Calle Terciaria',
        //     'correo' => 'carlos.sanchez@example.com',
        //     'grupo_sanguineo' => 'B+',
        //     'titulo' => 'Arquitecto',
        // ]);

        // Persona::factory()->create([
        //     'identificacion' => '2222222222',
        //     'tipo_id' => 'PASAPORTE',
        //     'nombres' => 'María',
        //     'apellidos' => 'Rodríguez',
        //     'genero' => 'F',
        //     'telefono' => '2222222222',
        //     'direccion' => '123 Avenida Central',
        //     'correo' => 'maria.rodriguez@example.com',
        //     'grupo_sanguineo' => 'AB+',
        //     'titulo' => 'Abogada',
        // ]);

        // Persona::factory()->create([
        //     'identificacion' => '3333333333',
        //     'tipo_id' => 'DNI',
        //     'nombres' => 'Luis',
        //     'apellidos' => 'Fernández',
        //     'genero' => 'M',
        //     'telefono' => '3333333333',
        //     'direccion' => '456 Avenida Secundaria',
        //     'correo' => 'luis.fernandez@example.com',
        //     'grupo_sanguineo' => 'O-',
        //     'titulo' => 'Contador',
        // ]);

        // Persona::factory()->create([
        //     'identificacion' => '4444444444',
        //     'tipo_id' => 'PASAPORTE',
        //     'nombres' => 'Laura',
        //     'apellidos' => 'Martínez',
        //     'genero' => 'F',
        //     'telefono' => '4444444444',
        //     'direccion' => '789 Avenida Terciaria',
        //     'correo' => 'laura.martinez@example.com',
        //     'grupo_sanguineo' => 'A-',
        //     'titulo' => 'Enfermera',
        // ]);

        // Persona::factory()->create([
        //     'identificacion' => '5555555555',
        //     'tipo_id' => 'DNI',
        //     'nombres' => 'José',
        //     'apellidos' => 'López',
        //     'genero' => 'M',
        //     'telefono' => '5555555555',
        //     'direccion' => '123 Calle Cuarta',
        //     'correo' => 'jose.lopez@example.com',
        //     'grupo_sanguineo' => 'B-',
        //     'titulo' => 'Profesor',
        // ]);

        // Persona::factory()->create([
        //     'identificacion' => '6666666666',
        //     'tipo_id' => 'PASAPORTE',
        //     'nombres' => 'Sara',
        //     'apellidos' => 'García',
        //     'genero' => 'F',
        //     'telefono' => '6666666666',
        //     'direccion' => '456 Calle Quinta',
        //     'correo' => 'sara.garcia@example.com',
        //     'grupo_sanguineo' => 'AB-',
        //     'titulo' => 'Psicóloga',
        // ]);

        // Persona::factory()->create([
        //     'identificacion' => '7777777777',
        //     'tipo_id' => 'DNI',
        //     'nombres' => 'Miguel',
        //     'apellidos' => 'Ramírez',
        //     'genero' => 'M',
        //     'telefono' => '7777777777',
        //     'direccion' => '789 Calle Sexta',
        //     'correo' => 'miguel.ramirez@example.com',
        //     'grupo_sanguineo' => 'O+',
        //     'titulo' => 'Ingeniero',
        // ]);

        // Persona::factory()->create([
        //     'identificacion' => '8888888888',
        //     'tipo_id' => 'PASAPORTE',
        //     'nombres' => 'Marta',
        //     'apellidos' => 'Hernández',
        //     'genero' => 'F',
        //     'telefono' => '8888888888',
        //     'direccion' => '123 Calle Séptima',
        //     'correo' => 'marta.hernandez@example.com',
        //     'grupo_sanguineo' => 'A+',
        //     'titulo' => 'Doctora',
        // ]);

        // Persona::factory()->create([
        //     'identificacion' => '9999999999',
        //     'tipo_id' => 'DNI',
        //     'nombres' => 'Raúl',
        //     'apellidos' => 'Jiménez',
        //     'genero' => 'M',
        //     'telefono' => '9999999999',
        //     'direccion' => '456 Calle Octava',
        //     'correo' => 'raul.jimenez@example.com',
        //     'grupo_sanguineo' => 'B+',
        //     'titulo' => 'Abogado',
        // ]);

        // Persona::factory()->create([
        //     'identificacion' => '0000000001',
        //     'tipo_id' => 'PASAPORTE',
        //     'nombres' => 'Elena',
        //     'apellidos' => 'Ruiz',
        //     'genero' => 'F',
        //     'telefono' => '0000000001',
        //     'direccion' => '789 Calle Novena',
        //     'correo' => 'elena.ruiz@example.com',
        //     'grupo_sanguineo' => 'AB+',
        //     'titulo' => 'Arquitecta',
        // ]);

        // Persona::factory()->create([
        //     'identificacion' => '0000000002',
        //     'tipo_id' => 'DNI',
        //     'nombres' => 'Pedro',
        //     'apellidos' => 'Torres',
        //     'genero' => 'M',
        //     'telefono' => '0000000002',
        //     'direccion' => '123 Calle Décima',
        //     'correo' => 'pedro.torres@example.com',
        //     'grupo_sanguineo' => 'O-',
        //     'titulo' => 'Profesor',
        // ]);

        // Persona::factory()->create([
        //     'identificacion' => '0000000003',
        //     'tipo_id' => 'PASAPORTE',
        //     'nombres' => 'Lucía',
        //     'apellidos' => 'Vázquez',
        //     'genero' => 'F',
        //     'telefono' => '0000000003',
        //     'direccion' => '456 Calle Onceava',
        //     'correo' => 'lucia.vazquez@example.com',
        //     'grupo_sanguineo' => 'A-',
        //     'titulo' => 'Enfermera',
        // ]);

        // Persona::factory()->create([
        //     'identificacion' => '0000000004',
        //     'tipo_id' => 'DNI',
        //     'nombres' => 'Ricardo',
        //     'apellidos' => 'Romero',
        //     'genero' => 'M',
        //     'telefono' => '0000000004',
        //     'direccion' => '789 Calle Doceava',
        //     'correo' => 'ricardo.romero@example.com',
        //     'grupo_sanguineo' => 'B-',
        //     'titulo' => 'Contador',
        // ]);

        // Persona::factory()->create([
        //     'identificacion' => '0000000005',
        //     'tipo_id' => 'PASAPORTE',
        //     'nombres' => 'Patricia',
        //     'apellidos' => 'Ortega',
        //     'genero' => 'F',
        //     'telefono' => '0000000005',
        //     'direccion' => '123 Calle Treceava',
        //     'correo' => 'patricia.ortega@example.com',
        //     'grupo_sanguineo' => 'AB-',
        //     'titulo' => 'Psicóloga',
        // ]);

        // Persona::factory()->create([
        //     'identificacion' => '0000000006',
        //     'tipo_id' => 'DNI',
        //     'nombres' => 'Javier',
        //     'apellidos' => 'Vega',
        //     'genero' => 'M',
        //     'telefono' => '0000000006',
        //     'direccion' => '456 Calle Catorceava',
        //     'correo' => 'javier.vega@example.com',
        //     'grupo_sanguineo' => 'O+',
        //     'titulo' => 'Ingeniero',
        // ]);


        // Medico::factory()->create([
        //     'Especialidad' => 'Cardiología',
        //     'Subespecialidad' => 'Cardiología Intervencionista',
        //     'NumeroCarnet' => 'C123456',
        //     'IdPersona' => 1,
        //     'IdConsultorio' => 1,
        // ]);

        // Medico::factory()->create([
        //     'Especialidad' => 'Dermatología',
        //     'Subespecialidad' => 'Dermatopatología',
        //     'NumeroCarnet' => 'D123456',
        //     'IdPersona' => 2,
        //     'IdConsultorio' => 2,
        // ]);

        // Medico::factory()->create([
        //     'Especialidad' => 'Neurología',
        //     'Subespecialidad' => 'Neurofisiología',
        //     'NumeroCarnet' => 'N123456',
        //     'IdPersona' => 3,
        //     'IdConsultorio' => 3,
        // ]);

        // Medico::factory()->create([
        //     'Especialidad' => 'Pediatría',
        //     'Subespecialidad' => 'Neonatología',
        //     'NumeroCarnet' => 'P123456',
        //     'IdPersona' => 4,
        //     'IdConsultorio' => 4,
        // ]);

        // Medico::factory()->create([
        //     'Especialidad' => 'Oftalmología',
        //     'Subespecialidad' => 'Oftalmología Pediátrica',
        //     'NumeroCarnet' => 'O123456',
        //     'IdPersona' => 5,
        //     'IdConsultorio' => 5,
        // ]);

        // Medico::factory()->create([
        //     'Especialidad' => 'Ginecología',
        //     'Subespecialidad' => 'Ginecología Oncológica',
        //     'NumeroCarnet' => 'G123456',
        //     'IdPersona' => 6,
        //     'IdConsultorio' => 6,
        // ]);

        // Medico::factory()->create([
        //     'Especialidad' => 'Urología',
        //     'Subespecialidad' => 'Urología Pediátrica',
        //     'NumeroCarnet' => 'U123456',
        //     'IdPersona' => 7,
        //     'IdConsultorio' => 7,
        // ]);

        // Medico::factory()->create([
        //     'Especialidad' => 'Endocrinología',
        //     'Subespecialidad' => 'Endocrinología Pediátrica',
        //     'NumeroCarnet' => 'E123456',
        //     'IdPersona' => 8,
        //     'IdConsultorio' => 8,
        // ]);

        // Paciente::factory()->create([
        //     'NumeroExpediente' => 'EXP001',
        //     'IdPersona' => 1,
        // ]);
        
        // Paciente::factory()->create([
        //     'NumeroExpediente' => 'EXP002',
        //     'IdPersona' => 2,
        // ]);
        
        // Paciente::factory()->create([
        //     'NumeroExpediente' => 'EXP003',
        //     'IdPersona' => 3,
        // ]);
        
        // Paciente::factory()->create([
        //     'NumeroExpediente' => 'EXP004',
        //     'IdPersona' => 4,
        // ]);
        
        // Paciente::factory()->create([
        //     'NumeroExpediente' => 'EXP005',
        //     'IdPersona' => 5,
        // ]);
        
        // Paciente::factory()->create([
        //     'NumeroExpediente' => 'EXP006',
        //     'IdPersona' => 6,
        // ]);
        
        // Paciente::factory()->create([
        //     'NumeroExpediente' => 'EXP007',
        //     'IdPersona' => 7,
        // ]);
        
        // Paciente::factory()->create([
        //     'NumeroExpediente' => 'EXP008',
        //     'IdPersona' => 8,
        // ]);
        
        // Paciente::factory()->create([
        //     'NumeroExpediente' => 'EXP009',
        //     'IdPersona' => 9,
        // ]);
        
        // Paciente::factory()->create([
        //     'NumeroExpediente' => 'EXP010',
        //     'IdPersona' => 10,
        // ]);
        
        // Paciente::factory()->create([
        //     'NumeroExpediente' => 'EXP011',
        //     'IdPersona' => 11,
        // ]);
        
        // Paciente::factory()->create([
        //     'NumeroExpediente' => 'EXP012',
        //     'IdPersona' => 12,
        // ]);

        // Paciente::factory()->create([
        //     'NumeroExpediente' => 'EXP012',
        //     'IdPersona' => 12,
        // ]);

        // Paciente::factory()->create([
        //     'NumeroExpediente' => 'EXP012',
        //     'IdPersona' => 12,
        // ]);

        Horarioatencion::factory()->create([
            'Nombre' => 'Diario',
            'HoraInicio' => '07:30',
            'HoraFin' => '05:30',
            'HoraInicioReceso' => '12:00',
            'HoraFinReceso' => '13:30',
        ]);

        Horarioatencion::factory()->create([
            'Nombre' => 'Medio día',
            'HoraInicio' => '07:30',
            'HoraFin' => '12:30',
            'HoraInicioReceso' => '00:00',
            'HoraFinReceso' => '00:00',
        ]);


        Horarioatencion::factory()->create([
            'Nombre' => 'Feriado Laborable',
            'HoraInicio' => '09:30',
            'HoraFin' => '13:00',
            'HoraInicioReceso' => '00:00',
            'HoraFinReceso' => '00:00',
        ]);
        
    }
}