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
      background-color: #008CBA;
      color: white;
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
                  <div class="card-title">PURCHASE INFORMATION</div>
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
                          <label for="suppliername">SUPPLIER NAME</label>
                          <input
                            type="text"
                            class="form-control"
                            id="suppliername"
                            placeholder="Enter Name" />
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="invoicenumber">INVOICE NUMBER</label>
                          <input
                            type="text"
                            class="form-control"
                            id="invoicenumber"
                            placeholder="Enter number" />
                        </div>
                      </div>
                    </div>

                    <div class="row">


                      <table class="table" id="childTable">
                        <thead>
                          <tr class="table-dark">
                            <th scope="col">Sr. No.</th>
                            <th scope="col">MATERIAL NAME</th>
                            <th scope="col">QUANTITY</th>
                            <th scope="col"> PRICE</th>
                            <th scope="col">AMOUNT</th>
                            <th scope="col" colspan="2">DISCOUNT</th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>
                              <input type="text" name="" id="">
                            </td>
                            <td>
                              <input type="text" name="" id="" style="width: 50px;">
                            </td>
                            <td>
                              <input type="text" name="" id="" style="width: 100px;">
                            </td>
                            <td>
                              <input type="text" name="" id="" style="width: 100px;">
                            </td>
                            <td>
                              <input type="text" name="" id="" style="width: 100px;">
                            </td>
                            <td>
                              <button type="button" class="btn btn-success" onclick="childrenRow()">Add</button>
                              <button type="button" class="btn btn-danger btnDelete">Remove</button>
                            </td>

                          </tr>

                        </tbody>
                      </table>
                    </div>
                    <div class="row mb-2">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <div class="card-title">PAYMENT STATUS</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="suppliername">PAID</label>
                          <input
                            type="text"
                            class="form-control"
                            id="suppliername"
                            placeholder="Enter Name" />
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="invoicenumber">PAINDING</label>
                          <input
                            type="text"
                            class="form-control"
                            id="invoicenumber"
                            placeholder="Enter number" />
                        </div>
                      </div>
                    </div>
                    <button class="button button2 mt-4" style="margin-left: 670px;">SUBMIT</button>
                </div>

                </form>
              </div>
            </div>
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

    <!-- Google Maps Plugin -->
    <script src="assets/js/plugin/gmaps/gmaps.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo2.js"></script>

    <script>
      $(document).ready(function() {
        // Bind the click event once, outside the childrenRow function
        $("#childTable").on('click', '.btnremove', function() {
          $(this).closest('tr').remove();
        });
      });

      var i = 1;

      function childrenRow() {
        i++;
        $('#childTable').find('tbody').append('<tr><th scope="row">' + i + '</th><td><input type="text"></td><td><input type="text" style="width: 50px;"></td><td><input type="text" style="width: 100px;"></td><td><input type="text" style="width: 100px;"></td><td><input type="text" style="width: 100px;"></td><td><button type="button" class="btn btn-success" onclick="childrenRow()">Add</button><button type="button" class="btn btnremove btn-danger">Remove</button></td></tr>');
      }
    </script>
</body>

</html>