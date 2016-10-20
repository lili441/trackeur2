<?php

class Produit extends Eloquent {

	public $timestamps = false;  //désactive created_at & updated_at

	protected $table = 'produit';
	protected $primaryKey = 'idProduit';

	

    
}
