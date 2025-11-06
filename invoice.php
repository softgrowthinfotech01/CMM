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
                                    <div class="card-title">INVOICE INFORMATION</div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">

                                                </div>
                                            </div>

                                            <div class="row mb-2 rc">
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="recievervendorname">INVOICE NUMBER</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="recievervendorname"
                                                            placeholder="Enter invoice number" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="recievervendorphone">CUSTOMER NAME</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="recievervendorphone"
                                                            placeholder="Enter Name" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="location">MATERIAL NAME</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="location"
                                                            placeholder="Enter Material Name" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="location">QUANTITY</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="location"
                                                            placeholder="Enter quantity of materials" />
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="location">PRICE</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="location"
                                                            placeholder="Enter price of materials" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="location">AMOUNT</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="location"
                                                            placeholder="Enter amount of materials" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="location">DISCOUNT %</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="location"
                                                            placeholder="Enter discount offered" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">

                                                </div>

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
                                                        <input
                                                            type="radio"
                                                            value="paid" />
                                                        <label for="paid">PAID</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="form-group">

                                                        <input
                                                            type="radio"

                                                            value="pending" />
                                                        <label for="pending">PENDING</label>
                                                    </div>

                                                </div>

                                            </div>

                                            <div>
                                                <button class="button button2 mt-4" style="margin-left: 670px;" >SUBMIT</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Footer -->
                


            </div>
            <?php include "footer.php" ?>
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