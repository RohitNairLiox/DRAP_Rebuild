
<div class="container-fluid"> 
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Add New Client</h1>
		  <div class="bootstrap-iso">
		 <form id="ClientListForm" action="<?php echo base_url(); ?>Insert_NewClient" method="post" autocomplete="off">
		 <div class="form-group">
		  <fieldset>
    <legend>Personalia:</legend>
	   <div class="row">
			  <div class="col-xs-3">
			  <div class="input-group">
			  <div class="input-group-addon">
			  	<span class="glyphicon glyphicon-user"></span>
			  </div>
				   <input type="text" placeholder="Client Name" id="Client_Name" name="Client_Name" class="form-control" required/>
				</div>
			  </div>
			  <div class="col-xs-3">
			  <div class="input-group">
			  <div class="input-group-addon">
			  	<span class="glyphicon glyphicon-asterisk"></span>
			  </div>
			  	<input type="text" placeholder="Client UID" id="Client_ID" name="Client_ID" class="form-control" required/>	
			  	</div>
			  </div>
			  
			  <div class="col-xs-3">
			  <div class="input-group">
			  <div class="input-group-addon">
			  	<span class="glyphicon glyphicon-link"></span>
			  </div>
			   	 <select id="Task_severity" name="Task_severity" class="form-control" required>
					<option value="" disabled selected>Select Client Type</option>
					<option value="Individual">Individual</option>
					<option value="Hindu Undivided Family">Hindu Undivided Family</option>
					<option value="Limited Liability Partnership">Limited Liability Partnership</option>
					<option value="Partnership Firm">Partnership Firm</option>
					<option value="Private Limited Company">Private Limited Company</option>
					<option value="Public Limited Company">Public Limited Company</option>
					<option value="Trusts">Trusts</option>
					<option value="Co-operative Credit Societies">Co-operative Credit Societies</option>
					<option value="Co-operative Banks">Co-operative Banks</option>
					<option value="Co-operative Housing Societies">Co-operative Housing Societies</option>
					<option value="Co-operatve Socieites - Others">Co-operatve Socieites - Others</option>
					<option value="Others">Others</option>
				</select>
			  </div>
			  </div>

		</div>
	   <div class="row_space"></div>
	   <div class="row_space"></div>
	  
	   <div class="row">
	   		<div class="col-xs-3">
	   		<div class="input-group">
			  <div class="input-group-addon">
			  	<span class="glyphicon glyphicon-hand-right"></span>
			  </div>
				<input type="text" placeholder="Referred by..." id="ReferredBy" name="ReferredBy" class="form-control" required autocomplete="on"/>
			</div>
			</div>
		</div>
		</fieldset>
	<div class="row_space"></div>
   <div class="row_space"></div>
   <div class="row_space"></div>	
   <div class="row_space"></div>	
     <fieldset>
    <legend>Contact Info:</legend>
		<div class="row">
			<div class="col-xs-3">
			<div class="input-group">
			  <div class="input-group-addon">
			  	<span class="glyphicon glyphicon-phone-alt"></span>
			  </div>
				<input type="text" placeholder="Residence Contact No" id="ResContactNo" name="ResContactNo" class="form-control" maxlength="10" pattern="[0-9]{10}" required/>
			</div>
			</div>
			<div class="col-xs-3">
				<div class="input-group">
			  <div class="input-group-addon">
			  	<span class="glyphicon glyphicon-phone-alt"></span>
			  </div>	
				<input type="text" placeholder="Office Contact No" id="OffcContactNo" name="OffcContactNo" class="form-control" maxlength="10" pattern="[0-9]{10}" required/>
			</div>
			</div>
			<div class="col-xs-3">
	   		<div class="input-group">
			  <div class="input-group-addon">
			  	<span class="glyphicon glyphicon-earphone"></span>
			  </div>
				<input type="text" placeholder="Mobile No" id="MobContactNo" name="MobContactNo" class="form-control" maxlength="10" pattern="[0-9]{10}" required/>
			</div>
			</div>
	</div>
		<div class="row_space"></div>
		<div class="row_space"></div>
	<div class="row">

			<div class="col-xs-3">
			<div class="input-group">
			  <div class="input-group-addon">
			  	<span class="glyphicon glyphicon-earphone"></span>
			  </div>
				<input type="text" placeholder="Alternative Contact No" id="AltContactNo" name="AltContactNo" class="form-control" maxlength="10" pattern="[0-9]{10}" required/>
			</div>
			</div>
			<div class="col-xs-3">
				<div class="input-group">
			  <div class="input-group-addon">
			  	<span><strong>@</strong></span>
			  </div>	
				<input type="email" placeholder="Email ID" id="EmailId" name="EmailId" class="form-control" required autocomplete="off"/>
			</div>
			</div>
	</div>
</fieldset>
			<div class="row_space"></div>
			<div class="row_space"></div>
			<div class="row_space"></div>
			<div class="row_space"></div>
			  <fieldset>
    <legend>Extra Info:</legend>
	<div class="row">
			<div class="col-xs-3">
			<div class="input-group">
			  <div class="input-group-addon">
			  	<span><strong>PAN </strong></span>
			  </div>
				<input type="text" placeholder="PAN No" id="PANNo" name="PANNo" class="form-control" required/>
			</div>
			</div>
			<div class="col-xs-3">
			<div class="input-group">
			  <div class="input-group-addon">
			  	<span><strong>Service tax</strong></span>
			  </div>
				<input type="text" placeholder="Service Tax No" id="STNo" name="STNo" class="form-control" required/>
			</div>
			</div>
			<div class="col-xs-3">
				<div class="input-group">
			  <div class="input-group-addon">
			  	<span><strong>VAT</strong></span>
			  </div>	
				<input type="text" placeholder="VAT No" id="VATNo" name="VATNo" class="form-control" required/>
			</div>
			</div>

	</div>
		<div class="row_space"></div>
	<div class="row">
			<div class="col-xs-3">
	   		<div class="input-group">
			  <div class="input-group-addon">
			  	<span><strong>CST</strong></span>
			  </div>
				<input type="text" placeholder="CST No" id="CSTNo" name="CSTNo" class="form-control" required/>
			</div>
			</div>

			<div class="col-xs-3">
			<div class="input-group">
			  <div class="input-group-addon">
			  	<span><strong>PTRC</strong></span>
			  </div>
				<input type="text" placeholder="PTRC No" id="PTRCNo" name="PTRCNo" class="form-control" required/>
			</div>
			</div>
			<div class="col-xs-3">
				<div class="input-group">
			  <div class="input-group-addon">
			  	<span><strong>PTEC</strong></span>
			  </div>	
				<input type="text" placeholder="PTEC No" id="PTECNo" name="PTECNo" class="form-control" required autocomplete="off"/>
			</div>
			</div>
	</div>
		<div class="row_space"></div>
	<div class="row">
			<div class="col-xs-3">
				<div class="input-group">
			  <div class="input-group-addon">
			  	<span><strong>TAN</strong></span>
			  </div>	
				<input type="text" placeholder="TAN No" id="TANNo" name="TANNo" class="form-control" required autocomplete="off"/>
			</div>
			</div>
	</div>
	</fieldset>
		<div class="row_space"></div>
		<div class="row_space"></div>
		<div class="row_space"></div>
		<div class="row_space"></div>
		
			
		<div class="row">
			<div class="center-block">
			<div class="col-xs-10">
			<div class="input-group">
			  <div class="input-group-addon">
			  	<span class="glyphicon glyphicon-envelope"></span>
			  </div>	
			  	 <textarea class="form-control" placeholder="Address of the Client..." id="Address" name="Address"></textarea> 
			 </div>
			 </div>
			 </div>
		</div>

	

		<div class="row_space"></div>
		<div class="row_space"></div>
		<div class="pull-right">
			<button type="reset" class="btn btn-danger rippler rippler-inverse" onclick="resetTaskListForm()">Reset</button>
			<span class="button_spacing">
			<button type="submit" class="btn btn-success rippler rippler-inverse">Submit</button>
			</span>
		</div>
	</div>
		</form>

		</div>
			
	</div>
	
   </div>
<script src="<?php echo base_url(); ?>ASSETS/CUSTOM/js/ClientList.js"></script>
<script src="<?php echo base_url(); ?>ASSETS/datepicker/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>ASSETS/datepicker/css/bootstrap-datepicker3.css"/>




