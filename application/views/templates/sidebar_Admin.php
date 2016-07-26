<style>
    .xtraLarge{font-size:18px;}
</style>
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li> <button class="btn btn-link rippler rippler-bs-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><big class="xtraLarge"><span class="glyphicon glyphicon-dashboard"></span> Overview</big><span class="caret"></span></button></li>
                 <div class="collapse" id="collapseExample">
                      <ul style="list-style-type: none;display: block;">
            <hr>
                        <li><a href="<?php echo base_url(); ?>NewTaskList"><big><span class="glyphicon glyphicon-eye-open"></span>  New Task List</big></a></li>
						<hr>
                        <li><a href="<?php echo base_url(); ?>CurrentTaskList"><big><span class="glyphicon glyphicon-eye-open"></span> Current Task List</big></a></li>
						<hr>
                        <li><a href="<?php echo base_url(); ?>CompletedTaskList"><big><span class="glyphicon glyphicon-eye-open"></span> Completed Task List</big></a></li>
						<hr><hr>
                        <li><a href="<?php echo base_url(); ?>AllClientList"><big><span class="glyphicon glyphicon-eye-open"></span> All Client's List</big></a></li>       
                      </ul>
                </div>
         </ul>
         <hr>
          <ul class="nav nav-sidebar">
            <li><a href="<?php echo base_url(); ?>New_Client"><big class="xtraLarge"><span class="glyphicon glyphicon-plus-sign"></span> Add New Client</big></a></li>
            <li><a href="<?php echo base_url(); ?>New_Task"><big class="xtraLarge"><span class="glyphicon glyphicon-plus-sign"></span> Add New Task</big></a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="<?php echo base_url(); ?>View_DailyReport"><big><span class="glyphicon glyphicon-eye-open"></span> View All Daily Reports</big></a></li>    
          </ul>
      </div>