@extends('layout.layout')

@section('content')

<br>

			<div class="span14"> 
			<div class="clearfix">
                <nav class="breadcrumbs">
					<ul>
					
					</ul>
				</nav>
               <hr>
            
<h2>List Boking Villa</h2>
            <table class="table bordered striped hovered dataTable" id="dataTables-1">
                <thead>
                <tr >
                    
						<th>   No   </th>
                       <th>   Nama Vila  </th>
                       <th>   Check In   </th>
                       <th>   Check Out   </th>
                       <th>   No KTP   </th>
                       <th>   No Telepon   </th>
                       <th>   Email   </th>
                       <th>   Alamat  </th>
                       <th>   Nama Depan </th>
                       <th>   Nama Belakang  </th>
                       <th>   Kota Asal </th>
                    <th class="text-center">Aksi</th>
                    
                </tr>
                </thead>

                <tbody>
                    @foreach($data as $tampil)
                     <tr>
						<td>{{ $tampil->id  }}</td>
						<td>{{ $tampil->namavila  }}</td>
						<td>{{ $tampil->checkin }}</td>
						<td>{{ $tampil->checkout  }}</td>
                        <td>{{ $tampil->noktp  }}</td>
						<td>{{ $tampil->notelepon  }}</td>
						<td>{{ $tampil->email }}</td>
						<td>{{ $tampil->alamat  }}</td>
                        <td>{{ $tampil->namadepan  }}</td>
						<td>{{ $tampil->namabelakang }}</td>
						<td>{{ $tampil->kotaasal  }}</td>
	
                        <td class="text-center">
						<a href="{{ URL::to("vila")}}"><button class="button mini primary size1" style="">Tambah</button></a>
                            <a href="{{ URL::to("databoking/edit/" .$tampil->id. "/edit") }}"><button class="button mini primary size1" >Edit</button></a>
                            <a href="{{ URL::to("databoking/" .$tampil->id. "/destroy") }}"><button class="button mini primary size1" id="tombolhapus">Hapus</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table></div><br>
                   
              
            
		</div>
		</div>
        
  
 <script src="js/jquery/jquery.dataTables.js"></script>

 <script>
    $(function(){
        $('#dataTables-1').dataTable( {
            "bProcessing": true
        } );
    });
 </script>      
  <script>
		$(function(){
			$('#tombolhapus').on('click', function(){
				$.Notify({
					shadow: true,
					position: 'bottom-right',
					content: "Berhasil Terhapus"
				});
			});
		});
                    </script>
@stop