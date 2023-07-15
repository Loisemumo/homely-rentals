<!-- <div class="row"> -->			
  <div class="col-md-11 col-xs-12 col-sm-12"><br>  	
  	<div class="alert alert-info" role="alert">
  		<?php
			if(isset($errMsg)){
				echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
			}
		?>
  		<h2 class="text-center">Apartment</h2>
  		<form action="" method="POST">
		  	 <div class="row">
		  	 	<div class="col-md-4">
			  	  <div class="form-group">
				    <label for="fullname">Full Name</label>
				     <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $data['id']; ?>">
				    <input type="text" class="form-control" id="fullname" placeholder="Full Name" name="fullname" value="<?php echo $data['fullname']?$data['fullname']:''; ?>" required>
				  </div>
				 </div>

				<div class="col-md-4">
				  <div class="form-group">
				    <label for="mobile">Mobile</label>
				    <input type="text" class="form-control" pattern="^(\d{10})$" id="mobile" title="10 digit mobile number" placeholder="10 digit mobile number" name="mobile" value="<?php echo $data['mobile']?$data['mobile']:''; ?>" required>
				  </div>
				 </div>
			</div>

			<div class="row">
		  	 	<div class="col-md-4">
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $data['email']?$data['email']:''; ?>" required>
				  </div>
				 </div>

				 <div class="col-md-4">
				  <div class="form-group">
				    <label for="apartment_type">Apartment Type</label>
				    <input type="apartment_type" class="form-control" id="apartment_type" placeholder="Apartment Type" name="apartment_type" value="<?php echo $data['apartment_type']?$data['apartment_type']:''; ?>" required>
				  </div>
				 </div>

				 <div class="col-md-4">
				  <div class="form-group">
				    <label for="apartment_name">Apartment Name</label>
				    <input type="apartment_name" class="form-control" id="apartment_name" placeholder="Apartment Name" name="apartment_name" value="<?php echo $data['apartment_name']?$data['apartment_name']:''; ?>" required>
				  </div>
				 </div>

				 <div class="col-md-4">
				  <div class="form-group">
				    <label for="price">Rent Monthly</label>
				    <input type="price" class="form-control" id="price" placeholder="Rent Monthly" name="price" value="<?php echo $data['price']?$data['price']:''; ?>" required>
				  </div>
				 </div>
			</div>

			<div class="row">
				<div class="col-md-4">
			  <div class="form-group">
			    <label for="place">Location</label>
			    <input type="place" class="form-control" id="place" placeholder="Location" name="place" value="<?php echo $data['place']?$data['place']:''; ?>" required>
			  </div>
			  </div>

			  <div class="col-md-4">
			  <div class="form-group">
			    <label for="number_of_bedrooms">Number of Bedrooms</label>
			    <input type="number_of_bedrooms" class="form-control" id="number_of_bedrooms" placeholder="number_of_bedrooms" name="number_of_bedrooms" value="<?php echo $data['number_of_bedrooms']?$data['number_of_bedrooms']:''; ?>" required>
			  </div>
			  </div>
			  <div class="col-md-4">
			  <div class="form-group">
			    <label for="number_of_bathrooms">Number of Bathrooms</label>
			    <input type="number_of_bathrooms" class="form-control" id="number_of_bathrooms" placeholder="number_of_bathrooms" name="number_of_bathrooms" value="<?php echo $data['number_of_bathrooms']?$data['number_of_bathrooms']:''; ?>" required>
			  </div>
			  </div>
			 </div>
			 
			
			</div>

			 <!-- <div class="row">			 			 	
				<div class="col-md-10"> 
					<div class="form-group">
						<a onclick="addMoreRows(this.form);" class="btn btn-info btn-sm">Add More(Plat Number/Description)</a>

						<div id="addedRows"></div>
					</div>
				</div>
			</div> -->

			 		  
			  
			    <div class="row">
			    	<div class="col-4">
			 		 <div class="form-group">
					    <label for="vacant">Vacant/Occupied</label>
					    <select class="form-control" id="vacant" name="vacant">
					      <option value="1" <?php if($data['vacant'] == '1'){echo 'selected';}?>>Vacant</option>
					      <option value="0" <?php if($data['vacant'] == '0'){echo 'selected';}?>>Occupied</option>
					    </select>
					  </div>
			 	</div>
			 	
				<!-- <div class="col-md-4">
				  <div class="form-group">
				    <label for="description">Image</label>
				    <input type="file" class="form-control">
				  </div>
				  </div> -->
			  </div>			
			  <button type="submit" class="btn btn-primary" name='register_apartment' value="register_apartment">Submit</button>
			</form>	
			</div>			
  	</div>
<!-- </div> -->	