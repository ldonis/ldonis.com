<?php

switch($website){

    //-- Sitemap
    case 'sitemap.xml' :

        http::header('xml');
        //$seo->sitemap(array('blog'));
        $seo->sitemap(Configure::read('sitemap'));
        break;

    case 'robots.txt' :

        http::header('txt');
        $seo->robots('txt');
        break;

}
