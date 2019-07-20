@extends('layouts.main')

@section('content')
    
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1>We Are Interact<span></span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sed commodo nibh ante facilisis bibendum.</p>
            <a href="#features" class="btn btn-custom btn-lg page-scroll">Learn More</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Features Section -->
<div id="features" class="text-center">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 section-title">
      <h2>Features</h2>
    </div>
    <div class="row">
      <div class="col-xs-6 col-md-3"> <i class="fa fa-comments-o"></i>
        <h3>Lorem ipsum</h3>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
      </div>
      <div class="col-xs-6 col-md-3"> <i class="fa fa-bullhorn"></i>
        <h3>Dolor sit amet</h3>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque.</p>
      </div>
      <div class="col-xs-6 col-md-3"> <i class="fa fa-group"></i>
        <h3>Tempus eleifend</h3>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
      </div>
      <div class="col-xs-6 col-md-3"> <i class="fa fa-magic"></i>
        <h3>Pellentesque</h3>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque.</p>
      </div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="img/about.jpg" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>About Us</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <h3>Why Choose Us?</h3>
          <div class="list-style">
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li>Lorem ipsum dolor</li>
                <li>Tempor incididunt</li>
                <li>Lorem ipsum dolor</li>
                <li>Incididunt ut labore</li>
              </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li>Aliquip ex ea commodo</li>
                <li>Lorem ipsum dolor</li>
                <li>Exercitation ullamco</li>
                <li>Lorem ipsum dolor</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->
<div id="services" class="text-center">
  <div class="container">
    <div class="section-title">
      <h2>Our Services</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
    </div>
    <div class="row">
      <div class="col-md-4"> <i class="fa fa-wordpress"></i>
        <div class="service-desc">
          <h3>Lorem ipsum dolor</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
      <div class="col-md-4"> <i class="fa fa-cart-arrow-down"></i>
        <div class="service-desc">
          <h3>Consectetur adipiscing</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="col-md-4"> <i class="fa fa-cloud-download"></i>
        <div class="service-desc">
          <h3>Lorem ipsum dolor</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"> <i class="fa fa-language"></i>
        <div class="service-desc">
          <h3>Consectetur adipiscing</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
      <div class="col-md-4"> <i class="fa fa-plane"></i>
        <div class="service-desc">
          <h3>Lorem ipsum dolor</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
      <div class="col-md-4"> <i class="fa fa-pie-chart"></i>
        <div class="service-desc">
          <h3>Consectetur adipiscing</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Gallery Section -->
<div id="portfolio" class="text-center">
  <div class="container">
    <div class="section-title">
      <h2>Gallery</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/01-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lorem Ipsum</h4>
              </div>
              <img src="img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/02-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Adipiscing Elit</h4>
              </div>
              <img src="img/portfolio/02-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/03-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lorem Ipsum</h4>
              </div>
              <img src="img/portfolio/03-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/04-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lorem Ipsum</h4>
              </div>
              <img src="img/portfolio/04-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/05-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Adipiscing Elit</h4>
              </div>
              <img src="img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/06-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dolor Sit</h4>
              </div>
              <img src="img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/07-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dolor Sit</h4>
              </div>
              <img src="img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/08-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lorem Ipsum</h4>
              </div>
              <img src="img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/09-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Adipiscing Elit</h4>
              </div>
              <img src="img/portfolio/09-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonials Section -->
<div id="testimonials">
  <div class="container">
    <div class="section-title text-center">
      <h2>What our clients say</h2>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/01.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>
            <div class="testimonial-meta"> - John Doe </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/02.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis."</p>
            <div class="testimonial-meta"> - Johnathan Doe </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/03.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>
            <div class="testimonial-meta"> - John Doe </div>
          </div>
        </div>
      </div>
      <div class="row"> </div>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/04.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>
            <div class="testimonial-meta"> - Johnathan Doe </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/05.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>
            <div class="testimonial-meta"> - John Doe </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/06.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis."</p>
            <div class="testimonial-meta"> - Johnathan Doe </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Team Section -->
<div id="team" class="text-center">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 section-title">
      <h2>Meet the Team</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
    </div>
    <div id="row">
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="img/team/01.jpg" alt="..." class="team-img">
          <div class="caption">
            <h4>John Doe</h4>
            <p>Director</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="img/team/02.jpg" alt="..." class="team-img">
          <div class="caption">
            <h4>Mike Doe</h4>
            <p>Senior Designer</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="img/team/03.jpg" alt="..." class="team-img">
          <div class="caption">
            <h4>Jane Doe</h4>
            <p>Senior Designer</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="img/team/04.jpg" alt="..." class="team-img">
          <div class="caption">
            <h4>Karen Doe</h4>
            <p>Project Manager</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection