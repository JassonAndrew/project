<?php include('includes/header.php'); ?>

 <div class="row">
 	<div class="col-md-12">
 		<div class="card">
 			<div class="card-header">
 				<h4>
 					Edit Student
 					<a href="students.php" class="btn btn-danger float-end">Back</a>
 				</h4>
 			</div>
 			<div class="card-body">

 			<?= alertMessage(); ?>
 				
 			<form action="code.php" method="POST">

 			<?php
 			  $paramResult = checkParamId('id');
 			  if(!is_numeric($paramResult)){
 			  	echo '<h5>'.$paramResult.'</h5>';
 			  	return false;
 			  }

 			  $student = getById('student',checkParamId('id'));
 			  if($student['status'] == 200)
 			  {
 			  	?>

                <input type="hidden" name="studentId" value="<?= $student['data']['id'] ;?>" required >

                  <div class="row">
 					<div class="col-md-6">
 					 <div class="mb-3">
 					 <label>Name</label>
 					 <input type="text" name="name" value="<?= $student['data']['name'] ;?>" required class="form-control">
 				     </div>
 					</div>
 					<div class="col-md-6">
 						<div class="mb-3">
 					<label>NRP</label>
 					<input type="text" name="NRP" value="<?= $student['data']['NRP'] ;?>" required class="form-control">
 				</div>
 					</div>
 					<div class="col-md-6">
 						<div class="mb-3">
 					<label>Email</label>
 					<input type="email" name="email" value="<?= $student['data']['email'] ;?>" required class="form-control">
 				</div>
 					</div>
 					<div class="col-md-6">
 						<div class="mb-3">
 					<label>Field of Study</label>
 					<input type="text" name="field_of_study" value="<?= $student['data']['field_of_study'] ;?>" required class="form-control">
 				</div>
 					</div>
 					<div class="col-md-6">
 						<div class="mb-3">
 					<label>Address</label>
 					<input type="text" name="address" value="<?= $student['data']['address'] ;?>"  required class="form-control">
 				</div>
 					</div>
 					<div class="col-md-3">
 						<div class="mb-3">
 					<label>Gender</label>
 					<select name="gender" value="<?= $student['data']['gender'] ;?>"  required class="form-select">
 						<option value="male">Male</option>
 						<option vlaue="female">Female</option>
 					</select>
 				</div>
 					</div>
 					<div class="col-md-6">
 					 <div class="mb-3">
 						<button type="submit" name="updatestudent" class="btn btn-primary">Update</button>
 					</div>
 				</div>
 				</div>
 			  	<?php
 			  }
 			  else
 			  {
 			  	echo '<h5>'.$student['message'].'</h5>';
 			  }
 			?>

 			</form>
 			</div>
 		</div>
 	</div>
 </div>

<?php include('includes/footer.php'); ?>