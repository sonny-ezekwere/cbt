<?php
    error_reporting(E_ALL & ~E_NOTICE);
    require "dbmysql.php";
    $username=$_POST['username'];
    $userpw=$_POST['userpw'];
    $action=$_POST['action'];
    $sessnid=$_POST['sessionid'];
    $moduleid=$_POST['moduleid'];
    $retval=array();
    
    if($action=='logout'){
        $qry="delete from user_session where sessionid='$sessnid' and username='$username'";
        $ret=delete($qry);
        if($ret==1)
            echo json_encode(array("status"=>"success"));
        else
           echo json_encode(array("status"=>"fail"));
        exit();
    }

    $qry="select * from modules where module_status=1 limit 1";
    $ret=select($qry);
    if($row=mysqli_fetch_assoc($ret)){  
    }
    else{
        $retval=array("status"=>"fail","msg"=>"No exam active at the moment. Try again later!");
        echo json_encode($retval);
        exit();
    }

    $qry="select * from candidates_list where exam_number='$username' and loginpass='$userpw'";
    $ret=select($qry);
    if($row=mysqli_fetch_assoc($ret)){
        $firstname=$row['firstname'];
        $surname=$row['surname'];
        $examcategory=$row['exam_category'];
        $examno=$row['exam_number'];
        $sql="select * from results where examno='$username' and examend!='' and examend is not null limit 1";
        $ret=select($sql);
        
        if($row2=mysqli_fetch_assoc($ret)){
           $retval=array("status"=>"fail","msg"=>"You have taken this exam already!");
            echo json_encode($retval);
            exit();
        }
        
        $sql="select * from exam_config where course_id='$examcategory' limit 1";
        $ret=select($sql);
        if($rowx=mysqli_fetch_assoc($ret)){
        CreateSession($examno,$ssid,2);
        $retval=array("firstname"=>$firstname,"surname"=>$surname,"sessionid"=>$ssid,"examcategory"=>$examcategory,"examno"=>$examno,"mode"=>"cand","status"=>"success");
        echo json_encode($retval);
        }
        else
        {
            $retval=array("status"=>"fail","msg"=>"Exam not configured for your category yet!");
            echo json_encode($retval);
        }
    }
else
{
    $qry="select * from users where username='$username' and userpassword=md5('$userpw') and account_status=1";
    $ret=select($qry);
    if($row=mysqli_fetch_assoc($ret)){
        CreateSession($username,$ssid,1);
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $retval=array("firstname"=>$firstname,"lastname"=>$lastname,"sessionid"=>$ssid,"username"=>$username,"mode"=>"admin","status"=>"success");
        echo json_encode($retval);
    }
    else
    {
      $retval=array("status"=>"fail","msg"=>"User authentication failed!");
        echo json_encode($retval);  
    }
}

function CreateSession($usernm,&$sessid,$flg){
    if($flg==1){
    $qry="select * from user_session where username='$usernm' limit 1";
    $ret=select($qry);
    if($row=mysqli_fetch_assoc($ret)){
        $qry="delete from user_session where username='$usernm'";
        $ret=delete($qry);
        $sessid=getToken(18);
        $qry="insert into user_session(username,sessionid) values ('$usernm','$sessid')";
        $ret=insert($qry);
    }
    else
    {
         $sessid=getToken(18);
        $qry="insert into user_session(username,sessionid) values ('$usernm','$sessid')";
        $ret=insert($qry);
    }
    }
    else
    {
        $qry="select * from candidates_list where exam_number='$usernm' limit 1";
        $ret=select($qry);
        if($row=mysqli_fetch_assoc($ret)){
            $sessid=getToken(18);
            $qry="update candidates_list set sessionid='$sessid' where exam_number='$usernm'";
            $ret=update($qry);
        }  
    }
}

function crypto_rand_secure($min, $max)
{
    $range = $max - $min;
    if ($range < 1) return $min; // not so random...
    $log = ceil(log($range, 2));
    $bytes = (int) ($log / 8) + 1; // length in bytes
    $bits = (int) $log + 1; // length in bits
    $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
    do {
        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
        $rnd = $rnd & $filter; // discard irrelevant bits
    } while ($rnd > $range);
    return $min + $rnd;
}

function getToken($length)
{
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet.= "0123456789";
    $max = strlen($codeAlphabet); // edited

    for ($i=0; $i < $length; $i++) {
        $token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
    }

    return $token;
}
    ?>
