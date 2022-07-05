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
    <script>
        
        const calculate = () => {
            
            let type = document.querySelector("#type").value;
            let time = document.querySelector("#time").value;
            let price = "";
        
            let timeNumber = parseFloat(time) ;
           
            if (type === "Hours") {
                price = timeNumber * 600;
            } else {
                 price = timeNumber * 10;
            }

            if (time== "" || type == "") { 
                document.querySelector("#price").classList.remove("d-none");
                document.querySelector("#price").innerText = "Please enter all the fields";
            } else {
                document.querySelector("#price").classList.remove("d-none");
                document.querySelector("#price").classList.remove("text-danger");
                document.querySelector("#price").classList.add("text-warning");
               document.querySelector("#price").innerHTML =` ${price}  `;
             } 
            
         };
            </script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - 
            board -->
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
           <li class="nav-item active admin">
                <a class="nav-link" href="{{url('/admin')}}">
                    <i class="fas fa-award"></i>
                    <span class="text-warning">Admin</span></a>
            </li>
        
           
          <?php
           if(session()->has('user')){
            $user = session('user')[0];
            if ($user->usertype == null) {
             ?>
            <style>
               .admin{
                   display: none;
               }
            </style>
            <?php
            }
        }else{
          echo 'else';
           }
          ?>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column ">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow">
                    <h1 class="text-warning mr-5"> UCAR PARKING PAYMENT SYSTEM</h1> 
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                    </ul>
                    <li class="nav-item dropdown no-arrow">
                           
                    <a href="/" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                         Logout here
                     </a>
                        
                        </li>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
      <div class="container bg-warning">
          <div class="row">
          <div class="col-3 bg-info text-warning">
          <table class="table">
      
      <thead class="bg-primary text-warning">
        <tr>
          <th scope="col">Time</th>
          <th scope="col">Price</th>
         </tr>
      
      </thead>
      <tbody class="text-white">
       
        <tr>
          <td>price per hour</td>
          <td>Ksh 600 </td>
     </tr> 
     <tr>
          <td>price per minute </td>
          <td>Ksh 10 </td>
     </tr> 
                 
      </tbody>
    </table>  
          </div>
         <div class="col-9 bg-warning" >
             <div class="card bg-primary">
                 <div class="card-body ">
                 <div class="form-actions ">  
                <div class="container bg-warning text-white" style="padding: 0;margin: 0;">
                <div class="row ">
                    <div class="col-sm-12 " >
                    <span class="float-sm-left">
                    <h3 class="card-title">Parking Payment</h3>
                    </span>
                    </div>
                </div>
                </div>
                </div>
                </br>
                <form action="{{url('/history')}}" method="POST" enctype="multipart/form-data"> 
                    @csrf
                <div class="form-row text-white">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip01">Car Reg No</label>
                        <input type="text" name="carReg" class="form-control" placeholder="Enter car reg no" >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip02">Car Name</label>
                        <input type="text" name="carName" class="form-control"  placeholder="Enter car name " >
                    </div>
                   </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label class="form-control-label text-white" >Type of time </label>
                        <select name="type" id="type" class="form-control " name="type" placeholder="--select-type---" >
                           <option value="Hours">Hours</option>
                           <option value="Minutes">Minutes</option>
                        </select>
                    </div>
                    <div class="col-md-8 mb-3">
                        <label class="form-control-label text-white" >Amount of time</label>
                        <input type="number" type="submit" name="time" id="time" placeholder="Enter amount of time" class="form-control" maxlength="11">
                    </div>

                </div>
              
                    
                    <label class="form-control-label text-white" >Total parking price</label>
                    <h2>
                        <div id="price" class="text-danger  bg-primary d-none " >
                
                    </div>
                    </h2>
                   
                    
                     </br>
                                         
                <div class="form-actions">  
                <div class="container" style="padding: 0;margin: 0;">
                <div class="row">
                    <div class="col-sm-6" >
                    <span class="float-sm-left">
                            </span>
                    </div>
                    <div class="col-sm-6">
                    <span class="float-sm-right">
                        <div class="text-right">
                 <input  class="btn btn-warning" value="Find price" onclick="calculate()">     
                 <input type="submit" class="btn btn-dark" value="Reset">     
                 </div>
                   </form>
                   </div>

            </div>
            
                

           </div>

            </div>
            <!-- End of Main Content -->

         
      </div>
        </div>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
        
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
            </div>



    <!-- Bootstrap core JavaScript-->
 
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


</body>

</html>