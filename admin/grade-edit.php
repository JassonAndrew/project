<?php include('includes/header.php'); ?>
<?php include('connection.php'); ?>

 <div class="row">
 	<div class="col-md-12">
 		<div class="card">
 			<div class="card-header">
 				<h4>
 					Edit Student
 					<a href="grade.php" class="btn btn-danger float-end">Back</a>
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

 			  $grade = getById('grade',checkParamId('id'));
 			  if($grade['status'] == 200)
 			  {
 			  	?>

                <input type="hidden" name="gradeId" value="<?= $grade['data']['id'] ;?>" required >

                  <div class="row">
 					<div class="col-md-6">
 					 <div class="mb-3">
 					 <label for="student">Student</label>
 					 <select name="student" id="student" class="form-control" required>
 					 <option value="">Select Student</option>
 					 <?php
 					    $studentsQuery = "SELECT NRP FROM student";
 					    $studentsResult = mysqli_query($connection, $studentsQuery);
 					    while ($student = mysqli_fetch_assoc($studentsResult))
 					    {
 					    	$selected = ($student['NRP'] == $user['data']['student']) ?
 					    	'selected' : '';
 					    	echo "<option value='{$student['NRP']}' {$selected}>{$student['NRP']}</option>";
 					    }
 					 ?>
 					</select>
 	                    </div>
 					</div>
 					<div class="col-md-6">
 						<div class="mb-3">
 					<label for="teacher">Teacher</label>
 					 					 <select name="student" id="student" class="form-control" required>
 					 <option value="">Select Teacher</option>
 					 <?php
 					    $teachersQuery = "SELECT hp FROM admin";
 					    $teachersResult = mysqli_query($connection, $teachersQuery);
 					    while ($teacher = mysqli_fetch_assoc($teachersResult))
 					    {
 					    	$selected = ($teacher['hp'] == $user['data']['admin']) ?
 					    	'selected' : '';
 					    	echo "<option value='{$teacher['hp']}' {$selected}>{$teacher['hp']}</option>";
 					    }
 					 ?>
 					</select>
 				</div>
 					</div>
 					<div class="col-md-6">
 						<div class="mb-3">
 					<label>Score 1</label>
 					<input type="text" name="score1" value="<?= $grade['data']['score1'] ;?>" required class="form-control">
 				</div>
 					</div>
 					<div class="col-md-6">
 						<div class="mb-3">
 					<label>Score 2</label>
 					<input type="text" name="score2" value="<?= $grade['data']['score2'] ;?>" required class="form-control">
 				</div>
 					</div>
 					<div class="col-md-6">
 						<div class="mb-3">
 					<label>Score 3</label>
 					<input type="text" name="score3" value="<?= $grade['data']['score3'] ;?>"  required class="form-control">
 				</div>
 					</div>
 					<div class="col-md-6">
 					 <div class="mb-3">
 						<button type="submit" name="updategrade" class="btn btn-primary">Update</button>
 					</div>
 				</div>
 				</div>
 			  	<?php
 			  }
 			  else
 			  {
 			  	echo '<h5>'.$grade['message'].'</h5>';
 			  }
 			?>

 			</form>
 			</div>
 		</div>
 	</div>
 </div>

<?php include('includes/footer.php'); ?>