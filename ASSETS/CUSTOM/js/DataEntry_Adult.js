    $(document).ready(function(){
        var date_inputParent = $('input[name="parentDate"]'); //our date input has the name "date"
        var date_inputTeacher = $('input[name="teacherDate"]'); //our date input has the name "date"
        var date_inputStaff = $('input[name="staffDate"]'); //our date input has the name "date"
        var parentContainer = $('.Parent_Form form .ParentDatePicker').length>0 ? $('.Parent_Form form .ParentDatePicker').parent() : "body";
        var teacherContainer = $('.Teacher_Form form .TeacherDatePicker').length>0 ? $('.Teacher_Form form .TeacherDatePicker').parent() : "body";
        var staffContainer = $('.Staff_Form form .StaffDatePicker').length>0 ? $('.Staff_Form form .StaffDatePicker').parent() : "body";
        date_inputStaff.datepicker({
            format: 'dd/mm/yyyy',
            container: staffContainer,
			autoclose: true,
			todayHighlight: true,
            
        })
		date_inputParent.datepicker({
            format: 'dd/mm/yyyy',
            container: parentContainer,
			autoclose: true,
			todayHighlight: true,
            
        })
		date_inputTeacher.datepicker({
            format: 'dd/mm/yyyy',
            container: teacherContainer,
			autoclose: true,
			todayHighlight: true,
            
        })
		
    })
	
function resetParents() {
    document.getElementById("ParentForm").reset();
}
function resetTeachers() {
    document.getElementById("TeacherForm").reset();
}
function resetStaffs() {
    document.getElementById("StaffForm").reset();
}function resetParents() {
    document.getElementById("ParentForm").reset();
}
function resetTeachers() {
    document.getElementById("TeacherForm").reset();
	var x = document.getElementById("teacher-NoMales");
	var y = document.getElementById("teacher-NoFemales");
		x.value = 0;
		y.value = 0;
}
function resetStaffs() {
    document.getElementById("StaffForm").reset();
}

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});