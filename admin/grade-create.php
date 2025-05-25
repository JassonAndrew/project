<?php include('includes/header.php'); ?>
<?php include('connection.php'); ?>

 <div class="row">
 	<div class="col-md-12">
 		<div class="card">
 			<div class="card-header">
 				<h4>
 					Add Grade
 					<a href="grade.php" class="btn btn-danger float-end">Back</a>
 				</h4>
 			</div>
 			<div class="card-body">

 			<?= alertMessage(); ?>
 			
 			<form action="code.php" method="POST">
 				<div class="row">
 					<div class="col-md-6">
 					 <div class="mb-3">
 					 <label for="student">Student</label>
 					 <select name="student" id="student" class="form-control">
 					 <option value="">Select Student</option>
 					 <?php

 					 $query = mysqli_query($connection, "SELECT NRP FROM student");
 					 while ($data = mysqli_fetch_array($query)){
 					 	echo"<option value='{$data['NRP']}'>{$data['NRP']}
 					 	</option>";
 					 }
 					 ?>
 					</select>
 				     </div>
 					</div>
                     <div class="col-md-6">
 					 <div class="mb-3">
 					 <label for="teacher">Teacher</label>
 					 <select name="teacher" id="teacher" class="form-control">
 					 <option value="">Select Teacher</option>
 					 <?php

 					 $query = mysqli_query($connection, "SELECT hp FROM admin");
 					 while ($data = mysqli_fetch_array($query)){
 					 	echo"<option value='{$data['hp']}'>{$data['hp']}
 					 	</option>";
 					 }
 					 ?>
 					</select>
 				     </div>
 				     </div>
 					<div class="col-md-6">
 						<div class="mb-3">
 					<label>score 1</label>
 					<input type="text" name="score1" class="form-control">
 				</div>
 					</div>
 					<div class="col-md-6">
 						<div class="mb-3">
 					<label>score 2</label>
 					<input type="text" name="score2" class="form-control">
 				</div>
 					</div>
 					<div class="col-md-6">
 						<div class="mb-3">
 					<label>score 3</label>
 					<input type="text" name="score3" class="form-control">
 				</div>
 					</div>
 					<div class="col-md-6">
 					 <div class="mb-3">
 						<button type="submit" name="savegrade" class="btn btn-primary">Save</button>
 					</div>
 				</div>
 				</div>
 			</form>
 			</div>
 		</div>
 	</div>
 </div>

<?php include('includes/footer.php'); ?>