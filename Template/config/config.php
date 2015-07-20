<?php
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
     'yamles'=>'ldonis/yamles'
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