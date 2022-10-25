<?php
error_reporting(E_ALL & ~E_NOTICE);
require "dbmysql.php";
$frm=$_GET['frm'];
//$myconn=new DB_con();
if($frm==''){
$modulename=$_POST['modulename'];
$coursename=$_POST['coursename'];
$duration=$_POST['duration'];
$subject=json_encode($_POST['form-field-checkbox']);
$questno=json_encode($_POST['questno']);
$qry="insert into exam_config(module_id,course_id,duration,subjects,questno) values ((select module_code from modules where module_name='$modulename'),(select course_code from courses where course_name='$coursename'),'$duration','$subject','$questno')";
if($modulename=='' || $coursename=='' || $duration=='' || $subject=='' || $questno=='')
    echo "<div class='alert alert-danger fade in'><strong>Error!</strong> All fields are compulsory!</div>";
    else
    {
$ret=insert($qry);
if($ret==1)
    echo "<div class='alert alert-success fade in'><strong>Success!</strong> Exam config created successfully!</div>";
else
   echo "<div class='alert alert-danger fade in'><strong>Error!</strong> Exam config creation failed!</div>";
    }
}
else
{
    
    $moduleid=$_GET['id'];
    $modulename=$_POST['modulenamex'];
    $modulestatus=$_POST['modulestatus'];
   $qry="update modules set module_name='$modulename',module_status='$modulestatus' where module_id='$moduleid'";
$ret=update($qry);
if($ret==1)
    echo "<div class='alert alert-success fade in'><strong>Success!</strong> Module updated successfully!</div>";
else
   echo "<div class='alert alert-danger fade in'><strong>Warning!</strong> Module update failed!</div>"; 
}
    
require "config_list.php";
?>
