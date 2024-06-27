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

</head>

    <style>body {
        background: rgb(150, 219, 231)
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #68c5c8
    }

    .profile-button {
        background: rgb(39, 94, 120);
        box-shadow: none;
        border: none
    }

    .profile-button:hover {
        background: #8bd6ec
    }

    .profile-button:focus {
        background: #73ebf3;
        box-shadow: none
    }

    .profile-button:active {
        background: #7bd5ff;
        box-shadow: none
    }

    .back:hover {
        color: #beeaf5;
        cursor: pointer
    }

    .labels {
        font-size: 11px
    }

    .add-experience:hover {
        background: #84d9df;
        color: #fff;
        cursor: pointer;
        border: solid 1px #68c8c8
    }
    </style>
    <body>

    <div class="container rounded bg-white align align-items-center mt-5 mb-4">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                  @if($user_data->photo == null)
                    <img class="rounded-circle mt-5" width="150px" src="images/Profil.png">
                  @else
                    <img class="rounded-circle mt-5" width="150px" img src="{{ asset('storage/' . $user_data->photo) }}">
                  @endif
                    <span class="font-weight-bold">{{$user_data->Full_name}}</span>
                    <span class="text-black-50">{{$user_data->email}}</span>
                    <span>

                </span>
                </div>
            </div>
            <div class="col-md-5 border-right">
                    <div class="row mt-5">
                      <form class="flex flex-col" id="editForm" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="col-md-12"><label class="labels">new password</label><input type="password" class="form-control" placeholder="enter new password" value="" name="newpw"></div>
                        <div class="col-md-12"><label class="labels">confirm password</label><input type="password" class="form-control" placeholder="confirm password" value="" name="cnfrm"></div>
                    </div>
                    <div class="mt-5 text-center">
                          <button class="btn btn-primary profile-button" type="submit">Save Password</button>
                    </div>
                  </form>
                </div>
            </div>
    </div>
</body>
</html>
