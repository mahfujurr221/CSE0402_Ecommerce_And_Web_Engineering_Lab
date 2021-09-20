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
                     
                      <li class="nav-item active">
                          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                      </li>
                      
                      <li class="nav-item">
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
   
   
   
   
   
   
   
   
    <!--------------start of banner------------->
    
    
    
    
    <div id="banner" class="mt-5">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide box" data-interval="4000" data-ride="carousel">
                 
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  
                  <div class="carousel-inner">
                    <div class="carousel-item">
                      <img class="d-block w-100" src="./images/Banner/bike_discount.png" alt="First slide">
                    </div>
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="./images/Banner/computer_discount.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="./images/Banner/ac_discount.png" alt="Third slide">
                    </div>
                  </div>
                  
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only banner_arrow">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only banner_arrow">Next</span>
                  </a>
                  
            </div>
        </div>
    </div>
    
    
    
    
     <!--------------end of banner------------>
   
   
   
   
   
   
   
   <!--------------start of Lastest products------------->
    
    
    
    <div id="Lastest_products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Our lastest Products</h3>
                </div>
            </div>

           
               <!-- ------------------- product---------------------->
               
            <div class="row">
               
               
               <!--------------products------------>
               
                <div class="col-md-3 col-sm-4 col-6  wow fadeInLeftBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/watch/w1.jpg" alt="w1" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Smart W1
                                </a>
                            </h5>
                            <p class="card-text">Price: $15</p>
                        </div>
                    </div>
                </div> 
                   
                   
                   <!--------------products------------>
                    
                     <div class="col-md-3 col-sm-4 col-6  wow fadeInLeftBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/shirts/s2.jpg" alt="s1" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Tshirt-1
                                </a>
                            </h5>
                            <p class="card-text">Price: $5</p>
                        </div>
                    </div>
                </div>    
                   
                   <!--------------products------------>
                   
                   
                
                   <!--------------products------------>
                    
                     <div class="col-md-3 col-sm-4 col-6  wow fadeInRightBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/headphones/h1.jpg" alt="w1" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Headphone 1
                                </a>
                            </h5>
                            <p class="card-text">Price: $25</p>
                        </div>
                    </div>
                </div>    
                   
                   <!--------------products------------>
                   
                   
                   
                   <!--------------products------------>
               
                <div class="col-md-3 col-sm-4 col-6  wow fadeInRightBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/watch/w2.jpg" alt="w1" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Smart W2
                                </a>
                            </h5>
                            <p class="card-text">Price: $10</p>
                        </div>
                    </div>
                </div> 
                   
                   
                   <!--------------products------------>
                    
                     <div class="col-md-3 col-sm-4 col-6  wow fadeInLeftBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/shirts/s3.jpg" alt="s1" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Tshirt-2
                                </a>
                            </h5>
                            <p class="card-text">Price: $6</p>
                        </div>
                    </div>
                </div>    
                   
                   <!--------------products------------>
                   
                   
                
                   <!--------------products------------>
                    
                     <div class="col-md-3 col-sm-4 col-6  wow fadeInLeftBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/headphones/h2.jpg" alt="w1" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Headphone 2
                                </a>
                            </h5>
                            <p class="card-text">Price: $15</p>
                        </div>
                    </div>
                </div>    
                   
                   <!--------------products------------>
                   
                   
                   
                   <!--------------products------------>
               
                <div class="col-md-3 col-sm-4 col-6  wow fadeInRightBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/watch/w3.jpg" alt="w3" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Smart W3
                                </a>
                            </h5>
                            <p class="card-text">Price: $17</p>
                        </div>
                    </div>
                </div> 
                   
                   
                   <!--------------products------------>
                    
                     <div class="col-md-3 col-sm-4 col-6  wow fadeInRightBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/shirts/s4.jpg" alt="s1" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Tshirt-4
                                </a>
                            </h5>
                            <p class="card-text">Price: $7</p>
                        </div>
                    </div>
                </div>    
                   
                   <!--------------products------------>
                   
                   
                
                   <!--------------products------------>
                    
                     <div class="col-md-3 col-sm-4 col-6  wow fadeInLeftBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/headphones/h3.jpg" alt="w1" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Headphone 3
                                </a>
                            </h5>
                            <p class="card-text">Price: $22</p>
                        </div>
                    </div>
                </div>    
                   
                   <!--------------products------------>
                  
                   
                    
                     
                      
                <!--------------products------------>
               
                <div class="col-md-3 col-sm-4 col-6  wow fadeInLeftBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/watch/w4.jpg" alt="w4" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Smart W4
                                </a>
                            </h5>
                            <p class="card-text">Price: $12</p>
                        </div>
                    </div>
                </div> 
                   
                   
                   <!--------------products------------>
                    
                     <div class="col-md-3 col-sm-4 col-6  wow fadeInRightBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/shirts/s5.jpg" alt="s5" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Tshirt-5
                                </a>
                            </h5>
                            <p class="card-text">Price: $5</p>
                        </div>
                    </div>
                </div>    
                   
                   <!--------------products------------>
                   
                   
                
                   <!--------------products------------>
                    
                     <div class="col-md-3 col-sm-4 col-6  wow fadeInRightBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/headphones/h5.jpg" alt="w5" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Headphone 5
                                </a>
                            </h5>
                            <p class="card-text">Price: $20</p>
                        </div>
                    </div>
                </div>    
                   
                   <!--------------products------------>       
                
                 
                 <div class="col-md-3 col-sm-4 col-6  wow fadeInLeftBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/watch/w1.jpg" alt="w1" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Smart W1
                                </a>
                            </h5>
                            <p class="card-text">Price: $15</p>
                        </div>
                    </div>
                </div> 
                   
                   
                   <!--------------products------------>
                    
                     <div class="col-md-3 col-sm-4 col-6  wow fadeInLeftBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/shirts/s2.jpg" alt="s1" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Tshirt-1
                                </a>
                            </h5>
                            <p class="card-text">Price: $5</p>
                        </div>
                    </div>
                </div>    
                   
                   <!--------------products------------>
                   
                   
                
                   <!--------------products------------>
                    
                     <div class="col-md-3 col-sm-4 col-6  wow fadeInRightBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/headphones/h1.jpg" alt="w1" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Headphone 1
                                </a>
                            </h5>
                            <p class="card-text">Price: $25</p>
                        </div>
                    </div>
                </div>    
                   
                   <!--------------products------------>
                   
                   
                   
                   <!--------------products------------>
               
                <div class="col-md-3 col-sm-4 col-6  wow fadeInRightBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/watch/w2.jpg" alt="w1" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Smart W2
                                </a>
                            </h5>
                            <p class="card-text">Price: $10</p>
                        </div>
                    </div>
                </div> 
                   
                   
                   <!--------------products------------>
                    
                     <div class="col-md-3 col-sm-4 col-6  wow fadeInLeftBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/shirts/s3.jpg" alt="s1" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Tshirt-2
                                </a>
                            </h5>
                            <p class="card-text">Price: $6</p>
                        </div>
                    </div>
                </div>    
                   
                   <!--------------products------------>
                   
                   
                
                   <!--------------products------------>
                    
                     <div class="col-md-3 col-sm-4 col-6  wow fadeInLeftBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/headphones/h2.jpg" alt="w1" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Headphone 2
                                </a>
                            </h5>
                            <p class="card-text">Price: $15</p>
                        </div>
                    </div>
                </div>    
                   
                   <!--------------products------------>
                   
                   
                   
                   <!--------------products------------>
               
                <div class="col-md-3 col-sm-4 col-6  wow fadeInRightBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/watch/w3.jpg" alt="w3" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Smart W3
                                </a>
                            </h5>
                            <p class="card-text">Price: $17</p>
                        </div>
                    </div>
                </div> 
                   
                   
                   <!--------------products------------>
                    
                     <div class="col-md-3 col-sm-4 col-6  wow fadeInRightBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/shirts/s4.jpg" alt="s1" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Tshirt-4
                                </a>
                            </h5>
                            <p class="card-text">Price: $7</p>
                        </div>
                    </div>
                </div>    
                   
                   <!--------------products------------>
                   
                   
                
                   <!--------------products------------>
                    
                     <div class="col-md-3 col-sm-4 col-6  wow fadeInLeftBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/headphones/h3.jpg" alt="w1" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Headphone 3
                                </a>
                            </h5>
                            <p class="card-text">Price: $22</p>
                        </div>
                    </div>
                </div>    
                   
                   <!--------------products------------>
                  
                   
                    
                     
                      
                <!--------------products------------>
               
                <div class="col-md-3 col-sm-4 col-6  wow fadeInLeftBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/watch/w4.jpg" alt="w4" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Smart W4
                                </a>
                            </h5>
                            <p class="card-text">Price: $12</p>
                        </div>
                    </div>
                </div> 
                   
                   
                   <!--------------products------------>
                    
                     <div class="col-md-3 col-sm-4 col-6  wow fadeInRightBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/shirts/s5.jpg" alt="s5" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Tshirt-5
                                </a>
                            </h5>
                            <p class="card-text">Price: $5</p>
                        </div>
                    </div>
                </div>    
                   
                   <!--------------products------------>
                   
                   
                
                   <!--------------products------------>
                    
                     <div class="col-md-3 col-sm-4 col-6  wow fadeInRightBig mt-3">
                    <div class="card product">
                        <div class="overlay">
                            <a href="ditails.php">
                                <img src="./images/headphones/h5.jpg" alt="w5" class="img-responsive">
                            </a>

                            <div class="inner_overlay">
                                <a href="ditails.php" class="btn  ditails_btn">Ditails</a>
                                <a href="cart.php" class="btn  cart_button">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>cart</span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-text">
                                <a href='ditails.php'>
                                    Headphone 5
                                </a>
                            </h5>
                            <p class="card-text">Price: $20</p>
                        </div>
                    </div>
                </div>    
                   
                   <!--------------products------------>  
                     
                   
                    
             </div>     <!--------------end of  Lastest products------------>
                  
                


        </div>
    </div>
      
    
    
     <!--------------end of  Lastest products------------>
     
     
     <nav aria-label="Page navigation example" class="mb-5">
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
        include("includes/footer.php")
      
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