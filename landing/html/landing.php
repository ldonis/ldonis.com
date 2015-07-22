<section id="front">
    <article class="profile">
        <div class="profile_content">
            <div class="vertical">
                <div class="middle">
                    <span id="foto"></span>
                    <p><?php //$_('bio1'); ?></p>
                    <p><?php $_('bio2','about'); ?></p>
                    <p><?php $_('bio3','about'); ?></p>
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
        <h2>&lt; <?php $_('projects', 'titles'); ?> /&gt;</h2>
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
<?php
/*
<section id="about">
    <br>
    <h2><?php $_('about', 'titles'); ?></h2>
    <br>
    <article class="bio">
        <p>Amante de la fisica teorica y el desarrollo de software,</p>
        <p>siempre en busca de conocimiento...</p>
    </article>
    <article class="power">
        <h3>My super powers</h3>
       <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['My Super Powers',   'Oracle', 'SQL Server', 'MySQL', 'PostgreSQL', 'PHP', 'HTML', 'CSS', 'JS'],
          ['My Super Powers',         50,          60,       20,           15,    75,     90,    80, 40]
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, options);
      }
    </script>
        <div id="columnchart_material" style="width: 900px; height: 500px; margin: 0 auto;"></div>      
        <br>
    </article>
    
    <?php
    / *
    <article>
        <h2>Recent projects</h2>
    </article>
    */
    ?>
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
                        <input type="text" placeholder="Name">
                    </div>
                    <div>
                        <input type="tel" placeholder="Phone number">
                    </div>
                </div>
                <input type="email" placeholder="Email">
                <textarea rows="4" placeholder="Message"></textarea>
                <input type="submit" value="Send Message" class="rbutton-primary">
            </form>
            <br><br>
        </div>
    </article>
</section>

<section id="footer">
    <?php include 'social.php'; ?>
    <p>ldonis.net | Software development</p>
</section>