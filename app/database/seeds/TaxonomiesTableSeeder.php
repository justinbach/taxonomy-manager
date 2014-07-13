<?php

use Faker\Factory as Faker;

/**
 * Class TaxonomiesTableSeeder
 *
 * Seed the taxonomies table.
 */
class TaxonomiesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Taxonomy::create([
                'name'          => $faker->word,
                'description'   => $faker->text
			]);
		}
	}

}