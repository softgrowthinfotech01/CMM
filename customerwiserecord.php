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
                    <h4 class="card-title text-danger">CUSTOMER WISE RECORD</h4>
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
                            <th>INVOICE NUMBER</th>
                            <th>DATE</th>
                            <th>GIVEN AMOUNT</th>
                            <th>PENDING AMOUNT</th>
                            <th>DUE DATE</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>SR.NO</th>
                            <th>INVOICE NUMBER</th>
                            <th>DATE</th>
                            <th>GIVEN AMOUNT</th>
                            <th>PENDING AMOUNT</th>
                            <th>DUE DATE</th>
                            
                          </tr>
                        </tfoot>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>123456</td>
                            <td>02/11/2025
                            </td>
                            <td>40,000</td>
                            <td>10,000</td>
                            <td>05/12/2025
                            </td>
                           
                          </tr>

                          <tr>
                            <td>2</td>
                            <td>741236</td>
                            <td>08/11/2025
                            </td>
                            <td>30,000</td>
                            <td>20,000</td>
                            <td>01/12/2025
                            </td>
                            
                          </tr>

                          <tr>
                            <td>3</td>
                            <td>856412</td>
                            <td>08/11/2025
                            </td>
                            <td>25,000</td>
                            <td>25,000</td>
                            <td>03/12/2025
                            </td>
                            
                          </tr>

                          <tr>
                            <td>4</td>
                            <td>546128</td>
                            <td>07/11/2025
                            </td>
                            <td>20,000</td>
                            <td>30,000</td>
                            <td>02/12/2025
                            </td>
                            
                            
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
