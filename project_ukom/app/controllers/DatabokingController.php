<?php

class DatabokingController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	   $vila = Reservasi::All();
		return View::make("databoking.databoking")->with("data", $vila);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('databoking.databoking');
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
	public function edit($id)
	{
		$vila = DB::table('reservasis')->where('id',$id)->first();
      $vila =
      ['reservasisbyid' => $vila];
  return View::make('databoking.edit', $vila);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
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
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            echo "string";
            return Redirect::to('databoking/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('reservasis')
      ->where('id', $id)
      ->update(array(
                  'namavila' => Input::get('namavila'),
                  'checkin' => Input::get('checkin'),
                  'checkout' => Input::get('checkout'),
                  'noktp' => Input::get('noktp'),
                  'notelepon' => Input::get('notelepon'),
                  'email' => Input::get('email'),
                  'alamat' => Input::get('alamat'),
                  'namadepan' => Input::get('namadepan'),
                  'namabelakang' => Input::get('namabelakang'),
                  'kotaasal' => Input::get('kotaasal')
            ));
 
      Session::flash('message', 'Data Berhasil Diubah');
      return Redirect::to('databoking');
      }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$vila = Reservasi::find($id);
		$vila->delete();
		return Redirect::to("databoking");
	}


}