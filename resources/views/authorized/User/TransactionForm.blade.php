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
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
  <!-- instalation tailwindcss -->
  <script src="https://cdn.tailwindcss.com"></script>

<title>Reservation Form</title>
</head>

<body>
  <header class="header-area header-sticky wow slideInDown fixed top-0 w-full bg-white shadow-sm z-50 transition duration-300 ease-in-out" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container mx-auto">
        <div class="flex justify-between items-center py-1">
            <div class="logo mr-4">
                <img src="{{asset('images/logo.png')}}" alt="E-Facilities">
            </div>
            <a href="{{route('user')}}" class="left-button mb-4">
             <h><img src="{{asset('images/leftbutton.png')}}" alt="Back">BACK</h>
            </a>
            </a>
        </div>
    </div>
</header>

<div class ="form" style="background-color:#cbe0ff;">
<div class ="popup">
  <div class="flex flex-col items-center justify-center h-screen light">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6 mt-24">
        <h2 class="text-4xl font-bold text-gray-800 mb-8 text-center">Booking Form</h2>
      <!-- form start -->
      <form class="flex flex-col" id="reservationForm" method="POST">
        @csrf
        

        <span>Select Facility</span>
        <select class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
          id="product" , name="facility">
          @foreach($Facility as $facility)
            <option name = "facility_id"
            value="{{$facility->Facility_id}}"
            {{ old('Facility_id',$id) == $facility->Facility_id ? 'selected' : '' }}>{{ $facility->nama_fasilitas }}</option>
          @endforeach
          </select>

        <span>Reservation</span>
        <input placeholder="Reservation date" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
        type="date" id="reservationDate"name="tanggal">

        <span>Your Agenda</span>
        <input placeholder="Note" class= "bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="feedback" id="agenda"></textarea>
        <button id="SubmitButton" class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150" type="submit">Submit</button>
      </form>
      <!-- Form end -->

    </div>
  </div>
</div>
</div>

<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
