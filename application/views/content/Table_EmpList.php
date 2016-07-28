<hr>
<div class="row_space"></div>
<div class="row_space"></div>
<div class="row_space"></div>
<div class="container-fluid">
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h2 class="sub-header" id="TaskList">Current Employee List</h2>
		  <div class="">
		  <div class="scrollit">
            <table class="table table-striped table-hover" id="table1">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th class="text-center">Employee Name</th>
                  <th class="text-center">Username</th>
                  <th class="text-center">Password</th>
                  <th class="text-center">Role</th>
				</tr>
              </thead>
			  
              <tbody>
			  
				<?php 

					foreach($Emp_List as $row)
					{
						echo "<tr><td data-container='body' data-toggle='tooltip' data-placement='top' title='Session Date'>".$row->Uid."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='Sch/Inst/Comm Name'>".$row->Name."</td><td class='text-center'data-container='body' data-toggle='tooltip' data-placement='top' title='SES of the Institute'>".$row->Username."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='Medium of Language'>".$row->Password."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='Name of the Coordinator'>".$row->Role."</td><form method='post' action='".base_url()."Delete_User' ><td><button type='submit' id='Emp_ID' name='Emp_ID' value='".$row->Uid."' class='btn btn-danger btn-sm rippler rippler-inverse'><strong>Delete</strong></button></td></form></tr>";
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