function taskList_CName() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("Name_Client");
  filter = input.value.toUpperCase();
  table = document.getElementById("table1");
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
function taskList_TDesc() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("Descr_Task");
  filter = input.value.toUpperCase();
  table = document.getElementById("table1");
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
function taskList_SDate() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("Date_Start");
  filter = input.value.toUpperCase();
  table = document.getElementById("table1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[6];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function taskList_TSeverity() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("Severity_Task");
  filter = input.value.toUpperCase();
  table = document.getElementById("table1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[9];
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

	   var numOfVisibleRows = $('#table1 tbody tr:visible').length;
	   $("#Tl_rowCount").text(numOfVisibleRows + " Rows");

    	$("#Name_Client").keyup(function(){
    		var numOfVisibleRow = $('#table1 tbody tr:visible').length;
	   		$("#Tl_rowCount").text(numOfVisibleRow + " Rows");
    	});
       	$("#Descr_Task").keyup(function(){
    		var numOfVisibleRow = $('#table1 tbody tr:visible').length;
	   		$("#Tl_rowCount").text(numOfVisibleRow + " Rows");
    	});
       	$("#Date_Start").keyup(function(){
    		var numOfVisibleRow = $('#table1 tbody tr:visible').length;
	   		$("#Tl_rowCount").text(numOfVisibleRow + " Rows");
    	});
       	$("#Severity_Task").keyup(function(){
    		var numOfVisibleRow = $('#table1 tbody tr:visible').length;
	   		$("#Tl_rowCount").text(numOfVisibleRow + " Rows");
    	});
	}); 