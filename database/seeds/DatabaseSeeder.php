<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('parking_state')->insert([
        	['estado' => 'DISPONIBLE', 'created_at' => '2017-05-02 00:00:00', 'updated_at' => '2017-05-02 00:00:00'],
            ['estado' => 'OCUPADO', 'created_at' => '2017-05-02 00:00:00', 'updated_at' => '2017-05-02 00:00:00']                                            
        ]);

        DB::table('type_vehicles')->insert([
            ['tipo' => 'CARRO', 'created_at' => '2017-05-02 00:00:00', 'updated_at' => '2017-05-02 00:00:00'],
            ['tipo' => 'CAMIONETA', 'created_at' => '2017-05-02 00:00:00', 'updated_at' => '2017-05-02 00:00:00'],
            ['tipo' => 'CAMION', 'created_at' => '2017-05-02 00:00:00', 'updated_at' => '2017-05-02 00:00:00'],
            ['tipo' => 'MOTO', 'created_at' => '2017-05-02 00:00:00', 'updated_at' => '2017-05-02 00:00:00'],
            ['tipo' => 'CICLA', 'created_at' => '2017-05-02 00:00:00', 'updated_at' => '2017-05-02 00:00:00'],  
            ['tipo' => 'OTRO', 'created_at' => '2017-05-02 00:00:00', 'updated_at' => '2017-05-02 00:00:00']
        ]);

        DB::table('tariffs')->insert([
        	['impuesto' => '0', 'valor_minuto' => '50', 'valor_hora' => '3000', 'valor_dia' => '20000', 'valor_noche' => '10000', 'valor_mes' => '120000', 'type_vehicle_id' => '1', 'created_at' => '2017-05-02 00:00:00', 'updated_at' => '2017-05-02 00:00:00'],

        	['impuesto' => '0', 'valor_minuto' => '50', 'valor_hora' => '3000', 'valor_dia' => '20000', 'valor_noche' => '10000', 'valor_mes' => '120000', 'type_vehicle_id' => '2', 'created_at' => '2017-05-02 00:00:00', 'updated_at' => '2017-05-02 00:00:00'],

        	['impuesto' => '0', 'valor_minuto' => '50', 'valor_hora' => '3500', 'valor_dia' => '25000', 'valor_noche' => '15000', 'valor_mes' => '130000', 'type_vehicle_id' => '3', 'created_at' => '2017-05-02 00:00:00', 'updated_at' => '2017-05-02 00:00:00'],

        	['impuesto' => '0', 'valor_minuto' => '25', 'valor_hora' => '1500', 'valor_dia' => '10000', 'valor_noche' => '8000', 'valor_mes' => '50000', 'type_vehicle_id' => '4', 'created_at' => '2017-05-02 00:00:00', 'updated_at' => '2017-05-02 00:00:00'],

        	['impuesto' => '0', 'valor_minuto' => '25', 'valor_hora' => '1500', 'valor_dia' => '10000', 'valor_noche' => '8000', 'valor_mes' => '50000', 'type_vehicle_id' => '5', 'created_at' => '2017-05-02 00:00:00', 'updated_at' => '2017-05-02 00:00:00']
        ]);


        DB::table('parkings')->insert([
            ['tipo_lugar' => 'CARRO', 'nombre_ubicacion' => 'A1', 'descripcion_ubicacion' => 'BLOQUE A', 'estado_id' => '1', 'created_at' => '2017-05-02 00:00:00', 'updated_at' => '2017-05-02 00:00:00' ],
            ['tipo_lugar' => 'CARRO', 'nombre_ubicacion' => 'A2', 'descripcion_ubicacion' => 'BLOQUE A', 'estado_id' => '1', 'created_at' => '2017-05-02 00:00:00', 'updated_at' => '2017-05-02 00:00:00' ],
            ['tipo_lugar' => 'CARRO', 'nombre_ubicacion' => 'A3', 'descripcion_ubicacion' => 'BLOQUE A', 'estado_id' => '1', 'created_at' => '2017-05-02 00:00:00', 'updated_at' => '2017-05-02 00:00:00' ],

            ['tipo_lugar' => 'CARRO', 'nombre_ubicacion' => 'B1', 'descripcion_ubicacion' => 'BLOQUE B', 'estado_id' => '1', 'created_at' => '2017-05-02 00:00:00', 'updated_at' => '2017-05-02 00:00:00' ],
            ['tipo_lugar' => 'CARRO', 'nombre_ubicacion' => 'B2', 'descripcion_ubicacion' => 'BLOQUE B', 'estado_id' => '1', 'created_at' => '2017-05-02 00:00:00', 'updated_at' => '2017-05-02 00:00:00' ],
            ['tipo_lugar' => 'CARRO', 'nombre_ubicacion' => 'B3', 'descripcion_ubicacion' => 'BLOQUE B', 'estado_id' => '1', 'created_at' => '2017-05-02 00:00:00', 'updated_at' => '2017-05-02 00:00:00' ],

        ]);

       
    }
}
