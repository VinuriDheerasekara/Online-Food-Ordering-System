<!DOCTYPE html>
   <html lang="en">
   <head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
   integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
   integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<title>Admin Page</title>
<link rel="icon" href="/OnlinePizzaDelivery/img/LogoEdited.jpg" type="image/x-icon">

<link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="assetsForSideBar/css/styles.css">
   </head>
   <body>
     
 
<?php
include_once '../partials/_dbconnect.php';

require 'partials/_nav.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

if ($action == 'loadTable') {
    $month = $_GET['month'];
    $html = '';
    $html .= '<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <div class="card card-primary">
            <div class="card-header" id="card-header-table-1">
              <div class="card-tools">
              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered" id="tblApprovePage">
                <thead>
                  <tr>
                    <th id="table-1-th">User Id</th>
                    <th id="table-1-th">Order Id</th>
                    <th id="table-1-th">Amount</th>
                  </tr>
                </thead>

                
                <tbody>';
    $sqlIncome = "SELECT userId, orderId, amount from orders WHERE orderDate LIKE '" . $month . "%'";
    $res = mysqli_query($conn, $sqlIncome);
    $tot = 0;
   
  
  
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $tot = $tot + $row['amount'];
            $html .= '<tr>';
            $html .= '<td>' . $row['userId'] . '</td>';
            $html .= '<td>' . $row['orderId'] . '</td>';
            $html .= '<td>' . $row['amount'] . '</td>';
        }
    } else {
        $html .= '<tr><td colspan="3" style="text-align:center;">No Records Available</td></tr>';
    }
    $html .= '</tbody>
    <tfoot>
  </table>
</div>
</div>
</div>
</div>
</div>
</section>';
    $html .= '<div class="card" style="width: 18rem;">

    
<div class="card-body">
  <h5 class="card-title">Total Amount</h5>
  <h6 class="card-subtitle mb-2 text-muted">' . $tot . '</h6></h6>
</div>
</div>';

    echo $html;
}
