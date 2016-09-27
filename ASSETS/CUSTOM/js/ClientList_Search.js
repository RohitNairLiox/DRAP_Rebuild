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