<?php
    include "dbCon.php";

    
        $year = $_POST["searchYear"];
        $month = $_POST["search"];
    
        if($month == 1){$month = "January";}
        elseif($month == 2){$month = "February";}
        elseif($month == 3){$month = "March";}
        elseif($month == 4){$month = "April";}
        elseif($month == 5){$month = "May";}
        elseif($month == 6){$month = "June";}
        elseif($month == 7){$month = "July";}
        elseif($month == 8){$month = "August";}
        elseif($month == 9){$month = "September";}
        elseif($month == 10){$month = "October";}
        elseif($month == 11){$month = "November";}
        elseif($month == 12){$month = "December";}
?>

<html>
    <head>
        <title>

        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
        <style>
            @media print{
                .noprint{
                    display:none;
                }
            }
        </style>

    </head>
    <body>
        <div class="container">
            <div class="row">
                
            <div style="display: flex;">
                <div>
                <h4 style="margin-left:20px; margin-bottom: 10px; margin-top: 20px; font-weight: bold;">D's Gym Mattegoda</h4>
                <h6 style="margin-left:20px;">146/121,<br>Mattegoda N.H.S,<br>Polgasowita.</h6>
                <h6 style="margin-left:20px;">dsgymmattegoda@gmail.com</h6>
                <h6 style="margin-left:20px; margin-bottom: 20px;"> +94774454034</h6>
                </div>
                <div><img src="http://dsgym.epizy.com/Final%20Project/images/logo.png" style="height:120px; width:120px; position:absolute; right:50px; margin-top: 30px;"></div>
                </div>

                <div class="col-md-12"  >
                    <div class="card mt-4">
                        <div class="card-body"  id="print-container">
                        <h5>Date &emsp;&emsp;:&emsp; <?php echo date("l jS \of F Y "); ?></h5>
                        <h5>Year &emsp;&ensp;&ensp;&nbsp;:&emsp;<?php echo $year; ?></h5>
                        <h5>Month&emsp;&nbsp;:&emsp;<?php echo $month; ?></h5><br><br><br> 
                            <h4 style="text-align:center;">Monthly Membership Fee</h4></br>
                            <table class="table table-bordered">
                                <thread>
                                    <tr>
                                        <th>Name</th>
                                        <th>NIC</th>
                                        <th>Contact Number</th>
                                        <th>Amount(Rs.)</th>
                                    </tr>
                                </thread>
                                <tbody>

                                    <?php
                                           
                                            $memberCount = 0;
                                            $memberShipIncome = 0;
                                            $filterMonth=$_POST['search'];
                                            $filterYear=$_POST['searchYear'];
                                            $sql = "SELECT ContactNumber,FirstName,LastName,NIC,Amount from payment,member WHERE payment.MemberID = member.MemberID AND Month = '$filterMonth' AND Year = '$filterYear' ";
                                            $getAmount = "SELECT SUM(Amount) from payment,member WHERE payment.MemberID = member.MemberID AND Month = '$filterMonth' AND Year = '$filterYear' ";

                                            

                                            $sql_run = $conn->query($sql);
                                            $getAmount_run = $conn->query($getAmount);
                                            

                                            if($sql_run->num_rows > 0 && $getAmount_run->num_rows > 0)
                                            {   
                                                while($row = $sql_run->fetch_assoc() )
                                                {   $memberCount++;
                                                    ?>
                                                        <tr>
                                                        <td><?php echo $row['FirstName']." ".$row['LastName']; ?></td>
                                                        <td><?php echo $row['NIC']; ?></td>
                                                        <td><?php echo $row['ContactNumber']; ?></td>
                                                        <td><?php echo $row['Amount']; ?></td>
                                                    </tr>
                                                    
                                                    <?php
                                                }
                                                while($row1 = $getAmount_run->fetch_assoc())
                                                {
                                                    ?>
                                                    <tr style="border-style:0;">
                                                    <td colspan="3"><b>Total Amount</b></td>
                                                    <td><b><?php echo $row1['SUM(Amount)']; ?></b></td>
                                                    </tr>

                                                    <?php
                                                        $memberShipIncome = $row1['SUM(Amount)'];
                                                }
                                               
                                            }
                                            else
                                            {
                                                ?>
                                                <tr>
                                                    <td colspan="4">No records Found</td>
                                                </tr>

                                                <?php
                                            }
                                        
                                    ?>
                                </tbody>
                            </table>
                            </br><h4 style="text-align:center;">Monthly Admission Income</h4></br>
                            <table class="table table-bordered">
                                <thread>
                                    <tr>
                                        <th>Name</th>
                                        <th>NIC</th>
                                        <th>Contact Number</th>
                                        <th>Amount(Rs.)</th>
                                    </tr>
                                </thread>
                                <tbody>
                                <?php 
                                    $getAddmission = "SELECT MemberID,Email,FirstName,LastName,NIC,ContactNumber
                                                    FROM member WHERE Month(DateJoined) = '$filterMonth' AND Year(DateJoined) = '$filterYear' ";
                                
                                    $getAddmission_run = $conn->query($getAddmission);

                                            if($getAddmission_run->num_rows > 0)
                                            {   $addmissionSum = 0;
                                            $addmissionCount=0;
                                                while($getAddmission_row = $getAddmission_run->fetch_assoc())
                                                {   $addmissionSum++;
                                                $addmissionCount++;
                                                    ?>
                                                        <tr>
                                                        <td><?php echo $getAddmission_row['FirstName']." ".$getAddmission_row['LastName']; ?></td>
                                                        <td><?php echo $getAddmission_row['NIC']; ?></td>
                                                        <td><?php echo $getAddmission_row['ContactNumber']; ?></td>
                                                        <td><?php echo "1000.00" ?></td>
                                                    </tr>
                                                    
                                                    <?php
                                                }
                                                ?>

                                                <tr style="border-style:0;">
                                                    <td colspan="3"><b>Total Amount</b></td>
                                                    <td><b><?php echo $addmissionSum*1000; ?>.00</b></td>
                                                </tr>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                <tr>
                                                    <td colspan="4">No records Found</td>
                                                </tr>

                                                <?php
                                            }
                            ?>

                            </tbody>
                            </table>

                            <br><br>
                            <h1 align="center">Summary</h1><br><br>
                            <h5>Total Number Of Membership Payments &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $memberCount; ?></h5><br>
                            <h5>Total Number Of Admission Payments &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $addmissionCount; ?></h5><br>
                            <h5>Total Amount &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp Rs. <?php echo $memberShipIncome+($addmissionSum*1000).".00"; ?></h5><br><br><br><br><br>
                            <h5>-----------------------------</h5>
                            <h5>Owner Signature</h5><br><br><br>
                            
                            <div class="noprint">
                            <input type="button" id="rep" value="Print" class="btn btn-info btn_print" onclick="window.print()">
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
         
    </body>
</html>