<section class="blog all-posts">

        <?php

        $posts = $wapi->getPosts('per_page=6');

        foreach($posts as $post):

        ?>

        <article class="post">

            <header class="post-header">

                <h2><?php echo $html->link( $post->title , 'blog/' . $post->slug); ?></h2>
                <img src="<?php echo $post->media->guid ?>" />

            </header>

            <div class="post-content">

                <?php echo $post->excerpt ?>

            </div>

            <div class="post-footer">
                <?php echo $html->link( 'Leer más...', 'blog/' . $post->slug ); ?>
                <p><?php echo $post->date_formatted; ?></p>
            </div>

        </article>

        <?php

        endforeach;
        
        ?>

    

</section>
