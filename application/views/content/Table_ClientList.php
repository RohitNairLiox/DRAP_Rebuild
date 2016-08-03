<div class="container-fluid">
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h2 class="sub-header" id="ClientList">All Client List</h2>
		  <div class="scrollit">
            <table class="table table-striped table-hover table-responsive table-bordered table-condensed" id="table2">
             
			<thead>
				<tr>
                  <th>#</th>
                  <th>Client ID</th>
                  <th>Client Name</th>
                  <th>Client type</th>
                  <th>Referred By</th>
                  <th>Residence Contact No</th>
                  <th>Office Contact No</th>
                  <th>Mobile No</th>
                  <th>Alternate No</th>
                  <th>Email ID</th>
                  <th>PAN No</th>
                  <th>Service Tax ID</th>
                  <th>VAT No</th>
                  <th>CST No</th>
                  <th>PTRC No</th>
                  <th>PTEC No</th>
                  <th>TAN No</th>
                  <th class="text-center">Address</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($ClientList_Data as $row)
					{
						echo '<tr><td>'.$row->Uid.'</td><td>'.$row->Client_ID.'</td><td>'.$row->Client_name.'</td><td>'.$row->Client_type.'</td><td>'.$row->Referred_by.'</td><td>'.$row->ResContact.'</td><td>'.$row->OffcContact.'</td><td>'.$row->MobContact.'</td><td>'.$row->AltContact.'</td><td>'.$row->Email.'</td><td>'.$row->PAN_No.'</td><td>'.$row->ST_No.'</td><td>'.$row->VAT_No.'</td><td>'.$row->CST_No.'</td><td>'.$row->PTRC_No.'</td><td>'.$row->PTEC_No.'</td><td>'.$row->TAN_No.'</td><td class="text-center">'.$row->Address.'</td></tr>';
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