
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

<!--

<h1 class="centertext">
	{{-- $trainer['name'] --}}
</h1>
<h2 class="centertext">
	{{-- $trainer['location'] --}}
</h2>
<p class="centertext">
	{{-- $trainer['acomplishments'] --}} <br>
</p>
<p class="centertext">
	{{-- $trainer['experience'] --}} <br>
</p>
-->


    <div class = 'fillform'>
{{ Form::open(array('url' => '/profile', 'method' => 'POST')) }}

        {{ Form::label("Name") }}
        <br>
        {{ Form::text("name", Input::old("name"), ["placeholder" => "John Smith"]) }}
        <br>
        {{ Form::label("Picture") }}
        <br>
        {{ Form::text("pic") }}
        <br>
        {{ Form::label("Sport") }}
        <br>
        {{ Form::text("sport") }}
        <br>
        {{ Form::label("Accomplishments") }}
        <br>
        {{ Form::textarea("accomplishments")  }}
        <br>
        {{ Form::label("Experience") }}
        <br>
        {{ Form::textarea("experience")  }}
        <br>
        {{ Form::submit("Save") }}
{{ Form::close() }}
        </div>


</body>
</html>

@stop
