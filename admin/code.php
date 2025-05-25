<?php 
require '../config/function.php';


if(isset($_POST['savestudent'])) 
{
	$name = validate($_POST['name']);
	$NRP = validate($_POST['NRP']);
	$email = validate($_POST['email']);
	$field_of_study = validate($_POST['field_of_study']);
	$address = validate($_POST['address']);
	$gender = validate($_POST['gender']);

	if($name != ''|| $NRP !=''|| $email !=''|| $field_of_study !=''|| $address !='')
	{
		$query = "INSERT INTO student (name,NRP,email,field_of_study,address,gender)
		VALUES ('$name','$NRP','$email','$field_of_study','$address','$gender')";
	    $result = mysqli_query($conn, $query);

	    if($result){
	    	redirect('students.php','Student Added Succesfully');
	    }else{
	    	redirect('students-create.php','Something Went Wrong');
	    }
	}
	else
	{
		redirect('students-create.php','Please fill out all the input fields');
	}
}

if(isset($_POST['updatestudent']))
{
    $name = validate($_POST['name']);
	$NRP = validate($_POST['NRP']);
	$email = validate($_POST['email']);
	$field_of_study = validate($_POST['field_of_study']);
	$address = validate($_POST['address']);
	$gender = validate($_POST['gender']);

	$studentId = validate($_POST['studentId']);
	$student = getById('student',$studentId);
	if($student['status'] != 200){
		redirect('students-edit.php?id='.$studentId,'No Such id found');
	}

	if($name != ''|| $NRP !=''|| $email !=''|| $field_of_study !=''|| $address !='')
	{
		$query = "UPDATE student SET 
		          name='$name', 
		          NRP='$NRP',
		          email='$email',
		          field_of_study='$field_of_study',
		          address='$address',
		          gender='$gender' 
		          WHERE id='$studentId' ";
	    $result = mysqli_query($conn, $query);

	    if($result){
	    	redirect('students-edit.php?id='.$studentId,'Student Updated Succesfully');
	    }else{
	    	redirect('students-edit.php?id='.$studentId,'Something Went Wrong');
	    }
	}
	else
	{
		redirect('students-create.php','Please fill out all the input fields');
	}
}

if(isset($_POST['saveteacher'])) 
{
	$name = validate($_POST['name']);
	$hp = validate($_POST['hp']);
	$email = validate($_POST['email']);
	$password = validate($_POST['password']);
	$password2 = validate($_POST['password2']);

	if($name != '' && $hp !='' && $email !='' && $password !=''){

	$result = mysqli_query($conn, "SELECT name FROM admin WHERE name ='$name'");

	if(mysqli_fetch_assoc($result)){
		echo "<script>alert('name already taken');</script>";
	} else {
		if( $password !== $password2 ) {
		echo "<script> alert('password doesn't match); </script>";
		redirect('teachers-create.php', 'Check again');
	} else {
		$password = password_hash($password, PASSWORD_DEFAULT);

		$query = "INSERT INTO admin (name,hp,email,password)
		VALUES ('$name','$hp','$email','$password')";
	    $result = mysqli_query($conn, $query);

	    if($result){
	    	redirect('teachers.php','Teacher Added Succesfully');
	    }else{
	    	redirect('teachers-create.php','Something Went Wrong');
	    }
	  }
	}
	} else {
		redirect('teachers-create.php','Please fill out all the input fields');
	}
}

if(isset($_POST['updateteacher']))
{
    $name = validate($_POST['name']);
	$hp = validate($_POST['hp']);
	$email = validate($_POST['email']);
	$password = validate($_POST['password']);
	$password2 = validate($_POST['password2']);

	$teacherId = validate($_POST['teacherId']);
	$teacher = getById('admin',$teacherId);
	if($teacher['status'] != 200){
		redirect('teachers-edit.php?id='.$teacherId,'No Such id found');
	}

	if($name != ''|| $hp !=''|| $email !='') {

		if ($password !=''|| $password2 !=''){
			if($password !== $password2) {
				redirect('teachers-edit.php?id='.$teacherId, 'Password does not match');
			}
			$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
			$query = "UPDATE admin SET 
		          name='$name', 
		          hp='$hp',
		          email='$email',
		          password='$hashedpassword'
		          WHERE id='$teacherId' ";
		      } else {
		      	$query = "UPDATE admin SET 
		          name='$name', 
		          hp='$hp',
		          email='$email'
		          WHERE id='$teacherId' ";
		      } 

		     $result = mysqli_query($conn,$query);

            if($result){
	    	redirect('teachers-edit.php?id='.$teacherId,'Teacher Updated Succesfully');
	        }else{
	    	redirect('teachers-edit.php?id='.$teacherId,'Something Went Wrong');
	        }
	}else{
		redirect('teachers-create.php','Please fill out all the input fields');
	}
}

if(isset($_POST['savegrade'])) 
{
	$student = validate($_POST['student']);
	$teacher = validate($_POST['teacher']);
	$score1 = validate($_POST['score1']);
	$score2 = validate($_POST['score2']);
	$score3 = validate($_POST['score3']);

	if($student != '' && $teacher != '' && $score1 != '' && $score2 != '' && $score3 != '')
	{
		$query = "INSERT INTO grade (student,teacher,score1,score2,score3)
		VALUES ('$student','$teacher','$score1','$score2','$score3')";
	    $result = mysqli_query($conn, $query);

	    if($result){
	    	redirect('grade.php','Grade Added Succesfully');
	    }else{
	    	redirect('grade-create.php','Something Went Wrong');
	    }
	}
	else
	{
		redirect('grade-create.php','Please fill out all the input fields');
	}
}

if(isset($_POST['updategrade']))
{
    $student = validate($_POST['student']);
	$teacher = validate($_POST['teacher']);
	$score1 = validate($_POST['score1']);
	$score2 = validate($_POST['score2']);
	$score3 = validate($_POST['score3']);

	$gradeId = validate($_POST['gradeId']);
	$grade = getById('grade',$gradeId);
	if($grade['status'] != 200){
		redirect('grade-edit.php?id='.$gradeId,'No Such id found');
	}

	if($student != '' && $teacher != '' && $score1 != '' && $score2 != '' && $score3 != '')
	{
		$query = "UPDATE grade SET 
		          student='$student', 
		          teacher='$teacher',
		          score1='$score1',
		          score2='$score2',
		          score3='$score3' 
		          WHERE id='$gradeId' ";
	    $result = mysqli_query($conn, $query);

	    if($result){
	    	redirect('grade-edit.php?id='.$gradeId,'Grade Updated Succesfully');
	    }else{
	    	redirect('grade-edit.php?id='.$gradeId,'Something Went Wrong');
	    }
	}
	else
	{
		redirect('grade-create.php','Please fill out all the input fields');
	}
}
?>