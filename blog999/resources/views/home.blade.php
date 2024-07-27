<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!--
    - primary meta tags
  -->
  <title>COVID-19 Tracker</title>
  <meta name="title" content="COVID-19 Tracker">
  <meta name="description" content="This is a corona html template made by codewithsadee">

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">


  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <!--
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">

</head>

<body id="top">

  <!--
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="{{asset('assets2/images/logo2.png')}}" width="199" height="50" alt="Covid-19 home">
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="{{route('home')}}" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link" data-nav-link>About</a>
          </li>

          <li class="navbar-item">
            <a href="#Prevention" class="navbar-link" data-nav-link>Prevention</a>
          </li>

          <li class="navbar-item">
            <a href="{{route('df_world_max_new_death')}}" class="navbar-link" data-nav-link>Tables</a>
          </li>

          <li class="navbar-item">
            <a href="#Analysis" class="navbar-link" data-nav-link>Analysis</a>
          </li>


        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="menu"></ion-icon>
        <ion-icon name="close-outline" aria-hidden="true" class="close"></ion-icon>
      </button>

      <a href="{{route('sike')}}" class="btn btn-primary">Are You Sick</a>

    </div>
  </header>



  <main>
    <article>

      <!--
        - #HERO
      -->

      <section class="section hero has-bg-image" id="home" style="background-image: url('./assets/images/bg0.jpg')"
        aria-label="home">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 hero-title">COVID-19 Tracker</h1>

            <p class="hero-text">
              Total Confirmed Corona Cases
            </p>

            <data style="color:orange" class="counter" value="960708">{{$totle_case->total_cases}}</data>

            <ul class="hero-list">

              <li class="hero-list-item yellow">
                Total deaths <span class="span">{{$world_recent->total_deaths}}</span>
              </li>

              <li class="hero-list-item green">
                world ratio  <span class="span">  &#160;  {{$world_ratio->world_ratio}}  &#160;</span>
              </li>

              <li class="hero-list-item red">
             Locations <span class="span">{{$locations->locations}}</span>
              </li>
              <li class="hero-list-item red">
                new cases syria mean <span class="span">{{$new_cases->new_cases}}</span>
                 </li>

            </ul>

            <a href="#doctor-label" class="btn btn-primary">Meet The Doctor</a>

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="570" height="562" alt="corona virus" class="w-100">
          </figure>

        </div>
      </section>





      <!--
        - #ABOUT
      -->

      <section class="section about" id="about" aria-labelledby="about-label-1">
        <div class="container">

          <figure class="about-banner">
            <img src="./assets/images/0.png" width="540" height="540" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

          <div class="about-content">


            <h2 class="h2 section-title">How Contagion Coronavirus</h2>


            <ul class="about-list">

                <li class="about-item">
                    <figure class="item-img img-holder" style="--width: 80; --height: 80;">
                      <img src="./assets/images/1.png" width="80" height="80" loading="lazy" alt="Human Contact">
                    </figure>

                    <div class="item-content">
                      <h3 class="h4 item-title"><br>   Human Contact</h3>

                    </div>
                  </li>

                  <li class="about-item">
                    <figure class="item-img img-holder" style="--width: 80; --height: 80;">
                      <img src="./assets/images/2.png" width="80" height="80" loading="lazy" alt="The virus is transmitted through the air.">
                    </figure>

                    <div class="item-content">
                      <h3 class="h4 item-title"> <br> The virus is transmitted through the air.</h3>

                    </div>
                  </li>

                  <li class="about-item">
                    <figure class="item-img img-holder" style="--width: 80; --height: 80;">
                      <img src="./assets/images/3.png" width="80" height="80" loading="lazy"
                        alt="Touching unclean objects.">
                    </figure>

                    <div class="item-content">
                      <h3 class="h4 item-title"> <br> Touching unclean objects.</h3>

                    </div>
                  </li>

            </ul>

          </div>

        </div>
      </section>





      <!--
        - #SERVICE
      -->

      <section class="section service has-bg-image" style="background-image: url('./assets/images/bg0.jpg')"
        aria-labelledby="service-label-1">
        <div class="container">

          <h2 class="h2 section-title" id="service-label-1">Corona Virus Symptoms</h2>

          <p class="section-text text">

          </p><br>

          <ul class="service-list">

            <li>
                <div class="service-card">

                  <figure class="card-banner img-holder" style="--width: 110; --height: 110;">
                    <img src="./assets/images/a.png" width="110" height="110" loading="lazy"
                      alt="service image">
                  </figure>

                  <div class="card-content">
                    <h3 class="h4 card-title">Coughing And Sneezing</h3>

                  </div>

                </div>
              </li>

              <li>
                <div class="service-card">

                  <figure class="card-banner img-holder" style="--width: 110; --height: 110;">
                    <img src="./assets/images/b.png" width="110" height="110" loading="lazy"
                      alt="service image">
                  </figure>

                  <div class="card-content">
                    <h3 class="h4 card-title">Hot Fever</h3>


                  </div>

                </div>
              </li>

              <li>
                <div class="service-card">

                  <figure class="card-banner img-holder" style="--width: 110; --height: 110;">
                    <img src="./assets/images/c.png" width="110" height="110" loading="lazy"
                      alt="service image">
                  </figure>

                  <div class="card-content">
                    <h3 class="h4 card-title">Strong Headacke</h3>

                  </div>

                </div>
              </li>

              <li>
                <div class="service-card">

                  <figure class="card-banner img-holder" style="--width: 110; --height: 110;">
                    <img src="./assets/images/d.png" width="110" height="110" loading="lazy"
                      alt="service image">
                  </figure>

                  <div class="card-content">
                    <h3 class="h4 card-title">Shortness Of Breath</h3>

                  </div>

                </div>
              </li>

              <li>
                <div class="service-card">

                  <figure class="card-banner img-holder" style="--width: 110; --height: 110;">
                    <img src="./assets/images/e.png" width="110" height="110" loading="lazy"
                      alt="service image">
                  </figure>

                  <div class="card-content">
                    <h3 class="h4 card-title">Confusion</h3>

                  </div>

                </div>
              </li>

              <li>
                <div class="service-card">

                  <figure class="card-banner img-holder" style="--width: 110; --height: 110;">
                    <img src="./assets/images/f.png" width="110" height="110" loading="lazy"
                      alt="service image">
                  </figure>

                  <div class="card-content">
                    <h3 class="h4 card-title">Sore Throat</h3>

                  </div>

                </div>
              </li>

          </ul>

        </div>
      </section>





      <!--
        - #ABOUT
      -->

      <section class="section about" id="Prevention" aria-labelledby="about-label-2">
        <div class="container">

          <figure class="about-banner order-1">
            <img src="./assets/images/4.png" width="540" height="540" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

          <div class="about-content">

           <!--<p class="about-subtitle" id="about-label-2">About (2020-nCoV)</p>-->

            <h2 class="h2 section-title"> Prevention Coronavirus</h2>



            <ul class="about-list">

              <li class="about-item">
                <figure class="item-img img-holder" style="--width: 90; --height: 120;">
                  <img src="./assets/images/5.png" width="90" height="120" loading="lazy"
                    alt="Washing your hands for 20 seconds whenever you get the chance.">
                </figure>

                <div class="item-content">
                  <h3 class="h4 item-title"> <br> Washing your hands for 20 seconds whenever you get the chance.</h3>
                </div>
              </li>

              <li class="about-item">
                <figure class="item-img img-holder" style="--width: 90; --height: 120;">
                  <img src="./assets/images/6.png" width="90" height="120" loading="lazy"
                    alt="Wearing a medical mask and avoiding handshakes.">
                </figure>

                <div class="item-content">
                  <h3 class="h4 item-title"> <br> Wearing a medical mask and avoiding handshakes.</h3>


                </div>
              </li>

              <li class="about-item">
                <figure class="item-img img-holder" style="--width: 90; --height: 120;">
                  <img src="./assets/images/7.png" width="90" height="120" loading="lazy"
                    alt="The bag always contains a sanitizer and a medical mask.">
                </figure>

                <div class="item-content">
                  <h3 class="h4 item-title"><br> The bag always contains a sanitizer and a medical mask.</h3>
                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>




  <!--
        - #BLOG
      -->

      <section class="section blog" id="Analysis" aria-labelledby="blog-lable">
        <div class="container">

          <h2 class="h2 section-title" id="blog-label">Analyze data using graphs</h2>

          <p class="section-text text">

          </p>

          <ul class="grid-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 280;">
                  <img src="./assets2/images/2.png" width="370" height="280" loading="lazy"
                    alt="Conulting Reporting Qouncil Arei Not Could More..." class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h4">
                    <a href="{{route('flot')}}" class="card-title">
                         View analysis Donut charts
                    </a>
                  </h3>

                  <div class="card-meta">



                  </div>

                  <p class="card-text text">

                  </p>

                </div>



              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 280;">
                  <img src="./assets2/images/1.jpg" width="370" height="280" loading="lazy"
                    alt="Financial Reporting Qouncil What Could More..." class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h4">
                    <a href="{{route('bar')}}" class="card-title">
                         View analysis Barchart
                    </a>
                  </h3>

                  <div class="card-meta">


                  </div>

                  <p class="card-text text">

                  </p>

                </div>



              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 280;">
                  <img src="./assets2/images/3.png" width="370" height="280" loading="lazy"
                    alt="Consulting Reporting Qounc Arei Could More..." class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h4">
                    <a href="{{route('chartjs')}}" class="card-title">
                         View analysis charts
                    </a>
                  </h3>

                  <div class="card-meta">


                  </div>

                  <p class="card-text text">

                  </p>

                </div>



              </div>
            </li>



          </ul>
          <br><!-- تعديل تغيير مكان الزر-->

<!--/////////////////////////////////////////////////////////////-->
</div>
</section>



      <!--
        - #SAFETY
      -->

      <section class="section safety" aria-labelledby="safety-label">
        <div class="container">

          <h2 class="h2 section-title" id="safety-label">How to Wash Your Hands</h2>

         <br>
            <div></div>
         <br>
          <ol class="safety-list">

            <li class="safety-item">
              <figure class="item-banner img-holder" style="--width: 170; --height: 170;">
                <img src="./assets/images/8.png" width="170" height="170" loading="lazy" alt="Wet Hands"
                  class="img">
              </figure>

              <span class="number">1</span>

              <h3 class="h4 item-title">Wet Hands</h3>
            </li>

            <li class="safety-item">
              <figure class="item-banner img-holder" style="--width: 170; --height: 170;">
                <img src="./assets/images/9.png" width="170" height="170" loading="lazy" alt="Apply Soap"
                  class="img">
              </figure>

              <span class="number">2</span>

              <h3 class="h4 item-title">Apply Soap</h3>
            </li>

            <li class="safety-item">
              <figure class="item-banner img-holder" style="--width: 170; --height: 170;">
                <img src="./assets/images/10.png" width="170" height="170" loading="lazy"
                  alt="Rub Hands Palm to palm" class="img">
              </figure>

              <span class="number">3</span>

              <h3 class="h4 item-title">Rub Hands Palm to palm</h3>
            </li>

            <li class="safety-item">
              <figure class="item-banner img-holder" style="--width: 170; --height: 170;">
                <img src="./assets/images/11.png" width="170" height="170" loading="lazy"
                  alt="Lather The Back of Both Hands" class="img">
              </figure>

              <span class="number">4</span>

              <h3 class="h4 item-title">Lather The Back of Both Hands</h3>
            </li>

            <li class="safety-item">
              <figure class="item-banner img-holder" style="--width: 170; --height: 170;">
                <img src="./assets/images/12.png" width="170" height="170" loading="lazy"
                  alt="Scrub Between Your Fingers" class="img">
              </figure>

              <span class="number">5</span>

              <h3 class="h4 item-title">Scrub Between Your Fingers</h3>
            </li>

            <li class="safety-item">
              <figure class="item-banner img-holder" style="--width: 170; --height: 170;">
                <img src="./assets/images/13.png" width="170" height="170" loading="lazy"
                  alt="Rub The Back of Fingers on The Opposing Palm" class="img">
              </figure>

              <span class="number">6</span>

              <h3 class="h4 item-title">Rub The Back of Fingers on The Opposing Palm</h3>
            </li>

            <li class="safety-item">
              <figure class="item-banner img-holder" style="--width: 170; --height: 170;">
                <img src="./assets/images/14.png" width="170" height="170" loading="lazy" alt="Rinse Hands"
                  class="img">
              </figure>

              <span class="number">7</span>

              <h3 class="h4 item-title">Rinse Hands</h3>
            </li>

            <li class="safety-item">
              <figure class="item-banner img-holder" style="--width: 170; --height: 170;">
                <img src="./assets/images/15.png" width="170" height="170" loading="lazy"
                  alt="Your Hands Are Clean" class="img">
              </figure>

              <span class="number">8</span>

              <h3 class="h4 item-title">Your Hands Are Clean</h3>
            </li>

          </ol>

        </div>
      </section>

 <!--
        - #DOCTOR
      -->

      <section class="section doctor" style="background-image: url('./assets/images/bg0.jpg')"
        aria-labelledby="doctor-label">
        <div class="container">

          <h2 class="h2 section-title" id="doctor-label">Meet Our Best Doctors</h2>

          <p class="section-text text">

          </p>

          <ul class="grid-list">

            <li>
              <div class="doctor-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 360;">
                  <img src="./assets/images/dr.png" width="350" height="360" loading="lazy"
                    alt="Dorothy M. Nickell profile" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h4 card-title">Dorothy M. Nickell</h3>

                  <p class="card-subtitle">Throat Specialist</p>



                  <ul class="card-list">

                    <li class="card-item">
                      <div class="icon-box">
                        <ion-icon name="call" aria-hidden="true"></ion-icon>
                      </div>

                      <span class="span">+963 108 117 070</span>
                    </li>

                    <li class="card-item">
                      <div class="icon-box">
                        <ion-icon name="mail" aria-hidden="true"></ion-icon>
                      </div>

                      <span class="span">d.m.nickell@gmail.com</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="doctor-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 360;">
                  <img src="./assets/images/k.jpg" width="350" height="360" loading="lazy"
                    alt="Billie R. Courtney profile" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h4 card-title">Billie R. Courtney</h3>

                  <p class="card-subtitle">Cardiologist</p>


                  <ul class="card-list">

                    <li class="card-item">
                      <div class="icon-box">
                        <ion-icon name="call" aria-hidden="true"></ion-icon>
                      </div>

                      <span class="span">+963 824 912 760</span>
                    </li>

                    <li class="card-item">
                      <div class="icon-box">
                        <ion-icon name="mail" aria-hidden="true"></ion-icon>
                      </div>

                      <span class="span">b.r.courtney@gmail.com</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="doctor-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 360;">
                  <img src="./assets/images/l.jpg" width="350" height="360" loading="lazy"
                    alt="Courtney A. Smith profile" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h4 card-title">Courtney A. Smith</h3>

                  <p class="card-subtitle">Rehabilitation Therapy</p>



                  <ul class="card-list">

                    <li class="card-item">
                      <div class="icon-box">
                        <ion-icon name="call" aria-hidden="true"></ion-icon>
                      </div>

                      <span class="span">+963 123 567 890</span>
                    </li>

                    <li class="card-item">
                      <div class="icon-box">
                        <ion-icon name="mail" aria-hidden="true"></ion-icon>
                      </div>

                      <span class="span">c.a.smith@gmail.com</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!--
    - #FOOTER
  -->

  <footer class="footer has-bg-image" style="background-image: url('./assets/images/bg0.jpg')">
    <div class="container">

      <div class="footer-top section">

        <div class="footer-brand">

          <h3 class="h4 footer-list-title">About Covid-19</h3>


          <ul class="contact-list">


            <li class="contact-item">
              <p class="contact-title">Phone:</p>

              <a href="tel:+524623435643" class="text">(+963) 991 435 643</a>
            </li>

            <li class="contact-item">
              <p class="contact-title">Email:</p>

              <a href="mailto:info@covid-19.com" class="text">info@covid-19.com</a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <h3 class="h4 footer-list-title">Navigate</h3>
          </li>


          <li class="footer-list-item">
            <ion-icon name="caret-forward" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">Developers</a>
          </li>


          <li class="footer-list-item">
            <ion-icon name="caret-forward" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">Connect</a>
          </li>

        </ul>

        <ul class="footer-list social-list">

          <li>
            <h3 class="h4 footer-list-title">Social Contact</h3>
          </li>

          <li class="footer-list-item">
            <ion-icon name="logo-facebook" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">Facebook</a>
          </li>

          <li class="footer-list-item">
            <ion-icon name="logo-instagram" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">Instagram</a>
          </li>



        </ul>

        <ul class="footer-list">

          <li>
            <h3 class="h4 footer-list-title">Privacy And Tos</h3>
          </li>


          <li class="footer-list-item">
            <ion-icon name="caret-forward" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">Privacy Policy</a>
          </li>

          <li class="footer-list-item">
            <ion-icon name="caret-forward" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">Technology Privacy</a>
          </li>

          <li class="footer-list-item">
            <ion-icon name="caret-forward" aria-hidden="true"></ion-icon>

            <a href="#" class="footer-link">Developer Agreement</a>
          </li>

        </ul>

      </div>









      <div class="footer-bottom">
        <p class="copyright">
          &copy; 2020 All Rights Covirus. Developed by Ahmad Habiba & Zainab saeed & Kinan zahra
        </p>
      </div>

    </div>
  </footer>





  <!--
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up-outline" aria-hidden="true"></ion-icon>
  </a>





  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>







</body>

</html>
