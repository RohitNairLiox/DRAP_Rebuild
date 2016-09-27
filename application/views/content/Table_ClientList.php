<div class="container-fluid">
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="Cl_Table">
		<h2 class="sub-header" id="ClientList">All Client List</h2>
<div class="well">
<big class="text-muted">Search:</big>
<p id="Cl_rowCount"></p>
<div class="row">
  <div class="col-md-3">
  	<input type="text" onkeyup="clientList_CName()" class="form-control" name="Cl_Name_Client" id="Cl_Name_Client" placeholder="Search By Client Name" />
  </div>
  <div class="col-md-3">
  	<input type="text" onkeyup="clientList_RBy()" class="form-control" name="Cl_RBy" id="Cl_RBy" placeholder="Search By Referred by Name">
  </div>
  <div class="col-md-3">
  	<input type="text" onkeyup="clientList_PNo()" class="form-control" name="Cl_PNo" id="Cl_PNo" placeholder="Search by PAN No.">
  </div>
  <div class="col-md-3">
  	<input type="text" onkeyup="clientList_Address()" class="form-control" name="Cl_Address" id="Cl_Address" placeholder="Search by Address">
  </div>
</div>
</div>
		  <div class="scrollit" Style="overflow: auto; max-height: 600px;">
            <table class="table table-striped table-hover table-responsive table-bordered table-condensed" id="table2" >
             
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
	<script>
function clientList_CName() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("Cl_Name_Client");
  filter = input.value.toUpperCase();
  table = document.getElementById("table2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function clientList_RBy() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("Cl_RBy");
  filter = input.value.toUpperCase();
  table = document.getElementById("table2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function clientList_PNo() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("Cl_PNo");
  filter = input.value.toUpperCase();
  table = document.getElementById("table2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[10];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function clientList_Address() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("Cl_Address");
  filter = input.value.toUpperCase();
  table = document.getElementById("table2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[17];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

	$(document).ready(function(){

	   var numOfVisibleRows = $('#table2 tbody tr:visible').length;
	   $("#Cl_rowCount").text(numOfVisibleRows + " Rows");

    	$("#Cl_Name_Client").keyup(function(){
    		var numOfVisibleRow = $('#table2 tbody tr:visible').length;
	   		$("#Cl_rowCount").text(numOfVisibleRow + " Rows");
    	});
       	$("#Cl_RBy").keyup(function(){
    		var numOfVisibleRow = $('#table2 tbody tr:visible').length;
	   		$("#Cl_rowCount").text(numOfVisibleRow + " Rows");
    	});
       	$("#Cl_PNo").keyup(function(){
    		var numOfVisibleRow = $('#table2 tbody tr:visible').length;
	   		$("#Cl_rowCount").text(numOfVisibleRow + " Rows");
    	});
       	$("#Cl_Address").keyup(function(){
    		var numOfVisibleRow = $('#table2 tbody tr:visible').length;
	   		$("#Cl_rowCount").text(numOfVisibleRow + " Rows");
    	});
	}); 

</script>