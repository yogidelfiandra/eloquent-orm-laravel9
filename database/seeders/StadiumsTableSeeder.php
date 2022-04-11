<?php

namespace Database\Seeders;

use App\Models\Stadiums;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StadiumsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// truncate db
		DB::table('stadiums')->truncate();

		$stadiums = [
			[
				'name' 				=> 'Stamford Bridge',
				'capacity' 		=> '40000',
				'address' 		=> 'Stamford Bridge, Fulham Road, London, SW6 1HS',
				'created_at' 	=> '2022-04-11 05:47:08',
				'updated_at' 	=> '2022-04-11 05:47:08'
			],
			[
				'name' 				=> 'Emirates Stadium',
				'capacity' 		=> '60000',
				'address' 		=> 'Highbury House, 75 Drayton Park, London, N5 1BU',
				'created_at' 	=> '2022-04-11 05:47:08',
				'updated_at' 	=> '2022-04-11 05:47:08'
			],
			[
				'name' 				=> 'Old Trafford',
				'capacity' 		=> '74000',
				'address' 		=> 'Sir Matt Busby Way, Old Trafford, Manchester, M16 0RA',
				'created_at' 	=> '2022-04-11 05:47:08',
				'updated_at' 	=> '2022-04-11 05:47:08'
			],
			[
				'name' 				=> 'Etihad Stadium',
				'capacity' 		=> '55000',
				'address' 		=> 'Etihad Stadium, Etihad Campus, Manchester, M11 3FF',
				'created_at' 	=> '2022-04-11 05:47:08',
				'updated_at' 	=> '2022-04-11 05:47:08'
			],
			[
				'name' 				=> 'Anfield',
				'capacity' 		=> '53000',
				'address' 		=> 'Anfield, Anfield Road, Liverpool, L4 0TH',
				'created_at' 	=> '2022-04-11 05:47:08',
				'updated_at' 	=> '2022-04-11 05:47:08'
			],
			[
				'name' 				=> 'Tottenham Hotspur Stadium',
				'capacity' 		=> '62000',
				'address' 		=> 'Lilywhite House, 782 High Road, Tottenham, London, N17 0BX',
				'created_at' 	=> '2022-04-11 05:47:08',
				'updated_at' 	=> '2022-04-11 05:47:08'
			],
		];

		Stadiums::insert($stadiums);
	}
}
