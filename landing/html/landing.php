<header class="hidden">
<h1>Luis Gdonis</h1>
<h2>Software developer</h2>
</header>

<section class="header">

    <article class="rcenter vertical">
        <div>
            <div class="rgrid columns-03 r420">
                <div><hr></div>
                <div>
                    <span id="foto"></span>
                </div>
                <div><hr></div>
            </div>
            <p id="slogan">Hello I'm <span></span></p>
        </div>
    </article>  

    <div class="about">
        <p>Software developer and science evangelist living in
        <?php echo $html->link('<u>Guatemala</u>','http://visitguatemala.com/en',array('target'=>'blank')); ?></p>
    </div>

</section>

<section class="blog">

    <h2><?php echo $html->link('My blog', 'blog') ?></h2>
    
    <div class="rblock columns-03">

        <?php

        $posts = $wapi->getPosts('per_page=6');

        foreach($posts as $post):
            
        ?>

        <a class="post" href="<?php echo $html->url('blog' . DS . $post->slug) ?>">
            <h3><?php echo $post->title ?></h3>
            <img src="<?php echo $post->media->details->sizes->medium->url ?>" />
            <p><?php echo $post->date_formatted ?></p>
        </a>

        <?php

        endforeach;
        
        ?>

    </div>

    <?php echo $html->link('- See all posts -','blog'); ?>

</section>

<?php
/*
<section class="projects">

    <h2>Projects</h2>

    <?php // Lesli framework // ?>
    <div class="rgrid r520">

        <div class="column-04">
            <img alt="Lesli framework logo" src="http://cdn.ldonis.net/assets/logos/lesliframework/lesli-logo-150.png">
        </div>

        <div class="column-06">
            <h4>Lesli Framework</h4>
            <p>
                Lesli is a PHP web framework to build static websites, providing
                a logical directories structure and a good collection of helpers
                and too many more great features.
            </p>
            <ul class="rnav">
                <li><a target="_blank" href="http://lesliframework.com" class="website">website</i></a></li>
                <li><a target="_blank" href="https://github.com/LesliFramework/" class="github">github</a></li>
            </ul>
        </div>

    </div>

    <?php // Responsive Cat // ?>
    <div class="rgrid r520">

        <div class="column-04">
            <img alt="Responsive Cat logo" src="http://cdn.ldonis.net/assets/logos/responsivecat/rcat-logo-200.png">
        </div>

        <div class="column-06">
            <h4>Responsive Cat</h4>
            <p>
                Responsive Cat is a mobile-first CSS micro framework that allowing
                to write clean and syntactically code according to the standards.
            </p>
            <ul class="rnav">
                <li><a target="_blank" href="http://responsivecat.com" class="website">website</a></li>
                <li><a target="_blank" href="https://github.com/ResponsiveCat/" class="github">github</a></li>
            </ul>
        </div>

    </div>

    <?php // Responsive Cat // ?>
    <div class="rgrid r520">

        <div class="column-04">
            <img alt="Lesli5 logo" src="http://cdn.ldonis.net/assets/logos/lesli5/lesli5-logo-200.png">
        </div>

        <div class="column-06">
            <h4>Lesli5</h4>
            <p>
                Lesli5 is a platform to share beautiful websites and templates
                built with Lesli Framework and Responsive Cat distributed under
                the creative commons license.
            </p>
            <ul class="rnav">
                <li><a target="_blank" href="http://lesli5.com" class="website">website</a></li>
                <li><a target="_blank" href="https://github.com/Lesil5/" class="github">github</a></li>
            </ul>
        </div>

    </div>

</section>
*/
?>