<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Pacchetto;


class PacchettiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 15; $i++){
            $newPacchetto = new Pacchetto();

            $newPacchetto->titolo = $faker->company();
            $newPacchetto->descrizione = $faker->paragraph(5, true);
            $newPacchetto->partenza = $faker->dateTimeThisMonth();
            $newPacchetto->arrivo = $faker->dateTimeThisMonth('+12 days');
            $newPacchetto->prezzo = $faker->randomFloat(2,1000,2000);
            $newPacchetto->image = $faker->imageUrl(360,360,'sea',true);

            $newPacchetto->save();
        }
        
    }
}
