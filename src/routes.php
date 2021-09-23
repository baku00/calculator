<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});
Route::get('add/{a}/{b}', 'SuisseRND\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'SuisseRND\Calculator\CalculatorController@subtract');
