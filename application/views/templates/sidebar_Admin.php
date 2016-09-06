<style>
    .xtraLarge{font-size:18px;}
</style>
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li> <button class="btn btn-link rippler rippler-bs-primary" type="button" data-toggle="collapse" data-target="#collapseOverview" aria-expanded="false" aria-controls="collapseOverview"><big class="xtraLarge"><span class="glyphicon glyphicon-dashboard"></span> Overview</big><span class="caret"></span></button></li>
                 <div class="collapse" id="collapseOverview">
                      <ul style="list-style-type: none;display: block;">
            <hr>
                        <li><a href="<?php echo base_url(); ?>CurrentTaskList"><big><span class="glyphicon glyphicon-eye-open"></span>  Current Task List</big></a></li>
            <hr>
                        <li><a href="<?php echo base_url(); ?>CompletedTaskList"><big><span class="glyphicon glyphicon-eye-open"></span> Completed Task List</big></a></li>
						<hr>
                        <li><a href="<?php echo base_url(); ?>AllClientList"><big><span class="glyphicon glyphicon-eye-open"></span> All Client's List</big></a></li>       
                      </ul>
                </div>
                <hr>
                         <li> <button class="btn btn-link rippler rippler-bs-primary" type="button" data-toggle="collapse" data-target="#collapseAddNew" aria-expanded="false" aria-controls="collapseAddNew"><big class="xtraLarge"><span class="glyphicon glyphicon-wrench"></span> Manage </big><span class="caret"></span></button></li>
                         <div class="collapse" id="collapseAddNew">
                          <ul class="nav nav-sidebar pull-right" style="padding:10px;">
                            <li><a href="<?php echo base_url(); ?>New_Task"><big><span class="glyphicon glyphicon-plus-sign"></span> Add New Task</big></a></li>
                            <li><a href="<?php echo base_url(); ?>New_Client"><big><span class="glyphicon glyphicon-plus-sign"></span> Add New Client </big></a></li>
                            <li><a href="<?php echo base_url(); ?>Add_NewEmployee"><big><span class="glyphicon glyphicon-plus-sign"></span> Add New Employee </big></a></li>
                          </ul>
                          </div>


         </ul>
         

          <ul class="nav nav-sidebar">
            <li><a href="<?php echo base_url(); ?>View_DailyReport"><big><span class="glyphicon glyphicon-eye-open"></span> View All Daily Reports</big></a></li>    
          </ul>
      </div>