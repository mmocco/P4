
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
	<div class="page-header">
  		<h1>Trainers Available <small>College Athletes</small></h1>
	</div>

	<?php $trainer = Trainer::all();  ?>
<h1 class="centertext">
	{{ $trainer['name'] }}
</h1>
<h2 class="centertext">
	{{ $trainer['location'] }}
</h2>
<p class="centertext">
	{{ $trainer['acomplishments'] }} <br>
</p>
<p class="centertext">
	{{ $trainer['experience'] }} <br>
</p>

</div>
</div>



{{-- @foreach ($trainers as $trainer)
    <p>This is user {{ $trainer->id }}</p>
--}}
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="http://i.imgur.com/UtdNc9J.jpg" alt="..." class="img-rounded">
      <div class="caption">
        <h3>Trainer Name</h3>
        <p>Trainer Info</p>
        <p><a href="#" class="btn btn-primary" role="button">Contact</a> <a href="#" class="btn btn-default" role="button">Rate</a></p>
      </div>
    </div>
  </div>
</div>
{{--
@endforeach
--}}

	<div class = 'fillform'>
{{ Form::open(["url" => "/profile","method" => "post") }}
	{{ Form::label("name", "Name") }}
	<br>
	{{ Form::text("name", Input::old("name"), ["placeholder" => "John Smith"]) }}
	<br>
	{{ Form::label("sport", "Sport") }}
	<br>
	{{ Form::text("sport") }}
	<br>
	{{ Form::label("acomplishments", "Acomplishments") }}
	<br>
	{{ Form::textarea("acomplishments")  }}
	<br>
	{{ Form::label("experience", "Experience") }}
	<br>
	{{ Form::textarea("experience")  }}
	<br>
	
	<br>
	{{ Form::submit("Save") }}
{{ Form::close() }}
	</div>



</body>
</html>

@stop
