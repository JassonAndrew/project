<?php

require '../config/function.php';

$paraResult = CheckParamId('id');
if(is_numeric($paraResult)){

     $gradeId = validate($paraResult);

     $grade = getById('grade',$gradeId);
     if($grade['status'] == 200){

     	$gradeDeleteRes = deleteQuery('grade',$gradeId);
     	if($gradeDeleteRes){

     		redirect('grade.php','Grade Deleted Succesfully');
     	}else{

     		redirect('grade.php','Something Went Wrong');
     	}
     	
     }else{

     	redirect('grade.php',$student['message']);
     }

}else{
	redirect('grade.php',$paraResult);
}

?>