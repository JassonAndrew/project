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
 				<div class="row">
 					<div class="col-md-6">
 					 <div class="mb-3">
 					 <label>Name</label>
 					 <input type="text" name="name" class="form-control">
 				     </div>
 					</div>
 					<div class="col-md-6">
 						<div class="mb-3">
 					<label>hp</label>
 					<input type="text" name="hp" class="form-control">
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
 					<label>Password</label>
 					<input type="password" name="password" class="form-control">
 				</div>
 					</div>
 					<div class="col-md-6">
 						<div class="mb-3">
 					<label>Confirm Password</label>
 					<input type="password" name="password2" class="form-control">
 				</div>
 					</div>
 					<div class="col-md-6">
 					 <div class="mb-3">
 						<button type="submit" name="saveteacher" class="btn btn-primary">Save</button>
 					</div>
 				</div>
 				</div>
 			</form>
 			</div>
 		</div>
 	</div>
 </div>

<?php include('includes/footer.php'); ?>