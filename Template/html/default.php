<!Doctype html>
<html lang="<?php echo $weblang; ?>">
    <head>
    <?php
    $html->head();

    if (ENV == 'live') {
        
        echo
        $html->js() .
        $html->css();
         
    } else {
        
        echo
        "\n" . $html->css('rcat.min','public') .
        "\n" . $html->css('generic','template') .
        "\n" . $html->css($website);

    }

?>

</head>
<body>
<?php

    echo '<div class="lang_content">';
        echo $html->menu(
            array( 'lang' => array('text'=>'<i class="icon-globe"></i>' )),
            array( 'class'=>'rnav multi language' ));
    echo '</div>';

    include $content;

?>
</body>
</html>