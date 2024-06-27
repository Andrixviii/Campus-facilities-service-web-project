<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template -->
    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- instaltion tailwindcss css -->
    <script src="https://cdn.tailwindcss.com"></script>



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">Admin</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Heading -->
            <div class="sidebar-heading mt-2">
                Interface
            </div>


            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin')}}">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Manage Facility</span></a>
            </li>

            <!-- Nav Item - Pages Confirm -->
            <li class="nav-item ">
                <a class="nav-link collapsed" href="{{route('admin.confirm')}}" aria-expanded="true"
                    aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Confirm Booking</span>
                </a>
            </li>

            <!-- Nav Item - History -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin.history')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>History Booking</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.userlist')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data User</span></a>
            </li>

            <!-- logout check paling bawah -->
            <li class="nav-item">
                <a class="nav-link" href="#logoutModal" data-bs-toggle="modal" >
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                    Logout
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <ul class="navbar-nav ml-auto mt-2">
                        <img src="images/logo.png" alt="...">
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <body id="page-top">
                        <!-- Begin Page Content -->
                        <div class="container-fluid">

                            <!-- DataTales Example -->
                            <section class="page-section bg-light">
                                <div class="container">
                                    <div class="text-center">
                                        <h2 class="section-heading text-uppercase">HISTORY</h2>
                                    </div>
                                    <div class="row">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Responsible</th>
                                                    <th>Facility</th>
                                                    <th>Agenda</th>
                                                    <th>Date of Verification</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             @if($history_list->total() != 0)
                                                @foreach($history_list as $data)

                                                <tr>
                                                    <td>{{$data->booking_orders->Account->Full_name}}</td>
                                                    <td>{{$data->booking_orders->facility->nama_fasilitas}}</td>
                                                    <td>{{$data->booking_orders->Agenda}}</td>
                                                    <td>{{\Carbon\Carbon::parse($data->tanggal_booking)->toDayDateTimeString()}}</td>
                                                    <td><span class="badge text-bg-success">
                                                      {{$data->booking_orders->status}}
                                                    </span></td>
                                                </tr>
                                                @endforeach
                                             @else
                                                  <td valign="top" colspan="5" class="dataTables_empty">No data available in table</td>
                                             @endif
                                            </tbody>
                                        </table>
                                        {{$history_list->links() }}
                                    </div>
                                </div>
                            </section>
                        </div>
                </div>
            </div>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{route('Logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="Jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="Jquery/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
