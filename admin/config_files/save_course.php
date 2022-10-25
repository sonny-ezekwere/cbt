<?php
error_reporting(E_ALL & ~E_NOTICE);
require "dbmysql.php";
$frm=$_GET['frm'];
//$myconn=new DB_con();
if($frm==''){
//$modulename=$_POST['modulename'];
$coursename=$_POST['coursename'];
$coursecode=$_POST['coursecode'];
$activate=$_POST['form-field-checkbox'];
$qry="select * from courses where course_code='$coursecode' and course_code is not null and course_code!=''";
$ret=select($qry);
$n=0;
if($row=mysqli_fetch_assoc($ret))
    $n=1;
    else
    $n=0;
if($n==0){
$qry="insert into courses(course_name,course_status,course_code) values ('$coursename','$activate','$coursecode')";
if($coursename=='' || $coursecode=='')
    echo "<div class='alert alert-danger fade in'><strong>Error!</strong> Course name or code is empty!</div>";
    else
    {
$ret=insert($qry);
if($ret==1)
    echo "<div class='alert alert-success fade in'><strong>Success!</strong> Course created successfully!</div>";
else
   echo "<div class='alert alert-danger fade in'><strong>Error!</strong> Course creation failed!</div>";
    }
    }
    else
        echo "<div class='alert alert-danger fade in'><strong>Error!</strong> Course with this code already exist!</div>";
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
    
require "courses_list.php";
?>
