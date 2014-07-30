
@extends ('_master')


@section ('title')

Welcome

@stop



@section ('content')

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
</head>
<body>


<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="http://gocrimson.com/sports/wrest/2013-14/photos/DSC_6924.JPG" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>FloTrain</h1>
          <p><a class="btn btn-lg btn-primary" href="http://getbootstrap.com">Learn More</a>
        </p></div>
      </div>
    </div>
    <div class="item">
      <img src="http://lorempixel.com/1500/600/abstract/1" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Changes to the Grid</h1>
          <p>Bootstrap 3 still features a 12-column grid, but many of the CSS class names have completely changed.</p>
          <p><a class="btn btn-large btn-primary" href="#">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1500X500" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Percentage-based sizing</h1>
          <p>With "mobile-first" there is now only one percentage-based grid.</p>
          <p><a class="btn btn-large btn-primary" href="#">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>  
</div>
<!-- /.carousel -->



<div class="container-full">

      <div class="row">
       
        <div class="col-lg-12 text-center v-center">
          
          <h1>Welcome to FloTrain</h1>
          <p class="lead">A network dedicated to self-improvement and athletic technique</p>
          
          <br><br><br>
          
          <form class="col-lg-12">
            <div class="input-group" style="width:340px;text-align:center;margin:0 auto;">
            <input class="form-control input-lg" title="Don't worry. We hate spam, and will not share your email with anyone." placeholder="Enter your email address" type="text">
              <span class="input-group-btn"><button class="btn btn-lg btn-primary" type="button">OK</button></span>
            </div>
          </form>
        </div>
        
      </div> <!-- /row -->
  
  	  <div class="row">
       
      </div>
  
  	<br><br><br><br><br>

</div> <!-- /container full -->

<div class="container">
  	<hr>
  
 	<h1>Testimonials</h1> 
	<br> 
 	<div class="row">
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading"><h3>Hello.</h3></div>
            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
            Aliquam in felis sit amet augue.
            </div>
          </div>
        </div>
      	<div class="col-md-4">
        	<div class="panel panel-default">
            <div class="panel-heading"><h3>Hello.</h3></div>
            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
            Aliquam in felis sit amet augue.
            </div>
          </div>
        </div>
      	<div class="col-md-4">
        	<div class="panel panel-default">
            <div class="panel-heading"><h3>Hello.</h3></div>
            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
            Aliquam in felis sit amet augue.
            </div>
          </div>
        </div>
    </div>
  
    </div>
</div>



</body>
</html>

@stop
