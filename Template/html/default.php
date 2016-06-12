<!Doctype html>
<html lang="<?php echo $weblang; ?>">
    <head>
        <meta name="google-site-verification" content="gCmI2dPpWr6uwVTnM9OWxaFUPehb9LrCP9l7ZMxImEQ" />
        <title>ldonis | Software developer</title>
    <?php
    $html->head();

    if (ENV == 'live') {

        echo
        $html->js('jquery.min', 'public') .
        $html->js('typed.min', 'template') .
        $html->css();

    } else {

        echo
        "\n" . $html->js('jquery.min', 'public') .
        "\n" . $html->js('typed.min', 'template') .
        "\n" . $html->css('rcat.min','public') .
        "\n" . $html->css('generic','template') .
        "\n" . $html->css($website);

    }

?>
    <script>
        $(function(){
            $("#slogan span").typed({
                strings: [
                    "a software developer",
                    "a science lover",
                    "a dreamer",
                    "Luis Gdonis"],
                typeSpeed: 0,
                startDelay: 1000,
                backDelay: 1300,
                showCursor: false
            });
        });
    </script>
</head>
<body>
<?php

    echo '<div class="lang_content">';

    echo '</div>';

    include $content;

    include $this->template('footer');

    if (ENV == 'live'){
        echo $html->js('analytics', 'template');
    }

?>
</body>
</html>
