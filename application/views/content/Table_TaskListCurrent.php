<div class="container-fluid">
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h2 class="sub-header" id="TaskList"><?php if(isset($tableName)){echo $tableName;}  else {echo "Task List";}?></h2>
		  <div class="">
		  <div class="scrollit">
            <table class="table table-striped table-hover " id="table1">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th class="text-center">Client ID</th>
                  <th class="text-center">Client Name</th>
                  <th class="text-center">Task Description</th>
                  <th class="text-center">Specific Task Detail</th>
                  <th class="text-center">Start Date</th>
                  <th class="text-center">End Date (Estimated)</th>
                  <th class="text-center">Task Type</th>
                  <th class="text-center">Task Severity</th>
                  <th class="text-center">Extra Task Description</th>
                  <th class="text-center">Status of the Task</th>
                  <th class="text-center">Handled By </th>
                  <th class="text-center">Task Taken Time</th>
				       </tr>
              </thead>
			  
              <tbody>
			  
				<?php 
				if(!empty($TaskList_Data)){
					foreach($TaskList_Data as $row)
					{
						echo "<tr><td data-container='body' data-toggle='tooltip' data-placement='top' title='Session Date'>".$row->Uid."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='Sch/Inst/Comm Name'>".$row->Client_ID."</td><td class='text-center'data-container='body' data-toggle='tooltip' data-placement='top' title='SES of the Institute'>".$row->Client_name."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='Medium of Language'>".$row->Task_description."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='Name of the Coordinator'>".$row->Specific_taskDetail."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='Trainer/Counsellor's Name 1'>".$row->Start_date."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='Trainer/Counsellor's Name 2'>".$row->Estimated_EndDate."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='Age Group'>".$row->Task_type."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='Age Group'>".$row->Task_Severity."</td><td class='text-center'>".$row->Extra_TaskDescription."</td><td class='text-center'>".$row->Status."</td><td>".$row->Taken_by."</td><td>".$row->Time."</td></tr>";
					} 
						}
				else{echo "<tr><td colspan='13' class='text-center bg-info'><big><strong>No Completed Task Found! </strong></big><small>Go Get Some Work Done!!</small></td></tr>";}
				?>
				
              </tbody>
			 
            </table>

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
			<a type="button" class="btn btn-sm btn-large btn-default glyphicon glyphicon-circle-arrow-up" href="#table1"></a>

          </div>
		</div>
	</div>