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
                      <a href="customer_register.php">Register</a>
                  </li>
                  <li>
                      <a href="customers/my_account.php">My Account</a>
                  </li>
                  <li>
                      <a href="cart.php">Cart</a>
                  </li>
                  <li>
                      <a href="cheakout.php">Login</a>
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
                          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                      </li>
                      
                      <li class="nav-item ">
                          <a class="nav-link" href="shop.php">Shop</a>
                      </li>
                      
                      <li class="nav-item">
                          <a class="nav-link" href="customers/my_account.php">My Account</a>
                      </li>
                      
                      <li class="nav-item active">
                          <a class="nav-link" href="cart.php">Shopping Cart</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="contact.php">Contact Us</a>
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
                         <li>Cart</li>
                     </ul>
                 </div>
                 
                 <div class="row">
                     <div id="cart" class="col-md-9">
                         <div class="box">
                             <form action="cart.php" method="post" enctype="multipart/form-data">
                                 <h2 class=" ml-3 mt-3">Shopping Cart</h2>
                                 <p class="text-muted ml-3 mt-0 mb-3">You curently have 3 items in your cart</p>

                                 <div class="table-responsive">
                                     <table class="table">
                                         <thead>
                                             <tr>
                                                 <th colspan="2">Product</th>
                                                 <th>Quantity</th>
                                                 <th>Unit Price</th>
                                                 <th>Size</th>
                                                 <th colspan="1">Delete</th>
                                                 <th colspan="2">Sub-total</th>

                                             </tr>
                                         </thead>

                                         <tbody>
                                             <tr> 
                                                 <td>
                                                    <a href="ditails.php">
                                                         <img src="images/shirts/s10.jpg" alt="s10" class="img-responsive">
                                                     </a>
                                                 </td>
                                                 <td><span><a href="ditails.php">T-shirt</a></span></td>
                                                 <td><span>2</span></td>
                                                 <td><span>$6</span></td>
                                                 <td><span>Large</span></td>
                                                 <td><input type="checkbox" name="remove"></td>
                                                 <td><span>$12</span></td>
                                             </tr>

                                             <tr> 
                                                 <td>
                                                    <a href="ditails.php">
                                                         <img src="images/watch/w5.png" alt="w5" class="img-responsive">
                                                     </a>
                                                 </td>
                                                 <td><span><a href="ditails.php">Smart W5</a></span></td>
                                                 <td><span>1</span></td>
                                                 <td><span>$25</span></td>
                                                 <td><span>Medium</span></td>
                                                 <td><input type="checkbox" name="remove"></td>
                                                 <td><span>$25</span></td>
                                             </tr>

                                             <tr> 
                                                 <td>
                                                    <a href="ditails.php">
                                                         <img src="images/headphones/h3.jpg" alt="h3" class="img-responsive">
                                                     </a>
                                                 </td>
                                                 <td><span><a href="ditails.php">HP-3</a></span></td>
                                                 <td><span>1</span></td>
                                                 <td><span>$40</span></td>
                                                 <td><span>Small</span></td>
                                                 <td><input type="checkbox" name="remove"></td>
                                                 <td><span>$40</span></td>
                                             </tr>
                                         </tbody>

                                         <tfoot>
                                             <tr>
                                                 <td colspan="5">Total</td>
                                                 <td colspan="2">$100</td>
                                             </tr>
                                         </tfoot>
                                     </table>
                                 </div>

                                 <div class="box-footer p-3">
                                     <div class="row">
                                         <div class="col-md-3">
                                             <a href="index.php" class="btn btn-success">
                                                 <i class="fa fa-chevron-left"></i>Continue Shopping
                                             </a>
                                         </div>

                                         <div class="col-md-3"></div>

                                         <div class="col-md-3">
                                             <button type="submit" value="update cart" name="update" class="btn btn-secondary">
                                                 <i class="fa fa-refresh"></i>Update Cart
                                             </button>
                                         </div>
                                         <div class="col-md-3 ">
                                             <button type="submit" value="update cart" name="update" class="btn cart_button">
                                                 <span>Procceed Checkout</span><i class="fa fa-chevron-right ml-1"></i>
                                             </button>
                                         </div>

                                     </div>
                                 </div><!--end of box-footer-->
                             </form>
                         </div>
                     </div><!--end of col-md-9-->

                     <div class="col-md-3">
                         <div class="box p-3">
                             <div class="box-header">
                                 <h4>Order Summary</h4>
                             </div>
                             <p class="text-muted">Shipping and additional costs are calculated based on value you have entered</p>

                             <div class="table-responsive">
                                 <table class="table">
                                     <tbody>
                                         <tr>
                                             <th>Order Sub-total</th>
                                              <td>$100</td>
                                         </tr>
                                         <tr>
                                             <th>Shipping and hadling</th>
                                              <td>$0</td>
                                         </tr>
                                         <tr>
                                             <th>Tax</th>
                                              <td>$0</td>
                                         </tr>
                                         <tr>
                                             <th>Total</th>
                                              <td>$102</td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
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