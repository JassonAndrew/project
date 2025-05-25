<?php include('includes/header.php'); ?>

 <div class="row">
 	<div class="col-md-12">
 		<div class="card">
 			<div class="card-header">
 				<h4>
 					Student Lists
 					<a href="students-create.php" class="btn btn-primary float-end">Add Students</a>
 				</h4>
 			</div>
 			<div class="card-body">

 			<?= alertMessage(); ?>

 			<div class="table-responsive">
 			 <table class="table table-striped">
 				<thead>
 					<tr>
 						<th>Id</th>
 						<th>Name</th>
 						<th>NRP</th>
 						<th>Email</th>
 						<th>Field of Study</th>
 						<th>Address</th>
 						<th>Gender</th>
 					</tr>
 				</thead>
 				<tbody>
 					<?php

 					$students = getAll('student');
 					if(mysqli_num_rows($students) > 0)
 					{
 						$i=1;
 						foreach($students as $studentItem)
 						{
 							?>
 							<tr>
 						         <td><?= $i; ?></td>
 						         <td><?= $studentItem['name']; ?></td>
 						         <td><?= $studentItem['NRP']; ?></td>
 						         <td><?= $studentItem['email']; ?></td>
 						         <td><?= $studentItem['field_of_study']; ?></td>
 						         <td><?= $studentItem['address']; ?></td>
 						         <td><?= $studentItem['gender']; ?></td>
 						         <td>
 						           	<a href="students-edit.php?id=<?= $studentItem['id']; ?>" class="btn btn-success btn-sm">Edit</a>
 							        <a href="students-delete.php?id=<?= $studentItem['id']; ?>" class="btn btn-danger btn-sm mx-2"
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