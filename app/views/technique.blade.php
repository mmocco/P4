
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
 
<br><br><br>
	<div class="page-header row">
  		<h1>Trainers Available <small>College Athletes</small></h1>
	</div>


	@foreach($trainers as $name => $trainer)
	<section>

<div class="row">
  <div class="col-xs-6"> <!--col-sm-6 col-md-4"> -->
    <div class="thumbnail">
      <img src="{{ $trainer['pic'] }}" alt="..." class="img-rounded">
      <div class="caption">
        <h3>{{ $trainer['name'] }}</h3>
	<p>			
	Accomplishments and Experience: {{ $trainer['experience'] }}
	</p>
	<p>			
	Contact Info and Wages: {{ $trainer['accomplishments'] }}
	</p>
	
      </div>
    </div>
  </div>
</div>
		</section>
	
	@endforeach


</body>
</html>

@stop
