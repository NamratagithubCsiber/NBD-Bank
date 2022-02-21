<!DOCTYPE html>
<html lang="en">

<head>
  <title>View Customer Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="./Styles.css">

</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="customer_info";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else
{
echo "Connected successfully";
}

?>
<body>
  <!-- Navigation Bar Start -->

  <nav class="navbar navbar- navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="home.html">NBD Bank</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="nav navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.html">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="allCustomers.html">View Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transferMoney.html">Money Transfer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transactionHistory.html">Transaction History</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="https://www.thesparksfoundationsingapore.org/">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.html">Contact us</a>
        </li>
      </ul>

    </div>
    </div>
  </nav>
  <!-- Navigation Bar Finish -->


  <!-- Customer List View  -->
  <div class="container">
    <div class="table-responsive">
      <table class="table table-striped" onload="customerView()">
        <thead>
          <tr>
            <th>Account No.</th>
            <th>Name</th>
            <th>Email </th>
            <th>Balance</th>
            <th>Activity</th>
          </tr>
        </thead>
        <tbody id="table-row">
        </tbody>
      </table>
    </div>
  </div>

  
  <!-- Customer List View  Ends -->
  <script src="View_cutomer.php"></script>
  
</body>

</html>