
<div class="container-fluid"> 
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <h1 class="page-header">Existing Employee Data</h1>
          <?php 
			foreach ($Emp_Data as $row) {
		?>
		  <div class="bootstrap-iso">
	   <div class="row">
			  <div class="col-xs-5">
			  <div class="input-group">
			  <div class="input-group-addon">
			  	<span class="glyphicon glyphicon-user"></span>
			  </div>
				   <input type="text" id="Emp_Name" name="Emp_Name" value="<?php echo $row->Name; ?>" class="form-control" disabled/>
				</div>
			  </div>
			  <div class="col-xs-5">
				  <div class="input-group">
					  <div class="input-group-addon">
					  	Username
					  </div>
				  		<input type="text" class="form-control"  value="<?php echo $row->Username; ?>" disabled/>	
				  </div>
			  </div>
		</div> 
<div class="row_space"></div>
<div class="row_space"></div>
<div class="row_space"></div>
<div class="row_space"></div>
		<div class="row">
			  <div class="col-xs-5">
			  <div class="input-group">
			  <div class="input-group-addon">
			  	<span class="glyphicon glyphicon-lock"></span>
			  </div>
			   	 <input type="text" class="form-control" value="<?php echo $row->Password; ?>" disabled/>	
			  </div>
			  </div>

			  <div class="col-xs-5">
			  <div class="input-group">
			  <div class="input-group-addon">
			  	<strong>Role</strong>
			  </div>
			   	<input class="form-control" type="text" value="<?php echo $row->Role; ?>" disabled/>
			  </div>
			  </div>
		</div>


		</div>
	   <div class="row_space"></div>
	   <div class="row_space"></div>
	   <div class="row_space"></div>
	   <div class="row_space"></div>
	   <hr>	
	   <div class="row_space"></div>
	   <div class="row_space"></div>

	  		<form action="Update_User" method="post">
	  			<h1 class="page-header">Edit Employee Data</h1>
	  				<div class="row">
					  <div class="col-xs-5">
					  <div class="input-group">
					  <div class="input-group-addon">
					  	<span class="glyphicon glyphicon-user"></span>
					  </div>
						   <input type="text" id="Emp_Name" name="Emp_Name" class="form-control" placeholder="Employee Name" required/>
						</div>
					  </div>
					  <div class="col-xs-5">
						  <div class="input-group">
							  <div class="input-group-addon">
							  	Username
							  </div>
						  		<input type="text" id="Emp_Username" name="Emp_Username" class="form-control" placeholder="Employee Username" required/>	
						  </div>
					  </div>
					</div> 
					<div class="row_space"></div>
					<div class="row_space"></div>
					<div class="row_space"></div>
					<div class="row_space"></div>
					<div class="row">
					  <div class="col-xs-5">
					  <div class="input-group">
					  <div class="input-group-addon">
					  	<span class="glyphicon glyphicon-lock"></span>
					  </div>
					   	 <input type="text" id="Emp_Password" name="Emp_Password" class="form-control" placeholder="Employee Password" required/>	
					  </div>
					  </div>

					  <div class="col-xs-5">
					  <div class="input-group">
					  <div class="input-group-addon">
					  	<strong>Role</strong>
					  </div>
					  	<select id="Emp_Role" name="Emp_Role" class="form-control" required>
					  		<option value="" selected disabled>Select the User Role</option>
					  		<option value="Admin">Administrator</option>
					  		<option value="DataOperator">Data Operator</option>
					  	</select>
					  </div>
					  </div>
					</div>
					<div class="row_space"></div>
					<div class="row_space"></div>
					<div class="row pull-right">
						<button type="reset" class="btn btn-danger">Reset</button>
						<button type="submit" name="Emp_ID_Update" class="btn btn-success" value="<?php echo $row->Uid; ?>">Submit</button>
					</div>
	  		</form>

		</div>
		<?php } ?>
			
	</div>
	
   </div>




