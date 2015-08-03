<?php
/*
 * Website info
 */
Configure::write('info', array(
    'name' => 'ldonis.com',
    'description' => 'My personal website',
    'version' => '3.0.0-RC2',
    'env' => 'produ'
));

/*
 * Plantillas
 */
Configure::write('template', array(
    '_default_' => 'landing'
));

/*
 * Variables
 */
Configure::write('vars', array(
    'webtitle' => 'ldonis | Software developer'
));

/*
 * Librerias a utilizar
 */
Configure::write('libs', array(
     'yamles'=>'yamles'
));

/*
 * Habilita cache
 */
Configure::write('cache', true);

/*
 * idioma
 */
Configure::write('lang', array(
    'es' => 'Español',
    'en' => 'English',
    'default' => 'en'
));