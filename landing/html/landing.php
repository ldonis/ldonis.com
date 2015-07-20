<section id="front">
    <article class="profile">
        <div class="profile_content">
            <div class="vertical">
                <div class="middle">
                    <span id="foto"></span>
                    <p><?php //$_('bio1'); ?></p>
                    <p><?php $_('bio2'); ?></p>
                    <p><?php $_('bio3'); ?></p>
                </div>
            </div>
        </div>
    </article>
    <article class="social">
        <div class="vertical">
            <div class="middle center">
                <?php include 'social.php'; ?>
            </div>
        </div>
    </article>
</section>

<section id="projects">
    <article class="header">
        <br>
        <h1>&lt; Mis proyectos /&gt</h1>
        <br>
    </article>
    <article id="slider">
        <ul class="bjqs">
            <li class="slide_1">
                <div class="project">
                    <?php echo $html->img('project.lesli.png'); ?>
                </div>
            </li>
            <li class="slide_2">
                <div class="project">
                    <?php echo $html->img('project.rcat.png'); ?>
                </div>
            </li>
        </ul>        
    </article>
</section>

<section id="about">
    <br>
    <h1>About Me</h1>
    <br>
    <article class="bio">
        <p>Amante de la fisica teorica y el desarrollo de software,</p>
        <p>siempre en busca de conocimiento...</p>
    </article>
    <article class="power">
        
        <div class="rgrid columns-03 center">
            <div>
                <div class="soft" id="c">C#</div>
            </div>
            <div>
                <div>
                    <div class="soft" id="o">Oracle Developer</div>
                </div>
            </div>
            <div>
                <div>
                    <div class="soft" id="g">GeneXus</div>
                </div>
            </div>
        </div>
        
    </article>
</section>

<section id="footer">
    <?php include 'social.php'; ?>
</section>