<?php

require '../config/function.php';

$paraResult = CheckParamId('id');
if(is_numeric($paraResult)){

     $teacherId = validate($paraResult);

     $teacher = getById('admin',$teacherId);
     if($teacher['status'] == 200){

     	$teacherDeleteRes = deleteQuery('admin',$teacherId);
     	if($teacherDeleteRes){

     		redirect('teachers.php','Teacher Deleted Succesfully');
     	}else{

     		redirect('teachers.php','Something Went Wrong');
     	}
     	
     }else{

     	redirect('teachers.php',$teacher['message']);
     }

}else{
	redirect('teachers.php',$paraResult);
}

?>