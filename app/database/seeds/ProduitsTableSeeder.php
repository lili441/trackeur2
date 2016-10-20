<?php

class ProduitsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
            DB::table('produit')->insert(array(
                array('date' => "2016-01-01", 'heure' => "10:10", 'valeurScan' => 10001),
                array('date' => "2016-01-01", 'heure' => "10:20", 'valeurScan' => 10002),
                array('date' => "2016-01-01", 'heure' => "10:30", 'valeurScan' => 10003),
                array('date' => "2016-01-01", 'heure' => "10:40", 'valeurScan' => 10004),
                array('date' => "2016-01-01", 'heure' => "10:50", 'valeurScan' => 10005),
                array('date' => "2016-01-01", 'heure' => "11:00", 'valeurScan' => 10006),
                array('date' => "2016-01-01", 'heure' => "11:10", 'valeurScan' => 10007),
                array('date' => "2016-01-01", 'heure' => "11:20", 'valeurScan' => 10008),
                array('date' => "2016-01-01", 'heure' => "11:30", 'valeurScan' => 10009),
                array('date' => "2016-01-01", 'heure' => "11:40", 'valeurScan' => 10010),
                array('date' => "2016-01-01", 'heure' => "11:50", 'valeurScan' => 10011),
                array('date' => "2016-01-01", 'heure' => "12:00", 'valeurScan' => 20001),
                array('date' => "2016-01-01", 'heure' => "12:10", 'valeurScan' => 20002),
                array('date' => "2016-01-01", 'heure' => "12:20", 'valeurScan' => 20003),
                array('date' => "2016-01-01", 'heure' => "12:30", 'valeurScan' => 20004),
                array('date' => "2016-01-01", 'heure' => "12:40", 'valeurScan' => 20005),
                array('date' => "2016-01-01", 'heure' => "12:50", 'valeurScan' => 20006),
                array('date' => "2016-01-01", 'heure' => "13:00", 'valeurScan' => 20007),
            ));
	}
}
