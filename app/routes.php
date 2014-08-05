<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{

	return View::make('hello');
});

Route::get('/login', 'UserController@getLogin');

Route::get('/profile', function(){

	return View::make('profile');
});

Route::get('test', function() {
    # Instantiate a new Book model class
    $trainer = new Trainer();

/*        $table->increments('id');
        $table->string('name');
        $table->string('pic');
        $table->integer('age');
        $table->string('gradelvl');
        $table->string('sport');
        $table->text('accomplishments');
        $table->text('experience');
        $table->string('college');
        $table->integer('wage');
        $table->timestamps();
*/ 
    # Set 
    $trainer->name = 'JP OConner';    //how do I take this information as user input?

    # This is where the Eloquent ORM magic happens
    $trainer->save();

    return 'A new book has been added! Check your database to see...';

});

Route::get('mysql-test', function() {

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');


    # If the "Pre" package is not installed, you should output using print_r instead
    print_r($results);

});

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
