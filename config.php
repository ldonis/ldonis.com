<?php

// Website info
Config::set('info', [
	'description' => 'Luis Gdonis &bull; Software Developer',
	'name' => 'ldonis',
	'version' => '1.0',
	'env' => 'live'
]);


// Template
Config::set('template',['default' => 'default']);


// Network
Config::set('network', ['www' => true]);

// Routing
Router::connect('default','landing');