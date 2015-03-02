@extends('layout.user')

@section('content')
    <div class="container">
    <h3>Please fill your data first</h3>
    <form method="post">
    <div class="from-group">
            <label>Nama Villa</label>
            <select name="namavila" class="form-control" >
                <option>Villa Cempaka, Bali</option>
                <option>Villa Melati, Bandung</option>
                <option>Villa Mawar, Bogor</option>
                <option>Villa Kamboja, Bromo</option>
                <option>Villa Kayu Manis, Anyer</option>
                <option>Villa Apple, Garut</option>
                <option>Villa Watermelon, Cisarua</option>
                <option>Villa Strawberry, Malang</option>
                <option>D'Yellow Villas, Lombok</option>
                <option>D'Rainbow Villas, Jogja</option>
                <option>D'Green Villas, Sukabumi</option>
                <option>D'Blue Villas, Denpasar</option>
            </select>
            {{ $errors->first('namavila') }}
        </div>
        <div class="from-group">
            <label>Check-In</label>
            <input type="date" name="checkin" class="form-control" />
            {{ $errors->first('checkin') }}
        </div>
        <div class="from-group">
            <label>Check-Out</label>
            <input type="date" name="checkout" class="form-control" />
            {{ $errors->first('checkout') }}
        </div>
        <div class="from-group">
            <label>Nomor KTP</label>
            <input type="text" name="noktp" class="form-control" />
            {{ $errors->first('noktp') }}
        </div>
		<div class="from-group">
            <label>Nomor Telepon</label>
            <input type="text" name="notelepon" class="form-control" />
            {{ $errors->first('notelepon') }}
        </div>
		<div class="from-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" />
            {{ $errors->first('email') }}
        </div>
		<div class="from-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" />
            {{ $errors->first('alamat') }}
        </div>
		<div class="from-group">
            <label>Nama Depan</label>
            <input type="text" name="namadepan" class="form-control" />
            {{ $errors->first('namadepan') }}
        </div>
		<div class="from-group">
            <label>Nama Belakang</label>
            <input type="text" name="namabelakang" class="form-control" />
            {{ $errors->first('namabelakang') }}
        </div>
		<div class="from-group">
            <label>Kota Asal</label>
            <input type="text" name="kotaasal" class="form-control" />
            {{ $errors->first('kotaasal') }}
        </div>
		
        <br />
			<a href="{{URL::to("vila/post")}}"><button>Simpan</button></a>
         </div>   
        <br />
		<br />
	<br />
	<br />
    								<div class="navbar navbar-fixed-bottom navbar-inverse" role="navigation">
		
			<center><p>&copy; 2014 Copyright <b>My Villa's</b> theme. All Rights reserved.<br/>Designed by <a href="http://arifmaulana420blogspot.com/" target="_blank" class="arif-maulana">Arif Maulana</a></p></center>
		
	</div>
@stop