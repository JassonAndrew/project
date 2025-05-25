<?php include('includes/header.php'); ?>

 <div class="row">
 	<div class="col-md-12">
 		<div class="card">
 			<div class="card-header">
 				<h4>
 					Student Grade
 					<a href="grade-create.php" class="btn btn-primary float-end">Grade Students</a>
 				</h4>
 			</div>
 			<div class="card-body">

 			<?= alertMessage(); ?>

 			<div class="table-responsive">
 			 <table class="table table-striped">
 				<thead>
 					<tr>
 						<th>Id</th>
 						<th>Student</th>
 						<th>Teacher</th>
 						<th>Score 1</th>
 						<th>Score 2</th>
 						<th>Score 3</th>
 					</tr>
 				</thead>
 				<tbody>
 					<?php

 					$grades = getAll('grade');
 					if(mysqli_num_rows($grades) > 0)
 					{
 						$i=1;
 						foreach($grades as $gradeItem)
 						{
 							?>
 							<tr>
 						         <td><?= $i; ?></td>
 						         <td><?= $gradeItem['student']; ?></td>
 						         <td><?= $gradeItem['teacher']; ?></td>
 						         <td><?= $gradeItem['score1']; ?></td>
 						         <td><?= $gradeItem['score2']; ?></td>
 						         <td><?= $gradeItem['score3']; ?></td>
 						         <td>
 						           	<a href="grade-edit.php?id=<?= $gradeItem['id']; ?>" class="btn btn-success btn-sm">Edit</a>
 							        <a href="grade-delete.php?id=<?= $gradeItem['id']; ?>" class="btn btn-danger btn-sm mx-2"
 							        onclick="return confirm('Are you sure you want to delete this data?')">Delete</a></td>
 					         </tr>
 							<?php
 							$i++;
 						}
 					}
 					else
 					{
 						?>
 						<tr>
 							<td colspan="7">No Record Found</td>
 						</tr>
 						<?php
 					}

 				?>
 			</tbody>
 			 </table>
 			</div>
 			</div>
 		</div>
 	</div>
 </div>

<?php include('includes/footer.php'); ?>