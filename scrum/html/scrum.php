<!Doctype html>
<html>
<head>
    <meta charset="UTF8">
<?php
    echo
        $html->js('jquery.min', 'public').
        $html->js('animatescroll.min','public').
        $html->js('main').
        $html->css('rcat.min','public').
        $html->css('ppx');
?>
</head>
<body>
<nav>
    <ul>
        <li><a onclick="animate_menu('cicle');">01</a></li>
        <li><a onclick="animate_menu('whatis');">02</a></li>
        <li><a onclick="animate_menu('manifest');">03</a></li>
        <li><a onclick="animate_menu('team');">04</a></li>
        <li><a onclick="animate_menu('process');">05</a></li>
        <li><a onclick="animate_menu('process_desc');">06</a></li>
        <li><a onclick="animate_menu('bi');">07</a></li>
    </ul>
</nav>
<!-- slide content -->
<section>
    <article>
        <!-- slide -->
        <div id="front">
            <?php echo $html->img('scrum.png'); ?>
            <h3>Developers Guatemala</h3>
            <a href="http://www.developersguatemala.org">http://www.developersguatemala.org</a>
            <br><br>
        </div>        
        <!-- slide -->
    </article>
</section>
<!-- slide content -->

<section  id="cicle">
    <article>
        <div>
            <h3>Ciclo de vida convencional<br>en un proyecto de software</h3>
            <div style="width: 500px; margin: 0 auto;">
                <ul>
                    <li>- Toma de requerimientos</li>
                    <li>- Elaboracion del plan de desarrollo (project)</li>
                    <li>- Creacion y documentacion de diseños</li>
                    <li>- Desarrollo (Codificacion y pruebas)</li>
                    <li>- Control de calidad</li>
                    <li>- Implementacion/Puesta en produccion</li>
                </ul>
            </div>
            <br>
        </div>        
    </article>
</section>

<section  id="whatis">
    <article>
        <div>
            <h3>¿Que es Scrum?</h3>
            <p style="font-size: 1.2rem; width: 600px; margin: 0 auto; text-align: justify;">
                • Es un modelo de proceso ágil para el desarrollo de sistemas y servicios.
                  basado en modelos de proceso iterativos y los valores del manifesto agil.
            </p>
            <br>
            <p style="font-size: 1.2rem; width: 600px; margin: 0 auto; text-align: justify;">
                • Permite mantener un ciclo de vida agil para un proyecto de software.
            </p>
            <br>
        </div>        
    </article>
</section>

<section id="manifest">
    <article>
        <div>
            <h3>Manifesto agil</h3>
            <table class="rtable blue center">
                <tr>
                    <td>Individuos e interacciones</td>
                    <td>Procesos y herramientas</td>
                </tr>
                <tr>
                    <td>Software funcional</td>
                    <td>Documentacion excesiva</td>
                </tr>
                <tr>
                    <td>Colaboracion con el cliente</td>
                    <td>Negociacion de contratos</td>
                </tr>
                <tr>
                    <td>Adaptarse al cambio</td>
                    <td>Seguir un plan</td>
                </tr>
            </table>
        </div>        
    </article>
</section>

<section id="team">
    <article>
        <div>
            <h3>Equipo Scrum</h3>
            <?php echo $html->img('scrum_team.png'); ?>
            <br>
            <p>
                <i>Product owner:</i>
                Dueño del software, simula el role del cliente
            </p>
            <p>
                <i>Scrum master:</i>
                Lider de equipo, encargado de solicionar problemas y proveer herramientas.
            </p>
            <p>
                <i>Scrum team:</i>
                Preferiblemente conocimiento en T, personas conprometidas y apasionadas.
            </p>
        </div>
    </article>
</section>

<section id="process">
    <article>
        <div>
            <h3>Proceso agil</h3>
            <?php echo $html->img('scrum_process.jpg'); ?>
            <br>
        </div>        
    </article>
</section>

<section id="process_desc">
    <article>
        <div>
            <h3>Actividades y Herramientas</h3>
            <br>
            <div class="rgrid columns-03" style="width: 1200px; margin: 0 auto;">
                <div>
                    <h4>Daily scrum</h4>
                    <p>
                        Reunion diaria durante un sprint realizada todos los dias a la misma
                        hora con la finalidad de sindronizar revisar adaptar;
                        Se cuenta como van las cosas y se plantean problemas.                 
                    </p>
                </div>
                <div>
                    <h4>Sprint review</h4>
                    <p>
                        La finalizacion de un sprint significa que el equipo ha producido
                        una pieza de software codificado, probado y utilizable.<br>
                        Se les muestra a stakeholders que se logro con el ultimo sprint
                    </p>
                </div>
                <div>   
                    <h4>Sprint retrospective</h4>
                    <p>
                        Reunion con todos los miembros del equipo scrum, con la finalidad
                        de hablar sobre el ultimo sprint, y de como se puede mejorar
                        el proceso de desarrollo.
                    </p>
                </div>
            </div>
            <br><br>
        </div>        
    </article>
</section>

<section id="bi">
    <article>
        <div>
            <h5>Donde continuar</h5>
            <p>http://www.scrumguides.org/</p>
            <br>
            <h5>Aviso copyright</h5>
            <p>Propiedad de imagenes: https://www.mountaingoatsoftware.com/</p>
        </div>
    </article>
</section>

<section id='t'>
    <article>
        <div>
            <h3>¡Gracias!</h3>
            <br>
            <img alt='ldonis' src='http://ldonis.com/Websites/_public_/img/logo/ldonis2.svg'>
        </div>
    </article>
</section>

</body>
</html>