<?php

class ReferencesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reference')->insert(array(
            array('valeurScan' => 10001, 'typeProduit' => "IPKIT5"),
            array('valeurScan' => 10002, 'typeProduit' => "IPKIT5"),
            array('valeurScan' => 10003, 'typeProduit' => "IPKIT5"),
            array('valeurScan' => 10004, 'typeProduit' => "IPKIT5"),
            array('valeurScan' => 10005, 'typeProduit' => "IPKIT5"),
            array('valeurScan' => 10006, 'typeProduit' => "IPKIT5"),
            array('valeurScan' => 10007, 'typeProduit' => "IPKIT5"),
            array('valeurScan' => 10008, 'typeProduit' => "IPKIT5"),
            array('valeurScan' => 10009, 'typeProduit' => "IPKIT5"),
            array('valeurScan' => 10010, 'typeProduit' => "IPKIT5"),
            array('valeurScan' => 10011, 'typeProduit' => "IPKIT5"),
            array('valeurScan' => 20001, 'typeProduit' => "IPKIT6"),
            array('valeurScan' => 20002, 'typeProduit' => "IPKIT6"),
            array('valeurScan' => 20003, 'typeProduit' => "IPKIT6"),
            array('valeurScan' => 20004, 'typeProduit' => "IPKIT6"),
            array('valeurScan' => 20005, 'typeProduit' => "IPKIT6"),
            array('valeurScan' => 20006, 'typeProduit' => "IPKIT6"),
            array('valeurScan' => 20007, 'typeProduit' => "IPKIT6"),
        ));
    }
}
