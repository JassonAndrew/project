<?php include('includes/header.php'); ?>

 <div class="row">
 	<div class="col-md-12">
 		<div class="card">
 			<div class="card-header">
 				<h4>
 					Add Student
 					<a href="students.php" class="btn btn-danger float-end">Back</a>
 				</h4>
 			</div>
 			<div class="card-body">

 			<?= alertMessage(); ?>
 			
 			<form action="code.php" method="POST">
 				<div class="row">
 					<div class="col-md-6">
 					 <div class="mb-3">
 					 <label>Name</label>
 					 <input type="text" name="name" class="form-control">
 				     </div>
 					</div>
 					<div class="col-md-6">
 						<div class="mb-3">
 					<label>NRP</label>
 					<input type="text" name="NRP" class="form-control">
 				</div>
 					</div>
 					<div class="col-md-6">
 						<div class="mb-3">
 					<label>Email</label>
 					<input type="email" name="email" class="form-control">
 				</div>
 					</div>
 					<div class="col-md-6">
 						<div class="mb-3">
 					<label>Field of Study</label>
 					<input type="text" name="field_of_study" class="form-control">
 				</div>
 					</div>
 					<div class="col-md-6">
 						<div class="mb-3">
 					<label>Address</label>
 					<input type="text" name="address" class="form-control">
 				</div>
 					</div>
 					<div class="col-md-3">
 						<div class="mb-3">
 					<label>Gender</label>
 					<select name="gender" class="form-select">
 						<option value="male">Male</option>
 						<option vlaue="female">Female</option>
 					</select>
 				</div>
 					</div>
 					<div class="col-md-6">
 					 <div class="mb-3">
 						<button type="submit" name="savestudent" class="btn btn-primary">Save</button>
 					</div>
 				</div>
 				</div>
 			</form>
 			</div>
 		</div>
 	</div>
 </div>

<?php include('includes/footer.php'); ?>