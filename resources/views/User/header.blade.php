 <!-- <Style>
  #logout{
    background-color: rgba(0,0,0,0.5);
  }
 </Style> -->
 
 <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>This is a Commercial Support by <em>JNEC</em> Student Walfare Funding</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


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
            <li class="scroll-to-section">
              <a href="#" class="active">Home</a>
            </li>

            <li>
              <a href="#">About</a>
            </li>

            <li>
              <a href="#">Services</a>
            </li>

            <li>
              <a href="#">Plans</a>
            </li> 

            <li class="scroll-to-section">
              <a href="#">Contact</a>
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