<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'brainfriend');
define('DB_NAME', 'quiz');
define('APP_ROOT', 'quiz');
define('IMG_PATH', 'quiz/dgr/');

  $mysqli=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
  if (mysqli_connect_errno())
  {
  die("ERROR: Could not connect. " . mysqli_connect_error());
  }
 
 function insert($insertquery)
 {
  $res = mysqli_query($GLOBALS['mysqli'],$insertquery);
  return $res;
 }

function update($updatequery)
 {
  $res = mysqli_query($GLOBALS['mysqli'],$updatequery);
  return $res;
 }

function delete($deletequery)
 {
  $res = mysqli_query($GLOBALS['mysqli'],$deletequery);
  return $res;
 }
 
 function select($selectquery)
 {
     if ($result=mysqli_query($GLOBALS['mysqli'],$selectquery))
  {
         //$row=mysqli_fetch_assoc($result);
         return $result;
     }
  /*$res=$GLOBALS['mysqli']->query($selectquery);
      if ($GLOBALS['mysqli']->num_rows > 0) {
            $row = $GLOBALS['mysqli']->fetch_assoc($res);
         }
  return $row;   */
 }

 //$mysqli->close();
?>