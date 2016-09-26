
<div class="container-fluid"> 
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Task Reports Details</h1>
		  <div class="bootstrap-iso">

<?php	
	foreach($TaskData as $row)
	{	
	echo '								
	
<div class="row_space"></div>
		<div class="row_space"></div>

		 <div class="row">
			  <div class="col-xs-3">
			  <div class="input-group">
			  <div class="input-group-addon">
			  	<big class="glyphicon glyphicon-user"></big>
			  </div>
				   <input type="text" value="'.$row->Client_name.'" disabled class="form-control" />
				   			

				</div>
			  </div>
			  <div class="col-xs-3">
				 <div class="input-group financialYear">
				   <div class="input-group-addon">
					<big class="glyphicon glyphicon-calendar"></big>
				   </div>
				<input data-toggle="tooltip" title="Enter the Financial Year" type="text" value="'.$row->Financial_year.'" disabled class="form-control"/>
				 </div>
			 </div>
			  
			  <div class="col-xs-3">
			  <div class="input-group">
			  <div class="input-group-addon">
			  	<strong>Desc</strong>
			  </div>
			   <input  type="text" value="'.$row->Task_description.'" disabled class="form-control" />
			  </div>
			  </div>
			  <div class="col-xs-3">
			  <div class="input-group">
			  <div class="input-group-addon">
			  	<strong>Desc</strong>
			  </div>
				<input type="text" value="'.$row->Specific_taskDetail.'" disabled class="form-control" />
			  </div>
			  </div>
		</div>
	   <div class="row_space"></div>
	   <div class="row">

		</div>
		<div class="row_space"></div>
		<div class="row_space"></div>
		<div class="row_space"></div>
		
		<div class="row">
				<div class="col-xs-5">
				 <div class="input-group startDate">
				   <div class="input-group-addon">
					<big class="glyphicon glyphicon-calendar"></big>
				   </div>
				<input data-toggle="tooltip" title="Task Start Date" type="text" value="'.$row->Start_date.'" disabled class="form-control"/>
				 </div>
			  </div>
			  	<div class="col-xs-5">
				 <div class="input-group endDate">
				   <div class="input-group-addon">
					<big class="glyphicon glyphicon-calendar"></big>
				   </div>
				<input data-toggle="tooltip" title="Task Estimated End Date"  type="text" value="'.$row->Estimated_EndDate.'" disabled class="form-control"/>
				 </div>
			  </div>
		</div>
		<div class="row_space"></div>
		<div class="row_space"></div>
		<div class="row_space"></div>
		
		<div class="row">
			<div class="col-xs-5">
				<div class="input-group">
			  <div class="input-group-addon">
			  	<strong>Task Type</strong>
			  </div>
				<input type="text" value="'.$row->Task_type.'" disabled class="form-control" />
			  </div>
			  </div>
			  <div class="col-xs-5">
				<div class="input-group">
			  <div class="input-group-addon">
			  	<strong>Task Severity</strong>
			  </div>
				<input type="text" value="'.$row->Task_Severity.'" disabled class="form-control" />
			  </div>
			  </div>
		</div>
		<div class="row_space"></div>
		<div class="row_space"></div>
		<div class="row_space"></div>	
		<div class="row_space"></div>	
		<div class="row">
			<div class="center-block">
			<div class="col-xs-10">
				<div class="input-group">
			  <div class="input-group-addon">
			  	<strong>Extra Description</strong>
			  </div>
			  	 <textarea class="form-control noDrag" disabled class="form-control">'.$row->Extra_TaskDescription.'</textarea> 
			  	 </div>
			 </div>
			 </div>
		</div>
		</div>












	';
}
?>
	
	
<hr>
	<h2 class="page-header">Edit Reports Details of this Task</h2>


	<form id="TaskListForm" action="<?php echo base_url(); ?>UpdateTaskReport" method="post" autocomplete="on">
	   <div class="row">
			  <div class="col-xs-3">
			  <div class="input-group">
			  <div class="input-group-addon">
			  	<span class="glyphicon glyphicon-user"></span>
			  </div>
				   <select id="Client_Name" name="Client_Name" class="form-control" autocomplete="off" required>
				   			<option value="" disabled selected> Select the Client Name </option>
				   					<?php
											foreach($ClientName_Data as $row)
											{
												echo '<option value="'.$row->Client_name.'-'.$row->Client_ID.'">'.$row->Client_name.'</option>'; 
											}
										?>
					</select>
				   			

				</div>
			  </div>
			  <div class="col-xs-3">
				 <div class="input-group financialYear">
				   <div class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				   </div>
				<input data-toggle="tooltip" title="Enter the Financial Year" class="form-control" id="FinancialYear" name="FinancialYear" placeholder="Financial Year" type="text" required autocomplete="off"/>
				 </div>
			 </div>
			  
			  <div class="col-xs-3">
			  <div class="input-group">
			  <div class="input-group-addon">
			  	<span>Desc</span>
			  </div>
			   <input type="text" placeholder="Task Description" id="Task_desc" name="Task_desc" class="form-control" required/>
			  </div>
			  </div>
			  <div class="col-xs-3">
			  <div class="input-group">
			  <div class="input-group-addon">
			  	<span>Desc</span>
			  </div>
				<input type="text" placeholder="Specific Task Detail" id="specificTask_desc" name="specificTask_desc" class="form-control" required/>
			  </div>
			  </div>
		</div>
	   <div class="row_space"></div>
	   <div class="row">

		</div>
		<div class="row_space"></div>
		<div class="row_space"></div>
		<div class="row_space"></div>
		
		<div class="row">
				<div class="col-xs-5">
				 <div class="input-group startDate">
				   <div class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				   </div>
				<input data-toggle="tooltip" title="Task Start Date" class="form-control" id="startDate" name="startDate" placeholder="Task Start Date" type="text" required autocomplete="off"/>
				 </div>
			  </div>
			  	<div class="col-xs-5">
				 <div class="input-group endDate">
				   <div class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				   </div>
				<input data-toggle="tooltip" title="Task Estimated End Date" class="form-control" id="endDate" name="endDate" placeholder="Task Estimated End Date" type="text" required autocomplete="off"/>
				 </div>
			  </div>
		</div>
		<div class="row_space"></div>
		<div class="row_space"></div>
		<div class="row_space"></div>
		
		<div class="row">
			<div class="col-xs-5">
				<select id="Task_type" name="Task_type" class="form-control" required>
					<option value="" disabled selected> Select Task Type </option>
					<option value="Indoor">Indoor</option>
					<option value="Outdoor">Outdoor</option>
				</select>
			  </div>
			  <div class="col-xs-5">
				<select id="Task_severity" name="Task_severity" class="form-control" required>
					<option value="" disabled selected>Select Task Severity</option>
					<option value="Urgent">Urgent</option>
					<option value="High">High</option>
					<option value="Low">Low</option>
				</select>
			  </div>
		</div>
		<div class="row_space"></div>
		<div class="row_space"></div>
		<div class="row_space"></div>	
		<div class="row_space"></div>	
		<div class="row">
			<div class="center-block">
			<div class="col-xs-10">
			  	 <textarea class="form-control noDrag" placeholder="Some Extra Description about the task..." id="Extra_desc" name="Extra_desc"></textarea> 
			 </div>
			 </div>
		</div>

	

		<div class="row_space"></div>
		<div class="row_space"></div>
		<div class="pull-right">
			<button type="reset" class="btn btn-danger rippler rippler-inverse" onclick="resetTaskListForm()">Reset</button>
			<span class="button_spacing">
		<?php	
	foreach($TaskData as $row)
	{	
			echo '<button type="submit" id="Task_Uid" name="Task_Uid" class="btn btn-success rippler rippler-inverse" value="'.$row->Uid.'">Submit</button>';
		}
	?>
			</span>
		</div>
		</form>
	
		

		</div>
			
	</div>
	
   </div>
<script src="<?php echo base_url(); ?>ASSETS/CUSTOM/js/TaskList.js"></script>
<script src="<?php echo base_url(); ?>ASSETS/datepicker/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>ASSETS/datepicker/css/bootstrap-datepicker3.css"/>
