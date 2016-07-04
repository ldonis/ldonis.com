<?php
$posts = include $this->template('info.post','blog','');
$postid = $webparams[0];
$post = $posts[$postid];
?>
<!Doctype html>
<html lang="<?php echo $LesliController['WEBSITE_lang'] ?>">
<head>
    <meta name="google-site-verification" content="YVfoDTFWu7SiMaLQhut3HVM2z_X7EaN0IUmLaLLCm1g" />

    <?php

    $html->head();
    echo '<title>' . $post['title'] . ' | ' . $blogwebtitle . '</title>';

    $seo->meta($post['title'] . ' - ' . $blogdescription);
    $seo->meta($LesliController['HTTP_uri'],'author');
    $seo->canonical($LesliController['HTTP_uri']);

    // Twitter card
    $seo->twitterCard(array(
        'card' => 'summary',
        'site' => '@lgdonis',
        'title' => $post['title'],
        'description' => $post['title'] . ' - ' . $blogdescription,
        'image' => $html->img($postid . '.jpg', array('url','path' => 'blog')),
        'url' => $LesliController['HTTP_url']
    ));

    // Facebook card
    $seo->facebookCard(array(
        'url' => $LesliController['HTTP_url'],
        'type' => 'website',
        'title' => $post['title'],
        'description' => $post['title'] . ' - ' . $blogwebtitle . ' | ' . $blogdescription,
        'image' => array(
            'content'=> $html->img($postid . '.jpg', array('url','path' => 'blog')),
            'width' => '425',
            'height'=> '425'
        )
    ));


    if (ENV == 'live') :

        echo $html->css();

    else :

        echo
            "\n" . $html->css('rcat.min','public') .
            "\n" . $html->css('generic', 'Template') .
            "\n" . $html->css('blog');

    endif;


?>

</head>
<body>
<?php

    include $this->template('blog.header');

    include $this->template($postid,'blog','post');

    include $this->template('blog.footer.post');

    include $this->template('footer');

    if (ENV == 'live') :
        echo $html->js('analytics','template');
    endif;

?>
</body>
</html>
