  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  @include('partials/header')
   <!-- ======= Header ======= -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Alex Smith</h1>
      <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    @foreach($aboutd as $data)
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>{{$data->titre1}}</h2>
          <p>{{$data->description1}}</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{asset('assets/img/profile-img.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>UI/UX Designer &amp; Web Developer.</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong>{{$data->birthday}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Website:</strong>{{$data->website}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong>{{$data->phone}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>City:</strong>{{$data->city}}</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Age:</strong>{{$data->age}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong>{{$data->degree}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong>{{$data->email}}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong>{{$data->freelance}}</li>
                </ul>
              </div>
            </div>
            <p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    @endforeach