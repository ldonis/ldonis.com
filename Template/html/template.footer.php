<section>

    <article id="social">

        <nav class="rnav">
            <ul>
                <?php /*
                <li data-tooltip="community" class="facebook">
                    <a target="blank" href="https://www.facebook.com/gtcoders">
                    <i class="icon-facebook"></i></a></li> */ ?>
                <li data-tooltip="my projects" class="github">
                    <a target="blank" href="https://github.com/ldonis">
                    <i class="icon-github"></i></a></li>
                <li data-tooltip="follow me" class="twitter">
                    <a target="blank" href="https://twitter.com/lgdonis">
                    <i class="icon-twitter"></i></a></li>
                <li data-tooltip="write me" class="mail">
                    <a href="mailto:emc2@ldonis.com">
                    <i class="icon-mail"></i></a></li>
                <li data-tooltip="read me" class="blog">
                    <a href="/blog">
                    <i class="icon-edit-line"></i></a></li>
                <li data-tooltip="listen to me" class="podcast">
                    <a target="blank" href="http://www.ivoox.com/">
                    <i class="icon-podcast"></i></a></li>
            </ul>
        </nav>

    </article>

    <article id="subscribe">

        <div class="rgrid 520">
            <div class="column-04 logo">
                <?php echo $html->img('logo-ldonis.png',['path'=>'template']); ?>
            </div>
            <div class="column-08 form">
                
                <form action="https://ldonis.us14.list-manage.com/subscribe/post" method="POST">
                
                    <input type="hidden" name="u" value="313cb8cc817b73530b83fae0f">
                    <input type="hidden" name="id" value="4275f07833">

                    <div>
                        <h4>Newsletter</h4>
                        <p>Suscribete para recibir las ultimas noticias del mundo del desarrollo de software</p>
                    </div>

                    <input type="text" name="MERGE1" id="MERGE1" size="25" value="" placeholder="Nombre">
                    <input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" value="" placeholder="Email">
                    <input type="submit" name="submit" value="Suscribir">

                </form>
            </div>
        </div>
        <?php /*
        <form class="rgrid 520">
            <div class="column-06">
                <h4>Newsletter</h4>
                <p>Suscribete para recibir las ultimas noticias del mundo del desarrollo de software</p>
            </div>
            <div class="column-02"><input type="text" name="" placeholder="Nombre"></div>
            <div class="column-02"><input type="text" name="" placeholder="Email"></div>
            <div class="column-02"><input type="submit" name="" value="Suscribir"></div>
        </form>
        */ ?>
    </article>

</section>

<footer>

    <p>ldonis <span class="blue">|</span> science &amp; software</p>

</footer>
