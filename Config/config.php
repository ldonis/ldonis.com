<?php

// * Website info
Configure::write('info', array(
    'name' => 'ldonis.com',
    'description' => 'Software developer and science evangelist living in Guatemala',
    'version' => '4.5.0',
    'env' => 'live'
));

// * Wordpress settings
Configure::write('wapi', [
    'url' => 'http://wp.ldonis.com/'
]);

// * Plantillas
Configure::write('template', array(
    'blog' => 'blog',
    'feed' => 'blogfeed',
    'default' => 'default',
    'sitemap.xml' => 'seo',
    'robots.txt' => 'seo'
));

// *  Lenguages disponibles
Configure::write('lang', array(
    'en'=>'English',
    'es'=>'Español'
));

// * Variables
Configure::write('vars', array(
    'webtitle' => 'Luis Gdonis | Software Developer',
    'blogwebtitle' => 'My personal blog &bull; ldonis',
    'blogdescription' => 'Mi blog personal, mi escape, mis pensamientos...'
));

// * Mail configuration
Configure::write('mail', array(
    'to' => 'hello@ldonis.com',
    'send' => 'mail',
    'subject' => 'Lesli website notification',
    'redirect' => 'http://ldonis.com'
));


// * Helpers
Configure::write('helpers', array('html','seo', 'wapi'));

// * Configuracion de red
Configure::write('network', array('www' => true));

Configure::write('seo', true);

Configure::write('sitemap', array(
    'blog',
    'blog/ciencia-mas-que-una-palabra',
));
