<!Doctype html>
<html lang="<?php echo $lang ?>">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Amante de la física teorica y la informatica, siempre en busca de conocimiento">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $webtitle; ?></title>
    <link rel="canonical" href="http://www.ldonis.com/">

<?php
    if($info['env'] == 'dev'):
        echo
            $html->js('jquery.min','public') .
            $html->js('slider.min','public') .
            $html->js('landing') .
            $html->js('analytics', 'template').

            $html->css('rcat.min','public') .
            $html->css('generic', 'template') .
            $html->css( $site );
    else:
        echo
            $html->css().

            $html->js();
    endif;
?>

</head>
<body>
<?php

    echo '<div class="lang_content">';
        echo $html->menu(
            array( 'lang' => array('text'=>'<i class="icon-globe"></i>' )),
            array( 'class'=>'rnav multi language' ));
    echo '</div>';

    require $content;

?>

</body>
</html>
