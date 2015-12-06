<section id="portal">

    <article class="rcenter vertical">

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

        <div>
            <h2>I truly love my work</h2>
            <p>
                Having worked as a software developer for the past five years;
                I've discovered how magical it can be,
                from adjusting a little bug to building a larger, more sophisticated system;
                Everything is an elegant symphony composed of code and logical
                reasoning embodied in a little compiled file.
            </p>
        </div>

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

    <a id="rcatmail" href="<?php echo $html->url(''); ?>" class="rblock columns-02">

        <div>
            <img src="http://img.ldonis.net/rcat/rcatmail-logo.png" />
            <h3>RCatmail</h3>
        </div>

        <div>
            Responsive email is a framework to build pretty and responsive emails
            for too manu clients.
        </div>

    </a>

</section>

<section id="blog">

    <p id="title">Sometimes I write about things I like</p>
    <?php /*
    <script>
        (function() {
            var blogAPI = "http://blog.ldonis.com/api/blog/posts/";
            $.getJSON( blogAPI)
                .done(function( data ) {
                    //console.log(data);
                    var blogUrl = data.blog.url;
                    $.each( data.posts, function( i, item ) {
                        console.log(item);
                        $( "<img>" ).attr( "src", item.image ).appendTo( "#posts" );
                        $('#posts').append('<h4>' + item.title + '</h4>');                        
                        $('#posts').append('<span>' + item.date + '</span>');
                        $('#posts').append(item.excerpt);
                        
                    });
                });
            })();
    </script>
    */ ?>
    <article id="posts" class="rgrid columns-03">
        <?php
        
        $posts = json_decode(file_get_contents('http://blog.ldonis.com/api/blog/posts/'));
        $posts = $posts->posts;
        
        foreach($posts as $key => $post){
            
            echo '<div>';
                echo '<h4>' . $post->title . '</h4>';
                echo '<img src="' . $post->image . '">';
                echo '<p>' . $post->excerpt . '</p>';
            echo '</div>';
            
        
        }
        
        ?>
    </article>

</section>

<!--
<section>
    <h2>Stay in touch</h2>
    <?php echo $html->form('mail/contact', array('class'=>'rform block')); ?>
        <input name="email" placeholder="Your email">
        <textarea name="message"></textarea>
        <input type="submit" value="send">
    </form>
</section>
-->
