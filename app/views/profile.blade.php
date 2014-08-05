
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

</body>
</html>

@stop
