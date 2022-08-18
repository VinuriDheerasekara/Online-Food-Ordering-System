<?php
    include "dbCon.php";

    $url = "dsgym.epizy.com";
?>

<html>
    <head>
        <title>D's Gym - Reports</title>
        <link rel="icon" type="image/png" href="http://<?php echo $url; ?>/Final%20Project/images/logo.png">
        <link rel="stylesheet" href="http://<?php echo $url; ?>/Final%20Project/CSS/reportDesign.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://kit.fontawesome.com/8e5cb1bab9.js" crossorigin="anonymous"></script> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    </head>
    <body>
    <div class="back-btn">
            <i class="fa fa-chevron-left" ></i>
            <a href="http://<?php echo $url; ?>/Final%20Project/PHP/AdminHome.php">BACK</a>
    </div>

    <div class="report-form"> 
        <h1>Monthly Membership Income Report</h1>                
        <form action="MonthlyIncomeReportView.php" method="POST" onsubmit="return checkReport();">
         
        <div class="form-control">  
        <select  id="search" name="search">
            <option selected disabled value="">choose a month...</option>
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>
        <small id="monthsmall"></small>
        </div>
        <div class="form-control">
        <select  id="searchYear" name="searchYear">
        <option selected disabled value="">choose a year...</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
        <option value="2025">2025</option>
        <option value="2026">2026</option>
        </select>
        <small id="yearsmall"></small>
        </div>
    <div class="card-body"  id="print-container">
        <input type="submit" id="rep" value="GENERATE REPORT" class="btn btn-info btn_print">
    </div>
    
    </form>
    </div>
    </body>
    <script type="text/javascript" src="http://<?php echo $url; ?>/Final%20Project/JS/Report.js"></script>
</html>