
<div class="navbar navbar-default">
    <div class="navbar-header">
	<div class="wrapper">
					
					<div class="header-logo">
						
						<br>
						<a href="{{URL::to("beranda")}}><img src="images/tkk.png" style="height: 50px; width: 100%;" alt="left" /></a>
						
					</div>
				
					
					
				<!-- END .wrapper -->
				</div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>   
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
		<li><a href="{{URL::to("beranda")}}">Beranda</a></li>
		
		<li class="dropdown">
	    				<a href="{{URL::to("")}}" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
	    				<ul class="dropdown-menu">
	    					<li><a href="{{URL::to("aboutme")}}">About me</a></li>
	    					<li><a href="{{URL::to("about")}}">About Application</a></li>
	    				</ul>
						<li><a href="{{URL::to("databoking")}}">Data Boking</a></li>
		<li><a href="{{URL::to("listvila")}}">Boking Vila</a></li>
		<li class="dropdown">
	    				<a href="{{URL::to("")}}" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
	    				<ul class="dropdown-menu">
	    					<li><a href="{{URL::to("login")}}">Admin</a></li>
	    				</ul>
    </div>
	
</div>