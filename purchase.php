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
                  <div class="card-title text-danger">PURCHASE INFORMATION</div>
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
                          <label for="supplierName">SUPPLIER NAME</label>
                          <input
                            type="name"
                            class="form-control"
                            id="supplierName"
                            placeholder="Enter name" />
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="invoiceNumber">INVOICE NUMBER</label>
                          <input
                            type="text"
                            class="form-control"
                            id="invoiceNumber"
                            placeholder="Enter number" />
                        </div>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="phonenumber">PHONE NUMBER</label>
                          <input
                            type="phonenumber"
                            class="form-control"
                            id="phonenumber"
                            placeholder="Enter phone number" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="gstNumber">GST NUMBER</label>
                          <input
                            type="text"
                            class="form-control"
                            id="gstNumber"
                            placeholder="Enter GST number" />
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="date">DATE</label>
                          <input
                            type="date"
                            class="form-control"
                            id="date"
                            placeholder="Enter date" />
                        </div>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <label class="form-label">ADDRESS</label>
                      <fieldset class="border rounded p-1 mb-4">
                        <legend class="px-2 fw-normal"></legend>
                        <div class="row mb-2">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="Consignee">Consignee(Ship to)</label>
                              <input type="address" class="form-control" id="consignee" name="consignee" placeholder="Enter address" />
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="buyer">Buyer(Bill to)</label>
                              <input type="address" class="form-control" id="buyer" name="buyer" placeholder="Enter address" />
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                    <div class="row mb-2">
                      <label class="form-label">DOC NUMBER</label>
                      <fieldset class="border rounded p-1 mb-4">
                        <legend class="px-2 fw-normal"></legend>
                        <div class="row mb-2">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="docNumber">Company DOC number</label>
                              <input type="text" class="form-control" id="docNumber" name="docNumber" placeholder="Enter DOC number" />
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="docNumber">Supplier DOC number</label>
                              <input type="text" class="form-control" id="docNumber" name="docNumber" placeholder="Enter DOC number" />
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </div>

                    <div class="row">


                      <table class="table" id="childTable">
                        <thead>
                          <tr class="table-dark">
                            <th scope="col">Sr. No.</th>
                            <th scope="col">MATERIAL NAME</th>
                            <th scope="col">UNIT</th>
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
                              <div class="dropdowns rounded-3  ">
                                <select class="rounded-2 border border-1" style="width: 130px; height: 36px ;">
                                  <option value="Select">-Select-</option>
                                  <option value="m5">M5</option>
                                  <option value="m7.5">M7.5</option>
                                  <option value="m10">M10</option>
                                  <option value="m15">M15</option>
                                  <option value="m20">M20</option>
                                  <option value="m25">M25</option>
                                  <option value="m30">M30</option>
                                  <option value="m40">M40</option>
                                  <option value="m50">M50</option>
                                  <option value="m55">M55</option>
                                  <option value="m60">M60</option>
                                  <option value="m80">M80</option>
                                </select>

                              </div>
                            </td>
                            <td>
                              <div class="dropdowns rounded-3  ">
                                <select class="rounded-2 border border-1" style="width: 100px; height: 36px ;">
                                  <option value="Select">-Select-</option>
                                  <option value="metricton">Metric ton</option>
                                  <option value="cubicfeet">Cubic feet</option>
                                  <option value="liters">Liters</option>
                                  <option value="kg">kg</option>
                                </select>
                              </div>
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
                          <label for="supplierName">PAID</label>
                          <input
                            type="text"
                            class="form-control"
                            id="supplierName"
                            placeholder="Enter amount" />
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="payment">PENDING</label>
                          <input
                            type="text"
                            class="form-control"
                            id="payment"
                            placeholder="Enter amount" />
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="paymentMethod">PAYMENTS METHOD</label><br>
                          <select class="rounded-2 form-control form-select border border-1" >
                            <option value="select">-Select-</option>
                            <option value="cash">Cash</option>
                            <option value="mumbai">UPI</option>
                            <option value="rtgs">RTGS</option>
                            <option value="neft">NEFT</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="form-group">
                          <label for="remark">REMARK</label><br>
                          <textarea name="remark" id="remark" placeholder="Enter message" rows="3" cols="81">

                           </textarea>
                        </div>
                      </div>
                    </div><br><br>
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
        $('#childTable').find('tbody').append('<tr><th scope="row">' + i + '</th><td><div class="dropdowns rounded-3  "><select class="rounded-2 border border-1" style="width: 130px; height: 36px ;"><option value="Select">-Select-</option><option value="m5">M5</option><option value="m7.5">M7.5</option><option value="m10">M10</option><option value="m15">M15</option><option value="m20">M20</option><option value="m25">M25</option><option value="m30">M30</option><option value="m40">M40</option><option value="m50">M50</option><option value="m55">M55</option><option value="m60">M60</option><option value="m80">M80</option></select></div></td><td><div class="dropdowns rounded-3  "><select class="rounded-2 border border-1" style="width: 100px; height: 36px ;"><option value="Select">-Select-</option><option value="metricton">Metric ton</option><option value="cubicfeet">Cubic feet</option<option value="liters">Liters</option><option value="kg">kg</option></select></div></td><td><input type="text" style="width: 100px;"></td><td><input type="text" style="width: 100px;"></td><td><input type="text" style="width: 100px;"></td><td><input type="text" style="width: 100px;"></td> <td><button type="button" class="btn btn-success" onclick="childrenRow()">Add</button><button type="button" class="btn btnremove btn-danger">Remove</button></td></tr>');
      }
    </script>
</body>

</html>