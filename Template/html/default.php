<!Doctype html>
<html lang="<?php echo $weblang; ?>">
    <head>
        <meta name="google-site-verification" content="gCmI2dPpWr6uwVTnM9OWxaFUPehb9LrCP9l7ZMxImEQ" />
        <title>ldonis | Software developer</title>
    <?php
    $html->head();

    if (ENV == 'live') {

        echo $html->css();

    } else {

        echo $html->css($website);

    }

?>

</head>
<body>
<?php

    echo '<div class="lang_content">';

    echo '</div>';

    include $content;

    include $this->template('footer');

    if($website == 'landing'):

    ?>
    <script
    src="https://code.jquery.com/jquery-1.12.4.min.js"
    integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
    crossorigin="anonymous"></script>

    <?php echo $html->js('typed.min', 'template'); ?>

    <script>
        jQuery(document).ready(function(){

        });

            jQuery("#slogan span").typed({
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

    </script>
    <?php

    endif;

    if (ENV == 'live'){

        echo $html->js('analytics', 'template');

    }

    ?>
</body>
</html>
