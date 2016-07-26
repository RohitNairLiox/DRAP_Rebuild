<div class="container-fluid">
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h2 class="sub-header" id="TaskList">Daily Reports</h2>
		  <div class="">
		  <div class="scrollit">
            <table class="table table-striped table-hover" id="table1">
              <thead class="thead-inverse">
                <tr>
	                  <th>#</th>
	                  <th class="text-center">Client Name</th>
	                  <th class="text-center">Reported by</th>
	                  <th class="text-center">Report</th>
	                  <th class="text-center">Status of the task reported</th>
	                  <th class="text-center">Date of Reporting</th>
				 </tr>
              </thead>
			  
              <tbody>
			  
				<?php 

					foreach($DailyReport_Data as $row)
					{
						echo "<tr><td>".$row->UID."</td><td class='text-center'>".$row->Client_name."</td><td class='text-center'>".$row->Reporting_person."</td><td class='text-center'>".$row->Report_Content."</td><td class='text-center'>".$row->Status."</td><td class='text-center'>".$row->Reporting_Date."</td></tr>";
					} 
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