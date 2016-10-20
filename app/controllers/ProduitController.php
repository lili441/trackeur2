<?php

class ProduitController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $produits = Produit::all();
            
            /*$itemIdentique = array();
            foreach($produits as $prod){
                $doublon = DB::table(DB::raw('produit as p'))
                     ->select(array('p.date', 'p.heure', 'p.valeurScan', 'p.typeProduit', DB::raw('p.count(*) as item_count')))
                     ->groupBy(array('p.date', 'p.heure', 'p.valeurScan', 'p.typeProduit'))
                     ->get();
                var_dump($doublon);
            }*/
            return View::make('RecupDonnees')
			->with('produits', $produits);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
            
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($idProduit)
	{
            $produit = Produit::find($idProduit);
            return View::make('AjoutTypeProduit')
                    ->with('produit', $produit);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($idProduit)
	{
            $produit = Produit::find($idProduit);
			
            if ( Request::get('typeProduit') )
            {
                $produit->typeProduit = Request::get('typeProduit');
            }
            $produit->save();
            return Redirect::route('produit.index', $idProduit)->with('ok', 'La modification a été prise en compte.');
		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
