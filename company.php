<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title> Admin Dashboard</title>
  <meta
    content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    name="viewport" />

  <!-- Fonts and icons -->
  <script src="assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Public Sans:300,400,500,600,700"]
      },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["assets/css/fonts.min.css"],
      },
      active: function() {
        sessionStorage.fonts = true;
      },
    });
  </script>
  <style>
    .button2 {
      background-color: white;
      color: black;
      border: 2px solid #008CBA;
      width: 100px;
      height: 50px;
      margin-left: 500px;
      border-radius: 5px;
    }

    .button2:hover {
      background-color: orange;
      color: white;
    }
   
      ::file-selector-button 
    {
      border: 2px solid black;
      padding: 4px;
      border-radius: 5px;
      background-color: lightgreen;
    }
    .card-title
    {
      
    }
    
  </style>

  <!-- CSS Files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/plugins.min.css" />
  <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="assets/css/demo.css" />
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <?php require "side-menu.php"; ?>
    <!-- End Sidebar -->

    <div class="main-panel">
      <!-- Header -->
      <?php
      require "header.php";
      ?>

      <div class="container">
        <div class="page-inner">
          
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title text-danger">COMPANY INFORMATION</div>
                </div>
                <div class="card-body">
                  <form>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card">
                          
                          <div>
                          </div>
                        </div>
                      </div>
                    </div>                
                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="companyname">COMPANY NAME</label>
                          <input
                            type="text"
                            class="form-control"
                            id="companyname"
                            placeholder="Enter company Name" />
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="phonenumber">PHONE</label>
                          <input
                            type="text"
                            class="form-control"
                            id="phonenumber"
                            placeholder="Enter phone number" />
                        </div>
                      </div>
                    </div>
                      

                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="address">ADDRESS</label>
                          <input
                            type="text"
                            class="form-control"
                            id="address"
                            placeholder="Enter address" />
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label class="pb-2" for="companylogo">COMPANY LOGO</label><br>
                          <input class="rounded-2" type="file" id="myFile" name="filename">
                          <input class="rounded-2 p-1 ps-2 pe-2" style="background-color: #90EE90;" type="submit">
                        </div>
                      </div>
                    </div>
                    

                    
                       
                     

                      
                   
                    <button class="button button2 mt-4" style="margin-left: 670px;" >SAVE</button>
                </div>
                
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Footer -->
        

      
      </div>

      <?php include "footer.php"; ?>
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Google Maps Plugin -->
    <script src="assets/js/plugin/gmaps/gmaps.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo2.js"></script>

</body>

</html>