<?php

require '../config/function.php';

$paraResult = CheckParamId('id');
if(is_numeric($paraResult)){

     $studentId = validate($paraResult);

     $student = getById('student',$studentId);
     if($student['status'] == 200){

     	$studentDeleteRes = deleteQuery('student',$studentId);
     	if($studentDeleteRes){

     		redirect('students.php','Student Deleted Succesfully');
     	}else{

     		redirect('students.php','Something Went Wrong');
     	}
     	
     }else{

     	redirect('students.php',$student['message']);
     }

}else{
	redirect('students.php',$paraResult);
}

?>