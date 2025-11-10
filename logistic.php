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
  




  
  <!-- CSS Files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/plugins.min.css" />
  <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

  
    <style>
  /* Remove sidebar spacing and make dashboard full screen */
  html, body {
    height: 100%;
    width: 100%;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
  }

  .wrapper {
    display: block;
    width: 100%;
    height: 100%;
  }

  .main-panel {
    width: 100% !important;  /* stretch across full screen */
    margin-left: 0 !important; /* remove reserved sidebar space */
    height: 100vh; /* full height */
  }

  .container, .page-inner {
    width: 100%;
    min-height: 100vh;
  }

  /* Optional: remove demo layout constraints */
  body.demo {
    margin: 0 !important;
    padding: 0 !important;
  }
   html, body {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
  }

  /* Remove sidebar layout spacing */
  .wrapper {
    display: block;
    width: 100%;
    height: 100%;
  }

  /* Force the main panel to use full width */
  .main-panel {
    width: 100% !important;
    margin-left: 0 !important;
    height: 100vh;
  }

  /* Stretch header full width */
  .main-header,
  header {
    width: 100% !important;
    margin-left: 0 !important;
  }

  /* Fix page-inner area */
  .page-inner {
    width: 100%;
    min-height: calc(100vh - 80px); /* adjusts for header height */
  }

  /* Optional: remove demo spacing if demo.css is still loaded */
  body.demo {
    margin: 0 !important;
    padding: 0 !important;
  }
  .footer {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  background: #ffffff; /* or match your theme color */
  padding: 10px 0;
  text-align: center;
  box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
  z-index: 1000;
  margin-top: 2px;
  color: white;
}
.dash-img {
  height: 600px;
}
.img{
  height: 100%;
  width: 100%;
    object-fit: cover;
  
}
</style>

  

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="assets/css/demo.css" />
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar -->

    
    <!-- End Sidebar -->

    <div class="main-panel">
      <!-- Header -->
      <?php
      require "header.php";
      ?>
      <div class="container ">
        <div class="dash-img ">
          <img class="img" src="Dashboradimge.jpg" alt="">
        </div>
        
      </div>
  <!-- Footer -->
  <?php include "footer.php"; ?>
  </div>


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

  <!-- Sweet Alert -->
  <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

  <!-- Kaiadmin JS -->
  <script src="assets/js/kaiadmin.min.js"></script>

  <!-- Kaiadmin DEMO methods, don't include it in your project! -->
  <!-- <script src="assets/js/setting-demo.js"></script>
    <script src="assets/js/demo.js"></script> -->
  <script>
    $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#177dff",
      fillColor: "rgba(23, 125, 255, 0.14)",
    });

    $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#f3545d",
      fillColor: "rgba(243, 84, 93, .14)",
    });

    $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#ffa534",
      fillColor: "rgba(255, 165, 52, .14)",
    });
  </script>

  
</body>

</html>