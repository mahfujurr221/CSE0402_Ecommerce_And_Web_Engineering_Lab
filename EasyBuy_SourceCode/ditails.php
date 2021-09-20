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
                      
                      <li class="nav-item active">
                          <a class="nav-link" href="shop.php">Shop</a>
                      </li>
                      
                      <li class="nav-item">
                          <a class="nav-link" href="customers/my_account.php">My Account</a>
                      </li>
                      
                      <li class="nav-item">
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
     
     <div id="content" class="product-ditails">
         <div class="container">
                 <div class="col-md-12">
                     <ul class="breadcrumb">
                         <li><a href="index.php">Home</a></li>
                         <li>Shop</li>
                     </ul>
                 </div>
                <div class="row">
                    
                    <div class="col-md-3">
                     <div class="card">
                         <div class="card-body">
                            <h5 class="card-title">Product Categories</h5>
                             <ul class="nav flex-column categories">
                                 <li class="nav-item">
                                     <a class="nav-link mt-1"  href="tshirt.php">T-shirts</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link mt-1"  href="watch.php">Watch</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link mt-1"  href="headphone.php">Headphones</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link mt-1"  href="pants.php">Pants</a>
                                 </li>
                             </ul>
                         </div>
                     </div>

                     <div class="card mt-4">
                         <div class="card-body">
                            <h5 class="card-title">Categories</h5>
                             <ul class="nav flex-column">
                                 <li class="nav-item">
                                     <a class="nav-link mt-1"  href="men.php">Men</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link mt-1"  href="Women.php">Women</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link mt-1"  href="kids.php">Kids</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link mt-1"  href="others.php">Others</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                     
                 </div>
                 
                    
                <div class="col-md-9 ditails mt-5">
                     <div class="row">
                         <div class="col-md-6">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                  <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                  </ol>
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img class="d-block w-100" src="images/shirts/s5.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="images/shirts/s5.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="images/shirts/s5.jpg" alt="Third slide">
                                    </div>
                                  </div>
                                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                            </div> 
                         </div>
                         
                         <div class="col-md-6 ">
                             <div class="card">
                                  <div class="card-header text-center">
                                    <h2>Just Do It T-shirt</h2>
                                  </div>
                                  <div class="card-body">
                                    <form action="ditails.php" class="form-horizontal" method="post">
                                        <div class="form-group row">
                                            <label for="" class="col-md-5 control-label" >
                                                <h5>Quantity:</h5>
                                            </label>
                                            
                                            <div class="col-md-7">
                                                <select name="product-quantity" class="form-control">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="" class="col-md-5 control-label" >
                                                <h5>Size:</h5>
                                            </label>
                                            
                                            <div class="col-md-7">
                                                <select name="product-quantity" class="form-control">
                                                    <option value="Small">Small</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="Large">Large</option>
                                                    <option value="Extra_Large">Extra Large</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <p class="text-center price">Price: 6$</p>
                                         
                                          <div class="cart text-center">
                                              <a href="cart.php" class="btn cart_button">
                                                 <i class="fa fa-shopping-cart"></i>
                                                 <span>Add to Cart</span>
                                              </a>
                                          </div>                                    
                                    </form>
                                    
                                  </div>
                            </div>
                            
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <img src="images/shirts/s5.jpg" alt="s3" class="img-responsive" height="100" width="100" data-target="#carouselExampleIndicators" data-slide-to="0">
                                </div>
                                <div class="col-md-4">
                                    <img src="images/shirts/s5.jpg" alt="s3" class="img-responsive" height="100" width="100" data-target="#carouselExampleIndicators" data-slide-to="1">
                                </div>
                                <div class="col-md-4">
                                    <img src="images/shirts/s5.jpg" alt="s3" class="img-responsive" height="100" width="100" data-target="#carouselExampleIndicators" data-slide-to="2">
                                </div>
                            </div>
                         </div>                                                 
                     </div><!--end of inner row-->
                     
                     <div class="col-md-12 mt-3">
                         <h3>More About This product:</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos dolorem quisquam consequuntur cum, modi officia facilis rem reiciendis, enim reprehenderit sequi, minus deserunt. Nostrum facilis incidunt, odit, quam nobis ullam.</p>
                     </div>
                 </div>
                    
                </div> <!--end of outer row-->   
             
             
        
         </div><!--container-->
     </div>
     
     
    <!--------------End of breadcrub------------->
     
     
    <nav aria-label="Page navigation example" class="mb-5 mt-3">
      <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
     
     
     
     
     
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