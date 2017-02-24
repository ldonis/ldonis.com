<?php

// Website info
Configure::write('info', [
    'name' => 'ldonis',
    'description' => 'software developer',
    'version' => '1.0',
    'env' => 'dev'
]);


// Plantillas
Configure::write('template',[
	'default' => 'landing',
]);


// Language
/*
Configure::write('lang',[
	'en' => 'English'
	//'es' => 'Español'
]);
*/


// * extra settings
// * -   -   -   -   -   -   -   -   -   -   -   -   -   -
// helpers
Configure::write('helpers', ['html','seo']);