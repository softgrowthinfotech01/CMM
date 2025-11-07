<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Datatables - Kaiadmin Bootstrap 5 Admin Dashboard</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

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
       
      <!-- End Sidebar -->

      <div class="main-panel">
        <!-- Header -->
      <?php include "header.php"?>

        <div class="container">
          <div class="page-inner">
            
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title text-danger">INVOICE RECORD</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table
                        id="basic-datatables"
                        class="display table table-striped table-hover"
                      >
                        <thead>
                          <tr>
                            <th>SR.NO</th>
                            <th>CUSTOMER NAME</th>
                            <th>MATERIAL NAME</th>
                            <th>QUANTITY</th>
                            <th>PRICE</th>
                            <th>AMOUNT</th>
                            <th>DISCOUNT %</th>
                            <th>PAYMENT STATUS</th>
                            <th>PAID/PENDING</th>
                            
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                           <th>SR.NO</th>
                            <th>CUSTOMER NAME</th>
                            <th>MATERIAL Name</th>
                            <th>QUANTITY</th>
                            <th>PRICE</th>
                            <th>AMOUNT</th>
                            <th>DISCOUNT %</th>
                            <th>PAYMENT STATUS</th>
                            <th>PAID/PENDING</th>
                          </tr>
                        </tfoot>
                        <tbody>
                          <tr>
                           <td>1</td>
                            <td>Garrett Winters</td>
                            <td>Concrete</td>
                            <td>50</td>
                            <td>2,40,000</td>
                            <td>10,00,000</td>
                            <td>4%</td>
                            <td>Cash</td>
                            <td>Paid</td>
                          </tr>

                          <tr>
                           <td>2</td>
                            <td>Tony Stark</td>
                            <td>Concrete</td>
                            <td>40</td>
                            <td>1,50,000</td>
                            <td>2,00,000</td>
                            <td>7%</td>
                            <td>Online</td>
                            <td>Paid</td>
                          </tr>

                          <tr>
                           <td>3</td>
                            <td>Peter Parker</td>
                            <td>Concrete</td>
                            <td>55</td>
                            <td>50,000</td>
                            <td>5,00,000</td>
                            <td>5%</td>
                            <td>-----</td>
                            <td>Pending</td>
                          </tr>

                          <tr>
                            <td>4</td>
                            <td>Thomas Shelby</td>
                            <td>Concrete</td>
                            <td>60</td>
                            <td>1,00,000</td>
                            <td>8,00,000</td>
                            <td> 7%</td>
                            <td>Online</td>
                            <td>Paid</td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Footer -->
       <?php include "footer.php"?>
      </div>

    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>


        <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <script>
      $(document).ready(function () {
        $("#basic-datatables").DataTable({});

        $("#multi-filter-select").DataTable({
          pageLength: 5,
          initComplete: function () {
            this.api()
              .columns()
              .every(function () {
                var column = this;
                var select = $(
                  '<select class="form-select"><option value=""></option></select>'
                )
                  .appendTo($(column.footer()).empty())
                  .on("change", function () {
                    var val = $.fn.dataTable.util.escapeRegex($(this).val());

                    column
                      .search(val ? "^" + val + "$" : "", true, false)
                      .draw();
                  });

                column
                  .data()
                  .unique()
                  .sort()
                  .each(function (d, j) {
                    select.append(
                      '<option value="' + d + '">' + d + "</option>"
                    );
                  });
              });
          },
        });

        // Add Row
        $("#add-row").DataTable({
          pageLength: 5,
        });

        var action =
          '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

        $("#addRowButton").click(function () {
          $("#add-row")
            .dataTable()
            .fnAddData([
              $("#addName").val(),
              $("#addPosition").val(),
              $("#addOffice").val(),
              action,
            ]);
          $("#addRowModal").modal("hide");
        });
      });
    </script>
  </body>
</html> 
