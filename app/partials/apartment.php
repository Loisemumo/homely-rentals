<!-- <div class="row"> -->			
  <div class="col-md-11 col-xs-12 col-sm-12"><br>  	
  	<div class="alert alert-info" role="alert">
  		<?php
			if(isset($errMsg)){
				echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
			}
		?>
  		<h2 class="text-center">Register Apartment</h2>
  		<form action="" method="post" enctype="multipart/form-data">
		  	    <div class="row">
		  	 	<div class="col-md-4">
				  <div class="form-group">
				    <label for="apartment_name">Apartment Name</label>
				    <input type="text" class="form-control" id="apartment_name" placeholder="Apartment Name" name="apartment_name" required>
				  </div>
				  </div>

		  	 	  <div class="col-md-4">
				  <div class="form-group">
				    <label for="apartment_type">Apartment Type</label>
				    <input type="text" class="form-control" id="apartment_type" placeholder="Apartment Type" name="apartment_type" required>
				   </div>
				   </div>
				</div>

				<div class="row">
		  	 	 <div class="col-md-5">
				  <div class="form-group">
				    <label for="apartment_name">Owner Name</label>
				    <input type="text" class="form-control" id="full_name" placeholder="Owner Name" name="full_name" required>
				  </div>
				 </div>
				

				 <div class="col-md-6">
				 <div class="form-group">
				    <label for="mobile">Phone Number</label>
				    <input type="text" class="form-control" pattern="^(\d{10})$" id="mobile" title="10 digit mobile number" placeholder="10 digit number" name="mobile" required>
				  </div>
				  </div>
				

		  	 	 <div class="col-md-5">
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
				  </div>
				 </div>
   			   </div>

				<div class="row">
				 <div class="col-md-6">
				  <div class="form-group">
				    <label for="place">Location</label>
				    <input type="place" class="form-control" id="place" placeholder="Location" name="place" required>
				   </div>
			  	  </div>
				</div>

				<div class="row">
			 	<div class="col-md-7">
				  <div class="form-group">
				    <label for="state">Rent Monthly</label>
				    <input type="text" class="form-control" id="price" placeholder="Rent" name="price" required>
				  </div>
				</div>
				</div>

			
		  		<div class="col-md-4">
		
				<div class="row">
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="description">Image</label>
				    <input type="file" name="image" id="image">
				  </div>
				</div>
				</div>

			 <button type="submit" class="btn btn-primary" name='register_apartment' value="register_apartment">Submit</button>
			</form>	
		</div>			
  	</div>
<!-- </div> -->	