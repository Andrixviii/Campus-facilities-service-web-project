<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />


    <title>E-Facilities</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="css/animated.css">
    <link rel="stylesheet" href="css/owl.css">

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->

  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">

          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{route('user')}}" class="logo">
              <img src="images/logo.png" alt="E-Facilities">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#home" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#facilities">Facilities</a></li>
              <li class="scroll-to-section"><a href="{{route('user.history')}}">History</a></li>
              <li class="scroll-to-section"><a href="#Contact">Contact</a></li>

              <li class="nav-item dropdown">
                <div class = "dropdown">
                  <a class="nav-link dropdown-toggle d-flex align-items-center" role="button" href="#l" id="navbarDropdownMenuLink" aria-expanded="false" data-bs-toggle="dropdown">
                    @if($user_data->photo == null)
                      <img  src="images/Profil.png" class="rounded-circle" height="50" alt="Avatar" loading="lazy" >
                    @else
                      <img src="{{ asset('storage/' . $user_data->photo) }}" class="rounded-circle" height="50" alt="Avatar" loading="lazy" >
                    @endif
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="{{route('user.profile')}}">My profile</a></li>
                  <li><a class="dropdown-item" href="{{route('Logout')}}" id="logoutButton">Logout</a></li>
                </ul>
              </div>
              </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Welcome to Our Campus Facility Booking Platform!</h2>
                    <p>Discover and book campus facilities easily and quickly here. With a variety of facilities available, ranging from auditoriums, basketball courts, volleyball courts, and more, we make it easy for you to plan your events or activities on campus. Explore various options, book with just a few clicks, and enjoy a smooth campus facility booking experience with us.</p>
                  </div>
                  <div class="col-lg-12">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="images/slider-dec.png" alt="pict homepage">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4> HOW TO BOOK <br> THE FACILITIES</h4>
            <img src="images/heading-line-dec.png" alt="">
            <p>Here are the steps to book the available facilities on this application.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="service-item second-service">
            <a href="#facilities">
            <div class="icon"></div>
            <h4>Select Facility</h4>
            <p>The available facilities include a hall and sports field. Users can also view details for each available facility.</p>
         </a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item third-service">
            <a href="{{route('BookingForm',1)}}">
            <div class="icon"></div>
            <h4>Make a Booking</h4>
            <p>Click the available button to make a booking. Then fill out the form according to your needs.</p>
            </a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item fourth-service">
            <a href="{{route('user.history')}}">
            <div class="icon"></div>
            <h4>Check History</h4>
            <p>Regularly check the history to receive confirmation from the admin regarding the booked facility.</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- facilities Grid-->
  <section class="page-section bg-light" id="facilities">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">FACILITIES</h2>
            <h3 class="section-subheading text-muted">Adapun fasilitas yang tersedia yaitu:.</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- facilities item 1 -->
                <div class="facilities-item">
                    <a class="facilities-link" data-bs-toggle="modal" href="#facilitiesModal1">
                        <div class="facilities-hover">
                            <div class="facilities-hover-content"></div>
                        </div>
                        @if($facility_data[0]->photo == null)
                          <img src="images/Facilities1.jpeg" alt="Aula Anwar">
                        @else
                          <img src="{{asset('/storage/'. $facility_data[0]->photo)}}" alt="Aula Anwar">
                        @endif
                    </a>
                    <div class="facilities-caption">
                        <div class="facilitiesThreads"></div>
                        <div class="facilities-caption-subheading text-muted">{{$facility_data[0]->nama_fasilitas}}</div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- facilities item 2-->
                <div class="facilities-item">
                  <a class="facilities-link" data-bs-toggle="modal" href="#facilitiesModal2">
                      <div class="facilities-hover">
                          <div class="facilities-hover-content"></div>
                      </div>
                      @if($facility_data[1]->photo == null)
                        <img src="images/Facilities2.jpg" alt="Aula Anwar">
                      @else
                        <img src="{{asset('/storage/'. $facility_data[1]->photo)}}" alt="Aula Anwar">
                      @endif
                  </a>
                  <div class="facilities-caption">
                      <div class="facilitiesThreads"></div>
                      <div class="facilities-caption-subheading text-muted">{{$facility_data[1]->nama_fasilitas}}</div>
                  </div>
              </div>

            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- facilities item 3-->
                <div class="facilities-item">
                    <a class="facilities-link" data-bs-toggle="modal" href="#facilitiesModal3">
                        <div class="facilities-hover">
                            <div class="facilities-hover-content"></div>
                        </div>
                        @if($facility_data[3]->photo == null)
                          <img class="img-fluid" src="images/facilities3.jpg" alt="..." />
                        @else
                          <img src="{{asset('/storage/'. $facility_data[3]->photo)}}" alt="Aula Anwar">
                        @endif

                    </a>
                    <div class="facilities-caption">
                        <div class="facilitiesFinish"></div>
                        <div class="facilities-caption-subheading text-muted">{{$facility_data[3]->nama_fasilitas}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- facilities item 4-->
                <div class="facilities-item">
                    <a class="facilities-link" data-bs-toggle="modal" href="#facilitiesModal4">
                        <div class="facilities-hover">
                            <div class="facilities-hover-content"></div>
                        </div>
                        @if($facility_data[4]->photo == null)
                          <img class="img-fluid" src="images/facilities5.jpg" alt="Volleyball" />
                        @else
                          <img src="{{asset('/storage/'. $facility_data[4]->photo)}}" alt="Aula Anwar">
                        @endif

                    </a>
                    <div class="facilities-caption">
                        <div class="facilitiesLines"></div>
                        <div class="facilities-caption-subheading text-muted">{{$facility_data[4]->nama_fasilitas}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- facilities item 5-->
                <form action="{{route('BookingForm','1')}}" method="POST">
                  @csrf
                  @method('GET')
                <div class="facilities-item">
                    <a class="facilities-link" data-bs-toggle="modal" href="#facilitiesModal5">
                        <div class="facilities-hover">
                            <div class="facilities-hover-content"></div>
                        </div>
                        @if($facility_data[5]->photo == null)
                          <img class="img-fluid" src="images/facilities6.jpg" alt="Basketball" />
                        @else
                          <img src="{{asset('/storage/'. $facility_data[5]->photo)}}" alt="Aula Anwar">
                        @endif

                    </a>
                    <div class="facilities-caption">
                        <div class="facilitiesSouthwest"></div>
                        <div class="facilities-caption-subheading text-muted">{{$facility_data[5]->nama_fasilitas}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- facilities item 6-->
                <div class="facilities-item">
                  <a class="facilities-link" data-bs-toggle="modal" href="#facilitiesModal6">
                      <div class="facilities-hover">
                          <div class="facilities-hover-content"></div>
                      </div>
                      @if($facility_data[2]->photo == null)
                          <img class="img-fluid" src="images/Facilities4.jpg" alt="Tennis"/>
                      @else
                        <img src="{{asset('/storage/'. $facility_data[2]->photo)}}" alt="Aula Anwar">
                      @endif

                  </a>
                  <div class="facilities-caption">
                      <div class="facilitiesThreads"></div>
                      <div class="facilities-caption-subheading text-muted">{{$facility_data[2]->nama_fasilitas}}</div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</section>


<footer id="Contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="section-heading">
          <h4>Contact Us</h4>
        </div>
      </div>

<main>
  <div class="container py-3 justify-center items-center" style="height: 45vh;">
    <div class="flex-col justify-content-center align-items-center">
      <!-- Contact Information Block, email, no phone,  -->

      <div class="flex items-center mb-2 ">
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 121.85 122.88"><defs><style>.cls-1{fill:#1a1a1a;fill-rule:evenodd;}</style></defs><title>customer-service</title>
          <path class="cls-1" d="M42.18,72.75A47.21,47.21,0,0,1,38.28,65c-8.39-4.72-9.73-25.71-4.56-24.12,0-.79-.14-3-.14-4.52,0-34.07,54.74-34.09,54.74,0,0,1.56-.16,3.73-.14,4.52C93.34,39.26,92,60.25,83.62,65c-2.13,5.9-5.93,9.86-5.62,12.45,0,8.89-9.77,12.11-17,12.19-.66,0-1.33,0-2-.1a17.8,17.8,0,0,0,4.52-1.9h0c3.11-1.9,5.21-4.71,5.21-8.08s-2.09-6.2-5.2-8.09h0a18.68,18.68,0,0,0-9.4-2.57,19.54,19.54,0,0,0-7.51,1.35,12.78,12.78,0,0,0-4,2.58l-.37,0Zm58.25-41.14h-.37C96.63,17.08,87.81,7,77.3,2.83A44.05,44.05,0,0,0,58,.15a46.75,46.75,0,0,0-18.44,5.4A34.24,34.24,0,0,0,22.15,31.61h-.69c-3.3,0-6.64,2.71-6.64,6V59.28c0,3.3,3.34,6,6.64,6h1.95C25.54,73.93,34.17,81.85,43,81.85h1.73c1.51,2.22,4.44,3.79,9.32,3.79s10.08-2.75,10.08-6.13S59,73.39,54.05,73.39,46.1,75,44.64,77.32H43c-7.54,0-15-8-15.53-15.22V32A29.1,29.1,0,0,1,42.13,10.2,41.46,41.46,0,0,1,58.4,5.47,38.8,38.8,0,0,1,75.33,7.79c8.71,3.44,16.06,12,19.23,23.82h-.13V65.28h6c3.3,0,6.64-2.7,6.64-6V37.62c0-3.31-3.34-6-6.64-6ZM64.59,104.44h1.86a3,3,0,0,0,3-3v-5a3,3,0,0,0-3-3h-11a3.05,3.05,0,0,0-3,3v5a3.06,3.06,0,0,0,3,3H57.3l-3.64,18.43H68.07l-3.48-18.44ZM0,122.88c1.43-18.54-2.21-17.79,13.32-23.6a128.67,128.67,0,0,0,22.78-11l13.27,34.63ZM86.4,86.67a95.25,95.25,0,0,0,21.07,10c14.5,4.82,14.5,5.5,14.36,26.17H72.65L86.4,86.67Z"/>
        </svg>
        <span class="ms-2">Muhammad Fazar Rizki ardianto</span>
      </div>

      <div class="flex items-center mb-2 ">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
          <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
        </svg>
        <span class="ms-2">+62 896-3734-8700</span>
      </div>

      <div class="flex items-center mb-2 ">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
          <linearGradient id="6769YB8EDCGhMGPdL9zwWa_ho8QlOYvMuG3_gr1" x1="15.072" x2="24.111" y1="13.624" y2="24.129" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e3e3e3"></stop><stop offset="1" stop-color="#e2e2e2"></stop></linearGradient><path fill="url(#6769YB8EDCGhMGPdL9zwWa_ho8QlOYvMuG3_gr1)" d="M42.485,40H5.515C4.126,40,3,38.874,3,37.485V10.515C3,9.126,4.126,8,5.515,8h36.969	C43.874,8,45,9.126,45,10.515v26.969C45,38.874,43.874,40,42.485,40z"></path><linearGradient id="6769YB8EDCGhMGPdL9zwWb_ho8QlOYvMuG3_gr2" x1="26.453" x2="36.17" y1="25.441" y2="37.643" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f5f5f5"></stop><stop offset=".03" stop-color="#eee"></stop><stop offset="1" stop-color="#eee"></stop></linearGradient><path fill="url(#6769YB8EDCGhMGPdL9zwWb_ho8QlOYvMuG3_gr2)" d="M42.485,40H8l37-29v26.485C45,38.874,43.874,40,42.485,40z"></path><linearGradient id="6769YB8EDCGhMGPdL9zwWc_ho8QlOYvMuG3_gr3" x1="3" x2="45" y1="24" y2="24" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#d74a39"></stop><stop offset="1" stop-color="#c73d28"></stop></linearGradient><path fill="url(#6769YB8EDCGhMGPdL9zwWc_ho8QlOYvMuG3_gr3)" d="M5.515,8H8v32H5.515C4.126,40,3,38.874,3,37.485V10.515C3,9.126,4.126,8,5.515,8z M42.485,8	H40v32h2.485C43.874,40,45,38.874,45,37.485V10.515C45,9.126,43.874,8,42.485,8z"></path><linearGradient id="6769YB8EDCGhMGPdL9zwWd_ho8QlOYvMuG3_gr4" x1="24" x2="24" y1="8" y2="38.181" gradientUnits="userSpaceOnUse"><stop offset="0" stop-opacity=".15"></stop><stop offset="1" stop-opacity=".03"></stop></linearGradient><path fill="url(#6769YB8EDCGhMGPdL9zwWd_ho8QlOYvMuG3_gr4)" d="M42.485,40H30.515L3,11.485v-0.969C3,9.126,4.126,8,5.515,8h36.969	C43.874,8,45,9.126,45,10.515v26.969C45,38.874,43.874,40,42.485,40z"></path><linearGradient id="6769YB8EDCGhMGPdL9zwWe_ho8QlOYvMuG3_gr5" x1="3" x2="45" y1="17.73" y2="17.73" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f5f5f5"></stop><stop offset="1" stop-color="#f5f5f5"></stop></linearGradient><path fill="url(#6769YB8EDCGhMGPdL9zwWe_ho8QlOYvMuG3_gr5)" d="M43.822,13.101L24,27.459L4.178,13.101C3.438,12.565,3,11.707,3,10.793v-0.278	C3,9.126,4.126,8,5.515,8h36.969C43.874,8,45,9.126,45,10.515v0.278C45,11.707,44.562,12.565,43.822,13.101z"></path><linearGradient id="6769YB8EDCGhMGPdL9zwWf_ho8QlOYvMuG3_gr6" x1="24" x2="24" y1="8.446" y2="27.811" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#e05141"></stop><stop offset="1" stop-color="#de4735"></stop></linearGradient><path fill="url(#6769YB8EDCGhMGPdL9zwWf_ho8QlOYvMuG3_gr6)" d="M42.485,8h-0.3L24,21.172L5.815,8h-0.3C4.126,8,3,9.126,3,10.515v0.278	c0,0.914,0.438,1.772,1.178,2.308L24,27.459l19.822-14.358C44.562,12.565,45,11.707,45,10.793v-0.278C45,9.126,43.874,8,42.485,8z"></path>
        </svg>
        <span class="ms-2">example232@gmail.com</span>
      </div>

    </div>
  </div>
</main>
</footer>

<!-- facilities Modals-->
<div class="facilities-modal modal fade" id="facilitiesModal1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal"><img src="images/close-icon.svg" alt="Close modal" /></div>
          <div class="container2">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
                          <!-- Project details-->
                          <form action="{{route('BookingForm',1)}}" method="POST">
                            @csrf
                            @method('GET')
                          <h2 class="text-uppercase">{{$facility_data[0]->nama_fasilitas}}</h2>
                          <p class="item-intro text-muted">{{$facility_data[0]->Lokasi}}</p>
                          <img class="img-fluid d-block mx-auto" src="images/Facilities1.jpeg" alt="abdjan" />
                          <p style="color: black;">{{$facility_data[0]->Deskripsi}}</p>
                          <button class="button button:hover" type="submit">
                            Booking Now
                          </button>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- facilities item 2 modal popup-->
<div class="facilities-modal modal fade" id="facilitiesModal2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal"><img src="images/close-icon.svg" alt="Close modal" /></div>
          <div class="container2">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
                          <!-- Project details-->
                          <form action="{{route('BookingForm',2)}}" method="POST">
                            @csrf
                            @method('GET')
                          <h2 class="text-uppercase">{{$facility_data[1]->nama_fasilitas}}</h2>
                          <p class="item-intro text-muted">{{$facility_data[1]->Lokasi}}</p>
                          <img class="img-fluid d-block mx-auto" src="images/Facilities2.jpg" alt="Fasilitas2s" />
                          <p style="color: black;">{{$facility_data[1]->Deskripsi}}</p>
                          <button class="button button:hover" type="submit">
                            Booking Now
                          </button>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- facilities item 3 modal popup-->
<div class="facilities-modal modal fade" id="facilitiesModal3" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal"><img src="images/close-icon.svg" alt="Close modal" /></div>
          <div class="container2">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
                          <!-- Project details-->
                          <form action="{{route('BookingForm',4)}}" method="POST">
                            @csrf
                            @method('GET')
                          <h2 class="text-uppercase">{{$facility_data[3]->nama_fasilitas}}</h2>
                          <p class="item-intro text-muted">{{$facility_data[3]->Lokasi}}</p>
                          <img class="img-fluid d-block mx-auto" src="images/facilities3.jpg" alt="..." />
                          <p style="color: black;">{{$facility_data[3]->Deskripsi}}</p>
                          <button class="button button:hover" type="submit">
                            Booking Now
                          </button>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- facilities item 4 modal popup-->
<div class="facilities-modal modal fade" id="facilitiesModal4" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal"><img src="images/close-icon.svg" alt="Close modal" /></div>
          <div class="container2">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
                          <!-- Project details-->
                          <form action="{{route('BookingForm',5)}}" method="POST">
                            @csrf
                            @method('GET')
                          <h2 class="text-uppercase">{{$facility_data[4]->nama_fasilitas}}</h2>
                          <p class="item-intro text-muted">{{$facility_data[5]->Lokasi}}</p>
                          <img class="img-fluid d-block mx-auto" src="images/facilities5.jpg" alt="..." />
                          <p style="color: black;">{{$facility_data[4]->Deskripsi}}</p>
                          <button class="button button:hover" type="submit">
                            Booking Now
                          </button>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- facilities item 5 modal popup-->
<div class="facilities-modal modal fade" id="facilitiesModal5" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal"><img src="images/close-icon.svg" alt="Close modal" /></div>
          <div class="container2">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
                          <!-- Project details-->
                          <form action="{{route('BookingForm',6)}}" method="POST">
                            @csrf
                            @method('GET')
                          <h2 class="text-uppercase">{{$facility_data[5]->nama_fasilitas}}</h2>
                          <p class="item-intro text-muted">{{$facility_data[5]->Lokasi}}</p>
                          <img class="img-fluid d-block mx-auto" src="images/facilities6.jpg" alt="..." />
                          <p style="color: black;">{{$facility_data[5]->Deskripsi}}</p>
                          <button class="button button:hover" type="submit">
                            Booking Now
                          </button>
                        </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

</div>
<!-- facilities item 6 modal popup-->
<div class="facilities-modal modal fade" id="facilitiesModal6" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal"><img src="images/close-icon.svg" alt="Close modal" /></div>
        <div class="container2">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="modal-body">
                        <!-- Project details-->
                        <form action="{{route('BookingForm',3)}}" method="POST">
                          @csrf
                          @method('GET')
                        <h2 class="text-uppercase">{{$facility_data[2]->nama_fasilitas}}</h2>
                        <p class="item-intro text-muted">{{$facility_data[2]->Lokasi}}</p>
                        <img class="img-fluid d-block mx-auto" src="images/Facilities4.jpg" alt="abdjan" />
                        <p style="color: black;">{{$facility_data[2]->Deskripsi}}</p>
                        <button class="button button:hover" type="submit">
                          Booking Now
                        </button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


  <!-- Scripts -->
  <script src="Jquery/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/owl-carousel.js"></script>
  <script src="js/animation.js"></script>
  <script src="js/imagesloaded.js"></script>
  <script src="js/popup.js"></script>
  <script src="js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/scripts.js"></script>


</body>
</html>
