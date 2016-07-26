<div class="container-fluid">
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h2 class="sub-header" id="TaskList">New Task List</h2>
		  <div class="">
		  <div class="scrollit">
            <table class="table table-striped table-hover table-condensed" id="table1">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th>Client ID</th>
                  <th>Client Name</th>
                  <th>Task Description</th>
                  <th>Specific Task Detail</th>
                  <th>Start Date</th>
                  <th>End Date (Estimated)</th>
                  <th>Task Type</th>
                  <th>Task Severity</th>
                  <th>Extra Task Description</th>
                  <th>Task Created Time</th>
                  <th>Status of the Task</th>
				       </tr>
              </thead>
			  
              <tbody>
			  
				<?php 
				if(!empty($TaskList_Data)){
					foreach($TaskList_Data as $row)
					{
						echo "<tr><td data-container='body' data-toggle='tooltip' data-placement='top' title='Session Date'>".$row->Uid."</td><td data-container='body' data-toggle='tooltip' data-placement='top' title='Sch/Inst/Comm Name'>".$row->Client_ID."</td><td data-container='body' data-toggle='tooltip' data-placement='top' title='SES of the Institute'>".$row->Client_name."</td><td data-container='body' data-toggle='tooltip' data-placement='top' title='Medium of Language'>".$row->Task_description."</td><td data-container='body' data-toggle='tooltip' data-placement='top' title='Name of the Coordinator'>".$row->Specific_taskDetail."</td><td data-container='body' data-toggle='tooltip' data-placement='top' title='Trainer/Counsellor's Name 1'>".$row->Start_date."</td><td data-container='body' data-toggle='tooltip' data-placement='top' title='Trainer/Counsellor's Name 2'>".$row->Estimated_EndDate."</td><td data-container='body' data-toggle='tooltip' data-placement='top' title='Age Group'>".$row->Task_type."</td><td data-container='body' data-toggle='tooltip' data-placement='top' title='Age Group'>".$row->Task_Severity."</td><td>".$row->Extra_TaskDescription."</td><td>".$row->Time."</td><form method='post' action='".base_url()."StatusChanged_Taken'><td><select id='NewStatus' name='NewStatus' required><option selected value='' disabled>Not Taken</option><option value='Taken'>Taken</option><option value='Completed'>Completed</option></select></td><td><button class='btn btn-primary rippler rippler-inverse' type='submit' id='UID' name='UID' value='".$row->Uid."'>Change Status</button></td></form></tr>";
					} 
						}
				else{echo "<tr><td colspan='12' class='text-center bg-info'><big><strong>No New Task Available!</strong></big></td></tr>";}
				?>
				
              </tbody>
			 
            </table>
           </form>   
<script language="javascript" type="text/javascript">

	var table1_Props = 	{
					rows_counter: true,
					rows_counter_text: "Total rows: ",
					btn_reset: true,
					bnt_reset_text: "Show all"
				};
  var x = document.getElementById("table1").rows.length;


//<![CDATA[
	setFilterGrid("table1",table1_Props);
//]]>
</script>
			</div>
			<a type="button" class="btn btn-sm btn-large btn-default glyphicon glyphicon-circle-arrow-up rippler rippler-inverse" href="#table1"></a>

          </div>
		</div>
	</div>