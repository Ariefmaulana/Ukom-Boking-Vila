@extends('layout.user')

@section('content')	
<div class="container">	
<div align="center">
											
<h2>Login</h2>
											
<h3>Input your account</h3>
                    
                    <input type="email" placeholder="Email" class="form-control"/><br />
                    <input type="password" placeholder="password"class="form-control"/><br />
                    <div align="right">
                    <a href="{{URL::to("home")}}"><button>LOGIN</button></a>
                    </div> 
                    </div>
													
             </div>
            <div class="navbar navbar-fixed-bottom navbar-inverse" role="navigation">
		
			<center><p>&copy; 2014 Copyright <b>My Villa's</b> theme. All Rights reserved.<br/>Designed by <a href="http://arifmaulana420blogspot.com/" target="_blank" class="arif-maulana">Arif Maulana</a></p></center>
		
	</div>
                                                                
                </div>
                
				
@stop