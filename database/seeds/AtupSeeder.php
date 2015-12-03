<?php

use Illuminate\Database\Seeder;

class AtupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$faker = Faker\Factory::create();
       	$faker->addProvider(new Faker\Provider\Base($faker));
       	$faker->addProvider(new Faker\Provider\Lorem($faker));
       	$faker->addProvider(new Faker\Provider\pt_BR\Person($faker));
       	$faker->addProvider(new Faker\Provider\pt_BR\PhoneNumber($faker));

		for($i=0; $i<100 ; $i++){
			App\Atup::create([
				'nome'		=> $faker->firstNameFemale,
				'sobrenome'	=> $faker->LastName,
				'telefone'	=> $faker->cellphoneNumber,
				'descricao'	=> $faker->realText(),
				'foto'		=> 'http://api.randomuser.me/portraits/women/'.$i.'.jpg'
			]);
		}			    
    }
}
