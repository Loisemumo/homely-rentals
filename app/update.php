<?php
	require '../config/config.php';
	if(empty($_SESSION['username']))
		header('Location: login.php');

		if ( isset($_GET['id'])) {
			$id = $_REQUEST['id'];
		}	

		if ( isset($_GET['act'])) {
			$active = $_REQUEST['act'];

			if ($active === 'ap') {
				# code...
				try {
					$stmt = $connect->prepare('SELECT * FROM house_registrations where id = :id');
					$stmt->execute(array(
						':id' => $id
					));
					$data = $stmt->fetch(PDO::FETCH_ASSOC);				
				}catch(PDOException $e) {
					$errMsg = $e->getMessage();
				}
			}
		}
		
		
	if(isset($_POST['register_apartment'])) {
			$errMsg = '';
			// Get data from FROM
			$fullname = $_POST['fullname'];
			$email = $_POST['email'];
			$mobile = $_POST['mobile'];
			$place = $_POST['place'];
			$price = $_POST['price'];
			$number_of_bedrooms = $_POST['number_of_bedrooms'];
			$number_of_bathrooms = $_POST['number_of_bathrooms'];
			$user_id = $_SESSION['id'];
			$apartment_name = $_POST['apartment_name'];
			//$image = $_POST['image']?$_POST['image']:NULL;
			//$other = $_POST['other'];
			$apartment_type = $_POST['apartment_type'];
			$vacant = $_POST['vacant'];
			
			try {
				$stmt = $connect->prepare('UPDATE house_registrations SET fullname = ?, email = ?, mobile = ?, place = ?, price = ?, apartment_name = ?, number_of_bedrooms = ?,  number_of_bathrooms = ?,  apartment_type = ?,  vacant = ?, user_id = ?,  WHERE id = ?');
				
				// foreach ($_POST['ap_number_of_plats'] as $key => $value) {
					# code...
					$stmt->execute(array(
						$fullname,
						$email,
						$mobile,
						$place,
						$price,
						$apartment_name,
						$number_of_bedrooms,
						$number_of_bathrooms,
						$apartment_type,
						$vacant,
						$user_id,
						$id,
					));				
				// }
				header('Location: update.php?action=reg');
				exit;
			}catch(PDOException $e) {
				echo $e->getMessage();
			}
	}

	if(isset($_GET['action']) && $_GET['action'] == 'reg') {
		$errMsg = 'Update successfull. Thank you';
	}
			
		//print_r($data);	
		// echo "<br><br><br>";
		// print_r($data2);
		// echo "<br><br><br>";	
		// print_r($data);	
?>
<?php include '../include/header.php';?>
	<!-- Header nav -->	
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#212529;" id="mainNav">
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
<?php include '../include/side-nav.php';?>
<section class="wrapper" style="margin-left: 16%;margin-top: -11%;">
	<?php
		if (isset($active)) {
			# code...
			if ($active === 'ap') {
	  			# code...
	  			include 'partials/edit/apartment.php';
	  		}

	  		
		}  		
  	?>
</section>
<?php include '../include/footer.php';?>
<script type="text/javascript">
	var rowCount = 1;
	function addMoreRows(frm) {
		rowCount ++;
		var recRow = '<div id="rowCount'+rowCount+'"><tr><td><input name="ap_number_of_plats[]" type="text" size="16%" placeholder="  Plat Number" maxlength="120"/></td><td><input name="rooms[]" type="text"  maxlength="120" placeholder="  2BHK/3BHK/1RK" style="margin: 4px 5px 0 5px;"/></td><td><input name="" type="hidden" maxlength="120" style="margin: 4px 10px 0 0px;"/></td></tr><a href="javascript:void(0);" onclick="removeRow('+rowCount+');" class="btn btn-danger btn-sm">Delete</a></div>';
		$('#addedRows').append(recRow);
	}
	function removeRow(removeNum) {
		console.log("hhh");
		console.log(removeNum);
		$('#rowCount'+removeNum).remove();
	}
</script>