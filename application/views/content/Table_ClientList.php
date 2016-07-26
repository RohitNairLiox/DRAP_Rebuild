<div class="container-fluid">
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h2 class="sub-header" id="ClientList">All Client List</h2>
		  <div class="scrollit">
            <table class="table table-striped table-hover table-bordered table-condensed" id="table2">
             
			<thead>
				<tr>
                  <th>#</th>
                  <th>Client ID</th>
                  <th>Client Name</th>
                  <th>Client type</th>
                  <th>Referred By</th>
                  <th>Contact No</th>
                  <th>Email ID</th>
                  <th class="text-center">Address</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($ClientList_Data as $row)
					{
						echo '<tr><td>'.$row->Uid.'</td><td>'.$row->Client_ID.'</td><td>'.$row->Client_name.'</td><td>'.$row->Client_type.'</td><td>'.$row->Referred_by.'</td><td>'.$row->Contact.'</td><td>'.$row->Email.'</td><td class="text-center">'.$row->Address.'</td></tr>';
					}
				?>	
			</tbody>
			 
            </table>


			</div>
			<a type="button" class="btn btn-sm btn-large btn-default glyphicon glyphicon-circle-arrow-up" href="#table2"></a>

          
		</div>
	</div>
<script language="javascript" type="text/javascript">

var table2_Props = 	{
				rows_counter: true,
				rows_counter_text: "Total rows: ",
				btn_reset: true,
				bnt_reset_text: "Show all"
			};
var x = document.getElementById("table2").rows.length;


//<![CDATA[
setFilterGrid("table2",table2_Props);
//]]>
</script>