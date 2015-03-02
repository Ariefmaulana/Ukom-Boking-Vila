@extends('layout.user')

@section('content')
<div class="Jumbotron">
		<a href="beranda"></a><Strong><h1><center> List Villas</center></h1></strong>
	</div>
	<br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-3"><img src="images/bali.jpg" alt="" class="img-rounded"></a></div>
			<div class="col-md-3"><img src="images/bandung.jpg" alt="" class="img-rounded"></a></div>
			<div class="col-md-3"><img src="images/bogor.jpg" alt="" class="img-rounded"></a></div>
			<div class="col-md-3"><img src="images/bromo.jpg" alt="" class="img-rounded"></a></div>
		</div>
		<div class="row">
			<div class="col-md-3"><p>Nama Villa		: Villa Cempaka</p></div>
			<div class="col-md-3"><p>Nama Villa		: Villa Melati</p></div>
			<div class="col-md-3"><p>Nama Villa		: Villa Mawar</p></div>
			<div class="col-md-3"><p>Nama Villa		: Villa Kamboja</p></div>
		</div>
		<div class="row">
			<div class="col-md-3"><p>Harga/malam	: Rp.600.000,00,-</p></div>
			<div class="col-md-3"><p>Harga/malam 	: Rp.500.000,00,-</p></div>
			<div class="col-md-3"><p>Harga/malam 	: Rp.500.000,00,-</p></div>
			<div class="col-md-3"><p>Harga/malam 	: Rp.600.000,00,-</p></div>
		</div>
		<div class="row">
			<div class="col-md-3"><h3><a href="{{URL::to("vila")}}"><span class="label label-default">Bali</span></h3></div>
			<div class="col-md-3"><h3><a href="{{URL::to("vila")}}"><span class="label label-default">Bandung</span></h3></div>
			<div class="col-md-3"><h3><a href="{{URL::to("vila")}}"><span class="label label-default">Bogor</span></h3></div>
			<div class="col-md-3"><h3><a href="{{URL::to("vila")}}"><span class="label label-default">Bromo</span></h3></div>
		</div><br>
		
		<div class="row">
			<div class="col-md-3"><img src="images/anyer.jpg" alt="" class="img-rounded"></a></div>
			<div class="col-md-3"><img src="images/garut.jpg" alt="" class="img-rounded"></a></div>
			<div class="col-md-3"><img src="images/cisarua.jpg" alt="" class="img-rounded"></a></div>
			<div class="col-md-3"><img src="images/malang.jpg" alt="" class="img-rounded"></a></div>
		</div>
		<div class="row">
			<div class="col-md-3"><p>Nama Villa		: Villa Kayu Manis</p></div>
			<div class="col-md-3"><p>Nama Villa		: Villa Apple</p></div>
			<div class="col-md-3"><p>Nama Villa		: Villa Watermelon</p></div>
			<div class="col-md-3"><p>Nama Villa		: Villa Strawberry</p></div>
		</div>
		<div class="row">
			<div class="col-md-3"><p>Harga/malam	: Rp.800.000,00,-</p></div>
			<div class="col-md-3"><p>Harga/malam	: Rp.700.000,00,-</p></div>
			<div class="col-md-3"><p>Harga/malam 	: Rp.400.000,00,-</p></div>
			<div class="col-md-3"><p>Harga/malam 	: Rp.600.000,00,-</p></div>
		</div>
		<div class="row">
			<div class="col-md-3"><h3><a href="{{URL::to("vila")}}"><span class="label label-default">Anyer</span></h3></div>
			<div class="col-md-3"><h3><a href="{{URL::to("vila")}}"><span class="label label-default">Garut</span></h3></div>
			<div class="col-md-3"><h3><a href="{{URL::to("vila")}}"><span class="label label-default">Cisarua</span></h3></div>
			<div class="col-md-3"><h3><a href="{{URL::to("vila")}}"><span class="label label-default">Malang</span></h3></div>
		</div><br>
		<div class="row">
			<div class="col-md-3"><img src="images/lombokk.jpg" alt="" class="img-rounded"></a></div>
			<div class="col-md-3"><img src="images/jogjja.jpg" alt="" class="img-rounded"></a></div>
			<div class="col-md-3"><img src="images/sukabumi.jpg" alt="" class="img-rounded"></a></div>
			<div class="col-md-3"><img src="images/denpasarr.jpg" alt="" class="img-rounded"></a></div>
		</div>
		<div class="row">
			<div class="col-md-3"><p>Nama Villa		: D'yellow Villas</p></div>
			<div class="col-md-3"><p>Nama Villa		: D'rainbow Villas </p></div>
			<div class="col-md-3"><p>Nama Villa		: D'Green Villas</p></div>
			<div class="col-md-3"><p>Nama Villa		: D'Blue Villas</p></div>
		</div>
		<div class="row">
			<div class="col-md-3"><p>Harga/malam	: Rp.500.000,00,-</p></div>
			<div class="col-md-3"><p>Harga/malam 	: Rp.500.000,00,-</p></div>
			<div class="col-md-3"><p>Harga/malam 	: Rp.600.000,00,-</p></div>
			<div class="col-md-3"><p>Harga/malam 	: Rp.700.000,00,-</p></div>
		</div>
		<div class="row">
			<div class="col-md-3"><h3><a href="{{URL::to("vila")}}"><span class="label label-default">Lombok</span></h3></div>
			<div class="col-md-3"><h3><a href="{{URL::to("vila")}}"><span class="label label-default">Jogja</span></h3></div>
			<div class="col-md-3"><h3><a href="{{URL::to("vila")}}"><span class="label label-default">Sukabumi</span></h3></div>
			<div class="col-md-3"><h3><a href="{{URL::to("vila")}}"><span class="label label-default">Denpasar</span></h3></div>
		</div><br>
		<br><hr>
	</div>
	<div class="navbar navbar-fixed-bottom navbar-inverse" role="navigation">
		
			<center><p>&copy; 2014 Copyright <b>My Villa's</b> theme. All Rights reserved.<br/>Designed by <a href="http://arifmaulana420blogspot.com/" target="_blank" class="arif-maulana">Arif Maulana</a></p></center>
		
	</div>

@stop