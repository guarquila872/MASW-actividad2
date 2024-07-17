<?php

namespace Database\Seeders;

use App\Models\Consultorio;
use App\Models\Medico;
use App\Models\Paciente;
use App\Models\Persona;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use App\Models\Horarioatencion;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
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
        //     'Identificacion' => '1234567890',
        //     'TipoIdentificacion' => 'DNI',
        //     'Nombres' => 'Juan',
        //     'Apellidos' => 'Pérez',
        //     'Genero' => 'M',
        //     'Telefono' => '0987654321',
        //     'Direccion' => '123 Calle Principal',
        //     'Correo' => 'juan.perez@example.com',
        //     'GrupoSanguineo' => 'O+',
        //     'Titulo' => 'Ingeniero',
        // ]);

        // Persona::factory()->create([
        //     'Identificacion' => '0987654321',
        //     'TipoIdentificacion' => 'PAS',
        //     'Nombres' => 'Ana',
        //     'Apellidos' => 'Gómez',
        //     'Genero' => 'F',
        //     'Telefono' => '0123456789',
        //     'Direccion' => '456 Calle Secundaria',
        //     'Correo' => 'ana.gomez@example.com',
        //     'GrupoSanguineo' => 'A+',
        //     'Titulo' => 'Doctora',
        // ]);

        // Persona::factory()->create([
        //     'Identificacion' => '1111111111',
        //     'TipoIdentificacion' => 'DNI',
        //     'Nombres' => 'Carlos',
        //     'Apellidos' => 'Sánchez',
        //     'Genero' => 'M',
        //     'Telefono' => '1111111111',
        //     'Direccion' => '789 Calle Terciaria',
        //     'Correo' => 'carlos.sanchez@example.com',
        //     'GrupoSanguineo' => 'B+',
        //     'Titulo' => 'Arquitecto',
        // ]);

        // Persona::factory()->create([
        //     'Identificacion' => '2222222222',
        //     'TipoIdentificacion' => 'PAS',
        //     'Nombres' => 'María',
        //     'Apellidos' => 'Rodríguez',
        //     'Genero' => 'F',
        //     'Telefono' => '2222222222',
        //     'Direccion' => '123 Avenida Central',
        //     'Correo' => 'maria.rodriguez@example.com',
        //     'GrupoSanguineo' => 'AB+',
        //     'Titulo' => 'Abogada',
        // ]);

        // Persona::factory()->create([
        //     'Identificacion' => '3333333333',
        //     'TipoIdentificacion' => 'DNI',
        //     'Nombres' => 'Luis',
        //     'Apellidos' => 'Fernández',
        //     'Genero' => 'M',
        //     'Telefono' => '3333333333',
        //     'Direccion' => '456 Avenida Secundaria',
        //     'Correo' => 'luis.fernandez@example.com',
        //     'GrupoSanguineo' => 'O-',
        //     'Titulo' => 'Contador',
        // ]);

        // Persona::factory()->create([
        //     'Identificacion' => '4444444444',
        //     'TipoIdentificacion' => 'PAS',
        //     'Nombres' => 'Laura',
        //     'Apellidos' => 'Martínez',
        //     'Genero' => 'F',
        //     'Telefono' => '4444444444',
        //     'Direccion' => '789 Avenida Terciaria',
        //     'Correo' => 'laura.martinez@example.com',
        //     'GrupoSanguineo' => 'A-',
        //     'Titulo' => 'Enfermera',
        // ]);

        // Persona::factory()->create([
        //     'Identificacion' => '5555555555',
        //     'TipoIdentificacion' => 'DNI',
        //     'Nombres' => 'José',
        //     'Apellidos' => 'López',
        //     'Genero' => 'M',
        //     'Telefono' => '5555555555',
        //     'Direccion' => '123 Calle Cuarta',
        //     'Correo' => 'jose.lopez@example.com',
        //     'GrupoSanguineo' => 'B-',
        //     'Titulo' => 'Profesor',
        // ]);

        // Persona::factory()->create([
        //     'Identificacion' => '6666666666',
        //     'TipoIdentificacion' => 'PAS',
        //     'Nombres' => 'Sara',
        //     'Apellidos' => 'García',
        //     'Genero' => 'F',
        //     'Telefono' => '6666666666',
        //     'Direccion' => '456 Calle Quinta',
        //     'Correo' => 'sara.garcia@example.com',
        //     'GrupoSanguineo' => 'AB-',
        //     'Titulo' => 'Psicóloga',
        // ]);

        // Persona::factory()->create([
        //     'Identificacion' => '7777777777',
        //     'TipoIdentificacion' => 'DNI',
        //     'Nombres' => 'Miguel',
        //     'Apellidos' => 'Ramírez',
        //     'Genero' => 'M',
        //     'Telefono' => '7777777777',
        //     'Direccion' => '789 Calle Sexta',
        //     'Correo' => 'miguel.ramirez@example.com',
        //     'GrupoSanguineo' => 'O+',
        //     'Titulo' => 'Ingeniero',
        // ]);

        // Persona::factory()->create([
        //     'Identificacion' => '8888888888',
        //     'TipoIdentificacion' => 'PAS',
        //     'Nombres' => 'Marta',
        //     'Apellidos' => 'Hernández',
        //     'Genero' => 'F',
        //     'Telefono' => '8888888888',
        //     'Direccion' => '123 Calle Séptima',
        //     'Correo' => 'marta.hernandez@example.com',
        //     'GrupoSanguineo' => 'A+',
        //     'Titulo' => 'Doctora',
        // ]);

        // Persona::factory()->create([
        //     'Identificacion' => '9999999999',
        //     'TipoIdentificacion' => 'DNI',
        //     'Nombres' => 'Raúl',
        //     'Apellidos' => 'Jiménez',
        //     'Genero' => 'M',
        //     'Telefono' => '9999999999',
        //     'Direccion' => '456 Calle Octava',
        //     'Correo' => 'raul.jimenez@example.com',
        //     'GrupoSanguineo' => 'B+',
        //     'Titulo' => 'Abogado',
        // ]);

        // Persona::factory()->create([
        //     'Identificacion' => '0000000001',
        //     'TipoIdentificacion' => 'PAS',
        //     'Nombres' => 'Elena',
        //     'Apellidos' => 'Ruiz',
        //     'Genero' => 'F',
        //     'Telefono' => '0000000001',
        //     'Direccion' => '789 Calle Novena',
        //     'Correo' => 'elena.ruiz@example.com',
        //     'GrupoSanguineo' => 'AB+',
        //     'Titulo' => 'Arquitecta',
        // ]);

        // Persona::factory()->create([
        //     'Identificacion' => '0000000002',
        //     'TipoIdentificacion' => 'DNI',
        //     'Nombres' => 'Pedro',
        //     'Apellidos' => 'Torres',
        //     'Genero' => 'M',
        //     'Telefono' => '0000000002',
        //     'Direccion' => '123 Calle Décima',
        //     'Correo' => 'pedro.torres@example.com',
        //     'GrupoSanguineo' => 'O-',
        //     'Titulo' => 'Profesor',
        // ]);

        // Persona::factory()->create([
        //     'Identificacion' => '0000000003',
        //     'TipoIdentificacion' => 'PAS',
        //     'Nombres' => 'Lucía',
        //     'Apellidos' => 'Vázquez',
        //     'Genero' => 'F',
        //     'Telefono' => '0000000003',
        //     'Direccion' => '456 Calle Onceava',
        //     'Correo' => 'lucia.vazquez@example.com',
        //     'GrupoSanguineo' => 'A-',
        //     'Titulo' => 'Enfermera',
        // ]);

        // Persona::factory()->create([
        //     'Identificacion' => '0000000004',
        //     'TipoIdentificacion' => 'DNI',
        //     'Nombres' => 'Ricardo',
        //     'Apellidos' => 'Romero',
        //     'Genero' => 'M',
        //     'Telefono' => '0000000004',
        //     'Direccion' => '789 Calle Doceava',
        //     'Correo' => 'ricardo.romero@example.com',
        //     'GrupoSanguineo' => 'B-',
        //     'Titulo' => 'Contador',
        // ]);

        // Persona::factory()->create([
        //     'Identificacion' => '0000000005',
        //     'TipoIdentificacion' => 'PAS',
        //     'Nombres' => 'Patricia',
        //     'Apellidos' => 'Ortega',
        //     'Genero' => 'F',
        //     'Telefono' => '0000000005',
        //     'Direccion' => '123 Calle Treceava',
        //     'Correo' => 'patricia.ortega@example.com',
        //     'GrupoSanguineo' => 'AB-',
        //     'Titulo' => 'Psicóloga',
        // ]);

        // Persona::factory()->create([
        //     'Identificacion' => '0000000006',
        //     'TipoIdentificacion' => 'DNI',
        //     'Nombres' => 'Javier',
        //     'Apellidos' => 'Vega',
        //     'Genero' => 'M',
        //     'Telefono' => '0000000006',
        //     'Direccion' => '456 Calle Catorceava',
        //     'Correo' => 'javier.vega@example.com',
        //     'GrupoSanguineo' => 'O+',
        //     'Titulo' => 'Ingeniero',
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

        Persona::factory()->count(50)->create();
        Consultorio::factory()->count(5)->create();
        Medico::factory()->count(10)->create();
        Paciente::factory()->count(25)->create();

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

        Usuario::factory()->create([
            'Usuario' => 'admin',
            'Clave' => Hash::make('password'), // contraseña
            'Estado' => 'Activo',
            'FechaIn' => now(),
            'persona_id' => 1, // Asume que tienes registros en la tabla PERSONA
        ]);
        
    }
}