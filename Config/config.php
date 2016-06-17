<?php
/*
 * Website info
 */
Configure::write('info', array(
    'name' => 'ldonis.com',
    'description' => 'My amazing website',
    'version' => '4.0.0',
    'env' => 'dev'
));

/*
 * Plantillas
 */
Configure::write('template', array(
    'blog' => 'blog',
    'default' => 'default',
    'sitemap.xml' => 'seo',
    'robots.txt' => 'seo'
));

/*
 *  Lenguages disponibles
 */
Configure::write('lang', array(
    'en'=>'English',
    'es'=>'Español'
));

/*
 * Variables
 */
Configure::write('vars', array(
    'webtitle' => 'Luis Gdonis | Software Developer',
    'blogwebtitle' => 'My personal blog &bull; ldonis',
    'blogdescription' => 'Mi blog personal, mi escape, mis pensamientos...'
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

Configure::write('helpers', array('html','seo'));

/*
 * Configuracion de red
 */
Configure::write('network', array('www' => true));

Configure::write('seo', true);
