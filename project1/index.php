<?php 
      $y_one=300;
      $x=10.25;
      $name='a150';
      $b=true;
      $b2=false;
      $cur='L.E'; 
      $products=['product1','product2','product3'];
      $users=array('user1','user2','user3','user4');


    $res=$y_one+$x;// Add Two numbers
  
    echo $res.'<br />';
    $res=$y_one-$x;// sub two numbers
    echo $res . '<br />';

    $res=$y_one*$x;

    echo $res.'<br />';

    $res=$y_one/$x;/*  mult
                            two 
                                 numbers  
    
                                   */
                       # hshhsgdsgds dv  hhhh


$res=($y_one -10+20*5) * 15/3;



    





?>
<!doctype html>
<html>
       <head>
             <title><?php echo 'Home page-Ecommerce Websiet'?></title>
             <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
             <link rel="stylesheet" href="./assets/css/style.css">

             <link rel="stylesheet" href="./assets/fontawesome/css/<?php echo 'all.min.css'?>">
             <meta name="keyword" content="">
           


        </head>
        <body>
                 <header>
                    <div class="logo">
                           <img src="./assets/images/logo.png">
                    </div>
                    
                    <nav >
                        <ul>
                            <li>
                                <a href="/"> home page</a>
                            </li>
                            <li>
                              <a href="./about.html"> About</a>
                            </li>
                            <li>
                               <a href="./products.html"> Products</a>
                            </li>
                            <li>
                               <a href="./contact.html"> Contact</a>
                            </li>
                            <li>
                               <a href="./join.html"> Login</a>
                            </li>
                            </ul>
                    </nav>

                    <div class="social">
                        <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>   
                    </div>
              


                </header>
<section>   
    <!-- Start Slider -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./assets/images/1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./assets/images/1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./assets/images/1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- End slider-->


      <!-- -->
        <h2><?php echo 'Our Products';   ?></h2>
      <div class="products">
        <div class="card" style="width: 18rem;">
            <img src="./assets/images/pro1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php print 'Product one' ?></h5>
              <h5>Price:<?php echo   $res.$cur;?></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Add To Cart</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="./assets/images/pro1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product 1</h5>
              <>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Add To Cart</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="./assets/images/pro1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product 1</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Add To Cart</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="./assets/images/pro1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product 1</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Add To Cart</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="./assets/images/pro1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product 1</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Add To Cart</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="./assets/images/pro1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product 1</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Add To Cart</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="./assets/images/pro1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product 1</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Add To Cart</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="./assets/images/pro1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product 1</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Add To Cart</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="./assets/images/pro1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product 1</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Add To Cart</a>
            </div>
          </div>




          




    </div>
<h2><?php echo 'Our Services'; ?></h2>
    <div class='services'>
    <!-- <form class="formlog" method="post" action="loginVal.php">
    <h3>Email:</h3>
    <input type="email" placeholder="enter email" name="email"/> <br/>
    <h3>Password:</h3>
    <input type="password" placeholder="enter password" name="pass"/><br/>
    <input type="submit" value="login" />
</form> -->





  </div>

           
<hr/>
</section>


<footer>
<div class="foooter">
        <div class="container">
            <div class="row f-1">
                <div class="col-3 f-1-1">
                    <p>Firmament morning sixth subdue darkness creeping gathered divide.</p> 
                    <button> <i class="fa-brands fa-facebook"></i></button>   
                    <button> <i class="fa-brands fa-twitter"></i></button>   
                    <button> <i class="fa-brands fa-instagram"></i></button>   
                 </div>
                <div class="col-3 f-1-2">
                    <h2>Departments</h2>
                    <a href="#">Eye Care </a>    
                    <a href="#">Skin Care </a>    
                    <a href="#">Pathology </a>    
                    <a href="#">Medicne </a>    
                    <a href="#">Dental </a>    
                 </div>
                <div class="col-3 f-1-2">
                <h2>Useful Links</h2>
                    <a href="#">About</a>    
                    <a href="#">Blog </a>    
                    <a href="#">About </a>    
                    <a href="#">Contact </a>    
                    <a href="#">Appointment </a>  
                </div>
                <div class="col-3 f-1-2">
                    <h2>Adress</h2>
                    <p>200, D-block, Green lane USA <br/> +10 367 467 8934 <br/> docmed@contact.com</p>
                 </div>
            </div>
        </div>
    </div>

</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
        </body>












</html>
