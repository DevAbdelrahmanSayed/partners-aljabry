@include('layout.header')

<body>


  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
          <img src="{{asset('assets/images/logo-light.png')}}" width="100" height="20" alt="Adex home">

{{--        <img src="{{asset('assets/images/logo-dark.png') }}" width="130" height="24" alt="Adex home" class="logo-dark">--}}
      </a>

        @include('layout.nav')

        <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>


  <main>
    <article>

      <!--
        - #HERO
      -->

      <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('{{asset('assets/images/hero-bg.jpg')}}')">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 hero-title">Al-Jabri Partners Project ?</h1>

            <p class="hero-text">
                There are no limits to our dreams, and there is no impossible. We exist to help people, to advance every day and succeed every day. We are destined to succeed because we deserve that. We invite you to join us. Do you want to know why
            </p>

            <div class="btn-wrapper">

              <a href="#" class="btn btn-primary">Why join Al Jabri Partners?</a>

              <a href="#" class="btn btn-outline">Contact Us</a>

            </div>

          </div>

          <div class="hero-slider" data-slider>

            <div class="slider-inner">
              <ul class="slider-container" data-slider-container>

                <li class="slider-item">

                  <figure class="img-holder" style="--width: 575; --height: 550;">
                    <img src="./assets/images/hero-slide-1.jpg" width="575" height="550" alt="" class="img-cover">
                  </figure>

                </li>

                <li class="slider-item">

                  <div class="hero-card">
                    <figure class="img-holder" style="--width: 575; --height: 550;">
                      <img src="./assets/images/hero-slide-2.jpg" width="575" height="550" alt="hero banner"
                        class="img-cover">
                    </figure>

                    <button class="play-btn" aria-label="play adex intro">
                      <ion-icon name="play" aria-hidden="true"></ion-icon>
                    </button>
                  </div>

                </li>

                <li class="slider-item">

                  <figure class="img-holder" style="--width: 575; --height: 550;">
                    <img src="./assets/images/hero-slide-3.jpg" width="575" height="550" alt="" class="img-cover">
                  </figure>

                </li>

              </ul>
            </div>

            <button class="slider-btn prev" aria-label="slide to previous" data-slider-prev>
              <ion-icon name="arrow-back"></ion-icon>
            </button>

            <button class="slider-btn next" aria-label="slide to next" data-slider-next>
              <ion-icon name="arrow-forward"></ion-icon>
            </button>

          </div>

        </div>
      </section>

      <!--
        - #SERVICE
      -->

      <section class="section service" aria-labelledby="service-label">
        <div class="container">

          <p class="section-subtitle" id="service-label">What We Do?</p>

          <h2 class="h2 section-title">
              The largest freelance and commission marketing project in the Arab world
          </h2>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
                </div>

                <h3 class="h4 card-title">Full technical and technical support </h3>

                <p class="card-text">
                    You can market in your own way, but we do not leave you needing that, because we provide you with all the necessary written, audio and visual advertising materials to save you time, effort and money during the process of marketing your business.
                </p>

                <a href="#" class="btn-text">
                  <span class="span">Learn More</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="shield-checkmark-outline" aria-hidden="true"></ion-icon>
                </div>

                <h3 class="h4 card-title">Free training and lessons </h3>

                <p class="card-text">
                    We offer you free courses and lessons in marketing, entrepreneurship, planning, how to build your own business and build a schedule to balance your social, health and financial life together. You are the focus of the change that we are working on.
                </p>

                <a href="#" class="btn-text">
                  <span class="span">Learn More</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="cloud-download-outline" aria-hidden="true"></ion-icon>
                </div>

                <h3 class="h4 card-title">No salaries, but large commissions </h3>

                <p class="card-text">
                    We do not offer you a salary, because we want you to depend on your own income, and you get your right as a result of the work and not the number of hours you work. We came to free the aspirants from the bondage of the job
                </p>

                <a href="#" class="btn-text">
                  <span class="span">Learn More</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

{{--            <li>--}}
{{--              <div class="service-card">--}}

{{--                <div class="card-icon">--}}
{{--                  <ion-icon name="pie-chart-outline" aria-hidden="true"></ion-icon>--}}
{{--                </div>--}}

{{--                <h3 class="h4 card-title">Market Research</h3>--}}

{{--                <p class="card-text">--}}
{{--                  Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras--}}
{{--                  justo.--}}
{{--                </p>--}}

{{--                <a href="#" class="btn-text">--}}
{{--                  <span class="span">Learn More</span>--}}

{{--                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>--}}
{{--                </a>--}}

{{--              </div>--}}
{{--            </li>--}}

          </ul>

        </div>
      </section>





      <!--
        - #ABOUT
      -->

        <section class="about" aria-labelledby="about-label">
            <div class="container">

                <figure class="about-banner">
                    <img src="./assets/images/about-banner.png" width="800" height="580" loading="lazy" alt="about banner"
                         class="w-100">
                </figure>

                <div class="about-content">

                    <p class="section-subtitle" id="about-label">Why Choose Us?</p>

                    <h2 class="h2 section-title">
                        The idea of “Al-Jabri Partners”
                    </h2>

                    <ul class="accordion-list">

                        <li class="about-item">
                            <div class="accordion-card expanded" data-accordion>

                                <h3 class="card-title">
                                    <button class="accordion-btn" data-accordion-btn>
                                        <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>
                                        <span class="span h5">The idea</span>
                                    </button>
                                </h3>

                                <p class="accordion-content">
                                    The idea of the “Al-Jabri Partners” project was a dream of Abdul Rahman Al-Jabri, which is embodied in the employment of more than half a million Arab youth, and that the services of the “Al-Jabri Group” enter every home in the Middle East. The project begins with the idea of ​​changing the culture of money and financial awareness in the Arab community, And training Arab young men and women on how to manage the opportunities and financial resources available to them. The project is also based on teaching young people how to start their personal projects, how to attract customers, how to earn money, how to help people and provide value in their societies. The project is not only about making money, but rather about an educated society. Full of energy, enthusiasm, and love of achievement and helping others. A society that seeks to promote itself, its people, and its country. The “Al-Jabri Partners” project is a school that trains you to limit challenges and face them with ease, and expand the circle of opportunities and exploit them. The “Al-Jabri Partners” project gives you the opportunity to self-employment and profit through the Internet. Without paying a single penny and without any commitment, we open the doors for you, show you the way and tighten your hands, but success or not depends on you, on how much you need success, depends on how much you need money and wealth, it depends on the motives that drive you to become rich, or Reasons that prevent you from remaining poor or middle-income.
                                </p>

                            </div>
                        </li>

                        <li class="about-item">
                            <div class="accordion-card" data-accordion>

                                <h3 class="card-title">
                                    <button class="accordion-btn" data-accordion-btn>
                                        <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>
                                        <span class="span h5">Dear young man, dear young lady</span>
                                    </button>
                                </h3>

                                <p class="accordion-content">
                                    Since you have arrived here and read these words, this motivation exists within you, so do not wait for someone to move it for you and take it out. Start from now. Learn how to talk to people and market your own business. Learn how to act as a businessman or as a businesswoman. Learn everything that millionaires do, how They talk about how they eat, sleep and dress. Why do we teach you this? Because every category of people has common characteristics, so before you become a millionaire, you have to act like a millionaire, before you become rich, you have to act like a rich person.

                                    We train you in the “Al-Jabri Partners Project” on how to communicate with people in a professional manner, and the ability to market any product or service you provide.

                                    We do not ask you for anything material about these courses, rather we ask that these courses have an impact on your material life, and an impact on your family and society, because the individual’s good is the community’s good, and everything starts from you.

                                    You are the focus of the idea, young man, you are the focus of the idea, girl

                                </p>

                                <div class="center-button"> <!-- Center-align button -->
                                    <a class="accordion-card button-style" href="your-link-here" data-accordion>
                                        <h3 class="card-title">
                                  <span class="accordion-btn" data-accordion-btn>
                                    <span class="span h5">Become a partner</span>
                                  </span>
                                        </h3>
                                    </a>
                                </div>

                            </div>
                        </li>

                    </ul>

                </div>

            </div>
        </section>






        <!--
          - #FEATURE
        -->

      <section class="section feature" aria-labelledby="feature-label">
        <div class="container">

          <figure class="feature-banner">
            <img src="{{asset('assets/images/feature-banner.png')}}" width="800" height="531" loading="lazy" alt="feature banner"
              class="w-100">
          </figure>

          <div class="feature-content">

            <p class="section-subtitle" id="feautre-label">work nature </p>

            <h2 class="h2 section-title">
                All you need is the drive to succeed.
            </h2>

            <p class="section-text">
                You do not need to rent an office at the beginning of your business, and you do not need a computer or even a need to register your name with the tax department, all you need is only the motivation for success, ask yourself about the reason that calls you to earn money and succeed in your material life, as for the method in a project “ Al-Jabri Partners “It is that we provide you with complete information about the services provided by the Al-Jabri group of companies, it is wide and comprehensive for all that one needs for work or marketing in terms of services or products, starting with small services such as translation to businessmen’s services such as shipping goods and establishing companies and medical tourism (cosmetic operations , hair transplantation..etc) We provide you with this information in full, and we train you on how to market it, and provide you with all means of support related to advertisements.

                As for you, all you have to do is contact the customer with us, and we provide him with complete free consultation and offer him our services with efficiency and high quality, and you will get your percentage of the entire work preserved by a contract signed between the Al-Jabri Group and you, wherever you are in any part of the globe, you will receive your profit immediately
            </p>

            <ul class="feature-list">

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    Aenean quam ornare. Curabitur blandit.
                  </span>

                </div>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    Nullam quis risus eget urna mollis ornare.
                  </span>

                </div>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    Etiam porta euismod malesuada mollis.
                  </span>

                </div>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    Vivamus sagittis lacus vel augue rutrum.
                  </span>

                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!--
        - #STATS
      -->

      <section class="stats" aria-label="our stats">
        <div class="container">

          <ul class="stats-card has-bg-image" style="background-image: url('./assets/images/stats-bg.jpg')">

            <li>
              <p class="card-text">
                <span class="h1">7518</span>

                <spna class="span">Completed Projects</spna>
              </p>
            </li>

            <li>
              <p class="card-text">
                <span class="h1">3472</span>

                <spna class="span">Happy Customers</spna>
              </p>
            </li>

            <li>
              <p class="card-text">
                <span class="h1">2184</span>

                <spna class="span">Expert Employees</spna>
              </p>
            </li>

            <li>
              <p class="card-text">
                <span class="h1">4523</span>

                <spna class="span">Awards Won</spna>
              </p>
            </li>

          </ul>

        </div>
      </section>



        
      <!--
        - #CTA
      -->

      <section class="cta" aria-label="call to action">
        <div class="container">

          <h2 class="h2 section-title">
            Join our community by using our services and grow your business.
          </h2>

          <a href="#" class="btn btn-primary">Try it For Free</a>

        </div>
      </section>

    </article>
  </main>

  <!--
    - #FOOTER
  -->
@include('layout.footer')
