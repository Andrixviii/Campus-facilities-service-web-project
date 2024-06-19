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
            <div class="logo">
              <img src="images/logo.png" alt="E-Facilities">
            </div>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <a href="{{route('user')}}" class="left-button">
             <h><img src="images/leftbutton.png" alt="Back">BACK</h>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>

  <section class="page-section bg-light" id="history">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">HISTORY</h2>
            <h3 class="section-subheading text-muted">Adapun fasilitas yang tersedia yaitu:.</h3>
        </div>
        <div class="row">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Responsible</th>
                <th>Facility</th>
                <th>Agenda</th>
                <th>Date</th>
                <th>Status</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($history_list as $data)
              @if($data->booking_orders->Account->id == $user_id)
              <tr>
                <td>{{$data->booking_orders->Account->Full_name}}</td>
                <td>{{$data->booking_orders->facility->nama_fasilitas}}</td>
                <td>{{$data->booking_orders->Agenda}}</td>
                <td>{{$data->booking_orders->tanggal_booking}}</td>
                @if($data->booking_orders->status == "Approved")
                <td><span class="badge text-bg-success">{{$data->booking_orders->status}}</span></td>
                @elseif($data->booking_orders->status == "Rejected")
                <td><span class="badge text-bg-danger">{{$data->booking_orders->status}}</span></td>
                @else
                <td><span class="badge text-bg-warning">{{$data->booking_orders->status}}</span></td>
                @endif
                <td><a class="" href="{{route('editForm', $data->booking_orders->booking_order_id)}}">Edit</a></td>
                <td>
                  <form action="{{route('booking.destroy', $data->booking_orders->booking_order_id)}}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" ss="btn transparent-btn" style="background:transparent; border:none; padding:0;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                              <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                          </svg>
                      </button>
                  </form>
               </td>
             </tr>
             @endif
             @endforeach
            </tbody>
          </table>
        </div>
    </div>
</section>

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
