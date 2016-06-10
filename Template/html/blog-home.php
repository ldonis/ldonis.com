<?php
$posts = include $this->template('info.post','blog','');
?>
<!Doctype html>
<html lang="<?php echo $LesliController['WEBSITE_lang'] ?>">
<head>
    <meta name="google-site-verification" content="YVfoDTFWu7SiMaLQhut3HVM2z_X7EaN0IUmLaLLCm1g" />
    <?php

    $html->head();
    echo '<title>' . $blogwebtitle . '</title>';

    $seo->meta($blogdescription);
    $seo->meta($LesliController['HTTP_uri'],'author');
    $seo->canonical($LesliController['HTTP_uri']);

    // Twitter card
    $seo->twitterCard(array(
        'card' => 'summary',
        'site' => '@lgdonis',
        'title' => $webtitle,
        'description' => $blogdescription,
        'image' => 'http://www.lesli5.com' . $html->img('screenshoot.png', array('url','path' => 'template')),
        'url' => $LesliController['HTTP_url']
    ));

    // Facebook card
    $seo->facebookCard(array(
        'url' => $LesliController['HTTP_url'],
        'type' => 'website',
        'title' => $webtitle,
        'description' => $blogdescription,
        'image' => array(
            'content'=> 'http://www.lesli5.com' . $html->img('screenshoot.png', array('url','path' => 'template')),
            'width' => '425',
            'height'=> '425'
        )
    ));


    if (ENV == 'live') :

        echo $html->css();

    else :

        echo
            "\n" . $html->css('rcat.min','public') .
            "\n" . $html->css('blog');

    endif;


?>

</head>
<body>
<?php

    include $this->template('blog.header');

    include $content;

    include $this->template('blog.footer');

    if (ENV == 'live') :
        echo $html->js('bloganalytics','template');
    endif;

?>
</body>
</html>
