<section>

    <article id="portal" class="rcenter vertical">

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


    <article id="about">
        <p>Software developer and science evangelist living in
        <?php echo $html->link('<u>Guatemala</u>','http://visitguatemala.com/en',array('target'=>'blank')); ?></p>
    </article>


    <article id="blog">

        <?php

        // link al blog
        echo $html->link('<h3>latest blog articles</h3>', 'blog');

        $posts = include $this->template('info.post','blog','');

        foreach($posts as $id => $post):

        ?>

            <div class="post">
                <h4><?php echo $post['title']; ?></h4>
                <p>
                <?php
                    echo $post['date'] . ' - ' . substr($post['excerpt'],0,150);
                    echo $html->link( ' - read more - ', 'blog' . DS . $id );
                ?>
                </p>
                <hr>
            </div>

        <?php

        endforeach;

        ?>

    </article>

    <br><br>

    <article id="projects">

        <h3>Projects</h3>

        <?php // Lesli framework // ?>
        <div class="rgrid r520">

            <div class="column-4">
                <img alt="Lesli framework logo" src="http://img.ldonis.net/lesli/lesli-logo-250.png">
            </div>

            <div class="column-6">
                <h4>Lesli Framework</h4>
                <p>
                    Lesli is a PHP web framework to build static websites, providing
                    a logical directories structure and a good collection of helpers
                    and too many more great features.
                </p>
                <ul class="rnav">
                    <li><a target="_blank" href="http://lesliframework.com" class="website">website<i class="icon-globe"></i></a></li>
                    <li><a target="_blank" href="https://github.com/LesliFramework/" class="github">github<i class="icon-github"></i></a></li>
                </ul>
            </div>

        </div>

        <?php // Responsive Cat // ?>
        <div class="rgrid r520">

            <div class="column-4">
                <img alt="Responsive Cat logo" src="http://img.ldonis.net/rcat/rcat-logo-notext-325.png">
            </div>

            <div class="column-6">
                <h4>Responsive Cat</h4>
                <p>
                    Responsive Cat is a mobile-first CSS micro framework that allowing
                    to write clean and syntactically code according to the standards.
                </p>
                <ul class="rnav">
                    <li><a target="_blank" href="http://responsivecat.com" class="website">website<i class="icon-globe"></i></a></li>
                    <li><a target="_blank" href="https://github.com/ResponsiveCat/" class="github">github<i class="icon-github"></i></a></li>
                </ul>
            </div>

        </div>

        <?php // Responsive Cat // ?>
        <div class="rgrid r520">

            <div class="column-4">
                <img alt="Lesli5 logo" src="http://img.ldonis.net/lesli5/lesli5-logo-375.png">
            </div>

            <div class="column-6">
                <h4>Lesli5</h4>
                <p>
                    Lesli5 is a platform to share beautiful websites and templates
                    built with Lesli Framework and Responsive Cat distributed under
                    the creative commons license.
                </p>
                <ul class="rnav">
                    <li><a target="_blank" href="http://lesli5.com" class="website">website<i class="icon-globe"></i></a></li>
                    <li><a target="_blank" href="https://github.com/Lesil5/" class="github">github<i class="icon-github"></i></a></li>
                </ul>
            </div>

        </div>

    </article>



</section>
