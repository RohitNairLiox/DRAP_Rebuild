<div class="container-fluid">
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h2 class="sub-header" id="TaskList">Daily Reports</h2>
		  <div class="" id="userReport">
		  <div class="scrollit">
		  <div class="row">
		  <input class="search form-control col-xs-4" placeholder="Search" />
		  <br><br>
		  <button class="sort btn btn-primary pull-right" data-sort="name"><big><span class="glyphicon glyphicon-sort-by-alphabet"></span></big> Sort <big> <span class="glyphicon glyphicon-sort-by-alphabet-alt"></span></big></button>
		  </div>
            <table class="table table-striped table-hover" id="table1">
              <thead class="thead-inverse">
                <tr>
	                  <th>#</th>
	                  <th class="text-center">Client Name</th>
	                  <th class="text-center">Client ID</th>
	                  <th class="text-center">Reported by</th>
	                  <th class="text-center">Report</th>
	                  <th class="text-center">Status of the task reported</th>
	                  <th class="text-center">Date of Reporting</th>
				 </tr>
              </thead>
			  
              <tbody class="list">
			  
				<?php 

					foreach($DailyReport_Data as $row)
					{
						echo "<tr><td>".$row->UID."</td><td class='text-center name'>".$row->Client_name."</td><td class='text-center ClientID'>".$row->Client_ID."</td><td class='text-center reportingUser'>".$row->Reporting_person."</td><td class='text-center reportContent'>".$row->Report_Content."</td><td class='text-center taskStatus'>".$row->Status."</td><td class='text-center reportDate'>".$row->Reporting_Date."</td></tr>";
					} 
				?>
				
              </tbody>
			 
            </table>
            <script src="<?php echo  base_url(); ?>ASSETS/list/list.js"></script>
<script type="text/javascript">
	var options = {
				  valueNames: [ 'name', 'ClientID', 'reportingUser', 'taskStatus', 'reportDate' ]
				};

var userList = new List('userReport', options);
</script>
			</div>
			<a type="button" class="btn btn-sm btn-large btn-default glyphicon glyphicon-circle-arrow-up" href="#table1"></a>

          </div>
		</div>
	</div>