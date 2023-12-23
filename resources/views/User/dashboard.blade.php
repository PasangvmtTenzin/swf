<!DOCTYPE html>
<html lang="en">

  <head>

  <style>
    #navi{
      text-align: center;
      padding-bottom: 35%;
      padding-top: 1%;
    }
  </style>
  @include('User.style')
  </head>

<body>

   <!-- ***** Header Area Start ***** -->
   <header class="header-area header-sticky">
      <div class="container">
        <nav class="main-nav">

          <!-- ***** Logo Start ***** -->
          <a href="index.html" class="logo">
            S-W-F
          </a>
          <!-- ***** Logo End ***** -->
          
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li>
              <a href="#home">Home</a>
            </li>

            <li>
              <a href="#about">About</a>
            </li>

            <li>
              <a href="#service">Services</a>
            </li>

            <li>
              <a href="#plan">Plans</a>
            </li> 

            <li>
              <a href="#contact">Contact</a>
            </li>

            @if (Route::has('login'))

            <!-- {{-- User is logged in --}} -->

            @auth
            
            <li class="nav-item" id="logout">

              <x-app-layout>

              </x-app-layout>

            </li>

            @else
            
            <!-- {{-- User is not logged in --}} -->
            
            <li class="nav-item">
              <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-success" href="{{ route('register') }}">Register</a>
            </li>

            @endauth

            @endif

            </ul>      
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
        </nav>
      </div>
  </header>

  <!-- ***** Header Area End ***** -->

  
  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="home/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
                  <h6>Hello Students</h6>
                  <h2>Welcome to SWF System</h2>
                    <p>You can seek help and support from Student Walfare Fund usning this system. Kindly register yourself to get help. Otherwise You can just login to Enter the System.</p>
                  <div class="main-button-red">
                    <div class="scroll-to-section">
                      <a href="#contact">Overview</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          
            <div class="item">
              <div class="icon">
                <img src="home/images/service-icon-01.png" alt="">
              </div>
              <div class="down-content">
                <h4>Emergency Loan</h4>
                <p>An interest free loan may be granted under condition of written undertaking of immediate repayment.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="home/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Bereavement (Semso)</h4>
                <p>In the event of expiry of JNEC Student’s parents they will be granted a sum of Nu.7500.00 Only as Semso from the SWF.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="home/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>Sick Student(s)</h4>
                <p>Shall receive benefit from S.W.F, only if he/ she is admitted to hospital based on medical report.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="home/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>Advances for Students’ Activities</h4>
                <p>Advances may be paid; A maximum of Nu.2000.00 only shall be approved for sanction</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact">
    <!-- footer start -->
    @include('User.footer')
    <!-- footer end -->
  </section>

  <!-- Scripts -->
  @include('User.script')
</body>

</body>
</html>