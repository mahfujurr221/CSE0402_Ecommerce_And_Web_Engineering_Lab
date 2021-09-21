<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bellota:400,400i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="css/style.css">

    <title>eeasybuy.com</title>
  </head>
  <body>

  <!-------------Start of top bar------------->
  
   <div id="top">
       <div class="container">
           <div class="row">
               <div class="col-md-6 top_left">
               <a href="#" class="btn btn-success btn-sm">Welcome</a>
               <a href="cheakout.php">4 Items In Your Cart | Total Price: $500</a>
           </div>
           
           <div class="col-md-6">
              <ul class="menu">
                  <li>
                      <a href="../customer_register.php">Register</a>
                  </li>
                  <li>
                      <a href="customers/my_account.php">My Account</a>
                  </li>
                  <li>
                      <a href="../cart.php">Cart</a>
                  </li>
                  <li>
                      <a href="../cheakout.php">Login</a>
                  </li>
              </ul>
           </div>
           </div>
       </div>
   </div>
   
   
   <!--------------end of top bar------------->
   
   
   
   
   
   <!--------------start of menu------------->
   
   <div id="navbar" >
       <div class="container">
          
           <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand logo" href="index.php" title="Home">EeasyBuY</a>
              
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse" id="navigation">
                  <ul class="navbar-nav">
                     
                      <li class="nav-item ">
                          <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                      </li>
                      
                      <li class="nav-item">
                          <a class="nav-link" href="../shop.php">Shop</a>
                      </li>
                      
                      <li class="nav-item active">
                          <a class="nav-link" href="customers/my_account.php">My Account</a>
                      </li>
                      
                      <li class="nav-item">
                          <a class="nav-link" href="../cart.php">Shopping Cart</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="../contact.php">Contact Us</a>
                      </li>
                      
                  </ul>
              </div>
              
              <div class="form">
                  <form method="get" action="result.php" class="form-inline py-2 my-2 my-lg-0">
                      <input type="text" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="user_query" required>
                      <button class="btn my-2 my-sm-0 mr-3 ml-0" type="submit" value="search">
                          <i class="fa fa-search"></i>  
                      </button>
                  </form>
              </div>
             
             
              <div class="cart">
                  <a href="cart.php" class="btn navbar-btn cart_button">
                     <i class="fa fa-shopping-cart"></i>
                     <span>4 Items in your cart</span>
                  </a>
              </div>
              
            
              
            </nav>
       </div>
   </div>
   
   <!--------------end of menu------------->
   
     
     
   <!--------------start of breakcrub------------->
     
     <div id="content">
         <div class="container">
                 <div class="col-md-12">
                     <ul class="breadcrumb">
                         <li><a href="index.php">Home</a></li>
                         <li>My Account</li>
                     </ul>
                 </div>
                   
                <div class="row">
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                          <img src="customers_img/profile.jpg" class="card-img-top" alt="customer_1">
                          <h4 class="card-title text-center">Name: Zaki</h4>
                          
                          <div class="card-body">
                            <ul class="nav nav-pills flex-column nav-tabs">
                                <li class="<?php if(isset($_GET['my_orders'])){ echo "active"; } ?> nav-item">
                                    <a href="my_account.php?my_orders" class="nav-link">
                                        <i class="fa fa-list"></i>My Orders
                                    </a>
                                </li>
                                <li class="<?php if(isset($_GET['pay_offline'])){ echo "active"; } ?> nav-item">
                                    <a href="my_account.php?pay_offline" class="nav-link">
                                        <i class="fa fa-bolt"></i>Pay Offline
                                    </a>
                                </li>
                                <li class="<?php if(isset($_GET['edit_account'])) {echo "active";} ?> nav-item">
                                    <a href="my_account.php?edit_account" class="nav-link">
                                        <i class="fa fa-edit"></i>Edit Account
                                    </a>
                                </li>
                                <li class="<?php if(isset($_GET['change_password'])) {echo "active";} ?> nav-item">
                                    <a href="my_account.php?change_password" class="nav-link">
                                        <i class="fa fa-user"></i>Change Password
                                    </a>
                                </li>
                                <li class="<?php if(isset($_GET['delate_account'])) {echo "active";} ?> nav-item">
                                    <a href="my_account.php?delate_account" class="nav-link">
                                        <i class="fa fa-delete"></i>Delate Account
                                    </a>
                                </li>
                            </ul>
                          </div>
                        </div>
                    </div>
                    
                    <div class="col-md-9 text-center">
                        <h1> This page is under construction</h1>
                    </div>
                </div>
         </div><!--container-->
     </div>
     
     
    <!--------------End of breadcrub------------->
     
     
     
     
     
     
     <!--------------start of Footer------------->
     
     
     <?php  
        include("includes/footer.php");
      
      ?>
     
     
     
     
     
     <!--------------End of footer------------->
     
     
     
     
     
   
   <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="https://kit.fontawesome.com/4079367082.js" crossorigin="anonymous"></script>
    
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="js/script.js"></script>
    
    
  </body>
</html>