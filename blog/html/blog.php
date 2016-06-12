
<section class="blog">

    <?php

    foreach($posts as $id => $post):

    ?>

    <article class="blog-home">

        <div class="post-header">

            <h2><?php echo $post['title']; ?></h2>

        </div>

        <div class="post-content">

            <?php echo $post['excerpt']; ?>

        </div>

        <div class="post-footer">
            <?php echo $html->link( 'Leer más...', $website . DS . $id ); ?>
            <p><?php echo $post['date']; ?></p>
        </div>

    </article>

    <?php

    endforeach;

    ?>

</section>
