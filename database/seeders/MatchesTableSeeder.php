<?php

namespace Database\Seeders;

use App\Models\Matches;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatchesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// truncate db
		DB::table('matches')->truncate();

		$matches = [
			[
				'clubs_id'  	=> 1,
				'rivals_id' 	=> 2,
				'schedule'  	=> '2022-09-11 05:47:08',
				'created_at' 	=> '2022-04-11 05:47:08',
				'updated_at' 	=> '2022-04-11 05:47:08'
			],
			[
				'clubs_id'  	=> 2,
				'rivals_id' 	=> 1,
				'schedule'  	=> '2022-09-11 05:47:08',
				'created_at' 	=> '2022-04-11 05:47:08',
				'updated_at' 	=> '2022-04-11 05:47:08'
			],
			[
				'clubs_id'  	=> 3,
				'rivals_id' 	=> 4,
				'schedule'  	=> '2022-09-11 05:47:08',
				'created_at' 	=> '2022-04-11 05:47:08',
				'updated_at' 	=> '2022-04-11 05:47:08'
			],
			[
				'clubs_id'  	=> 4,
				'rivals_id' 	=> 3,
				'schedule'  	=> '2022-09-11 05:47:08',
				'created_at' 	=> '2022-04-11 05:47:08',
				'updated_at' 	=> '2022-04-11 05:47:08'
			],
			[
				'clubs_id'  	=> 5,
				'rivals_id' 	=> 6,
				'schedule'  	=> '2022-09-11 05:47:08',
				'created_at' 	=> '2022-04-11 05:47:08',
				'updated_at' 	=> '2022-04-11 05:47:08'
			],
			[
				'clubs_id'  	=> 6,
				'rivals_id' 	=> 5,
				'schedule'  	=> '2022-09-11 05:47:08',
				'created_at' 	=> '2022-04-11 05:47:08',
				'updated_at' 	=> '2022-04-11 05:47:08'
			],
		];

		Matches::insert($matches);
	}
}
