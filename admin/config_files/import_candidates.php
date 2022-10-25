<?php
error_reporting(E_ALL & ~E_NOTICE);
require_once '../PHPExcel/IOFactory.php';
require "dbmysql.php";

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$modulename=$_REQUEST['modulename'];
$sql="select module_code from modules where module_name='$modulename'";
$ret=select($sql);
if($row=mysqli_fetch_assoc($ret)){
    $moduleid=$row['module_code'];
    $timestr=strtotime(date("Y-m-d H:i:s"));
    $flname=rand(100000,999999).$timestr;
    $imgname=$target_dir . "_".$flname.".".$imageFileType;
}

if($moduleid==''){
    echo "Module does not exist!";
    exit();
}
//echo "modulename=".$modulename;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
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
if ($_FILES["photo"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
    exit();
}
// Allow certain file formats
if($imageFileType != "xls" && $imageFileType != "xlsx") {
    echo "Sorry, only XLS, XLSX files are allowed.";
    $uploadOk = 0;
    exit();
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    exit();
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $imgname)) {
        $objPHPExcel = PHPExcel_IOFactory::load($imgname);
        $k=0;
        foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
    $worksheetTitle     = $worksheet->getTitle();
    $highestRow         = $worksheet->getHighestRow(); // e.g. 10
    $highestColumn      = $worksheet->getHighestColumn(); // e.g 'F'
    $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
    $nrColumns = ord($highestColumn) - 64;
    /*echo "<br>The worksheet ".$worksheetTitle." has ";
    echo $nrColumns . ' columns (A-' . $highestColumn . ') ';
    echo ' and ' . $highestRow . ' row.';
    echo '<br>Data: <table border="1"><tr>';*/
    for ($row = 2; $row <= $highestRow;  $row++) {
        //echo '<tr>';
         $surname = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
        $firstname = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
        $gender = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
        $state = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
        $examno = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
        $loginpass = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
        $examcat = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
        
        $sql="select * from courses where course_name='$examcat'";
        $ret=select($sql);
        if($rowx=mysqli_fetch_assoc($ret)){
         $examcat=$rowx['course_code'];   
        }
        $qry="select * from candidates_list where exam_number='$examno' limit 1";
        $ret=select($qry);
        if($rowx=mysqli_fetch_assoc($ret)){}
        else
        {
        $qry="insert into candidates_list(surname,firstname,gender,state,exam_number,loginpass,moduleid,exam_category) values ('$surname','$firstname','$gender','$state','$examno','$loginpass','$moduleid','$examcat')";
        $ret=insert($qry);
        if($ret==1)
            $k++;
        }
            
        
        /*$val = $cell->getValue();
        for ($col = 0; $col < $highestColumnIndex; ++ $col) {
            $cell = $worksheet->getCellByColumnAndRow($col, $row);
            $val = $cell->getValue();
            $dataType = PHPExcel_Cell_DataType::dataTypeForValue($val);
            echo '<td>' . $val . '<br>(Typ ' . $dataType . ')</td>';
        }*/
        //echo '</tr>';
    }
    //echo '</table>';
}
     echo $k . " candidate(s) imported successfully.";  
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



?>