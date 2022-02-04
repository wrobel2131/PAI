<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

// print $path;
Routing::get('', 'DefaultController');
Routing::get('home', 'SecurityController');
Routing::get('programs', 'ProgramController');
Routing::get('exercises', 'ExerciseController');
Routing::get('calculator', 'DefaultController');
Routing::get('settings', 'DefaultController');
Routing::get('signIn', 'DefaultController');
Routing::get('signUp', 'DefaultController');
Routing::get('previousLogs', 'DefaultController');
Routing::get('specificWorkout', 'DefaultController');
Routing::get('specificProgram', 'WorkoutController');
Routing::get('exerciseInWorkout', 'DefaultController');
Routing::get('addWorkout', 'DefaultController');
Routing::get('addProgram', 'ProgramController');
Routing::get('addExerciseToWorkout', 'DefaultController');
Routing::get('addExercise', 'ExerciseController');

Routing::post('login', 'SecurityController');
Routing::post('register', 'SecurityController');
Routing::post('logout', 'SecurityController');

//Routing::post('settings', 'DefaultController');
Routing::post('addProgram', 'ProgramController');
Routing::post('addExercise', 'ExerciseController');

Routing::post('addWorkoutToProgram', 'WorkoutController');



Routing::run($path);