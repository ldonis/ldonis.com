<section id="front">
    <article class="profile">
        <div class="profile_content">
            <div class="vertical">
                <div class="middle">
                    <span id="foto"></span>
                    <p><?php //$_('bio1'); ?></p>
                    <p><?php $e('bio2','about'); ?></p>
                    <p><?php $e('bio3','about'); ?></p>
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
        <br><br>
        <h2>&lt; <?php $e('projects', 'titles'); ?> /&gt;</h2>
        <br><br>
    </article>
    <article id="slider">
        <ul class="bjqs">
            <li class="slide_1">
                <div class="project">
                    <a href="http://lesli.ldonis.com" target="blank">
                        <?php echo $html->img('project.lesli.png'); ?>
                    </a>
                </div>
            </li>
            <li class="slide_2">
                <div class="project">
                    <a href="http://rcat.ldonis.com" target="blank">
                        <?php echo $html->img('project.rcat.png'); ?>
                    </a>
                </div>
            </li>
        </ul>        
    </article>
</section>
<section id="contact">
    <article class="vertical">
        <div class="middle">
            <br><br>
            <h2><?php $_('contact', 'titles'); ?></h2>
            <br>
                <form class="rform block">
                    <div class="rgrid columns-02">
                        <div>
                            <input type="text" placeholder="<?php $e('name','form'); ?>">
                        </div>
                        <div>
                            <input type="tel" placeholder="<?php $e('phone','form'); ?>">
                        </div>
                    </div>
                    <input type="email" placeholder="Email">
                    <textarea rows="4" placeholder="<?php $e('message','form'); ?>"></textarea>
                    <input type="submit" value="<?php $e('send','form'); ?>" class="rbutton-primary">
                </form>
            <br><br>
        </div>
    </article>
</section>

<section id="footer">
    <?php include 'social.php'; ?>
    <p>powered by <a href="http://ldonis.net">ldonis.net | Software development</a></p>
</section>