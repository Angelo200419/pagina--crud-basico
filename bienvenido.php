<?php

  session_start();
  if (!isset($_SESSION['usuario'])){
    echo '
    <script>
        alert("Por favor debes iniciar sessión");
        window.location = "index.php";
    </script>
    ';
    //header("location: index.php");
    session_destroy();
    die();
    
  }

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pagina!!!</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link
    rel="shortcut icon"
    href="img/icono.jpeg"
    type="image/x-icon"
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.0.2/dist/sweetalert2.min.css">  
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  />
  </head>
  <body>
    <!-- #region ENCABEZADO -->
    <header class="header" id="header">
      <nav class="nav container">
        
          PROGRAMACIÓN
        </a>
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="#home" class="nav__link active-link">Inicio</a>
            </li>
            <li class="nav__item">
              <a href="#about" class="nav__link">Acerda de</a>
            </li>
            <li class="nav__item">
              <a href="#trick" class="nav__link">Cursos</a>
            </li>
            <li class="nav__item">
              <a href="#new" class="nav__link">New</a>
            </li>
            <li class="nav__item">
              <a href="php/inventario.php" class="nav__link">inventario</a>
            </li>
            <a href="php/cerrar_session.php" class="button button--ghost">Cerrar sessión</a>
          </ul>
          <div class="nav__close" id="nav-close">
            <i class="bx bx-x"></i>
          </div>
          <img src="assets/img/nav-img.png" alt="" class="nav__img" />
        </div>
        <div class="nav__toggle" id="nav-toggle">
          <i class="bx bx-grid-alt"></i>
        </div>
      </nav>
    </header>
    <!-- #endregion -->
    <!-- #region Principal-->
    <main class="main">
      <!--Menu inicial-->
      <section class="home container" id="home">
        <div class="swiper home-swiper">
          <div class="swiper-wrapper">
            <!--1 2 3-->
            <section class="swiper-slide">
              <div class="home__content grid">
                <div class="home__group">
                  <img
                    src="img/javacript.jpeg"
                    alt=""
                    class="home__img"
                  />
                  <div class="home__indicator"></div>

                  <div class="home__details-img">
                    <h4 class="home__details-title">Presentamos”</h4>
                    <span class="home__details-subtitle">
                      JavaScript</span
                    >
                  </div>
                </div>

                <div class="home__data">
                  <h3 class="home__subtitle">#1 El lenguaje más utlizado</h3>
                  <h1 class="home__title">
                    TOP <br />

                    JAVA <br />
                    SCRIPT!!
                  </h1>
                  <p class="home__description">
                  JavaScript es un lenguaje de programación utilizado principalmente en el desarrollo web. Permite crear interactividad en páginas, se ejecuta en el navegador del usuario y también puede usarse en el lado del servidor con Node.js. Su sintaxis es similar a Java y C, pero es más dinámico y versátil. Es esencial para el desarrollo web moderno.
                  </p>

                  <div class="home__buttons">
                    <a href="https://www.youtube.com/watch?v=z95mZVUcJ-E&t=1134s" class="button"> Video de recomendacion</a>
                    <a href="#" class="button--link button--flex">
                      Audio grabado
                      <i class="bx bx-right-arrow-alt button__icon"></i
                    ></a>
                  </div>
                </div>
              </div>
            </section>
            <section class="swiper-slide">
              <div class="home__content grid">
                <div class="home__group">
                  <img
                    src="img/python.jpeg"
                    alt=""
                    class="home__img"
                  />
                  <div class="home__indicator"></div>

                  <div class="home__details-img">
                    <h4 class="home__details-title">Presentamos!</h4>
                    <span class="home__details-subtitle">
                      PYTHON</span
                    >
                  </div>
                </div>

                <div class="home__data">
                  <h3 class="home__subtitle">#2 El segundo más top</h3>
                  <h1 class="home__title">
                    TOP #2 <br />

                    PY <br />
                    THON!!
                  </h1>
                  <p class="home__description">
                  Python es un lenguaje de programación de alto nivel conocido por su simplicidad y legibilidad. Destaca por su versatilidad, siendo utilizado en desarrollo web, inteligencia artificial, análisis de datos y automatización.
                   Su sintaxis clara y concisa facilita el aprendizaje, y cuenta con una amplia biblioteca estándar que simplifica el desarrollo de aplicaciones.

                  <div class="home__buttons">
                    <a href="https://www.youtube.com/watch?v=nKPbfIU442g&t=2731s" class="button">Video de recomendacion</a>
                    <a href="#" class="button--link button--flex"
                      >Track Record
                      <i class="bx bx-right-arrow-alt button__icon"></i
                    ></a>
                  </div>
                </div>
              </div>
            </section>
            <section class="swiper-slide">
              <div class="home__content grid">
                <div class="home__group">
                  <img
                    src="img/java.jpeg"
                    alt=""
                    class="home__img"
                  />
                  <div class="home__indicator"></div>

                  <div class="home__details-img">
                    <h4 class="home__details-title">Presentamos!!</h4>
                    <span class="home__details-subtitle"
                      >Java</span
                    >
                  </div>
                </div>

                <div class="home__data">
                  <h3 class="home__subtitle">#3 EL TERCERO MÁS TOP</h3>
                  <h1 class="home__title">
                    TOP <br />

                    JAVA!! <br />
                  </h1>
                  <p class="home__description">
                  Java es un lenguaje de programación de alto nivel y orientado a objetos, conocido por su portabilidad, seguridad y sintaxis estructurada. 
                  Utiliza una máquina virtual (JVM) para ejecutarse en diversas plataformas sin necesidad de recompilación.
                   Ampliamente usado en el desarrollo empresarial, aplicaciones móviles (Android) y web, Java destaca por su robustez y extensa biblioteca estándar que facilita el desarrollo de aplicaciones complejas.

                  <div class="home__buttons">
                    <a href="https://www.youtube.com/watch?v=W86KTBSiX2o" class="button">Video de recomendacion</a>
                    <a href="#" class="button--link button--flex"
                      >Track Record
                      <i class="bx bx-right-arrow-alt button__icon"></i
                    ></a>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </section>
      <!--Categirias-->
      <section class="section category">
        <h2 class="section__title">
          Otros Lenguajes <br />
          Favoritos
        </h2>

        <div class="category__container container grid">
          <div class="category__data">
            <img
              src="img/C.png"
              alt=""
              class="category__img"
            />
            <h3 class="category__title">C#</h3>
            <p class="category__description">
            Popular en el desarrollo de aplicaciones Windows y juegos con el motor Unity.
            </p>
          </div>

          <div class="category__data">
            <img
              src="img/typscript.png"
              alt=""
              class="category__img"
            />
            <h3 class="category__title">TypeScript</h3>
            <p class="category__description">
            Una extensión de JavaScript que agrega tipado estático, 
            utilizado en desarrollo web.
          </div>

          <div class="category__data">
            <img
              src="img/swift.png"
              alt=""
              class="category__img"
            />
            <h3 class="category__title">Swift</h3>
            <p class="category__description">
            Utilizado para el desarrollo de aplicaciones en el ecosistema de Apple, especialmente en iOS.
            </p>
          </div>
        </div>
      </section>
      <!--Acerca de-->
      <section class="section about" id="about">
        <div class="about__container container grid">
          <div class="about__data">
            <h2 class="section__title about__title">
              Acerca de programación
              <br />
            </h2>
            <p class="about__description">
            La programación es el proceso de crear conjuntos de instrucciones para que una computadora realice tareas específicas. Utiliza lenguajes de programación para comunicarse con las máquinas, y los desarrolladores escriben código comprensible para los humanos pero ejecutable por las computadoras. La programación es esencial en diversas áreas, desde el desarrollo de software hasta la automatización y la investigación científica. Es una habilidad clave en la era digital.
            </p>
            <a href="https://www.codewars.com/" class="button"> Saber más</a>
          </div>

          <img src="img/programacion.jpeg" alt="" class="about__img" />
        </div>
      </section>
      <!--Truco o trato-->
      <section class="section trick" id="trick">
        <h2 class="section__title">Cursos :3</h2>

        <div class="trick__container container grid">
          <div class="trick__content">
            <img
              src="img/javascript2.png"
              alt=""
              class="trick__img"
            />
            <h3 class="trick__title">Javascript</h3>
            <span class="trick__subtitle"></span>
            <span class="trick__price">S/.11.99</span>
            <button class="button trick__button">
              <i class="bx bx-cart-alt trick__icon"></i>
            </button>
          </div>

          <div class="trick__content">
            <img
              src="img/python2.png"
              alt=""
              class="trick__img"
            />
            <h3 class="trick__title">Python</h3>
            <span class="trick__subtitle"></span>
            <span class="trick__price">S/18.99</span>
            <button class="button trick__button">
              <i class="bx bx-cart-alt trick__icon"></i>
            </button>
          </div>

          <div class="trick__content">
            <img
              src="img/java2.png"
              alt=""
              class="trick__img"
            />
            <h3 class="trick__title">JAVA</h3>
            <span class="trick__subtitle"></span>
            <span class="trick__price">S/15.99</span>
            <button class="button trick__button">
              <i class="bx bx-cart-alt trick__icon"></i>
            </button>
          </div>

          <div class="trick__content">
            <img
              src="img/C.png"
              alt=""
              class="trick__img"
            />
            <h3 class="trick__title">C#</h3>
            <span class="trick__subtitle">Oferta</span>
            <span class="trick__price">S/17.99</span>
            <button class="button trick__button">
              <i class="bx bx-cart-alt trick__icon"></i>
            </button>
          </div>

          <div class="trick__content">
            <img
              src="img/typscript.png"
              alt=""
              class="trick__img"
            />
            <h3 class="trick__title">TypeScript</h3>
            <span class="trick__subtitle"></span>
            <span class="trick__price">S/19.99</span>
            <button class="button trick__button">
              <i class="bx bx-cart-alt trick__icon"></i>
            </button>
          </div>

          <div class="trick__content">
            <img
              src="img/swift.png"
              alt=""
              class="trick__img"
            />
            <h3 class="trick__title">Swift</h3>
            <span class="trick__subtitle">Oferta</span>
            <span class="trick__price">S/17.99</span>
            <button class="button trick__button">
              <i class="bx bx-cart-alt trick__icon"></i>
            </button>
          </div>
        </div>
      </section>
      <!--Descuentos-->
      <section class="section discount">
        <div class="discount__container container grid">
          <div class="discount__data">
            <h2 class="discount__title">
              50% de descuento <br />

              Sobre nuevos productos
            </h2>
            <a href="php/inventario.php" class="button">Ir a nuevo</a>
          </div>

          <img src="img/descuento.jpeg" alt="" class="discount__img" />
        </div>
      </section>
      <!--Nuevos items-->
      <section class="section new" id="new">
        <h2 class="section__title">Los recién llegados</h2>

        <div class="new__container container">
          <div class="swiper new-swiper">
            <div class="swiper-wrapper">
              <div class="new__content swiper-slide">
                <div class="new__tag">New</div>
                <img src="img/PHP.jpeg" alt="" class="new__img" />
                <h3 class="new__title">PHP</h3>
                <span class="new__subtitle">Accessory</span>

                <div class="new__prices">
                  <span class="new__price">S/14.99</span>
                  <span class="new__discount">S/29.99</span>
                </div>

                <button class="button new__button">
                  <i class="bx bx-cart-alt new__icon"></i>
                </button>
              </div>

              <div class="new__content swiper-slide">
                <div class="new__tag">New</div>
                <img src="img/ruby.jpeg" alt="" class="new__img" />
                <h3 class="new__title">Ruby</h3>
                <span class="new__subtitle">Accessory</span>

                <div class="new__prices">
                  <span class="new__price">S/11.99</span>
                  <span class="new__discount">S/21.99</span>
                </div>

                <button class="button new__button">
                  <i class="bx bx-cart-alt new__icon"></i>
                </button>
              </div>

              <div class="new__content swiper-slide">
                <div class="new__tag">New</div>
                <img src="img/go.jpeg" alt="" class="new__img" />
                <h3 class="new__title">Go (Golang)</h3>
                <span class="new__subtitle">Oferta</span>

                <div class="new__prices">
                  <span class="new__price">S/4.99</span>
                  <span class="new__discount">S/9.99</span>
                </div>

                <button class="button new__button">
                  <i class="bx bx-cart-alt new__icon"></i>
                </button>
              </div>

              <div class="new__content swiper-slide">
                <div class="new__tag">New</div>
                <img src="assets/img/new4-img.png" alt="" class="new__img" />
                <h3 class="new__title">--Nuevos</h3>
                <span class="new__subtitle">Oferta</span>

                <div class="new__prices">
                  <span class="new__price">$00.00</span>
                  <span class="new__discount">$00.00</span>
                </div>

                <button class="button new__button">
                  <i class="bx bx-cart-alt new__icon"></i>
                </button>
              </div>

              <div class="new__content swiper-slide">
                <div class="new__tag">New</div>
                <img src="assets/img/new5-img.png" alt="" class="new__img" />
                <h3 class="new__title">Aqui iran nuevos </h3>
                <span class="new__subtitle">Oferta</span>

                <div class="new__prices">
                  <span class="new__price">$0.00</span>
                  <span class="new__discount">$00.00</span>
                </div>

                <button class="button new__button">
                  <i class="bx bx-cart-alt new__icon"></i>
                </button>
              </div>

              <div class="new__content swiper-slide">
                <div class="new__tag">New</div>
                <img src="img/go.jpeg" alt="" class="new__img" />
                <h3 class="new__title">Go (Golang)</h3>
                <span class="new__subtitle">Accessory</span>

                <div class="new__prices">
                  <span class="new__price">S/7.99</span>
                  <span class="new__discount">S/14.99</span>
                </div>

                <button class="button new__button">
                  <i class="bx bx-cart-alt new__icon"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Suscribirse-->
      <section class="section newsletter">
        <div class="newsletter__container container">
          <h2 class="section__title">  Support</h2>
          <p class="newsletter__description">
            Si quieres que agreguemos nuevos productos deja tu correo te mandaremos un imbox
          </p>

          <form action="" class="newsletter__form">
            <input
              type="text"
              placeholder="Ingresa tu correo"
              class="newsletter__input"
            />
            <a href="" class="button">Subscribe</a>
            <a href="php/inventario.php" class="button">inventario</a>
          </form>
        </div>
      </section>
    </main>
    
    <!--Pie de pagina-->
    <footer class="footer section">
      <div class="footer__container container grid">
        <div class="footer__content">
          <a href="#" class="footer__logo">
            <img src="assets/images/bg4.jpg" alt="" class="footer__logo-img" />
            Programación
          </a>

          <p class="footer__description">
            Porque si lo puedes imaginar <br />
            lo puedes programar 
          </p>

          <div class="footer__social">
            <a
              href="https://www.facebook.com/profile.php?id=100085011660020"
              target="_blank"
              class="footer__social-link"
            >
              <i class="bx bxl-facebook"></i>
            </a>
            <a
              href="https://www.instagram.com/angelofabriziog/"
              target="_blank"
              class="footer__social-link"
            >
              <i class="bx bxl-instagram-alt"></i>
            </a>
            <a
              href="https://twitter.com/Angelofabriziog"
              target="_blank"
              class="footer__social-link"
            >
              <i class="bx bxl-twitter"></i>
            </a>
          </div>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Lenguajes</h3>

          <ul class="footer__links">
            <li>
              <a href="https://es.wikipedia.org/wiki/JavaScript" class="footer__link">JavaScript</a>
            </li>
            <li>
              <a href="https://es.wikipedia.org/wiki/Python" class="footer__link">Python</a>
            </li>
            <li>
              <a href="https://es.wikipedia.org/wiki/Java_(lenguaje_de_programaci%C3%B3n)" class="footer__link">Java</a>
            </li>
          </ul>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">canales de youtube</h3>

          <ul class="footer__links">
            <li>
              <a href="https://www.youtube.com/@soydalto" class="footer__link">Soy Dalto</a>
            </li>
            <li>
              <a href="https://www.youtube.com/@mouredev" class="footer__link">Mouredev</a>
            </li>
            <li>
              <a href="https://www.youtube.com/@HolaMundoDev" class="footer__link">Hola mundo</a>
            </li>
          </ul>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Creador</h3>

          <ul class="footer__links">
            <li>
              <a href="#" class="footer__link">Angelo</a>
            </li>
            <li>
              <a href="#" class="footer__link">Guzman </a>
            </li>
            <li>
              <a href="#" class="footer__link">Alama</a>
            </li>
          </ul>
        </div>
      </div>

      <span class="footer__copy">&#169; Programacion page</span>

      <img src="assets/img/footer1-img.png" alt="" class="footer__img-one" />
      <img src="assets/img/footer2-img.png" alt="" class="footer__img-two" />
    </footer>
    <!-- #endregion -->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="bx bx-up-arrow-alt scrollup__icon"></i>
    </a>

    <!--Scroll para que se revelen los elementos de forma suave-->
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <!--Deslizar elementos en una lista-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script src="assets/js/app.js"></script>
  </body>
</html> 