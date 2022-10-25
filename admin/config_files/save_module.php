<?php
error_reporting(E_ALL & ~E_NOTICE);
require "dbmysql.php";
$frm=$_GET['frm'];
//$myconn=new DB_con();
if($frm==''){
$modulename=$_POST['modulename'];
$modulecode=$_POST['modulecode'];   
$activate=$_POST['form-field-checkbox'];
$qry="select * from modules where module_code='$modulecode' and module_code is not null and module_code!=''";
$ret=select($qry);
$n=0;
if($row=mysqli_fetch_assoc($ret))
    $n=1;
    else
    $n=0;
if($n==0){
$qry="insert into modules(module_name,module_status,module_code) values ('$modulename','$activate','$modulecode')";
if($modulename=='' || $modulecode=='')
    echo "<div class='alert alert-danger fade in'><strong>Error!</strong> Module name or module code is empty!</div>";
    else
    {
$ret=insert($qry);
if($ret==1)
    echo "<div class='alert alert-success fade in'><strong>Success!</strong> Module created successfully!</div>";
else
   echo "<div class='alert alert-danger fade in'><strong>Error!</strong> Module creation failed!</div>";
    }
}
    else
        echo "<div class='alert alert-danger fade in'><strong>Error!</strong> Module with this code already exist!</div>";
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
    
require "modules_list.php";
?>
