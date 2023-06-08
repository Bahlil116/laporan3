<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>

    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl ?>/assets/css/style.css">
    
    
      <script src="<?= Yii::$app->request->baseUrl ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="<?= Yii::$app->request->baseUrl ?>/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="<?= Yii::$app->request->baseUrl ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="<?= Yii::$app->request->baseUrl ?>/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="<?= Yii::$app->request->baseUrl ?>/vendor/typed.js/typed.umd.js"></script>
      <script src="<?= Yii::$app->request->baseUrl ?>/vendor/php-email-form/validate.js"></script>


<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use an text logo -->
      <!-- <h1 class="logo"><a href="index.html">Folio</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link  scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link  scrollto" href="#journal">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="home">

<div class="container">
  <div class="hero-content">
    <h1>I'm Deril Bahlil Pratama<span class="typed" data-typed-items="Alex Smith, Designer, Developer, Freelancer, Photographer"></span>
    </h1>
    <p>Designer, Developer, Freelancer, Photographer</p>

    <ul class="list-unstyled list-social">
      <li><a href="#"><i class="bi bi-facebook"></i></a></li>
      <li><a href="#"><i class="bi bi-twitter"></i></a></li>
      <li><a href="#"><i class="bi bi-instagram"></i></a></li>
      <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
    </ul>
  </div>
</div>
</div><!-- End Hero -->

<main id="main">

<!-- ======= About Section ======= -->
<div id="about" class="paddsection">
  <div class="container">
    <div class="row justify-content-between">

      <div class="col-lg-4 ">
        <div class="div-img-bg">
          <div class="about-img">
            <img src="assets/img/me.jpg" class="img-responsive" alt="me">
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="about-descr">

          <p class="p-heading">im a ux /ui designer austin based who loves clean, simple & unique design. i also
            enjoy crafting brand identities, icons, & ilustration work. </p>
          <p class="separator">To an English person, it will seem like simplified English, as a skeptical Cambridge
            friend of mine told me what Occidental is. The European languages are members of the same family.English
            person.</p>

        </div>

      </div>
    </div>
  </div>
</div><!-- End About Section -->

<!-- ======= Services Section ======= -->
<div id="services">
  <div class="container">

    <div class="services-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="services-block">
            <i class="bi bi-briefcase"></i>
            <span>UI/UX DESIGN</span>
            <p class="separator">To an English person, it will seem like simplified English,told me what </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="services-block">
            <i class="bi bi-card-checklist"></i>
            <span>BRAND IDENTITY</span>
            <p class="separator">To an English person, it will seem like simplified English,told me what </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="services-block">
            <i class="bi bi-bar-chart"></i>
            <span>WEB DESIGN</span>
            <p class="separator">To an English person, it will seem like simplified English,told me what </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="services-block">
            <i class="bi bi-binoculars"></i>
            <span>MOBILE APPS</span>
            <p class="separator">To an English person, it will seem like simplified English,told me what </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="services-block">
            <i class="bi bi-brightness-high"></i>
            <span>Analytics</span>
            <p class="separator">To an English person, it will seem like simplified English,told me what </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="services-block">
            <i class="bi bi-calendar4-week"></i>
            <span>PHOTOGRAPHY</span>
            <p class="separator">To an English person, it will seem like simplified English,told me what </p>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</div><!-- End Services Section -->

<!-- ======= Portfolio Section ======= -->
<div id="portfolio" class="paddsection">

  <div class="container">
    <div class="section-title text-center">
      <h2>My Portfolio</h2>
    </div>
  </div>

  <div class="container">

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 1</h4>
          <p>App</p>
          <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
            class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Web 3</h4>
          <p>Web</p>
          <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
            class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 2</h4>
          <p>App</p>
          <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
            class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Card 2</h4>
          <p>Card</p>
          <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
            class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Web 2</h4>
          <p>Web</p>
          <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
            class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 3</h4>
          <p>App</p>
          <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
            class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

    </div>

  </div>

</div><!-- End Portfolio Section -->

<!-- ======= Journal Section ======= -->
<div id="journal" class="text-left paddsection">

  <div class="container">
    <div class="section-title text-center">
      <h2>journal</h2>
    </div>
  </div>

  <div class="container">
    <div class="journal-block">
      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="journal-info">

            <a href="blog-single.html"><img src="assets/img/blog-post-1.jpg" class="img-responsive" alt="img"></a>

            <div class="journal-txt">

              <h4><a href="blog-single.html">SO LETS MAKE THE MOST IS BEAUTIFUL</a></h4>
              <p class="separator">To an English person, it will seem like simplified English
              </p>

            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="journal-info">

            <a href="blog-single.html"><img src="assets/img/blog-post-2.jpg" class="img-responsive" alt="img"></a>

            <div class="journal-txt">

              <h4><a href="blog-single.html">WE'RE GONA MAKE DREAMS COMES</a></h4>
              <p class="separator">To an English person, it will seem like simplified English
              </p>

            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="journal-info">

            <a href="blog-single.html"><img src="assets/img/blog-post-3.jpg" class="img-responsive" alt="img"></a>

            <div class="journal-txt">

              <h4><a href="blog-single.html">NEW LIFE CIVILIZATIONS TO BOLDLY</a></h4>
              <p class="separator">To an English person, it will seem like simplified English
              </p>

            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

</div><!-- End Journal Section -->

<!-- ======= Contact Section ======= -->
<div id="contact" class="paddsection">
  <div class="container">
    <div class="contact-block1">
      <div class="row">

        <div class="col-lg-6">
          <div class="contact-contact">

            <h2 class="mb-30">GET IN TOUCH</h2>

            <ul class="contact-details">
              <li><span>23 Main, Street</span></li>
              <li><span>New York, United States</span></li>
              <li><span>+88 01912704287</span></li>
              <li><span>example@example.com</span></li>
            </ul>

          </div>
        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row gy-3">

              <div class="col-lg-6">
                <div class="form-group contact-block1">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                    required>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                    required>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="form-group">
                  <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>

              <div class="mt-0">
                <input type="submit" class="btn btn-defeault btn-send" value="Send message">
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<div id="footer" class="text-center">
<div class="container">
  <div class="socials-media text-center">

    <ul class="list-unstyled">
      <li><a href="#"><i class="bi bi-facebook"></i></a></li>
      <li><a href="#"><i class="bi bi-twitter"></i></a></li>
      <li><a href="#"><i class="bi bi-instagram"></i></a></li>
      <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
    </ul>

  </div>

  <p>&copy; Copyrights Folio. All rights reserved.</p>

  <div class="credits">
    <!--
    All the links in the footer should remain intact.
    You can delete the links only if you purchased the pro version.
    Licensing information: https://bootstrapmade.com/license/
    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Folio
  -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>

</div>
</div><!-- End Footer -->

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="mt-auto py-3 bg-light">
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-6 text-center text-md-start">&copy; My Company <?= date('Y') ?></div>
            <div class="col-md-6 text-center text-md-end"><?= Yii::powered() ?></div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
