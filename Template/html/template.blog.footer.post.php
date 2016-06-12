
<section class="all-posts">
    <?php echo $html->link('- all my posts -','blog'); ?>
</section>

<section class="post-profile">

    <ul class="rnav">
        <li>Compartir:</li>
        <li><a title="tweet" onclick=" window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL), 'window','toolbar=no,location=no,status=1,width=500, height=300'); ">
        <i class="icon-twitter"></i></a></li>
        <li><a title="share" onclick=" window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&amp;t='  + encodeURIComponent(document.URL), 'window','toolbar=no,location=no,status=1,width=500, height=400'); ">
        <i class="icon-facebook"></i></a></li>
    </ul>

    <hr>
    <article>

        <?php echo $html->img('profile.jpg'); ?>
        <div class="presentation">
            <h2>Luis Gdonis</h2>
            <p>
                <i>...la ciencia es el poder del hombre.</i>
            </p>
        </div>

    </article>

</section>

<section class="post-comments">

    <div id="disqus_thread"></div>
    <script>

        var disqus_config = function () {

            this.page.url = "<?php echo $LesliController['HTTP_url']; ?>"
            this.page.identifier = "<?php echo $LesliController['HTTP_uri']; ?>"

        };

        (function() {

            var d = document, s = d.createElement('script');

            s.src = '//ldonis.disqus.com/embed.js';

            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);

        })();

    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

</section>
