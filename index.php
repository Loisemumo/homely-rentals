<?php
  require 'config/config.php';
  $data = [];
  
  if(isset($_POST['search'])) {
    //Get data from FORM
    //$keywords = $_POST['keywords'];
    $location = $_POST['location'];
    $number_of_bedrooms = $_POST['number_of_bedrooms'];
    $apartment_type = $_POST['apartment_type'];
    $number_of_bathrooms = $_POST['number_of_bathrooms'];
    $price = $_POST['price'];

    //keywords based search
    //$keyword = explode(',', $keywords);
    //$concats = "(";
    //$numItems = count($keyword);
    //$i = 0;
    //foreach ($keyword as $key => $value) {
     // # code...
     // if(++$i === $numItems){
        // $concats .= "'".$value."'";
     // }else{
        //$concats .= "'".$value."',";
    //  }
   // }
   // $concats .= ")";
  //end of keywords based search

  
  //number_of_bedrooms based search
    $number_of_bedrooms = explode(',', $number_of_bedrooms);
    $concats = "(";
    $numItems = count($number_of_bedrooms);
    $i = 0;
    foreach ($number_of_bedrooms as $key => $value) {
      # code...
      if(++$i === $numItems){
         $concats .= "'".$value."'";
      }else{
        $concats .= "'".$value."',";
      }
    }
    $concats .= ")";
  //end of number_of_bedrooms based search


  //number_of_bathrooms based search
  $number_of_bathrooms = explode(',', $number_of_bathrooms);
  $concats = "(";
  $numItems = count($number_of_bathrooms);
  $i = 0;
  foreach ($number_of_bathrooms as $key => $value) {
    # code...
    if(++$i === $numItems){
       $concats .= "'".$value."'";
    }else{
      $concats .= "'".$value."',";
    }
  }
  $concats .= ")";
  //end of number_of_bathrooms based search


  //apartment_type based search
  $apartment_type = explode(',', $apartment_type);
  $concats = "(";
  $numItems = count($apartment_type);
  $i = 0;
  foreach ($apartment_type as $key => $value) {
    # code...
    if(++$i === $numItems){
       $concats .= "'".$value."'";
    }else{
      $concats .= "'".$value."',";
    }
  }
  $concats .= ")";
  //end of apartment_type based search


  //price based search
  $prices = explode(',', $price);
  $concats = "(";
  $numItems = count($prices);
  $i = 0;
  foreach ($prices as $key => $value) {
    # code...
    if(++$i === $numItems){
       $concats .= "'".$value."'";
    }else{
      $concats .= "'".$value."',";
    }
  }
  $concats .= ")";
  //end of price based search


  //location based search
    $locations = explode(',', $location);
    $concats = "(";
    $numItems = count($locations);
    $i = 0;
    foreach ($locations as $key => $value) {
      # code...
      if(++$i === $numItems){
         $concats .= "'".$value."'";
      }else{
        $concats .= "'".$value."',";
      }
    }
    $concats .= ")";

    $locations = explode(',', $location);
    $loc = "(";
    $numItems = count($locations);
    $i = 0;
    foreach ($locations as $key => $value) {
      # code...
      if(++$i === $numItems){
         $loc .= "'".$value."'";
      }else{
        $loc .= "'".$value."',";
      }
    }
    $loc .= ")";


  //end of location based search
    
    try {
      //foreach ($keyword as $key => $value) {
        # code...

        $stmt = $connect->prepare("SELECT * FROM house_registrations WHERE place IN $concats OR place IN $loc  OR number_of_bedrooms IN $concats OR apartment_type IN $concats  OR price IN $concats OR number_of_bathrooms IN $concats");
        $stmt->execute();
        $data2 = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //$stmt = $connect->prepare("SELECT * FROM house_registrations WHERE place IN $concats OR place IN $loc  OR number_of_bedrooms IN $concats OR apartment_type IN $concats OR apartment_name IN $concats OR price IN $concats OR number_of_bathrooms IN $concats");
        //$stmt->execute();
        //$data8 = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $data = $data2;

    }catch(PDOException $e) {
      $errMsg = $e->getMessage();
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>App</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="assets/css/rent.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/more.css" rel="stylesheet">
  </head>

  <body id="page-top" style='background-color: #d0e9c2;'>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
           
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#search">Search</a>
            </li>
            
            <?php 
              if(empty($_SESSION['username'])){
                echo '<li class="nav-item">';
                  echo '<a class="nav-link" href="./auth/login.php">Login</a>';
                echo '</li>';
              }else{
                echo '<li class="nav-item">';
                 echo '<a class="nav-link" href="./auth/dashboard.php">Home</a>';
               echo '</li>';
              }
            ?>
            

            <li class="nav-item">
              <a class="nav-link" href="./auth/register.php">Register</a>
            </li>

          
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead" style='background-image: url("app/uploads/heading-bg.jpg"); background-size: cover; -webkit-background-size: cover;'>
    
      <div class="container" >
        <div class="intro-text">
        <!-- <img src= "app/uploads/heading-bg.jpg" alt=""> -->
          <div class="intro-lead-in" style='color:orange;'>Homely!<br>Find Your Perfect Place To Live </div>
        </div>
      </div>
    </header>

     <!-- Search -->
    <section id="search">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Search</h2>
            <h3 class="section-subheading text-muted">Search for your dream home.</h3>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-20">
            <form action="" method="POST" class="left" novalidate>
                <div class="row">
                

                <div class="col-md-2">
                  <div class="form-group">
                    <select class="form-control" id="apartment_type" type="text" name="apartment_type" placeholder="Apartment Type" required data-validation-required-message="Please enter apartment_type">
                    <option value="bedsitter">Type: Bedsitter</option>
                    <option value="1 bedroom">Type:1 Bedroom</option>
                    <option value="2 bedroom">Type:2 Bedroom</option>
                    </select>
                    <p class="help-block text-danger"></p>
                  </div>
                </div> 
                 
                <div class="col-md-3">
                  <div class="form-group">
                    <input class="form-control" id="price" type="text" name="price" placeholder="Enter Price" required data-validation-required-message="Please enter price">
                    <div class="price-input">
                    <div class="field">
                      <span>Min</span>
                      <input type="number" class="input-min" value="5000">
                    </div>
                    <div class="separator">-</div>
                    <div class="field">
                      <span>Max</span>
                      <input type="number" class="input-max" value="30000">
                    </div>
                   <p class="help-block text-danger"></p>
                    </div>
                  </div>
               <!-- <div class="slider" style='height: 5px; border-radius: 5px;background: #ddd; border-radius: 5px; position: relative;'> 
                    <div class="progress" style='height: 5px; border-radius: 5px; position: absolute; left:15%; right:15%; display: flex; align-items: center; justify-content: center;background: greenyellow;'></div>
                  </div>
                  <div class="range-input" >
                    <input type="range" class="range-min" min="0" max="32000" value="5000" step="100" >
                    <input type="range" class="range-max" min="0" max="32000" value="30000" step="100">
                  </div> -->

                </div>  

                <div class="col-md-3">
                  <div class="form-group">
                    <select class="form-control" id="number_of_bedrooms" type="text" name="number_of_bedrooms" placeholder="Number of Bedrooms" required data-validation-required-message="Please enter number_of_bedrooms">
                    <option value="1">no. of bedroom(s): 1</option>
                    <option value="2">no. of bedroom(s):2</option>
                  </select>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>  

                <div class="col-md-2">
                  <div class="form-group">
                    <select class="form-control" id="number_of_bathrooms" type="text" name="number_of_bathrooms" placeholder="Number of Bathrooms" required data-validation-required-message="Please enter number_of_bathrooms">
                    <option value="1">bathroom(s): 1</option>
                    <option value="2">bathroom(s): 2</option>
                    </select>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>  

                <div class="col-md-2">
                  <div class="form-group">
                    <select class="form-control" id="location" type="text" name="location" placeholder="Location" required data-validation-required-message="Please enter location">
                    <option value="Juja">Location: Juja</option>
                    <option value="Kahawa">Kahawa</option>
                    <option value="Kenyatta Road">Kenyatta Road</option>
                    <option value="Thika">Thika</option>
                    <option value="Waitethie">Waitethie</option>
                    </select>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
        </div>         

                <div class="col-md-2">
                  <div class="form-group">
                    <button id="" class="btn btn-success btn-md text-uppercase" name="search" value="search" type="submit">Search</button>
                  </div>
                </div>
              </div>
            </form>

            <?php
              if(isset($errMsg)){
                echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
              }
              if(count($data) !== 0){
                echo "<h2 class='text-center' style='color:green;'>Results : </h2>";
              }else{
                //echo "<h2 class='text-center' style='color:red;'>Try Some other keywords</h2>";
              }
            ?>        
            <?php 
                foreach ($data as $key => $value) {           
                  echo '<div class="card card-inverse card-info mb-3" style="padding:1%;">          
                        <div class="card-block">';
                          // echo '<a class="btn btn-warning float-right" href="update.php?id='.$value['id'].'&act=';if(isset($value['ap_number_of_plats'])){ echo "ap"; }else{ echo "indi"; } echo '">Edit</a>';
                         echo   '<div class="col-20"  style="background-color:pale pink;">
                            
                            <h6 class="text-center">House Details</h6>';
                            if ($value['image'] !== 'uploads/') {
                              # code...
                              echo '<img src="app/'.$value['image'].'" width="300" height="250">';
                              echo '<p><h2>'.$value['apartment_type'].'</h2></p>';
                              echo '<p><h2><i>'.$value['apartment_name'].'</i></h2></p>';
                              echo '<p  style="color:green;"><b><i>Rent per Month: </i></b>'.$value['price'].'</p>';
                              echo '<p><b>Bedrooms: </b> <i class="fa fa-bed"></i> <t>'.$value['number_of_bedrooms'].'</p>';
                              echo '<p><b>Bathrooms: </b> <i class="fa fa-bath"></i> <t>'.$value['number_of_bathrooms'].'</p>';
                              echo '<p><b>Location: </b>'.$value['place'].'</p>';
                            }
                              echo '<p><b>Owner: </b>'.$value['fullname'].'</p>';
                              echo '<p>'.$value['mobile'].'</p>';
                              echo '<p><a href style="color:green;">'.$value['email'].'</a></p>';
     
                              echo '</div>             
                         </div>
                      </div>';
                }
              ?>              
          </div>
        </div>
      </div>
    </section>    


    <!--Properties-->
    <section class="properties-container container" id="properties">
        <div class="heading">
          <span>Recent</span>
          <h2 style='color:green;'>Our Featured Properties</h2>
        </div>
      
    <div>
        <div class="properties container"  style='padding:3%; display: grid; grid-template-columns: repeat(auto-fit,minmax(280px,auto)); background-color: rgb(174, 221, 162);'>
          <!--Box 1-->
          <div class="box">
            <img src= "app/uploads/apart1.jpg" width="275" height="183" alt="">
            <h3>Ksh 13,000</h3>
            <div class="content">
            <div class="text">
              <h3>Jacaranda</h3>
              <p>Juja</p>
            </div>
                <div class="icon">
                  <i class="fa fa-bed"><span>bed:1</span></i>
                  <i class="fa fa-bath"><span>bath:1</span></i>
                </div>
            </div>
          </div>

          <!--Box 2-->
          <div class="box">
            <img src= "app/uploads/apart2.jpg" width="275" height="183" alt="">
            <h3>Ksh 8,000</h3>
            <div class="content">
            <div class="text">
              <h3>Royal Mews</h3>
              <p>Juja</p>
            </div>
                <div class="icon">
                  <i class="fa fa-bed"><span>bed:1</span></i>
                  <i class="fa fa-bath"><span>bath:1</span></i>
                </div>
            </div>
          </div>

          <!--Box 3-->
          <div class="box">
            <img src= "app/uploads/apart10.jpg" width="275" height="183" alt="">
            <h3>Ksh 18,000</h3>
            <div class="content">
            <div class="text">
              <h3>Heritage</h3>
              <p>Kahawa</p>
            </div>
                <div class="icon">
                  <i class="fa fa-bed"><span>bed:2</span></i>
                  <i class="fa fa-bath"><span>bath:1</span></i>
                </div>
            </div>
          </div>

          <!--Box 4-->
          <div class="box">
            <img src= "app/uploads/apart11.jpg" width="275" height="183" alt="">
            <h3>Ksh 22,000</h3>
            <div class="content">
            <div class="text">
              <h3>Elohim</h3>
              <p>Kahawa</p>
            </div>
                <div class="icon">
                  <i class="fa fa-bed"><span>bed:2</span></i>
                  <i class="fa fa-bath"><span>bath:2</span></i>
                </div>
            </div>
          </div>

          <!--Box 5-->
          <div class="box">
            <img src= "app/uploads/apart16.jpg" width="275" height="183" alt="">
            <h3>Ksh 15,000</h3>
            <div class="content">
            <div class="text">
              <h3>Humming Bird</h3>
              <p>Kenyatta Road</p>
            </div>
                <div class="icon">
                  <i class="fa fa-bed"><span>bed:1</span></i>
                  <i class="fa fa-bath"><span>bath:1</span></i>
                </div>
            </div>
          </div>

          <!--Box 6-->
          <div class="box">
            <img src= "app/uploads/apart22.jpg" width="275" height="183" alt="">
            <h3>Ksh 19,000</h3>
            <div class="content">
            <div class="text">
              <h3>Oliana</h3>
              <p>Thika</p>
            </div>
                <div class="icon">
                  <i class="fa fa-bed"><span>bed:2</span></i>
                  <i class="fa fa-bath"><span>bath:1</span></i>
                </div>
            </div>
          </div>
      </div>
          
        </div>
    </section>


    <!-- Footer -->
    <footer style="background-color: #ccc;">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Homely 2023</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-whatsapp"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
   
    <!-- Bootstrap core JavaScript -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/plugins/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/rent.js"></script>

    <script src="assets/js/script.js"></script>
  </body>
</html>
