<?php
/*
 * Website info
 */
Configure::write('info', array(
    'name' => 'ldonis.com',
    'description' => 'My amazing website',
    'version' => '1.0.0',
    'env' => 'live'
));

/*
 * Plantillas
 */
Configure::write('template', array(
    'default' => 'default',
    'sitemap.xml' => 'seo',
    'robots.txt' => 'seo'
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
    'webtitle' => 'Luis Gdonis | Software Developer'
));

/*
 * Mail configuration
 */
Configure::write('mail', array(
    'to' => 'hello@ldonis.com',
    'send' => 'mail',
    'subject' => 'Lesli website notification',
    'redirect' => 'http://ldonis.com'
));
