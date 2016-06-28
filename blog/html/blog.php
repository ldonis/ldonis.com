
<section class="blog">

    <?php

    foreach($posts as $id => $post):

        $post_url = $website . DS . $id;

    ?>

    <article class="blog-home">

        <div class="post-header">

            <h2><?php echo $html->link($post['title'], $post_url); ?></h2>
            <?php echo $html->img( $id . '.jpg'); ?>

        </div>

        <div class="post-content">

            <?php echo $post['excerpt']; ?>

        </div>

        <div class="post-footer">
            <?php echo $html->link( 'Leer más...', $post_url ); ?>
            <p><?php echo $post['date']; ?></p>
        </div>

    </article>

    <?php

    endforeach;

    ?>

</section>
