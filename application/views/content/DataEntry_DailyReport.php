
<div class="container-fluid"> 
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"> Daily Reporting </h1>
		  <div class="bootstrap-iso">
		 <form id="DailyReportForm" action="<?php echo base_url(); ?>Insert_DailyReport" method="post" autocomplete="on">
		 <div class="row_space"></div>
	 	<div class="row">
	 	<div class="col-xs-4">
					<select id="Client_NameId" name="Client_NameId" class="form-control" autocomplete="off" required>
	   					<option value="" disabled selected> Select the Client Name </option>
	   					<?php
								foreach($ClientName_Data as $row)
								{
									echo '<option value="'.$row->Client_name.'-'.$row->Client_ID.'">'.$row->Client_name.'</option>'; 
								}
							?>
					</select>
		</div>
		<div class="col-xs-6">
		<select name="TaskStatus" id="TaskStatus" class="form-control" required>
		 	<option value="" selected disabled>Select the current status of the task</option>
		 	<option value="On-going">On-going</option>
		 	<option value="Completed">Completed</option>
		 </select>
		 </div>
		 </div>
		 <div class="row_space"></div>
		 <div class="row_space"></div>
		 <div class="row_space"></div>
		 <div class="row_space"></div>
		 <div class="row">
		 <div class="col-xs-10">
		 <textarea type="text" name="Reporting" id="Reporting" class="form-control noDrag" placeholder="Report Content" required></textarea>
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
		</form>

		</div>
			
	</div>
	
   </div>
<script>
	function resetDailyReportForm() {
    document.getElementById("DailyReportForm").reset();
}
</script>




