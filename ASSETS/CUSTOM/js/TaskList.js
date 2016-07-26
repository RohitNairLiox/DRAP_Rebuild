/* datepicker */

    $(document).ready(function(){
        var date_inputStart=$('input[name="startDate"]'); //our date input has the name "date"
        var date_inputEnd=$('input[name="endDate"]'); //our date input has the name "date"
        var Startcontainer=$('.bootstrap-iso form .startDate').length>0 ? $('.bootstrap-iso form .startDate').parent() : "body";
        var Endcontainer=$('.bootstrap-iso form .endDate').length>0 ? $('.bootstrap-iso form .endDate').parent() : "body";
      
		date_inputStart.datepicker({
            format: 'dd/mm/yyyy',
            container: Startcontainer,
			
            todayHighlight: true,
            autoclose: true,
        })
		date_inputEnd.datepicker({
            format: 'dd/mm/yyyy',
            container: Endcontainer,
			
            todayHighlight: true,
            autoclose: true,
        })
    })
	
function resetTaskListForm() {
    document.getElementById("TaskListForm").reset();
}
