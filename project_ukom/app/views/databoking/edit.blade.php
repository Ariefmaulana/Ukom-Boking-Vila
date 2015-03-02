@extends("layout.layout")

@section("content")
    <div class="container">
                   {{ Form::model($reservasisbyid, array('route' => array('databoking.update', $reservasisbyid->id))) }}
                                {{ Form::label('namavila', 'Nama Villa') }}
                                {{ Form::text('namavila', null, array('class' => 'form-control','placeholder'=>'Teks')) }}
                                {{ '<div>'.$errors->first('namavila').'</div>' }}
                                
                                {{ Form::label('checkin', 'Check In') }}
                                {{ Form::text('checkin', null, array('class' => 'form-control','placeholder'=>'Teks')) }}
                                {{ '<div>'.$errors->first('checkin').'</div>' }}   
                                                             
                                {{ Form::label('checkout', 'Check Out') }}
                                {{ Form::text('checkout', null, array('class' => 'form-control','placeholder'=>'Teks')) }}
                                {{ '<div>'.$errors->first('checkout').'</div>' }}   
                                                             
                                {{ Form::label('noktp', 'No KTP') }}
                                {{ Form::text('noktp', null, array('class' => 'form-control','placeholder'=>'Teks')) }}
                                {{ '<div>'.$errors->first('noktp').'</div>' }}      
                                                          
                                {{ Form::label('notelepon', 'No Telepon') }}
                                {{ Form::text('notelepon', null, array('class' => 'form-control','placeholder'=>'Teks')) }}
                                {{ '<div>'.$errors->first('notelepon').'</div>' }}   
                                                             
                                {{ Form::label('email', 'Email') }}
                                {{ Form::text('email', null, array('class' => 'form-control','placeholder'=>'Teks')) }}
                                {{ '<div>'.$errors->first('email').'</div>' }}       
                                                         
                                {{ Form::label('alamat', 'Alamat') }}
                                {{ Form::text('alamat', null, array('class' => 'form-control','placeholder'=>'Teks')) }}
                                {{ '<div>'.$errors->first('alamat').'</div>' }}      
                                                          
                                {{ Form::label('namadepan', 'Nama Depan') }}
                                {{ Form::text('namadepan', null, array('class' => 'form-control','placeholder'=>'Teks')) }}
                                {{ '<div>'.$errors->first('namadepan').'</div>' }}
                                {{ Form::label('namabelakang', 'Nama Belakang') }}
                                {{ Form::text('namabelakang', null, array('class' => 'form-control','placeholder'=>'Teks')) }}
                                {{ '<div>'.$errors->first('namabelakang').'</div>' }}
                                {{ Form::label('kotaasal', 'Kota Asal') }}
                                {{ Form::text('kotaasal', null, array('class' => 'form-control','placeholder'=>'Teks')) }}
                                {{ '<div>'.$errors->first('kotaasal').'</div>' }}
                            {{ Form::submit('SIMPAN', array('class' => 'form-control')) }}
                        {{ Form::close() }}
            </div>
            @stop