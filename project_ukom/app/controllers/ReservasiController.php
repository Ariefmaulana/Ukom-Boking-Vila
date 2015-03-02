<?php

class ReservasiController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('vila.reservasi');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
			$rules = array(
        'namavila' => 'required',
        'checkin' => 'required',
        'checkout' => 'required',
        'noktp' => 'required',
        'notelepon' => 'required',
        'email' => 'required',
        'alamat' => 'required',
        'namadepan' => 'required',
        'namabelakang' => 'required',
        'kotaasal' => 'required'
        );
    
        $validation = Validator::make(Input::all(), $rules);
        if($validation->fails()) {
        return Redirect::back()->withInput()->withErrors($validation->messages());
        }
        else{
        $reservasi = new Reservasi;

        $reservasi->namavila = Input::get('namavila');
		$reservasi->checkin = Input::get('checkin');
		$reservasi->checkout = Input::get('checkout');
		$reservasi->noktp = Input::get('noktp');
		$reservasi->notelepon = Input::get('notelepon');
		$reservasi->email = Input::get('email');
		$reservasi->alamat = Input::get('alamat');
		$reservasi->namadepan = Input::get('namadepan');
		$reservasi->namabelakang = Input::get('namabelakang');
		$reservasi->kotaasal = Input::get('kotaasal');

		$reservasi->save();

		return Redirect::to('vila');
        }
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
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
