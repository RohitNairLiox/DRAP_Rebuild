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
						echo "<tr><td data-container='body' data-toggle='tooltip' data-placement='top' title='Emp UID'>".$row->Uid."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='Employee Name'>".$row->Name."</td><td class='text-center'data-container='body' data-toggle='tooltip' data-placement='top' title='Username'>".$row->Username."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='Password'>".$row->Password."</td><td class='text-center' data-container='body' data-toggle='tooltip' data-placement='top' title='User Role'>".$row->Role."</td><td><form method='post' action='".base_url()."Edit_User'><button class='btn btn-primary glyphicon glyphicon-pencil rippler rippler-inverse pull-right' value='".$row->Uid."' name='Emp_IDEdit' id='Emp_IDEdit'></button></form></td><td><form method='post' action='".base_url()."Delete_User'><button type='submit' id='Emp_ID' name='Emp_ID' value='".$row->Uid."' class='btn btn-danger btn-sm rippler rippler-inverse'  data-container='body' data-toggle='tooltip' data-placement='right' title='Delete Employee Record'><big><span class='glyphicon glyphicon-trash'></span></big></button></form></td></tr>";
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