
<?php

switch($website){

    //-- Sitemap
    case 'sitemap.xml' :

        // obtiene todos los posts
        $posts = (include $this->template('info.post','blog',''));

        // completa el nombre del post
        function concat($post){ return 'blog' . DS . $post; }
        $posts = array_map("concat", array_keys($posts));

        http::header('xml');
        $seo->sitemap(array_merge(['blog'], $posts));
        break;

    case 'robots.txt' :

        http::header('txt');
        $seo->robots('txt');
        break;

}
