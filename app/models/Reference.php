<?php

class Reference extends Eloquent {

	public $timestamps = false;  //désactive created_at & updated_at

	protected $table = 'reference';
	protected $primaryKey = 'idReference';
	

    
}
