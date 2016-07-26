<div class="container-fluid">
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h2 class="sub-header" id="healingData">Healing data</h2>
		  <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Session Date</th>
                  <th>Sch/Inst/Comm Name</th>
                  <th> SES </th>
                  <th>Medium</th>
                  <th>Co-Ordinator's Name</th>
				  <th>Trainer/Counsellor Name 1</th>
                  <th>Trainer/Counsellor Name 2</th>
                  <th>Age Group/Standard</th>
                  <th>Division</th>
				  <th>Boys</th>
                  <th>Girls</th>
                  <th>Pre Test</th>
                  <th>Post Test</th>
				  <th>Session Start Date</th>
                  <th>Session End Date</th>
                  <th>Inapp Cases Boys</th>
                  <th>Inapp Cases Girls</th>
				  <th>Total Cases Refered</th>
				</tr>
              </thead>
              <tbody>
				<?php 

					foreach($PSEChildren_Data as $row)
					{
						echo "<tr><td>".$row->Session_date."</td><td>".$row->Inst_Name."</td><td>".$row->Inst_SES."</td><td>".$row->Inst_Medium."</td><td>".$row->Co_Name."</td><td>".$row->Train_Name1."</td><td>".$row->Train_Name2."</td><td>".$row->Age_Group."</td><td>".$row->Division."</td><td>".$row->Boys."</td><td>".$row->Girls."</td><td>".$row->Pre_test."</td><td>".$row->Post_test."</td><td>".$row->Start_Date."</td><td>".$row->End_Date."</td><td>".$row->InappBoys."</td><td>".$row->InappGirls."</td><td>".$row->Refered."</td></tr>";
					} 
				?>
              </tbody>
            </table>
          </div>
		</div>
	</div>