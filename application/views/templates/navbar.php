<link href="<?php echo base_url(); ?>ASSETS/CUSTOM/css/dashboard.css" rel="stylesheet">   

 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Daily Reporting Application</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url(); ?>AdminPanel_Overview">Dashboard</a></li>
           
            
			
            <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php if(isset($Emp_Name)){ echo $Emp_Name; } ?> <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url(); ?>AdminSetting">Settings <span class="glyphicon glyphicon-cog"></span></a></li>
           <li class="divider"></li>
          <li><a href="<?php echo base_url(); ?>logout">Log Out <span class="glyphicon glyphicon-log-out"></span></a></li>
        </ul>
      </li>
         
		  
		  </ul>
          <form class="navbar-form navbar-right">
            <input class="form-control" placeholder="Search..." type="text">
          </form>
        </div>
      </div>
    </nav>