<div class="container-fluid">
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h2 class="sub-header" id="TaskList"><?php if(isset($tableName)){ echo $tableName; } else{ echo "Task List";} ?></h2>
		  <div class="">
		  <div class="scrollit">
            <table class="table table-striped table-hover" id="table1">
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
                  <th class="text-center">Task Created Time</th>
				       </tr>
              </thead>
			  
              <tbody>
			  
				<?php 

					foreach($TaskList_Data as $row)
					{
						echo "<tr><td data-container='body' data-toggle='tooltip' data-placement='top' title='Task Unique ID'>".$row->Uid."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='Client ID'>".$row->Client_ID."</td><td class='text-center'data-container='body' data-toggle='tooltip' data-placement='top' title='Name of the Client'>".$row->Client_name."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='Task Description'>".$row->Task_description."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='Specific Task Detail'>".$row->Specific_taskDetail."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='Task Actual Start Date'>".$row->Start_date."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='Task Estimated End Date'>".$row->Estimated_EndDate."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='Task Type'>".$row->Task_type."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='Task Severity'>".$row->Task_Severity."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='Extra Task Description'>".$row->Extra_TaskDescription."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='Task Creation Time'>".$row->Time."</td><td><form action='".base_url()."ViewTaskReports' method='post'><button type='submit' id='Task_ID' name='Task_ID' value='".$row->Uid."' class='btn btn-primary btn-sm glyphicon glyphicon-eye-open' data-toggle='tooltip' data-placement='top' title='View reports on this task'></button></form></td></tr>";
					} 
				?>
				
              </tbody>
			 
            </table>

<script src="http://listjs.com/no-cdn/list.js"></script>
			</div>
			<a type="button" class="btn btn-sm btn-large btn-default glyphicon glyphicon-circle-arrow-up" href="#table1"></a>
          </div>
		</div>
	</div>
 