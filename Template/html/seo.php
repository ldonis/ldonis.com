<?php

switch($website){

    //-- Sitemap
    case 'sitemap.xml' :

        http::header('xml');
        $seo->sitemap();
        break;

    case 'robots.txt' :

        http::header('txt');
        $seo->robotsTxt();
        break;

}
