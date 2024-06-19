<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sign.css">
    <title>Biodata</title>
</head>

<body>

    <!-- form start -->
    <div class="flex-container">
        <form class="form" method="post">
          @csrf

            <!-- input text strat -->
            <div class="head">
                <span>Biodata</span>
            </div>
            <div class="flex-column">
              <label>Full Name </label></div>
              <div class="inputForm">
                <input type="text" class="input" name="Full_name" placeholder="Enter your Full Name">
              </div>

            <div class="flex-column">
              <label>Majoring </label></div>
              <div class="inputForm">
                <input type="text" class="input" name="Majoring" placeholder="Enter your Majoring">
              </div>

            <div class="flex-column">
              <label>Faculty </label></div>
              <div class="inputForm">
                <input type="text" class="input" name="Faculty" placeholder="Enter your Faculty" autocomplete="off">
                </div>

              <div class="flex-column">
                <label>Angkatan</label></div>
                <div class="inputForm">
                  <input type="text" class="input" name="Angkatan" placeholder="Enter your class" autocomplete="off">
                </div>
            <!-- input text end -->

            <button class="button-submit">Submit</button>

      </form>
      <!-- form end -->

      <!-- images content -->
      <div class="image-container2">
        <img src="images/Hand coding-bro.png" alt="Gambar">
      </div>

    </div>
</body>
</html>
