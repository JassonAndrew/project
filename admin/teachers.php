<?php include('includes/header.php'); ?>

 <div class="row">
 	<div class="col-md-12">
 		<div class="card">
 			<div class="card-header">
 				<h4>
 					Teacher Lists
 					<a href="teachers-create.php" class="btn btn-primary float-end">Add Teacher</a>
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
 						<th>HP</th>
 						<th>Email</th>
 					</tr>
 				</thead>
 				<tbody>
 					<?php

 					$teachers = getAll('admin');
 					if(mysqli_num_rows($teachers) > 0)
 					{
 						$i=1;
 						foreach($teachers as $teacherItem)
 						{
 							?>
 							<tr>
 						         <td><?= $i; ?></td>
 						         <td><?= $teacherItem['name']; ?></td>
 						         <td><?= $teacherItem['hp']; ?></td>
 						         <td><?= $teacherItem['email']; ?></td>
 						         <td>
 						           	<a href="teachers-edit.php?id=<?= $teacherItem['id']; ?>" class="btn btn-success btn-sm">Edit</a>
 							        <a href="teachers-delete.php?id=<?= $teacherItem['id']; ?>" class="btn btn-danger btn-sm mx-2"
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