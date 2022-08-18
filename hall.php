<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Home</title>
    <link rel = "icon" href ="img/LogoEdited.png" type = "image/x-icon">
<style>

body{
    font-family: montserrat;
    background-color:white; 
    background-size: cover;
    height: calc(100vh - 80px);
}
.container{
    width: 80%;
    margin: 0 auto;
    padding: 1%;
}
.img-responsive{
    width: 100%;

}
.img-curve{
    border-radius: 15px;
}

.text-right{
    text-align: right;
}
.text-centers{
    text-align: center;
    color: black;
}

.text-left{
    text-align: left;
}
.text-white{
    color: white;
}

.clearfix{
    clear: both;
    float: none;
}

a:hover{
    color: #ff4757;
}

/* CSS for Categories */
.categories{
    padding: 4% 0;
}

.box-3{
    width: 28%;
    float: left;
    margin: 2%;
}


/* CSS for Food Menu */
.food-menu{
     
    padding: 2% 0;
}
.food-menu-box{
    width: 48%;
    margin: 1%;
    padding: 2%;
    float: left;
    background-color: #FFEFD5;
    border-radius: 15px;
}


.food-menu-img{
    width: 20%;
    float: left;
}

.food-menu-desc{
    width: 70%;
    float: left;
    margin-left: 8%;
}

.food-price{
    font-size: 1.2rem;
    margin: 2% 0;
}
.food-detail{
    font-size: 1rem;
    color: #747d8c;
}

.food-menuitem-box{
    width: 48%;
    margin: 1%;
    padding: 2%;
    float: left;
    background-color: #BC8F8F;
    border-radius: 15px;
}

</style>

  </head>
<body>
  <?php include 'partials/_dbconnect.php';?>
  <?php require 'partials/_nav.php' ?>
  <?php include 'partials/_bookingModal.php';?>
  
  
  <section class="food-menu">
        <div class="container">
            <h2 class="text-centers">For Your Special Day..!</h2>
            <br>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="img/Recep1.jpg" alt="Red Diamond" class="img-responsive img-curve" >
                </div>

                <div class="food-menu-desc">
                    <h4>Red Diamond</h4>
                    <p class="food-price">LKR 100000.00</p>
                    <br>
                    <button style = "text-align: right;" class="btn btn-success mx-2" data-toggle="modal" data-target="#bookingModal" data-hall = "Royal" data-price = "70000">Book Hall</button>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="img/Recep2.jpg" alt="Royal" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Royal</h4>
                    <p class="food-price">LKR 70000.00</p>
                    <br>
                    <button class="btn btn-success mx-2" data-toggle="modal" data-target="#bookingModal" data-hall = "Summer" data-price = "55000">Book Hall</button>
                
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="img/Recep3.webp" alt="Solis" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Solis</h4>
                    <p class="food-price">LKR 60000.00</p>
                    <br>
                    <button class="btn btn-success mx-2" data-toggle="modal" data-target="#bookingModal" data-hall = "Solis" data-price = "60000">Book Hall</button>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="img/Recep4.jpg" alt="Horizon" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Horizon</h4>
                    <p class="food-price">LKR 40000.00</p>
                    <br>
                    <button class="btn btn-success mx-2" data-toggle="modal" data-target="#bookingModal" data-hall = "Horizon" data-price = "40000">Book Hall</button>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="img/Recep5.jpg" alt="Summer" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Summer</h4>
                    <p class="food-price">LKR 55000.00</p>
                    <br>
                    <button class="btn btn-success mx-2" data-toggle="modal" data-target="#bookingModal" data-hall = "Summer" data-price = "55000">Book Hall</button>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="img/Recep6.jpg" alt="Navro" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Navro</h4>
                    <p class="food-price">LKR 50000.00</p>
                    <br>
                    <button style = "text-align: right;" class="btn btn-success mx-2" data-toggle="modal" data-target="#bookingModal" data-hall = "Royal" data-price = "70000">Book Hall</button>
                </div>
            </div>





            <div class="food-menuitem-box">
               

                <div class="food-menu-desc">
                    <h3>Manu 01</h3>
                    <p class="food-price">Fried rice</p>
                    <p class="food-price">Veg Rice</p>
                    <p class="food-price">Veg Rice</p>
                    <p class="food-price">Chicken Rice</p>
                    <p class="food-price">Mutton rice</p>
                    <p class="food-price">Fish rice</p>
                    <p class="food-price">Prawn Rice</p>
                    <p class="food-price">Mixed Rice</p>
                    <p class="food-price">Fried noodles</p>
                    <p class="food-price">Veg noodles</p>
                    <p class="food-price">Prawn noodles</p>
                    <p class="food-price">Tandoori Chicken</p>
                    <p class="food-price">Reshmi kabab</p>
                    <p class="food-price">Fish tikka</p>
                    <p class="food-price">Dhaal curry</p>
                    <p class="food-price">Cutlets</p>
                    <p class="food-price">Cucumber salad</p>
                    <br>
                    <h3>Desserts</h3>
                    <p class="food-price">Ice Cream(Chocolate & Vanilla)</p>
                    <p class="food-price">Pudding</p>
                    <p class="food-price">Jelly mix</p>
                    <p class="food-price">Watalappan</p>
                    <br>
                    
                </div>
            </div>

            <div class="food-menuitem-box">
               

               <div class="food-menu-desc">
               <h3>Manu 01</h3>
                    <p class="food-price">Fried rice</p>
                    <p class="food-price">Veg Rice</p>
                    <p class="food-price">Veg Rice</p>
                    <p class="food-price">Chicken Rice</p>
                    <p class="food-price">Mutton rice</p>
                    <p class="food-price">Fish rice</p>
                    <p class="food-price">Mixed Veg Rice</p>
                    <p class="food-price">Mixed Rice</p>
                    <p class="food-price">Fried noodles</p>
                    <p class="food-price">Veg noodles</p>
                    <p class="food-price">Green Salad</p>
                    <p class="food-price">Fried Egg</p>
                    <p class="food-price">Reshmi kabab</p>
                    <p class="food-price">Fish tikka</p>
                    <p class="food-price">Dhaal curry</p>
                    <p class="food-price">Cutlets</p>
                    <p class="food-price">Masala Omlet</p>
                    <br>
                    <h3>Desserts</h3>
                    <p class="food-price">Ice Cream(Chocolate & Vanilla)</p>
                    <p class="food-price">Pudding</p>
                    <p class="food-price">Jelly mix</p>
                    <p class="food-price">Watalappan</p>
                    <br>
                   
               </div>
           </div>

           <div class="food-menuitem-box">
               

               <div class="food-menu-desc">
               <h3>Manu 01</h3>
                    <p class="food-price">Fried rice</p>
                    <p class="food-price">Veg Rice</p>
                    <p class="food-price">Veg Rice</p>
                    <p class="food-price">Chicken Rice</p>
                    <p class="food-price">Mutton rice</p>
                    <p class="food-price">Fish rice</p>
                    <p class="food-price">Prawn Rice</p>
                    <p class="food-price">Mixed Rice</p>
                    <p class="food-price">Fried noodles</p>
                    <p class="food-price">Veg noodles</p>
                    <p class="food-price">Masala Omlet</p>
                    <p class="food-price">Tandoori Chicken</p>
                    <p class="food-price">Onion Salad</p>
                    <p class="food-price">Chicken devel</p>
                    <p class="food-price">Dhaal curry</p>
                    <p class="food-price">Cutlets</p>
                    <p class="food-price">Cucumber salad</p>
                    <br>
                    <h3>Desserts</h3>
                    <p class="food-price">Ice Cream(Chocolate & Vanilla)</p>
                    <p class="food-price">Pudding</p>
                    <p class="food-price">Jelly mix</p>
                    <p class="food-price">Watalappan</p>
                    <br>
                   
               </div>
           </div>







            <div class="clearfix"></div>


        </div>

    </section>


    <?php require 'partials/_footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
</body>
</html>