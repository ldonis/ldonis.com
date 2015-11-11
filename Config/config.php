<?php
/*
 * Website info 
 */
Configure::write('info', array( 
    'name' => 'ldonis.com', 
    'description' => 'My amazing website', 
    'version' => '1.0.0', 
    'env' => 'dev' 
)); 
 
/*
 * Plantillas 
 */
Configure::write('template', array( 
    'default' => 'default', 
)); 
 
/*
 *  Lenguages disponibles
 */
Configure::write('lang', array(
    'es'=>'Español',
    'en'=>'English'
));

/*
 * Librerias a utilizar
 */
Configure::write('libs', array(
    'yamles'=>'ldonis/yamles'
));

/*
 * Variables
 */
Configure::write('vars', array(
    'webtitle' => 'Lesli | PHP Web framework'
));