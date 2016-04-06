<?php

Route::controllers([
	Config::get('simplersaml.routePrefix') => 'C3Unu\SimplerSaml\Http\Controllers\SamlController',
]);