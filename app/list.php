<?php
	require '../config/config.php';
	if(empty($_SESSION['username']))
		header('Location: login.php');	

		try {
			if($_SESSION['role'] == 'admin'){
				$stmt = $connect->prepare('SELECT * FROM house_registrations');
				$stmt->execute();
				$data1 = $stmt->fetchAll (PDO::FETCH_ASSOC);

				$data = $data1;
			}

			if($_SESSION['role'] == 'user'){
				$stmt = $connect->prepare('SELECT * FROM house_registrations WHERE :user_id = user_id ');
				$stmt->execute(array(
					':user_id' => $_SESSION['id']
				));
				$data1 = $stmt->fetchAll (PDO::FETCH_ASSOC);

				
				$data = $data1;
			}
		}catch(PDOException $e) {
			$errMsg = $e->getMessage();
		}	
		// print_r($data1);	
		// echo "<br><br><br>";
		// print_r($data2);
		// echo "<br><br><br>";	
		// print_r($data);	
?>
<?php include '../include/header.php';?>

	<!-- Header nav -->	
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#212529;" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="../index.php">Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo $_SESSION['fullname']; ?> <?php if($_SESSION['role'] == 'admin'){ echo "(Admin)"; } ?></a>
            </li>
            <li class="nav-item">
              <a href="../auth/logout.php" class="nav-link">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<!-- end header nav -->
	<section style="padding-left:0px;">
		<?php include '../include/side-nav.php';?>
	</section>

<section class="wrapper" style="margin-left: 16%;margin-top: -23%;">
	<div class="container">
		<div class="row">
			<div class="col-12">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<h2>List of Apartment Details</h2>
				<?php 
					foreach ($data as $key => $value) {						
						echo '<div class="card card-inverse card-info mb-3" style="padding:1%;">					
								  <div class="card-block">';
								  	echo '<a class="btn btn-warning float-right" href="update.php?id='.$value['id'].'&act=';if(!empty($value['own'])){ echo "ap"; }else{ echo "indi"; } echo '">Edit</a>';
									 echo 	'<div class="row">
											<div class="col-4">
												<h4 class="text-center">House Details</h4>';
												if ($value['image'] !== 'uploads/') {
													# code...
													echo '<img src="'.$value['image'].'" width="100">';
												}
												
                            					echo '<p>'.$value['apartment_type'].'</p>';
                              					echo '<p><i>'.$value['apartment_name'].'</i></p>';
                              					echo '<p><b><i>Rent per Month: </i></b>'.$value['price'].'</p>';
                              					echo '<p><b>Number of Bedrooms: </b>'.$value['number_of_bedrooms'].'</p>';
                              					echo '<p><b>Number of Bathrooms: </b>'.$value['number_of_bathrooms'].'</p>';
                              					echo '<p><b>Location: </b>'.$value['place'].'</p>';
												echo '<p><b>Owner: </b>'.$value['fullname'].'</p>';
												echo '<p>'.$value['mobile'].'</p>';
												echo '<p><a href style="color:green;">'.$value['email'].'</a></p>';
						 

											echo '</div>
										</div>				      
								   </div>
								</div>';
								echo '<a class="btn btn-warning float-right" href="../app/complaint.php">Complaint</a><br><br>';
					}
				?>				
			</div>
		</div>
	</div>	
</section>
<?php include '../include/footer.php';?>