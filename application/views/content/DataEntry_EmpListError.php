
<div class="container-fluid"> 
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Add A New Employee</h1>
		  <div class="bootstrap-iso">
		 <form id="EmpListForm" action="<?php echo base_url(); ?>Insert_NewEmployee" method="post" autocomplete="off">
	   <div class="row">
			  <div class="col-xs-5">
			  <div class="input-group">
			  <div class="input-group-addon">
			  	<span class="glyphicon glyphicon-user"></span>
			  </div>
				   <input type="text" placeholder="Employee's Name" id="Emp_Name" name="Emp_Name" class="form-control" required/>
				</div>
			  </div>
			  <div class="col-xs-5">
			  <div class="input-group">
			  <div class="input-group-addon">
			  	<span class="glyphicon glyphicon-asterisk"></span>
			  </div>
			  <div class="form-group has-error has-feedback">
			  	<input type="text" placeholder="Employee's Username" id="Emp_Username" name="Emp_Username" class="form-control" required/>	
			  	<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
			  </div>
			  	 <div class="input-group-addon">
			  	<strong class="">@drap.app</strong>
			  </div>
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
			   	 <input type="text" placeholder="Set A New Password for this account" id="Emp_Password" name="Emp_Password" class="form-control" required/>	
			  </div>
			  </div>

			  <div class="col-xs-5">
			  <div class="input-group">
			  <div class="input-group-addon">
			  	<strong>Role</strong>
			  </div>
			   	 <select id="Emp_Role" name="Emp_Role" class="form-control" required>
			   	 	<option value="" selected disabled>Select the Employee Role</option>
			   	 	<option value="Admin">Administrator</option>
			   	 	<option value="DataOperator">Data Operator</option>
			   	 </select>	
			  </div>
			  </div>
		</div>


		</div>
	   <div class="row_space"></div>
	   <div class="row_space"></div>
	   <div class="row_space"></div>

		<div class="pull-right">
			<button type="reset" class="btn btn-danger rippler rippler-inverse">Reset</button>
			<span class="button_spacing">
			<button type="submit" class="btn btn-success rippler rippler-inverse">Submit</button>
			</span>
		</div>
		</form>

		</div>
			
	</div>
	
   </div>




