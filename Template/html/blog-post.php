<?php

// Get post by slug (url)
$post = $wapi->getPost($LesliController['DATA_params'][0]);
//var_dump($LesliController);
//var_dump($post);
//exit(0);
?>
<!Doctype html>
<html lang="<?php echo $LesliController['WEBSITE_lang'] ?>">
<head>
    <meta name="google-site-verification" content="YVfoDTFWu7SiMaLQhut3HVM2z_X7EaN0IUmLaLLCm1g" />

    <?php

    $html->head();
    echo '<title>' . $post->title . ' | ' . $blogwebtitle . '</title>';
    
    $seo->meta($post->title . ' - ' . $blogdescription);
    $seo->meta($LesliController['HTTP_url'],'author');
    $seo->canonical($LesliController['HTTP_request']);

    // Twitter card
    $seo->twitterCard(array(
        'card' => 'summary',
        'site' => '@lgdonis',
        'title' => $post->title,
        'description' => $post->title . ' - ' . $blogdescription,
        'image' => $post->media->guid,
        'url' => $html->url('blog' . DS . $post->slug)
    ));

    // Facebook card
    $seo->facebookCard(array(
        'url' => $html->url('blog' . DS . $post->slug),
        'type' => 'website',
        'title' => $post->title,
        'description' => $post->title . ' - ' . $blogwebtitle . ' | ' . $blogdescription,
        'image' => array(
            'content'=> $post->media->guid,
            'width' => '425',
            'height'=> '425'
        )
    ));

    if (ENV == 'live') :

        echo $html->css();

    else :

        echo $html->css('blog');

    endif;


?>

</head>
<body>
<?php

    include $this->template('blog.header');

?>
    <section class="blog">

        <article class="post">

            <header class="post-header">

                <h2><?php echo $html->link( $post->title , 'blog/' . $post->slug); ?></h2>
                <img src="<?php echo $post->media->guid ?>" />

            </header>

            <div class="post-content">

                <?php echo $post->content ?>

            </div>

            <div class="post-footer">
            <?php

                // Share on social media links

            ?>
            </div>

        </article>

</section>

<?php

    include $this->template('blog.footer.post');

    include $this->template('footer');

    if (ENV == 'live') :
        echo $html->js('analytics','template');
    endif;

?>
</body>
</html>
