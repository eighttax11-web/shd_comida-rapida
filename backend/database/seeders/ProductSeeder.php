<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Hamburguesa sencilla',
            'description' => 'Hamburguesa con 200 gr de carne, queso amarillo, queso blanco, tocino',
			'price' => 50.00,
            'image' => 'https://www.hogar.mapfre.es/media/2018/09/hamburguesa-sencilla.jpg'
        ]);

        Product::create([
            'name' => 'Hamburguesa Rapidin Especial',
            'description' => 'Hamburguesa con 400 gr de carne, queso amarillo, aros de cebolla, queso blanco, tocino',
			'price' => 90.00,
            'image' => 'https://i.pinimg.com/564x/03/1e/b3/031eb3a822381a0c5dff233d6403e7b5.jpg'
        ]);

        Product::create([
            'name' => 'Hot dog sencillo',
            'description' => 'Hot-dog con tocino, jitomate, cebolla',
			'price' => 20.00,
            'image' => 'https://jackyspizza.com/wp-content/uploads/2017/06/14.jpg'
        ]);

        Product::create([
            'name' => 'Hot dog Rapidin Especial',
            'description' => 'Hot-dog con tocino, salchicha adicional, queso oaxaca, aros de cebolla',
			'price' => 50.00,
            'image' => 'https://juegoscocinarpasteleria.org/wp-content/uploads/2020/02/1582692364_Tocino-y-cebolla-frita-BBQ-Hot-Dogs.jpg'
        ]);

        Product::create([
            'name' => 'Orden de Boneless',
            'description' => 'Tipos de aderezo: Ranch, BBQ, Mango Habanero, Tabasco, Diablas (10 boneless)',
			'price' => 70.00,
            'image' => 'https://franksredhot.com.mx/files/recetas/2020/Boneless.jpg'
        ]);

        Product::create([
            'name' => 'Orden de alitas',
            'description' => 'Tipos de aderezo: Ranch, BBQ, Mango Habanero, Tabasco, Diablas (10 alitas)',
			'price' => 70.00,
            'image' => 'https://www.superama.com.mx/views/micrositio/recetas/images/masbuscadas/alitas/Web_fotoreceta.jpg'
        ]);

        Product::create([
            'name' => 'Pizza Italiana',
            'description' => 'Deliciosa pizza estilo italiano realizada con ingredientes característicos y especias aromatizadas',
			'price' => 130.00,
            'image' => 'https://cdn1.intriper.com/wp-content/uploads/2020/06/19173148/italia-pizza-aurelien-lemasson-unsplash.jpg'
        ]);

        Product::create([
            'name' => 'Pizza Hawaiana',
            'description' => 'Deliciosa pizza estilo tropical, al sartén',
			'price' => 120.00,
            'image' => 'https://static.diariovasco.com/www/multimedia/202005/28/media/cortadas/pizza-hawaiana-origen-k0JE-U110335209320r4C-1248x770@Diario%20Vasco.jpg'
        ]);

        Product::create([
            'name' => 'Pizza Española ',
            'description' => 'Deliciosa pizza estilo español, con jamón serrano, tocino, al sarten',
			'price' => 150.00,
            'image' => 'https://espanafascinante.com/wp-content/uploads/pizza-espa%C3%B1ola_1.jpg'
        ]);

        Product::create([
            'name' => 'Nachos Rapidines',
            'description' => 'Nachos con queso fundido, trozos de rib eye, jalapeños y trocitos de tocino',
			'price' => 90.00,
            'image' => 'https://saboryestilo.com.mx/wp-content/uploads/2019/11/recetas-de-cocina-nachos-con-carne.jpg'
        ]);
    }
}
