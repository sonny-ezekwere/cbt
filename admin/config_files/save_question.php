<?php
error_reporting(E_ALL & ~E_NOTICE);
require "dbmysql.php";
$frm=$_POST['frm'];
//$myconn=new DB_con();
//if($frm==''){
$instruction=$_POST['instruction'];
$question=(strpos($_POST['question'],'<img')!==false)?str_replace('../','quiz/',$_POST['question']):$_POST['question'];
$optiona=(strpos($_POST['optiona'],'<img')!==false)?str_replace('../','quiz/',$_POST['optiona']):$_POST['optiona'];
$optionb=(strpos($_POST['optionb'],'<img')!==false)?str_replace('../','quiz/',$_POST['optionb']):$_POST['optionb'];
$optionc=(strpos($_POST['optionc'],'<img')!==false)?str_replace('../','quiz/',$_POST['optionc']):$_POST['optionc'];
$optiond=(strpos($_POST['optiond'],'<img')!==false)?str_replace('../','quiz/',$_POST['optiond']):$_POST['optiond'];
$optione=(strpos($_POST['optione'],'<img')!==false)?str_replace('../','quiz/',$_POST['optione']):$_POST['optione'];
$correct=$_POST['correct'];
$modulename=$_POST['modulename'];
$subjectname=$_POST['subjectname'];
$qid=$_POST['qid'];

if($modulename=='' || $subjectname==''){
  echo "<div class='alert alert-danger fade in'><strong>Error!</strong> Module name and subject name is compulsory!</div>";  
}
    else
    {
$qry="select module_code from modules where module_name='$modulename' limit 1";
$ret=select($qry);
    if($row=mysqli_fetch_assoc($ret)){
        $moduleid=strtolower($row['module_code']);
    }
$qry="select subject_code from subjects where subject_name='$subjectname'";
$ret=select($qry);
if($row=mysqli_fetch_assoc($ret)){
        $subjectid=strtolower($row['subject_code']);
    }
$tbl="tbl_".$moduleid."_".$subjectid;
$qry="CREATE TABLE IF NOT EXISTS `".$tbl."` (
 `qid` int(11) NOT NULL AUTO_INCREMENT,
 `q_instruction` varchar(400) DEFAULT NULL,
 `question` longtext,
 `optiona` longtext,
 `optionb` longtext,
 `optionc` longtext,
 `optiond` longtext,
 `optione` longtext,
 `q_answer` varchar(250) DEFAULT NULL,
 PRIMARY KEY (`qid`)
)";
$ret=insert($qry);

if($question!=''){
if($frm=='edit'){
 $qry="update ".$tbl." set q_instruction='$instruction',question='$question',optiona='$optiona',optionb='$optionb',optionc='$optionc',optiond='$optiond',optione='$optione',q_answer='$correct' where qid='$qid'";
$ret=update($qry);
if($ret==1)
    echo "<div class='alert alert-success fade in'><strong>Success!</strong> Question updated successfully!</div>";
else
   echo "<div class='alert alert-danger fade in'><strong>Error!</strong> Unable to update question!</div>";   
}
else
{
$qry="insert into ".$tbl."(q_instruction,question,optiona,optionb,optionc,optiond,optione,q_answer) values ('$instruction','$question','$optiona','$optionb','$optionc','$optiond','$optione','$correct')";
$ret=insert($qry);
if($ret==1)
    echo "<div class='alert alert-success fade in'><strong>Success!</strong> Question saved successfully!</div>";
else
   echo "<div class='alert alert-danger fade in'><strong>Error!</strong> Unable to save question!</div>";
}
}
}
require "question_list.php";
?>
