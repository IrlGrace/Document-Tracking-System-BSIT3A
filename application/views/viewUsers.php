<head>
	<link href="<?php echo base_url('bootstrap/css/Staff-Designs.css'); ?>" rel="stylesheet" />
</head>	
<div col-xs-9 col-sm-9 col-md-9 col-lg-9">
		    <div id="content">
		      	<div id="main-content">
					<div class="panel-heading" id="head">
					    <ol class="breadcrumb pull-right">
							<li><a href="<?php echo base_url('DocumentStatus/viewDocuments'); ?>" title="Home"><span class="glyphicon glyphicon-home"></span></a></li> 
							<li class="active">Manage User Profile</li>
					    </ol>
						<h3><span class="glyphicon glyphicon-inbox"></span> Manage User Profile</h3>       
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<a href="<?php echo base_url('ManageAdmin/addUser'); ?>" class="btn btn-primary pull-right" ><span class="glyphicon glyphicon-plus"></span> Add User</a>

							<a href="#" class="btn btn-success pull-right" data-toggle="modal" data-target="#addPositionModal"><span class="glyphicon glyphicon-plus"></span> Add Position</a>
						</div>		
						<div class="table-responsive">
							<table id="myTable" class="docstatus table-bordered table-hover table-responsive table-center text-center" width="100%">
								<tr>
									<th>Username</th>
									<th>Password</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Email Address</th>
									<th>College/Office</th>
									<th>Department</th>
									<th>Position</th>
									<th>Action</th>
								</tr>
								<?php
									$thereis=false;
									foreach($userList as $us){
										echo '
											<tr>
												<td>'.$us['username'].'</td>
												<td>'.$us['password'].'</td>
												<td>'.$us['firstname'].'</td>
												<td>'.$us['lastname'].'</td>
												<td>'.$us['email'].'</td>
												<td>'.$us['collegeId'].'</td>
												<td>'.$us['department'].'</td>
												<td>'.$us['position'].'</td>
												<td><a href="'.base_url('ManageAdmin/editUser/'.$us['username']).'" class="btn btn-info btn-sm">Edit</a>'; ?>
												<a href="#" class="btn btn-danger btn-sm">Block</a>
								<?php	echo '	</td>
												';
										$thereis=true;
									}
									if($thereis==false){
										echo '<tr><td colspan="9">No user registered...</td></tr>';
									}
								?>
							</table>
						</div>
					</div>
				</div>
			</div>
</div>
   <!--MODAL FOR ADD POSITION-->
          <div class="modal fade" id="addPositionModal" role="dialog">
            <div class="modal-dialog model-sm">
              <!-- Modal content-->
              <form role="form" method="post" class="modal-content" id="newpassword_form" >
              	                  
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Position</h4>
                  </div>
                  <div class="modal-body">
                  	<div class="form-group">
                      <label for="positionId">Position Id: </label>
                      <input class="form-control" type="text" id="positionId" name="positionId" readonly />
                    </div>
                   
                    <div class="form-group">
                      <label for="collegeId"> College Id: </label>
                      <select id="collegeId" class="form-control">

                      </select>
                    </div>
                    <div class="form-group">
                      <label for="position"> Position: </label>
                      <input class="form-control" type="text" id="position" name="position" />
                    </div>
                     <div class="text-danger">
                        <?php echo validation_errors(); ?>
                    </div> 
                  
                  </div>
                  <div class="modal-footer">
                    <div class="form-group">
                      <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>Add Position</button>
                    </div>
                  </div>
                 
              </form>
            </div>
          </div>
          <!--MODAL END-->
<!--
	<script type="text/javascript">
      function deleteUser(id){
       // console.log(id);
        var ans = confirm("Are you sure to delete this user?");
       // alert(id);
        if(ans==true){
          //redirect to delete method
          var url="<?php echo base_url('ManageAdmin/removeUser/');?>"+id;
          location.href = url;
          alert("The user has been successfully deleted!");
        }
      }
     
 </script>
 -->