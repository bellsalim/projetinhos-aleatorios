<?php
$mysqli = new mysqli("localhost", "root", "", "agencia") or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT*FROM `viagens` WHERE `disponivel`  = 'S'") or die($mysqli->error);

setlocale(LC_ALL, "ptb");

$viagens = array();
while ($row = $result->fetch_assoc()) {
  $viagens[] = $row;
}

$eventosJSON = json_decode(json_encode($viagens));
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
  <html class="wide wow-animation" lang="en">
  <head>
    <title>Viagens</title>
    <script src="https://unpkg.com/feather-icons@4.29.0/dist/feather.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
        
<section class="section section-sm">
        <div class="container">
          <h3>Our Services</h3>
          <div class="row row-30">
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fl-bigmug-line-equalization3"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">Personalized Matching</a></h5>
                    <p class="box-icon-classic-text">Our unique matching system lets you find just the tour you want for your next holiday.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fl-bigmug-line-circular220"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">Wide Variety of Tours</a></h5>
                    <p class="box-icon-classic-text">We offer a wide variety of personally picked tours with destinations all over the globe.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fl-bigmug-line-favourites5"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">Highly Qualified Service</a></h5>
                    <p class="box-icon-classic-text">Our tour managers are qualified, skilled, and friendly to bring you the best service.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fl-bigmug-line-headphones32"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">24/7 Support</a></h5>
                    <p class="box-icon-classic-text">You can always get professional support from our staff 24/7 and ask any question you have.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fl-bigmug-line-hot67"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">Handpicked Hotels</a></h5>
                    <p class="box-icon-classic-text">Our team offers only the best selection of affordable and luxury hotels to our clients.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fl-bigmug-line-wallet26"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">Best Price Guarantee</a></h5>
                    <p class="box-icon-classic-text">If you find tours that are cheaper than ours, we will compensate the difference.</p>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- Hot tours-->
      <section class="section section-sm bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Hot Tours</span></h3>
          <div class="row row-sm row-40 row-md-50">
            <div class="col-sm-6 col-md-12 wow fadeInRight">
              <!-- Product Big-->
              <article class="product-big">
                <div class="unit flex-column flex-md-row align-items-md-stretch">
                  <div class="unit-left"><a class="product-big-figure" href="#"><img src="images/product-big-1-600x366.jpg" alt="" width="600" height="366"/></a></div>
                  <div class="unit-body">
                    <div class="product-big-body">
                      <h5 class="product-big-title"><a href="#">Benidorm, Spain</a></h5>
                      <div class="group-sm group-middle justify-content-start">
                        <div class="product-big-rating"><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span></div><a class="product-big-reviews" href="#">4 customer reviews</a>
                      </div>
                      <p class="product-big-text">Benidorm is a buzzing resort with a big reputation for beach holidays. Situated in sunny Costa Blanca, the town is one of the original Spanish beach resorts...</p><a class="button button-black-outline button-ujarak" href="#">Buy This Tour</a>
                      <div class="product-big-price-wrap"><span class="product-big-price">$790</span></div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-12 wow fadeInLeft">
              <!-- Product Big-->
              <article class="product-big">
                <div class="unit flex-column flex-md-row align-items-md-stretch">
                  <div class="unit-left"><a class="product-big-figure" href="#"><img src="images/product-big-2-600x366.jpg" alt="" width="600" height="366"/></a></div>
                  <div class="unit-body">
                    <div class="product-big-body">
                      <h5 class="product-big-title"><a href="#">Mauritius Island, Africa</a></h5>
                      <div class="group-sm group-middle justify-content-start">
                        <div class="product-big-rating"><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span></div><a class="product-big-reviews" href="#">5 customer reviews</a>
                      </div>
                      <p class="product-big-text">The beautiful and inviting island nation of Mauritius is an ideal ‘flop and drop’ at the conclusion of your safari. Indulge in the delightful scents of the fragrant...</p><a class="button button-black-outline button-ujarak" href="#">Buy This Tour</a>
                      <div class="product-big-price-wrap"><span class="product-big-price">$890</span></div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- Different People-->
      <section class="section section-sm">
        <div class="container">
          <h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp">Different People — One Mission</span></h3>
          <div class="row row-30 justify-content-center box-ordered">
            <div class="col-sm-6 col-md-5 col-lg-3">
              <!-- Team Modern-->
              <article class="team-modern">
                <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="images/user-1-118x118.jpg" alt="" width="118" height="118"/></a>
                  <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                    <g>
                      <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                    </g>
                  </svg>
                </div>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#">Diana Robinson</a></h6>
                  <p class="team-modern-status">Founder, Owner</p>
                  <h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
              <!-- Team Modern-->
              <article class="team-modern">
                <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="images/user-2-118x118.jpg" alt="" width="118" height="118"/></a>
                  <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                    <g>
                      <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                    </g>
                  </svg>
                </div>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#">Peter McMillan</a></h6>
                  <p class="team-modern-status">Travel Agent</p>
                  <h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
              <!-- Team Modern-->
              <article class="team-modern">
                <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="images/user-3-118x118.jpg" alt="" width="118" height="118"/></a>
                  <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                    <g>
                      <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                    </g>
                  </svg>
                </div>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#">Jill Peterson</a></h6>
                  <p class="team-modern-status">Tour Consultant</p>
                  <h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
              <!-- Team Modern-->
              <article class="team-modern">
                <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="images/user-4-118x118.jpg" alt="" width="118" height="118"/></a>
                  <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                    <g>
                      <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                    </g>
                  </svg>
                </div>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#">James Smith</a></h6>
                  <p class="team-modern-status">PR Manager</p>
                  <h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- Section Subscribe-->
      <section class="section bg-default text-center offset-top-50">
        <div class="parallax-container" data-parallax-img="images/parallax-1-1920x850.jpg">
          <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
            <div class="container">
              <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span class="d-block font-weight-semi-bold">First-class Impressions</span><span class="d-block font-weight-light">are Waiting for You!</span></h2>
              <p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s">Our agency offers travelers various tours and excursions with destinations all over the world. Browse our website to find your dream tour!</p><a class="button button-secondary button-pipaluk" href="#">Book a Tour Now</a>
            </div>
          </div>
        </div>
      </section>
      <!--	Instagrram wondertour-->
      <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
        <div class="container-fluid">
          <h6 class="gallery-title">Gallery</h6>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/gallery-image-1-270x195.jpg" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-1-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-1-270x195.jpg" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/gallery-image-2-270x195.jpg" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-2-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-2-270x195.jpg" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/gallery-image-3-270x195.jpg" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-3-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-3-270x195.jpg" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/gallery-image-4-270x195.jpg" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-4-270x195.jpg" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/gallery-image-5-270x195.jpg" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-5-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-5-270x195.jpg" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/gallery-image-6-270x195.jpg" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-6-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-6-270x195.jpg" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/gallery-image-7-270x195.jpg" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-7-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-7-270x195.jpg" alt="" width="270" height="195"/></a>
              </div>
            </article>
          </div>
        </div>
      </section>
      <footer class="section footer-corporate context-dark">
        <div class="footer-corporate-inset">
          <div class="container">  <p>  <img src= "images/avião.png" align = "left" height="300" width="350">
                         <img src= "images/mala.png" align = "right" height="300" width="240">
                  <div class="row justify-content-center">
                  <div class="wow slideInRight" >
                
                    <h6 class="text-spacing-100 text-uppercase">Contato</h6>
                    <ul class="footer-contacts d-inline-block d-sm-block">
                      <li>
                        <div class="unit">
                        
                          <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                          <div class="unit-body"><a class="link-phone" href="tel:#">(11) 98465-9843</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit">
                          <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                          <div class="unit-body"><a class="link-aemail" href="mailto:#">contato@agviagens.com</a></div>
                        </div>
                      </li>
                      <li>
                       <div class="unit">
                          <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                          <div class="unit-body"><a class="link-location" href="https://www.google.com.br/maps/place/Av.+C%C3%A1sper+L%C3%ADbero,+204+-+Centro+Hist%C3%B3rico+de+S%C3%A3o+Paulo,+S%C3%A3o+Paulo+-+SP,+01033-001/@-23.5398317,-46.6384486,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce5857504451f7:0x878d6522436762eb!8m2!3d-23.5398366!4d-46.6362599">Avenida Cásper Líbero, 204 - Centro - SP</a></div>
                        </p>
                        </div>
                        
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>