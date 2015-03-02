@extends('layout.layout')

@section('content')
<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="../../images/1.jpg"  width="100%" height="500px"  alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Ruang Meeting</h1>
              <p></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../../images/2.jpg" width="100%" height="500px" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Ruang Meeting</h1>
              <p></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../../images/3.jpg" width="100%" height="500px" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Ruang Meeting</h1>
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
</div>
<div class=" sendiri">
	<button type="button" class="btn btn-default">Ruang Meeting</button>
	<button type="button" class="btn btn-default">Restoran</button>
	<button type="button" class="btn btn-default">kamar</button>
</div>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../js/ie10-viewport-bug-workaround.js"></script>
@stop