<?php include('includes/header.php'); ?>

 <div class="row">
 	<div class="col-md-12">
 		<div class="card">
 			<div class="card-header">
 				<h4>
 					Add Teacher
 					<a href="teachers.php" class="btn btn-danger float-end">Back</a>
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

 			  $teacher = getById('admin',checkParamId('id'));
 			  if($teacher['status'] == 200)
 			  {
 			  	?>

                <input type="hidden" name="teacherId" value="<?= $teacher['data']['id'] ;?>" required >

                  <div class="row">
 					<div class="col-md-6">
 					 <div class="mb-3">
 					 <label>Name</label>
 					 <input type="text" name="name" value="<?= $teacher['data']['name'] ;?>" required class="form-control">
 				     </div>
 					</div>
 					<div class="col-md-6">
 						<div class="mb-3">
 					<label>hp</label>
 					<input type="text" name="hp" value="<?= $teacher['data']['hp'] ;?>" required class="form-control">
 				</div>
 					</div>
 					<div class="col-md-6">
 						<div class="mb-3">
 					<label>Email</label>
 					<input type="email" name="email" value="<?= $teacher['data']['email'] ;?>" required class="form-control">
 				</div>
 					</div>
 					<div class="col-md-6">
 						<div class="mb-3">
 					<label>Password</label>
 					<input type="password" name="password" required class="form-control">
 				</div>
 					</div>
 					<div class="col-md-6">
 						<div class="mb-3">
 					<label>Confirm Password</label>
 					<input type="password" name="password2" required class="form-control">
 				</div>
 					</div>
 					<div class="col-md-6">
 					 <div class="mb-3">
 						<button type="submit" name="updateteacher" class="btn btn-primary">Update</button>
 					</div>
 				</div>
 				</div>
 			  	<?php
 			  }
 			  else
 			  {
 			  	echo '<h5>'.$teacher['message'].'</h5>';
 			  }
 			?>

 			</form>
 			</div>
 		</div>
 	</div>
 </div>

<?php include('includes/footer.php'); ?>