<section id="portal">

    <article class="center vertical">

        <div>

            <div class="rblock columns-03">

                <div><hr></div>

                <div>

                    <span id="foto"></span>

                </div>

                <div><hr></div>

            </div>

            <p id="slogan">Hello, I'm <span></span></p>

        </div>

    </article>

</section>

<section id="about">

    <article id="dev">

        <h2>I really love my work</h2>
        <p>
            I'm software developer since five years ago,
            in that time I learned how magical the software can be,
            from fixing a little bug to build a bigger system;
            Everything is a symphony of code and logical reasoning
            embodied in a small file compiled.
        </p>

    </article>

    <article id="science" class="rblock columns-02">

        <div>

            <div id='atom_content'>
                <div class='atom'>
                    <div class="proton"></div>
                    <div class="electron_1">
                        <div></div>
                    </div>
                    <div class="electron_2">
                        <div></div>
                    </div>
                    <div class="electron_3">
                        <div></div>
                    </div>
                </div>
            </div>

        </div>

        <div>

            <h2>Science, my first love</h2>
            <p>
                Science provide a set of tools to understand how the universe works.<br>
                That is exciting, we can use mathematics to understand the movement
                of one single particle to the all galaxies in the universe, all
                that was achieved thanks to the curiosity and the reasoning capacity
                of the humanity.
            </p>

        </div>

    </article>

</section>

<section id="projects">

    <h2>My projects</h2>

    <a id="lesli" href="http://lesli.ldonis.com" class="rblock columns-02">

        <div>
            <?php echo $html->img('lesli-logo.png'); ?>
            <h3>Lesli</h3>
        </div>

        <div>
            Lesli is a PHP web framework to build static websites, providing a
            logical directories structure and a good collection of helpers and
            too many more great features.
        </div>

    </a>

    <a id="rcat" href="http://responsivecat.com" class="rblock columns-02">

        <div>
            Responsive Cat is a mobile-first micro framework allowing to write
            clear code and syntactically according to the standards, with a lot
            of plugins and modules to make the markup task easy and efficiently.
        </div>

        <div>
            <?php echo $html->img('rcat-logo_notxt.png'); ?>
            <h3>Responsive Cat</h3>
        </div>

    </a>

    <article id="nautilus">
    </article>

</section>

<section id="contact">
    little form contact
    <?php include 'social.php'; ?>
</section>
