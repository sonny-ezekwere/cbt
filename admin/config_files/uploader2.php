<?php
error_reporting(E_ALL & ~E_NOTICE);
require "dbmysql.php";
$fileid=$_REQUEST['fileid'];
$target_dir = "../../dgr/";
$target_dir2 = IMG_PATH;
$target_file = $target_dir . basename($_FILES["$fileid"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$modulename=$_REQUEST['modulename'];
$subjectname=$_REQUEST['subjectname'];
$sql="select subject_code from subjects where subject_name='$subjectname'";
$ret=select($sql);
if($row=mysqli_fetch_assoc($ret)){
 $subjectid=$row['subject_code'];   
}
if($subjectid==''){
    echo "Subject does not exist!";
    exit();
}
$sql="select module_code from modules where module_name='$modulename'";
$ret=select($sql);
if($row=mysqli_fetch_assoc($ret)){
    $moduleid=$row['module_code'];
    $timestr=strtotime(date("Y-m-d H:i:s"));
    $flname=rand(100000,999999).$timestr;
    $flname2=$moduleid."_".$subjectid;
    $imgname=$target_dir . "_".$flname2."_".$flname.".".$imageFileType;
    $imgname2=$target_dir2 . "_".$flname2."_".$flname.".".$imageFileType;
}

$imgstring="<img src='".str_replace('quiz/','../',$imgname2)."'>";
if($moduleid==''){
    echo "Module does not exist!";
    exit();
}
//echo "modulename=".$modulename;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["$fileid"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    //echo "Sorry, file already exists.";
    //$uploadOk = 0;
    //exit();
}
// Check file size
if ($_FILES["$fileid"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
    exit();
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    exit();
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["$fileid"]["tmp_name"], $imgname)) {
        //echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
        //echo "The image for ". $modulename . " has been uploaded.";
        echo $imgstring;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>