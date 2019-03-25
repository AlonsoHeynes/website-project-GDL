<?php include_once 'includes/templates/header.php' ?>

  <section class="seccion contenedor">
    <h2>La mejor conferencia de diseño web en español</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere earum, cumque sed magni cum quaerat illo soluta autem, eveniet quasi sapiente dolore et aut. Molestiae veniam sunt at quisquam incidunt.</p>
  </section> <!--.seccion-->

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogv">
      </video>
    </div><!--contenedor-video-->

    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del evento</h2>
          <nav class="menu-programa">
            <a href="#talleres"><i class="fa fa-code" aria-hidden="true"></i> Talleres</a>
            <a href="#conferencias"><i class="fa fa-comment" aria-hidden="true"></i> Conferencias</a>
            <a href="#seminarios"><i class="fa fa-university" aria-hidden="true"></i> Seminarios</a>
          </nav>

          <div id="talleres" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>HTML5, CSS y JavaScript</h3>
              <p><i class="fas fa-clock"></i> 16:00 hrs</p>
              <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
              <p><i class="fas fa-user"></i> Sergio Heynes</p>
            </div>
            <div class="detalle-evento">
              <h3>Responsive Web Design</h3>
              <p><i class="fas fa-clock"></i> 20:00 hrs</p>
              <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
              <p><i class="fas fa-user"></i> Luis Rodarte</p>
            </div>
            <a href="#" class="button float-right clearfix">Ver todos</a>
          </div><!--.talleres-->
          <div id="conferencias" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Como ser freelancer</h3>
              <p><i class="fas fa-clock"></i> 10:00 hrs</p>
              <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
              <p><i class="fas fa-user"></i> Gregorio Sánchez</p>
            </div>
            <div class="detalle-evento">
              <h3>Tecnologías del futuro</h3>
              <p><i class="fas fa-clock"></i> 17:00 hrs</p>
              <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
              <p><i class="fas fa-user"></i> Susan Sánchez</p>
            </div>
            <a href="#" class="button float-right clearfix">Ver todos</a>
          </div><!--.talleres-->
          <div id="seminarios" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Diseño UI/UX</h3>
              <p><i class="fas fa-clock"></i> 17:00 hrs</p>
              <p><i class="fas fa-calendar-alt"></i> 11 de Dic</p>
              <p><i class="fas fa-user"></i> Harold García</p>
            </div>
            <div class="detalle-evento">
              <h3>Aprende a programar en una mañana</h3>
              <p><i class="fas fa-clock"></i> 10:00 hrs</p>
              <p><i class="fas fa-calendar-alt"></i> 11 de Dic</p>
              <p><i class="fas fa-user"></i> Susana Rivera</p>
            </div>
            <a href="#" class="button float-right clearfix">Ver todos</a>
          </div><!--.talleres-->
        </div><!--.programa-evento-->
      </div><!--.contenedor-->
    </div><!--.contenido-programa-->
  </section><!--.programa-->

  <?php include_once 'includes/templates/invitados.php' ?>

  <div class="contador parallax">
    <div class="contador">
      <ul class="resumen-evento clearfix">
        <li><p class="numero"></p> Invitados</li>
        <li><p class="numero"></p> Talleres</li>
        <li><p class="numero"></p> Días</li>
        <li><p class="numero"></p> Conferencias</li>
      </ul>
    </div>
  </div>

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Pase por día</h3>
            <p class="numero">$30</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Todos lo días</h3>
            <p class="numero">$50</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button">Comprar</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Pase por 2 días</h3>
            <p class="numero">$45</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <div id="mapa" class="mapa"></div>

  <div class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas minima facere possimus necessitatibus, nobis aperiam consectetur pariatur delectus fugit non? Facere repellendus expedita quis ipsa cumque quisquam iste vero veniam.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div><!--.Testimonial-->
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas minima facere possimus necessitatibus, nobis aperiam consectetur pariatur delectus fugit non? Facere repellendus expedita quis ipsa cumque quisquam iste vero veniam.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div><!--.Testimonial-->
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas minima facere possimus necessitatibus, nobis aperiam consectetur pariatur delectus fugit non? Facere repellendus expedita quis ipsa cumque quisquam iste vero veniam.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div><!--.Testimonial-->
    </div>
  </div><!--.Seccion testimoniales-->

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>Regístrate al newsletter!</p>
      <h3>gdlwebcamp</h3>
      <a href="#" class="button transparent">Registro</a>
    </div>
  </div><!--.newsletter-->

  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li><p id="dias" class="numero"></p> días</li>
        <li><p id="horas" class="numero"></p> horas</li>
        <li><p id="minutos" class="numero"></p> minutos</li>
        <li><p id="segundos" class="numero"></p> segundos</li>
      </ul>
    </div>
  </section>

<?php include_once 'includes/templates/footer.php' ?>
