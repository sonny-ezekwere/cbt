<?php
error_reporting(E_ALL & ~E_NOTICE);
require "dbmysql.php";
$frm=$_GET['frm'];
//$myconn=new DB_con();
if($frm==''){
//$modulename=$_POST['modulename'];
$subjectname=$_POST['subjectname'];
$subjectcode=$_POST['subjectcode'];
$activate=$_POST['form-field-checkbox'];
    
$qry="select * from subjects where subject_code='$subjectcode' and subject_code is not null and subject_code!=''";
$ret=select($qry);
$n=0;
if($row=mysqli_fetch_assoc($ret))
    $n=1;
    else
    $n=0;
if($n==0){
$qry="insert into subjects(subject_name,subject_status,subject_code) values ('$subjectname','$activate','$subjectcode')";
if($subjectname=='' || $subjectcode=='')
    echo "<div class='alert alert-danger fade in'><strong>Error!</strong> Subject name or code is empty!</div>";
    else
    {
$ret=insert($qry);
if($ret==1)
    echo "<div class='alert alert-success fade in'><strong>Success!</strong> Subject created successfully!</div>";
else
   echo "<div class='alert alert-danger fade in'><strong>Error!</strong> Subject creation failed!</div>";
    }
    }
    else
        echo "<div class='alert alert-danger fade in'><strong>Error!</strong> Subject with this code already exist!</div>";
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
    
require "subjects_list.php";
?>
