<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ucar parking payment system</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="text-warning">HOME</span></a>
            </li>
            <hr class="sidebar-divider"/>
            <hr class="sidebar-divider"/>
            <li class="nav-item active">
                <a class="nav-link" href="https://github.com/" target="_blank">
                    <i class="fas fa-award"></i>
                    <span class="text-warning">Updates</span></a>
            </li>
            <hr class="sidebar-divider"/>
            <hr class="sidebar-divider"/>
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-award"></i>
                    <span class="text-warning">Admin</span></a>
            </li>
           
          


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column bg-dark">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow">
                    <h1 class="text-warning mr-5"> UCAR PARKING PAYMENT SYSTEM</h1> 
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                    </ul>
                    <li class="nav-item dropdown no-arrow">
                           
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                         Logout here
                        </button>
                        
                        </li>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
    <div class="container fluid ">
    <div class="row">
            <section class="col-12 border border-warning">
            <table class="table">
      
              <thead class="bg-primary text-warning">
                <tr>
                  <th scope="col">Car ID</th>
                  <th scope="col">Car Registration Number</th>
                  <th scope="col">Car Name</th>
                  <th scope="col">Time</th>
                  <th scope="col">Action</th>
                </tr>
              
              </thead>
              <tbody>
              @foreach ($history as $history) 
                <tr>
                  <td>{{$history->id}}</td>
                  <td>{{$history->carName}} </td>
                  <td>{{$history->carReg}}</td>
                   <td>{{$history->time}}</td>
                  <td>    
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal1">
                      Delete
                    </button>
                  </td>
                  </tr> 
                  @endforeach           
              </tbody>
            </table>  
          </section>
           </div>  
     

            </div>
                

            </div>
            <!-- End of Main Content -->

         

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

   
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


</body>

</html>