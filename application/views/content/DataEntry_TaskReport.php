<div class="container-fluid"> 
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Task Reports</h1>
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
	   		<div class="col-xs-4">
	   		  <div class="input-group">
			  <div class="input-group-addon">
			  	<strong>Issued Time</strong>
			  </div>
	   			<input class="form-control" value="'.$row->Time.'" disabled data-container="body" data-toggle="tooltip" data-placement="top" title="Task Creation Time"/>
	   		</div>
	   		</div>
		</div>
	</div>';
}
?>
	
	
<hr>
	<h2 class="page-header">Earlier reports on this Task</h2>
	<div id="EarlierReports"  style='overflow:auto; width:100%;max-height:400px; overflow-x: hidden;'>
	
		
	<?php 
	if(empty($PreviousReports))
	{

		echo '	<div class="row">
					<div class="col-xs-12">
						<div class="alert alert-info">
						 <strong>No Data Available!</strong> No reports to be found for this particular task.
						</div>
					</div>
				</div>
				';
	}
	else{
		foreach($PreviousReports as $row)
		{	
		echo '<div class="row">
					<div class="col-xs-2">
						<div class="well text-center">'.$row->reportingTime.'</div>
					</div>
					<div class="col-xs-2">
						<div class="well text-center">'.$row->Reported_by.'</div>
					</div>
					<div class="col-xs-8">
						<div class="well">'.$row->report_content.'</div>
					</div>
				</div>
			
				<br>'; 
		}
	}
	?>
			
		
			
		
	</div>
<hr>
	<h2 class="page-header">Report on this Task</h2>
<div id="ReportOnTask">
	<form action="<?php echo base_url(); ?>ReportOnTask" method="post"  onsubmit="ReadValue(this);">
		<div class="row">
			<div class="col-xs-12">
				<textarea class="form-control noDrag" name="addContent" id="addContent"></textarea>
			</div>
			<div class="col-xs-12">
				<input type="hidden" class="form-control" name="getTask_Uid" id="getTask_Uid" style="height:0px"/>
			</div>
		</div>
		<div class="row" style="padding:10px;">
			<button type="submit" class="btn btn-success pull-right" >Submit report</button>		
		</div>

	</form>
</div>		

		</div>
			
	</div>
	
   </div>
<script src="<?php echo base_url(); ?>ASSETS/CUSTOM/js/TaskList.js"></script>
<script>
	function ReadValue(oForm) {
	   var myValue = document.getElementById("task_Uid").value;
	   oForm.elements["getTask_Uid"].value = myValue;
	}
</script>
