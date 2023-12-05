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

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title> Student Walfare Fund System</title>

    <!-- Bootstrap core CSS -->
    <link href="home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="home/css/fontawesome.css">
    <link rel="stylesheet" href="home/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="home/css/owl.css">
    <link rel="stylesheet" href="home/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>

  <!-- Sub Header -->
  @include('User.header')

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