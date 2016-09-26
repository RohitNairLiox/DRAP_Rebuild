
<div class="container-fluid"> 
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Task Reports Details</h1>
		  <div class="bootstrap-iso">

<?php	
	foreach($TaskData as $row)
	{	
	echo '								
	<div id="TaskDataList">
	   <div class="row">
	   		<div class="col-xs-3">
				  <div class="input-group">
				  <div class="input-group-addon">
				  	<strong>Task UID</strong>
				  </div>
		   			<input class="form-control" id="task_Uid" name="task_Uid" value="'.$row->Uid.'" disabled data-container="body" data-toggle="tooltip" data-placement="top" title="Task Unique ID"/>
		   		  </div>
	   		</div>
	   		<div class="col-xs-3">
					  <div class="input-group">
					  <div class="input-group-addon">
					  	<strong>Client UID</strong>
					  </div>
			   			<input class="form-control" value="'.$row->Client_ID.'" disabled data-container="body" data-toggle="tooltip" data-placement="top" title="Client ID"/>
			   		  </div>
	   		</div>
	   		<div class="col-xs-4">
	   			<div class="input-group">
			  <div class="input-group-addon">
			  	<strong>Client Name</strong>
			  </div>
	   			<input class="form-control" value="'.$row->Client_name.'" disabled data-container="body" data-toggle="tooltip" data-placement="top" title="Client Name"/>
	   		</div>
	   		</div>
		</div>
		<div class="row_space"></div>
		<div class="row_space"></div>
		<div class="row_space"></div>
		
		<div class="row">
	   		<div class="col-xs-3">
	   		 <div class="input-group">
			  <div class="input-group-addon">
			  	<strong>Desc</strong>
			  </div>
	   			<input class="form-control" value="'.$row->Task_description.'" disabled data-container="body" data-toggle="tooltip" data-placement="top" title="Task Short Description"/>
	   		</div>
	   		</div>
	   		<div class="col-xs-3">
	   		  <div class="input-group">
			  <div class="input-group-addon">
			  	<strong>Desc</strong>
			  </div>
	   			<input class="form-control" value="'.$row->Specific_taskDetail.'" disabled data-container="body" data-toggle="tooltip" data-placement="top" title="Task Specific Description"/>
	   		</div>
	   		</div>
	   		<div class="col-xs-4">
	   		  <div class="input-group">
			  <div class="input-group-addon">
			  	<strong>Desc</strong>
			  </div>
	   			<input class="form-control" value="'.$row->Extra_TaskDescription.'" disabled data-container="body" data-toggle="tooltip" data-placement="top" title="Task Extra Description"/>
	   		</div>
	   		</div>
		</div>
		<div class="row_space"></div>
		<div class="row_space"></div>
		<div class="row_space"></div>
		<div class="row_space"></div>
		<div class="row_space"></div>
		
		<div class="row">
	   		<div class="col-xs-5">
	   		  <div class="input-group">
			  <div class="input-group-addon">
			  	<span class="glyphicon glyphicon-calendar"></span>
			  </div>
	   			<input class="form-control" value="'.$row->Start_date.'" disabled data-container="body" data-toggle="tooltip" data-placement="top" title="Start Date"/>
	   		</div>
	   		</div>
	   		<div class="col-xs-5">
	   		  <div class="input-group">
			  <div class="input-group-addon">
			  	<span class="glyphicon glyphicon-calendar"></span>
			  </div>
	   			<input class="form-control" value="'.$row->Estimated_EndDate.'" disabled data-container="body" data-toggle="tooltip" data-placement="top" title="Est. End Date"/>
	   		</div>
	   		</div>

		</div>
		<div class="row_space"></div>
		<div class="row_space"></div>
		<div class="row_space"></div>
		<div class="row_space"></div>
		
		<div class="row">
	   		<div class="col-xs-3">
	   			<div class="input-group">
			  <div class="input-group-addon">
			  	<strong>Task Type</strong>
			  </div>
	   			<input class="form-control" value="'.$row->Task_type.'" disabled data-container="body" data-toggle="tooltip" data-placement="top" title="Task Type"/>
	   		</div>
	   		</div>
	   		<div class="col-xs-3">
	   		 <div class="input-group">
			  <div class="input-group-addon">
			  	<strong>Severity</strong>
			  </div>
	   			<input class="form-control" value="'.$row->Task_Severity.'" disabled data-container="body" data-toggle="tooltip" data-placement="top" title="Task Severity"/>
	   		</div>
	   		</div>
		</div>
	</div>';
}
?>
	
	
<hr>
	<h2 class="page-header">Edit Reports Details of this Task</h2>


	<form id="TaskListForm" action="<?php echo base_url(); ?>EditTaskReports" method="post" autocomplete="on">
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
			echo '<button type="submit" class="btn btn-success rippler rippler-inverse" value="'.$row->Uid.'">Submit</button>';
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
