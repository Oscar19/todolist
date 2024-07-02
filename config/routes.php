<?php 

/**
 * Used to define the routes in the system.
 * 
 * A route should be defined with a key matching the URL and an
 * controller#action-to-call method. E.g.:
 * 
 * '/' => 'index#index',
 * '/calendar' => 'calendar#index'
 * '/test' => 'test#index',
 */
$routes = array(
	'/' => 'tarea#index',
	'/tarea' => 'tarea#index',
	'/tarea/add' => 'tarea#add',
	'/tarea/detalle' => 'tarea#detalle',
	'/tarea/edita' => 'tarea#edita' 
);

