<div class="container-fluid">
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<div class="row_space"></div>
		<h1 class="page-header">Settings <span class="glyphicon glyphicon-cog" style="font-size: 28px;"></span></h1>
		<div class="row_space"></div>
		<h2 class="sub-header"> Change Password <span class="glyphicon glyphicon-lock" style="font-size: 24px;"></span></h2>

		<form role="form" method="post" action="<?php echo base_url(); ?>UserPswdChange">
		<div class="row">
				<div class="form-group">
			<div class="col-sm-8">
				<label for="userName">User Name:</label>
			    <input type="text" class="form-control" value="<?php echo $this->session->userdata('userName'); ?>" id="userName"  data-toggle="tooltip" data-placement="top" title="User Name" disabled required>
			</div>
			  </div>
		</div>
	<br>
		<div class="row">
			  <div class="form-group">
			<div class="col-sm-8">
				<label for="password">Enter New Password:</label>
			    <input type="text" class="form-control" id="password" placeholder="Enter the New Password" data-toggle="tooltip" data-html="true" data-placement="right" title="<p class='text-left'><strong>Must Contain</strong></p><p class='text-left'><em>At least <b>:</b></em></p> <ul><li class='text-left'>one number</li><li class='text-left'>one uppercase letter</li><li class='text-left'>one lowercase letter</li><li class='text-left'>8 or more characters</li>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required/>
			 </div>
			</div>
		</div>
	<br>
		<div class="row">
		       <div class="form-group">
			 <div class="col-sm-8">
				<label for="password_verify">Re-enter password</label>
			    <input type="text" class="form-control" id="password_verify" name="password_verify" placeholder="Re-enter the New Password" data-toggle="tooltip" data-placement="top" title="Re-enter the password" oninput="check(this)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required/>
		    </div>
				</div>
		</div>
	<br>		
			  <button type="submit" class="btn btn-default rippler rippler-inverse">Submit</button>
		
		</form>
	</div>
</div>

<script language='javascript' type='text/javascript'>
    function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Password Must be Matching.');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
</script>
