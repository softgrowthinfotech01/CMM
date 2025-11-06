<style>
  /* Fix layout after removing sidebar */
  .main-panel,
  .main-header {
    margin-left: 0 !important;
    width: 100% !important;
  }

  /* Optional: adjust logo header padding */
  .main-header-logo,
  .logo-header {
    width: auto !important;
  }

  /* Ensure navbar fills the full row */
  .navbar-header {
    width: 100% !important;
  }

  /* Allow dropdown to expand outside header */
  .navbar,
  .main-header {
    overflow: visible !important;
  }
  html, body {
  height: 100%;
  margin: 0;
}

.page-wrapper {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

.main-content {
  flex: 1 0 auto; /* grows to fill space */
}

footer {
  flex-shrink: 0; /* don’t let footer shrink */
}
.d-grid:hover
{
  background-color:grey;
}
.navbar-nav:hover
{
  background-color: grey;
}
.dropdown:hover
{
  background-color: grey;
}
.dropdown-item:hover
{
  background-color: lightgray;
}


</style>

<div class="main-header">
  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container-fluid  gap-3">
      <a href="logistic.php"><h2 class="me-5 mb-0 text-black">Dashboard</h2></a>

      <!-- Main Menu -->
      <div class="d-grid  d-md-block rounded-3 gap-2">
        <button class="btn btn-light p-2 " type="button"><a class="text-black" href="supplier.php"> SUPPLIER INFORMATIOIN</a></button>
      </div>
     
      <div class="d-grid rounded-3 d-md-block">
        <button class="btn btn-light  p-2" type="button"><a class="text-black" href="purchase.php"> PURCHASE INFORMATION</a></button>
      </div>

     <div class="d-grid gap-2 rounded-3 d-md-block">
        <button class="btn btn-light  p-2" type="button"><a class="text-black" href="invoice.php"> INVOICE INFORMATIOIN</a></button>
      </div>

      <div class="d-grid gap-2 rounded-3 d-md-block">
        <button class="btn btn-light  p-2" type="button"><a class="text-black" href="company.php"> COMPANY  INFORMATIOIN</a></button>
      </div>
        
    
      <div class="d-grid gap-2 rounded-3 d-md-block">
        <button class="btn btn-light  p-2" type="button"><a class="text-black" href="customer.php"> CUSTOMER INFORMATIOIN</a></button>
      </div>

      <div class="dropdown rounded-3 ">
        <a class="btn btn-white   dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          REPORT
        </a>

        <ul class="dropdown-menu " aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item " href="supplier_record.php">SUPPLIER REPORT</a></li> <hr>
          <li><a class="dropdown-item" href="purchase_record.php">PURCHASE REPORT</a></li> <hr>
          <li><a class="dropdown-item" href="invoice_record.php">INVOICE REPORT</a></li> <hr>
          <li><a class="dropdown-item" href="company_record.php">COMPANY REPORT</a></li> <hr>
          <li><a class="dropdown-item" href="customer_record.php">CUSTOMER REPORT</a></li> <hr>
        </ul>
      </div>

      

      
      <!-- Right side user section -->
      <ul class="navbar-nav ms-auto align-items-center rounded-3 ">
        <li class="nav-item dropdown rounded-3 ">
          <a class="nav-link dropdown-toggle d-flex align-items-center rounded-3" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="fw-bold text-dark rounded-5 ">Hi, Logistics</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
            <li><a class="dropdown-item" href="#">Account Setting</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</div>


