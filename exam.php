<html>

<head>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" />
    <title>EXAM CONSOLE</title>
    <style>
        .card1 {
  padding-top: 20px;
  margin: 10px 0 20px 0;
  background-color: #ffffff;
  border: 1px solid #d8d8d8;
  border-top-width: 0;
  border-bottom-width: 2px;
  -webkit-border-radius: 3px;
     -moz-border-radius: 3px;
          border-radius: 3px;
  -webkit-box-shadow: none;
     -moz-box-shadow: none;
          box-shadow: none;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}


.card1.hovercard {
  position: relative;
  padding-top: 0;
  overflow: hidden;
  text-align: center;
  background-color: #fff;
}

.card1.hovercard img {
  width: 300px;
  height: 70px;
}

.card1.hovercard .avatar {
  position: relative;
  top: -40px;
  margin-bottom: -40px;
}

.card1.hovercard .avatar img {
  width: 80px;
  height: 80px;
  max-width: 80px;
  max-height: 80px;
  -webkit-border-radius: 50%;
     -moz-border-radius: 50%;
          border-radius: 50%;
}

.card1.hovercard .info {
  padding: 4px 8px 10px;
}

.card1.hovercard .info .title {
  margin-bottom: 4px;
  font-size: 24px;
  line-height: 1;
  color: #262626;
  vertical-align: middle;
}

.card1.hovercard .info .desc {
  overflow: hidden;
  font-size: 12px;
  line-height: 20px;
  color: #737373;
  text-overflow: ellipsis;
}

.card1.hovercard .bottom {
  padding: 0 20px;
  margin-bottom: 17px;
}

.card1.people .card-bottom {
  position: absolute;
  bottom: 0;
  left: 0;
  display: inline-block;
  width: 100%;
  padding: 10px 20px;
  line-height: 29px;
  text-align: center;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
        .card {
            border-radius: 0px !important;
        }
        
        .card-header {
            background: #09c !important;
            padding: .40rem .40rem !important;
        }
        
        .timer {
            margin-top: -5px;
            margin-left: -2.3em;
            color: #fff;
        }
        
        .btn-right {
            
            margin-top: -3px;
            background: #0099aa !important;
            color: #fff;
        }
        .nav-pills .nav-link.active {
             color: #09c !important; 
            cursor: default;
            border-bottom: 1px solid #09c;
            background: transparent !important;
        }
        
        .liclass
        {
            color:#dff0d8;
            background-color:#3c763d;
            border-color:#4cae4c
        }
    </style>
    <?php
    header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
    header("Pragma: no-cache"); // HTTP 1.0.
    header("Expires: 0"); // Proxies.
    ?>
</head>

<body>
    <?php
    error_reporting(E_ALL & ~E_NOTICE);
    require "admin/config_files/dbmysql.php";
    $examno=$_GET['examno'];
    $sessionid=$_GET['sessionid'];
    if($examno=='' || $sessionid=='')
        header('Location: login.php');
    
    if(!AuthenticateUser($examno,$sessionid))
        header('Location: login.php');
    
        function AuthenticateUser($usernm,$sessid){
            $retval=false;
            $sql="select * from candidates_list where exam_number='$usernm' and sessionid='$sessid' limit 1";
            $ret=select($sql);
            if($row=mysqli_fetch_assoc($ret)){
               $retval=true; 
            }
            
            return $retval;
        }
    
    $sql="select surname,firstname,(select course_name from courses where course_code=exam_category limit 1) as course,(select module_name from modules where module_code=moduleid limit 1) as modulename,moduleid,exam_category from candidates_list where exam_number='$examno' limit 1";
    $ret=select($sql);
    
    if($row=mysqli_fetch_assoc($ret)){
        $surname=$row['surname'];
        $firstname=$row['firstname'];
        $course=$row['course'];
        $modulename=$row['modulename'];
        $moduleid=$row['moduleid'];
        $examcat=$row['exam_category'];
        
        $qry="select * from exam_config where module_id='$moduleid' and course_id='$examcat' limit 1";
        $retx=select($qry);
        if($rowx=mysqli_fetch_assoc($retx)){
            $subjects=json_decode($rowx['subjects'],true);
            $questno=json_decode($rowx['questno']);
            $duration=intval($rowx['duration'])*60;
        }
    }
    
    //var_dump($subjects);
    //foreach($subjects as $key=>$value){
      //  echo $key."=".$value;
    //}             
                    $arrcounter=0;
                    $subjarray=array();
                    foreach($subjects as $key=>$value){
                    $qry="select subject_code from subjects where subject_name='$value'";
                    $ret=select($qry);
                        if($row=mysqli_fetch_assoc($ret)){
                        $subcode=strtolower($row['subject_code']);
                        $subjarray[$subcode]=$questno[$arrcounter];
                        }
                        $arrcounter++;
                    }
    
    $passportpath="img/".$examno.".jpg";
    if(!file_exists($passportpath))
        $passportpath="img/nopix.jpg";                
    ?>
    <div class="container clearfix" style="padding-bottom: 20px">
        <div class="clearfix" ></div>
        <div id="displaypan" style="display:none;">
        <div class="card1 hovercard" id="profilepan"><img /><div class="avatar" align="center"><img width="120" height="100" src="<?php echo $passportpath;?>" alt="" /></div><ul class="list-group list-group-flush"><li class="list-group-item">Name: <?php echo $surname.', '.$firstname;?></li><li class="list-group-item">Exam No: <?php echo $examno;?></li><li class="list-group-item">Course: <?php echo $course;?></li><!--<li class="list-group-item">Phone</li>--></ul></div></div>
        <br />
       
        <div class="card">
            <div class="card-header">
                <div class="row">

                    <div class="col-4 col-md-1 col-sm-4" style="line-height: 2.5">
                        <button type="button" class="" id="pausebtn" style="padding: 12px; border:1px solid #fff; background:transparent !important"><i class="fa fa-pause" style="color: #fff;"></i></button>
                        <button type="button" class="" id="playbtn" style="padding: 12px; border:1px solid #fff; display: none; background:transparent !important"><i class="fa fa-play" style="color: #fff;"></i></button>
                    </div>
                    <div class="col-4 col-md-9 col-sm-4 timer" style=""><input type="hidden" id="dur" value="<?php echo $duration;?>">
                        <input type="hidden" id="exno" value="<?php echo $examno;?>"><input type="hidden" id="exstr">
                        <input type="hidden" id="sbc" value='<?php echo json_encode($subjarray) ;?>'>
                        <span id="timer"> </span><br /><span><?php echo strtoupper($modulename.' ('.$course.')');?></span>
                    </div>

                    <div class="col-4 col-md-2 col-sm-4">
                        <button id="smt" class="btn btn-lg btn-default btn-right">SUBMIT</button>

                    </div>

                </div>
            </div>
            <div class="card-block" id="card-blk">
                <div class="row" style="border-bottom: 1px solid #ccc; margin-top:-19px; width: 103%; margin-bottom: 20px;">
                    <div class="col-12 col-md-9 col-sm-9">
                        
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <?php
                            $flg="";
                            foreach($subjects as $key=>$value){
                                if($key==0){
                            ?>
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-expanded="true"><?php echo $value;?></a>
                            </li>
                            <?php
                                }
                                else
                                {
                                    $flg=$key-1;
                                    if($flg==0)
                                        $flg="";  
                                    ?>
                              <li class="nav-item">
                                <a class="nav-link" id="pills-profile<?php echo $flg;?>-tab" data-toggle="pill" href="#pills-profile<?php echo $flg;?>" role="tab" aria-controls="pills-profile<?php echo $flg;?>" aria-expanded="true"><?php echo $value;?></a>
                            </li>
                            <?php
                                }
                            }
                            ?>
                            <!--<li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-expanded="true">Maths</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile1-tab" data-toggle="pill" href="#pills-profile1" role="tab" aria-controls="pills-profile1" aria-expanded="true">Physics</a>
                            </li>-->
                        </ul>
                    
                    </div>
                         <div class="col-12 col-md-3 col-sm-3" style="border-left:1px solid #ccc; margin-left:-2px !important;">
                           <h4 class="text-center" style="line-height:2">Exam Properties</h4>
                          
                          
                        </div>
                </div>
                              <div class="row" style="margin-left: 0.5em;  padding-bottom: 10px">
                                  <?php
                                  $tqno=0;
                                  foreach($questno as $key=>$value){
                                    $tqno+=intval($value);  
                                  }
                                  ?>
                               <div class="col-12 col-md-8 col-sm-8">
                                   <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1"><span class="rounded-circle">Total Number Of Questions | <button type="button" class="btn btn-danger btn-sm"><?php echo $tqno;?></button>&nbsp;&nbsp;</span></h5>
                                                        
                                                    </div>
                                                </a>

                                            </div>
                               </div>
                               </div>
                    
                        <div class="tab-content" id="pills-tabContent">
                         
                   <?php
                           $flg="";
                            $carousel_counter=0;
                            $total_questions=0;
                            $ansloop=array();
                            $ansloopct=array();
                            $actquestno=array();
                            $actquestnobdy=array();
                            foreach($subjects as $key=>$value){
                                $mkey=$key;
                                $subj=$value;
                                if($key==0){ 
                            ?>      
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-9">
                                     <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                             
                              <div class="carousel-inner" role="listbox">
                                <?php
                                  $qry="select subject_code from subjects where subject_name='$value'";
                                    $ret=select($qry);
                                    if($row=mysqli_fetch_assoc($ret))
                                        $subjcode=strtolower($row['subject_code']);
                                    
                                    $mytbl="tbl_".$moduleid."_".$subjcode;
                                    $sql="select * from ".$mytbl." order by rand() limit ".$questno[$mkey];
                                    $ret=select($sql);
                                    $qid=0;
                                    while($rowx=mysqli_fetch_assoc($ret)){
                                        $qid++;
                                        $total_questions++;
                                        $ansloop[$qid-1]=$rowx['q_answer'];
                                        $actquestno[$qid-1]=$rowx['qid'];
                                        $question=(strpos($rowx['question'],'<img')!==false)?str_replace('quiz/','',$rowx['question']):$rowx['question'];
                                                $optiona=(strpos($rowx['optiona'],'<img')!==false)?str_replace('quiz/','',$rowx['optiona']):$rowx['optiona'];
                                                $optionb=(strpos($rowx['optionb'],'<img')!==false)?str_replace('quiz/','',$rowx['optionb']):$rowx['optionb'];
                                                $optionc=(strpos($rowx['optionc'],'<img')!==false)?str_replace('quiz/','',$rowx['optionc']):$rowx['optionc'];
                                                $optiond=(strpos($rowx['optiond'],'<img')!==false)?str_replace('quiz/','',$rowx['optiond']):$rowx['optiond'];
                                                $optione=(strpos($rowx['optione'],'<img')!==false)?str_replace('quiz/','',$rowx['optione']):$rowx['optione'];
                                    if($qid==1){
                                        
                                  ?>
                                <div class="carousel-item active">
                                  <div class="col-12 col-md-12 col-sm-12">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-11 col-12 col-sm-12">
                                            <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                  
                                                    <button type="button" class="btn btn-success btn-sm"><?php echo $qid; ?></button><br/><p class="mb-1"><?php echo $question ;?></p>
                                                    
                                                </a>

                                            </div>
                                        </div><div class="clearfix"></div><br />
                                         <div class="col-md-11 col-12 col-sm-12" style="margin-top: 10px">
                                        <ul class="list-group">
                                            <?php if($optiona!=''){ ?>
                                            <li class="list-group-item d-flex justify-content-between align-items-center" style="margin-bottom: 1px">
                                               <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" value="A" id="option<?php echo $subjcode.$qid;?>" name="option<?php echo $subjcode.$qid;?>" onclick="$('#badge<?php echo $subjcode.$qid ;?>').addClass('liclass')">
                                                    <?php echo str_replace('</p>','',str_replace('<p>','',$optiona));?>
                                                  </label>
                                                </div>
                                            </li>
                                            <?php }?>
                                            <?php if($optionb!=''){ ?>
                                            <li class="list-group-item d-flex justify-content-between align-items-center" style="margin-bottom: 1px">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" value="B" id="option<?php echo $subjcode.$qid;?>" name="option<?php echo $subjcode.$qid;?>" onclick="$('#badge<?php echo $subjcode.$qid ;?>').addClass('liclass')">
                                                     <?php echo str_replace('</p>','',str_replace('<p>','',$optionb)) ;?>
                                                  </label>
                                                </div>
                                            </li>
                                            <?php }?>
                                            <?php if($optionc!=''){ ?>
                                            <li class="list-group-item d-flex justify-content-between align-items-center" style="margin-bottom: 1px">
                                                 <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" value="C" id="option<?php echo $subjcode.$qid;?>" name="option<?php echo $subjcode.$qid;?>" onclick="$('#badge<?php echo $subjcode.$qid ;?>').addClass('liclass')">
                                                    <?php echo str_replace('</p>','',str_replace('<p>','',$optionc)) ;?>
                                                  </label>
                                                </div>
                                            </li>
                                            <?php }?>
                                            <?php if($optiond!=''){ ?>
                                             <li class="list-group-item d-flex justify-content-between align-items-center" style="margin-bottom: 1px">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" value="D" id="option<?php echo $subjcode.$qid;?>" name="option<?php echo $subjcode.$qid;?>" onclick="$('#badge<?php echo $subjcode.$qid ;?>').addClass('liclass')">
                                                     <?php echo str_replace('</p>','',str_replace('<p>','',$optiond)) ;?>
                                                  </label>
                                                </div>
                                            </li>
                                            <?php }?>
                                            <?php if($optione!=''){ ?>
                                             <li class="list-group-item d-flex justify-content-between align-items-center" style="margin-bottom: 1px">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" value="E" id="option<?php echo $subjcode.$qid;?>" name="option<?php echo $subjcode.$qid;?>" onclick="$('#badge<?php echo $subjcode.$qid ;?>').addClass('liclass')">
                                                     <?php echo str_replace('</p>','',str_replace('<p>','',$optione)) ;?>
                                                  </label>
                                                </div>
                                            </li>
                                            <?php }?>
                                             </ul></div>
                                    </div>

                                </div>

                               </div>
                                </div>
                                  <?php }
                                  else
                                  {
                                      ?>
                                  <div class="carousel-item">
                                   <div class="col-12 col-md-12 col-sm-12">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-11 col-12 col-sm-12">
                                            <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                  
                                                    <button type="button" class="btn btn-success btn-sm"><?php echo $qid; ?></button><br/><p class="mb-1"><?php echo $question ;?></p>
                                                    
                                                </a>

                                            </div>
                                        </div><div class="clearfix"></div><br />
                                         <div class="col-md-11 col-12 col-sm-12" style="margin-top: 10px">
                                        <ul class="list-group">
                                            <?php if($optiona!=''){ ?>
                                            <li class="list-group-item d-flex justify-content-between align-items-center" style="margin-bottom: 10px">
                                               <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" value="A" id="option<?php echo $subjcode.$qid;?>" name="option<?php echo $subjcode.$qid;?>" onclick="$('#badge<?php echo $subjcode.$qid ;?>').addClass('liclass')">
                                                    <?php echo str_replace('</p>','',str_replace('<p>','',$optiona));?>
                                                  </label>
                                                </div>
                                            </li>
                                            <?php }?>
                                            <?php if($optionb!=''){ ?>
                                            <li class="list-group-item d-flex justify-content-between align-items-center" style="margin-bottom: 10px">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" value="B" id="option<?php echo $subjcode.$qid;?>" name="option<?php echo $subjcode.$qid;?>" onclick="$('#badge<?php echo $subjcode.$qid ;?>').addClass('liclass')">
                                                     <?php echo str_replace('</p>','',str_replace('<p>','',$optionb));?>
                                                  </label>
                                                </div>
                                            </li>
                                            <?php }?>
                                            <?php if($optionc!=''){ ?>
                                            <li class="list-group-item d-flex justify-content-between align-items-center" style="margin-bottom: 10px">
                                                 <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" value="C" id="option<?php echo $subjcode.$qid;?>" name="option<?php echo $subjcode.$qid;?>" onclick="$('#badge<?php echo $subjcode.$qid ;?>').addClass('liclass')">
                                                     <?php echo str_replace('</p>','',str_replace('<p>','',$optionc));?>
                                                  </label>
                                                </div>
                                            </li>
                                            <?php }?>
                                            <?php if($optiond!=''){ ?>
                                             <li class="list-group-item d-flex justify-content-between align-items-center" style="margin-bottom: 10px">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" value="D" id="option<?php echo $subjcode.$qid;?>" name="option<?php echo $subjcode.$qid;?>" onclick="$('#badge<?php echo $subjcode.$qid ;?>').addClass('liclass')">
                                                    <?php echo str_replace('</p>','',str_replace('<p>','',$optiond)) ;?>
                                                  </label>
                                                </div>
                                            </li>
                                            <?php }?>
                                            <?php if($optione!=''){ ?>
                                             <li class="list-group-item d-flex justify-content-between align-items-center" style="margin-bottom: 10px">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" value="E" id="option<?php echo $subjcode.$qid;?>" name="option<?php echo $subjcode.$qid;?>" onclick="$('#badge<?php echo $subjcode.$qid ;?>').addClass('liclass')">
                                                     <?php echo str_replace('</p>','',str_replace('<p>','',$optione));?>
                                                  </label>
                                                </div>
                                            </li>
                                            <?php }?>
                                             </ul></div>
                                    </div>

                                </div>

                               </div>
                                </div>
                                  <?php
                                  }
                                    }
                                  ?>
                                  
                              </div>
                              <!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>-->
                            </div>
                                </div>
                                 <div class="col-12 col-md-3 col-sm-12" style="background: #fff; margin-top: -5.5em !important; border-left:1px solid #ccc"><br />
                                   <span><?php echo strtoupper($subj);?></span>
                                   <hr />
                                    <div class="profileholder">
                                       
                                   </div><hr />
                                   <div class="col-12 col-sm-12 col-md-12">
                                     <ol class="" style="">
                                         <?php 
                                         for($i=1;$i<=intval($questno[$mkey]);$i++){
                                             if($i==1){
                                         ?>
                                        <li class="badge badge-primary badge-pill" data-target="#myCarousel" data-slide-to="<?php echo ($i-1);?>" class="active" id="badge<?php echo $subjcode.$i;?>" style="cursor:hand"><?php echo $i;?></li>
                                         <?php }
                                         else
                                         {
                                         ?>
                                        <li class="badge badge-primary badge-pill" style="cursor:hand" id="badge<?php echo $subjcode.$i;?>" data-target="#myCarousel" data-slide-to="<?php echo ($i-1);?>"><?php echo $i ;?></li>
                                         <?php }
                                         }
                                         ?>
                                      </ol>

                                   </div>
                                    <hr />
                                 <span>LEGEND</span>
                                     <div>
                                     <ol>
                                         <li class="badge badge-primary badge-pill">&nbsp;</li>&nbsp;&nbsp;Not Answered
                                         <br /><li class="badge badge-primary badge-pill liclass" id="leg">&nbsp;</li>&nbsp;&nbsp;Answered
                                         </ol>
                                     </div>
                                   <hr />
                                   

                                </div>
                            </div>
                        
                           </div>
                            <?php }
                                else
                                {
                                    $carousel_counter++;
                                    $profile_counter=$carousel_counter-1;
                                    if($profile_counter==0)
                                        $profile_counter="";
                            ?>
                          
                            
                            
 <div class="tab-pane fade show" id="pills-profile<?php echo $profile_counter;?>" role="tabpanel" aria-labelledby="pills-profile<?php echo $profile_counter;?>-tab">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-9">
                                     <div id="myCarousel<?php echo $carousel_counter;?>" class="carousel slide" data-ride="carousel" data-interval="false">
                             
                              <div class="carousel-inner" role="listbox">
                                <?php
                                  $qry="select subject_code from subjects where subject_name='$value'";
                                    $ret=select($qry);
                                    if($row=mysqli_fetch_assoc($ret))
                                        $subjcode=strtolower($row['subject_code']);
                                    
                                    $mytbl="tbl_".$moduleid."_".$subjcode;
                                    $sql="select * from ".$mytbl." order by rand() limit ".$questno[$mkey];
                                    $ret=select($sql);
                                    $qid=0;
                                    while($rowx=mysqli_fetch_assoc($ret)){
                                        $qid++;
                                        $total_questions++;
                                        $ansloop[$qid-1]=$rowx['q_answer'];
                                        $actquestno[$qid-1]=$rowx['qid'];
                                        
                                        $question=(strpos($rowx['question'],'<img')!==false)?str_replace('quiz/','',$rowx['question']):$rowx['question'];
                                                $optiona=(strpos($rowx['optiona'],'<img')!==false)?str_replace('quiz/','',$rowx['optiona']):$rowx['optiona'];
                                                $optionb=(strpos($rowx['optionb'],'<img')!==false)?str_replace('quiz/','',$rowx['optionb']):$rowx['optionb'];
                                                $optionc=(strpos($rowx['optionc'],'<img')!==false)?str_replace('quiz/','',$rowx['optionc']):$rowx['optionc'];
                                                $optiond=(strpos($rowx['optiond'],'<img')!==false)?str_replace('quiz/','',$rowx['optiond']):$rowx['optiond'];
                                                $optione=(strpos($rowx['optione'],'<img')!==false)?str_replace('quiz/','',$rowx['optione']):$rowx['optione'];
                                    if($qid==1){
                                  ?>
                                <div class="carousel-item active">
                                  <div class="col-12 col-md-12 col-sm-12">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-11 col-12 col-sm-12">
                                            <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                  
                                                    <button type="button" class="btn btn-success btn-sm"><?php echo $qid; ?></button><br/><p class="mb-1"><?php echo $question ;?></p>
                                                    
                                                </a>

                                            </div>
                                        </div><div class="clearfix"></div><br />
                                         <div class="col-md-11 col-12 col-sm-12" style="margin-top: 10px">
                                        <ul class="list-group">
                                            <?php if($optiona!=''){ ?>
                                            <li class="list-group-item d-flex justify-content-between align-items-center" style="margin-bottom: 10px">
                                               <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" value="A" id="option<?php echo $subjcode.$qid;?>" name="option<?php echo $subjcode.$qid;?>" onclick="$('#badge<?php echo $subjcode.$qid ;?>').addClass('liclass')">
                                                    <?php echo str_replace('</p>','',str_replace('<p>','',$optiona)) ;?>
                                                  </label>
                                                </div>
                                            </li>
                                            <?php }?>
                                            <?php if($optionb!=''){ ?>
                                            <li class="list-group-item d-flex justify-content-between align-items-center" style="margin-bottom: 10px">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" value="B" id="option<?php echo $subjcode.$qid;?>" name="option<?php echo $subjcode.$qid;?>" onclick="$('#badge<?php echo $subjcode.$qid ;?>').addClass('liclass')">
                                                     <?php echo str_replace('</p>','',str_replace('<p>','',$optionb)) ;?>
                                                  </label>
                                                </div>
                                            </li>
                                            <?php }?>
                                            <?php if($optionc!=''){ ?>
                                            <li class="list-group-item d-flex justify-content-between align-items-center" style="margin-bottom: 10px">
                                                 <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" value="C" id="option<?php echo $subjcode.$qid;?>" name="option<?php echo $subjcode.$qid;?>" onclick="$('#badge<?php echo $subjcode.$qid ;?>').addClass('liclass')">
                                                    <?php echo str_replace('</p>','',str_replace('<p>','',$optionc)) ;?>
                                                  </label>
                                                </div>
                                            </li>
                                            <?php }?>
                                            <?php if($optiond!=''){ ?>
                                             <li class="list-group-item d-flex justify-content-between align-items-center" style="margin-bottom: 10px">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" value="D" id="option<?php echo $subjcode.$qid;?>" name="option<?php echo $subjcode.$qid;?>" onclick="$('#badge<?php echo $subjcode.$qid ;?>').addClass('liclass')">
                                                     <?php echo str_replace('</p>','',str_replace('<p>','',$optiond));?>
                                                  </label>
                                                </div>
                                            </li>
                                            <?php }?>
                                            <?php if($optione!=''){ ?>
                                             <li class="list-group-item d-flex justify-content-between align-items-center" style="margin-bottom: 10px">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" value="E" id="option<?php echo $subjcode.$qid;?>" name="option<?php echo $subjcode.$qid;?>" onclick="$('#badge<?php echo $subjcode.$qid ;?>').addClass('liclass')">
                                                     <?php echo str_replace('</p>','',str_replace('<p>','',$optione));?>
                                                  </label>
                                                </div>
                                            </li>
                                            <?php }?>
                                             </ul></div>
                                    </div>

                                </div>

                               </div>
                                </div>
                                  <?php }
                                  else
                                  {
                                      ?>
                                  <div class="carousel-item">
                                   <div class="col-12 col-md-12 col-sm-12">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-11 col-12 col-sm-12">
                                            <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                  
                                                    <button type="button" class="btn btn-success btn-sm"><?php echo $qid; ?></button><br/><p class="mb-1"><?php echo $question ;?></p>
                                                    
                                                </a>

                                            </div>
                                        </div><div class="clearfix"></div><br />
                                         <div class="col-md-11 col-12 col-sm-12" style="margin-top: 10px">
                                        <ul class="list-group">
                                            <?php if($optiona!=''){ ?>
                                            <li class="list-group-item d-flex justify-content-between align-items-center" style="margin-bottom: 10px">
                                               <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" value="A" id="option<?php echo $subjcode.$qid;?>" name="option<?php echo $subjcode.$qid;?>" onclick="$('#badge<?php echo $subjcode.$qid ;?>').addClass('liclass')">
                                                    <?php echo str_replace('</p>','',str_replace('<p>','',$optiona)) ;?>
                                                  </label>
                                                </div>
                                            </li>
                                            <?php }?>
                                            <?php if($optionb!=''){ ?>
                                            <li class="list-group-item d-flex justify-content-between align-items-center" style="margin-bottom: 10px">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" value="B" id="option<?php echo $subjcode.$qid;?>" name="option<?php echo $subjcode.$qid;?>" onclick="$('#badge<?php echo $subjcode.$qid ;?>').addClass('liclass')">
                                                     <?php echo str_replace('</p>','',str_replace('<p>','',$optionb)) ;?>
                                                  </label>
                                                </div>
                                            </li>
                                            <?php }?>
                                            <?php if($optionc!=''){ ?>
                                            <li class="list-group-item d-flex justify-content-between align-items-center" style="margin-bottom: 10px">
                                                 <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" value="C" id="option<?php echo $subjcode.$qid;?>" name="option<?php echo $subjcode.$qid;?>" onclick="$('#badge<?php echo $subjcode.$qid ;?>').addClass('liclass')">
                                                     <?php echo str_replace('</p>','',str_replace('<p>','',$optionc)) ;?>
                                                  </label>
                                                </div>
                                            </li>
                                            <?php }?>
                                            <?php if($optiond!=''){ ?>
                                             <li class="list-group-item d-flex justify-content-between align-items-center" style="margin-bottom: 10px">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" value="D" id="option<?php echo $subjcode.$qid;?>" name="option<?php echo $subjcode.$qid;?>" onclick="$('#badge<?php echo $subjcode.$qid ;?>').addClass('liclass')">
                                                    <?php echo str_replace('</p>','',str_replace('<p>','',$optiond)) ;?>
                                                  </label>
                                                </div>
                                            </li>
                                            <?php }?>
                                            <?php if($optione!=''){ ?>
                                             <li class="list-group-item d-flex justify-content-between align-items-center" style="margin-bottom: 10px">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" value="E" id="option<?php echo $subjcode.$qid;?>" name="option<?php echo $subjcode.$qid;?>" onclick="$('#badge<?php echo $subjcode.$qid ;?>').addClass('liclass')">
                                                     <?php echo str_replace('</p>','',str_replace('<p>','',$optione)) ;?>
                                                  </label>
                                                </div>
                                            </li>
                                            <?php
                                                }
                                            ?>
                                             </ul></div>
                                    </div>

                                </div>

                               </div>
                                </div>
                                  <?php
                                  }
                                    }
                                  ?>
                                  
                              </div>
                             <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>-->
                            </div>
                                </div>
                                 <div class="col-12 col-md-3 col-sm-12" style="background: #fff; margin-top: -5.5em !important; border-left:1px solid #ccc"><br />
                                   <span><?php echo strtoupper($subj);?></span>
                                   <hr />
                                    <div class="profileholder">
                                       
                                   </div><hr />
                                   <div class="col-12 col-sm-12 col-md-12">
                                     <ol class="" style="">
                                         <?php 
                                         for($i=1;$i<=intval($questno[$mkey]);$i++){
                                             if($i==1){
                                         ?>
                                        <li class="badge badge-primary badge-pill" id="badge<?php echo $subjcode.$i;?>" style="cursor:hand" data-target="#myCarousel<?php echo $carousel_counter;?>" data-slide-to="<?php echo ($i-1);?>" class="active"><?php echo $i;?></li>
                                         <?php }
                                         else
                                         {
                                         ?>
                                        <li class="badge badge-primary badge-pill" id="badge<?php echo $subjcode.$i;?>" style="cursor:hand" data-target="#myCarousel<?php echo $carousel_counter;?>" data-slide-to="<?php echo ($i-1);?>"><?php echo $i ;?></li>
                                         <?php }
                                         }
                                         ?>
                                      </ol>

                                   </div>
                                    <hr />
                                 <span>LEGEND</span>
                                     <div>
                                     <ol>
                                         <li class="badge badge-primary badge-pill">&nbsp;</li>&nbsp;&nbsp;Not Answered
                                         <br /><li class="badge badge-primary badge-pill liclass" id="leg">&nbsp;</li>&nbsp;&nbsp;Answered
                                         </ol>
                                     </div>
                                   <hr />
                                   

                                </div>
                            </div>
                        
                           </div>                           
                            <?php }
                                $ansloopct[$mkey]=$ansloop;
                                $actquestnobdy[$mkey]=$actquestno;
                                unset($ansloop);
                                unset($actquestno);
                            }
                            
                           
                            
                            $sql="select * from results where examno='$examno'";
                            $ret=select($sql);
                            if($row=mysqli_fetch_assoc($ret)){
                                $query="update results set subjects='".json_encode($subjarray)."',correct='".json_encode($ansloopct)."' where examno='$examno'";
                                $ret=update($query);
                            }
                            else
                            {
                               $query="insert into results(examno,subjects,correct) values ('$examno','".json_encode($subjarray)."','".json_encode($ansloopct)."')";
                                $ret=insert($query);
                            }
                            ?>
                            
                 
                    </div>
            </div>
                  <div class="card-footer">
                <div class="row">

                    <div class="col-4 col-md-2 col-sm-4">
                        <!--<button type="button" class="btn btn-default">Mark for Review</button>-->
                    </div>
                    <div class="col-4 col-md-5 col-sm-4">
                        <!--<button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Clear Selection</button>-->
                    </div>
                    <div class="col-4 col-md-2 col-sm-4" id="s1">
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                            <button type="button" class="btn btn-primary btn-sm">Previous</button></a>
                                                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                            <button type="button" class="btn btn-primary btn-sm">Next</button></a>
                    </div>
                     <div class="col-4 col-md-2 col-sm-4" style="display: none" id="s2">
                        <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
                                                            <button type="button" class="btn btn-primary btn-sm">Previous</button></a>
                                                        <a class="right carousel-control" href="#myCarousel1" data-slide="next">
                                                            <button type="button" class="btn btn-primary btn-sm">Next</button></a>
                    </div>
                     <div class="col-4 col-md-2 col-sm-4" style="display: none" id="s3">
                        <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
                                                            <button type="button" class="btn btn-primary btn-sm">Previous</button></a>
                                                        <a class="right carousel-control" href="#myCarousel2" data-slide="next">
                                                            <button type="button" class="btn btn-primary btn-sm">Next</button></a>
                    </div>
                    <div class="col-4 col-md-2 col-sm-4" style="display: none" id="s4">
                        <a class="left carousel-control" href="#myCarousel3" data-slide="prev">
                                                            <button type="button" class="btn btn-primary btn-sm">Previous</button></a>
                                                        <a class="right carousel-control" href="#myCarousel3" data-slide="next">
                                                            <button type="button" class="btn btn-primary btn-sm">Next</button></a>
                    </div>

                    <!--<div class="col-4 col-md-2 col-sm-4" style="border-left:1px solid #ccc">
                        <a href="#">Help</a> | <a href="#">Question</a>

                    </div>-->

                </div>
            </div>
                  </div>
                   
                   </div>
                    
          


    <!--<script src="assets/js/jquery-3.1.1.min.js"></script>-->
    <script src='admin/assets/js/jquery-2.1.4.min.js'></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="js/jquery.timer.js"></script>
    <script>
        displayProfile();
              $('.carousel-sync').carousel('cycle');
        $('.carousel-sync').on('click', '.carousel-control[data-slide]', function (ev) {
            ev.preventDefault();
            $('.carousel-sync').carousel($(this).data('slide'));
        });
        $('.carousel').carousel({
            wrap: false
        }).on('slid.bs.carousel', function () {
            var $this = $(this);
            $this.children('.carousel-control').show();
            if ($('.carousel-inner .item:last').hasClass('active')) {
                $('#carousel-b').carousel('pause');
                $this.children('.right.carousel-control').hide();
                $("#btnsave").show();
            }
            else if ($('.carousel-inner .item:first').hasClass('active')) {
                $this.children('.left.carousel-control').hide();
                $("#btnsave").hide();
            }
        });
        $("#pausebtn").click(function() {
            $("#pausebtn").hide();
            $("#playbtn").show();
        });
        $("#playbtn").click(function() {
            $("#playbtn").hide();
            $("#pausebtn").show();
        });
        $("#pills-home-tab").click(function() {
            $("#s1").show();
            $("#s2").hide();
            $("#s3").hide();
            $("#s4").hide();
        });
        $("#pills-profile-tab").click(function() {
            $("#s1").hide();
            $("#s2").show();
            $("#s3").hide();
            $("#s4").hide();
        });
        $("#pills-profile1-tab").click(function() {
            $("#s1").hide();
            $("#s2").hide();
            $("#s3").show();
            $("#s4").hide();
        });
        $("#pills-profile2-tab").click(function() {
            $("#s1").hide();
            $("#s2").hide();
            $("#s3").hide();
            $("#s4").show();
        });
        
        function displayProfile() {
            var itemsholder = $("<div />");
            var items=document.getElementById('profilepan').innerHTML;
            //var items = '<div class="card1 hovercard"><img /><div class="avatar"><img src="assets/images/images.png" alt="" /></div><ul class="list-group list-group-flush"><li class="list-group-item">Name</li><li class="list-group-item">Exam No</li><li class="list-group-item">Course</li><li class="list-group-item">Phone</li></ul></div>';
            itemsholder.html(items);
            $(".profileholder").append(itemsholder); 
        }
        
    document.body.style.zoom="80%";
    //document.body.style.zoom=0.8;
    
        
    $('#tt').on('click',function(){
        $.ajax({
        url: 'test.php',
        type: 'POST',
        data:  {examno:$('#exno').val()},
    success: function(data, textStatus, jqXHR)
    {
            $('#card-blk').html(data);
    },
    complete: function(){
      },
     error: function(jqXHR, textStatus, errorThrown) 
     {
         $('#card-blk').html(errorThrown);
     }          
    }); 
        })
        
        $('#smt').on('click',function(){
            if(confirm('Are you sure you wish to submit exam?')){
            stopTimer();
            ExamEnd();
            $('#smt').remove();
            }
        })
        
        function ExamEnd(){
            var sbc=$('#sbc').val();
            var ttl=0;
            var atmpt=[];
            var atmptt=[];
            document.body.style.zoom="100%";
            //document.body.style.zoom=0.8;
            
           $.each(JSON.parse(sbc), function(idx, obj) {
	       for(var i=1;i<=obj;i++){
               var isChecked = $('#option'+idx+i+':checked').val()?true:false;
               if(isChecked){
                   atmpt[i-1]=$('#option'+idx+i+':checked').val();
                  //alert($('#option'+idx+i+':checked').val()); 
               }
               else
                   {
                     atmpt[i-1]=0;  
                   }
           }
             //atmptt[idx]=atmpt;
               atmptt.push(JSON.stringify(atmpt));
               atmpt.length=0;
            });
            
            //alert(JSON.stringify(atmptt));
            //exstring:JSON.stringify(atmptt)
            
        $.ajax({
        url: 'admin/config_files/endexam.php',
        type: 'POST',
        data:  {examno:$('#exno').val(),exstring:JSON.stringify(atmptt)},
        //dataType: json,
    success: function(data, textStatus, jqXHR)
    {
        //alert(data);
        $('#card-blk').html(data);
        //var json = JSON.parse(data);
        /*if(json.status=='success'){
            
        }
        else
            $('#preview').html('<p>' + json.msg + '</p>');*/
    },
    complete: function(){
        //$('#preview').hide();
      },
     error: function(jqXHR, textStatus, errorThrown) 
     {
         $('#preview').html(errorThrown);
     }          
    }); 
        }
        
        var c=$('#dur').val();
        var t;
        timedCount();
 
        function timedCount()
		{
 
        	var hours = parseInt( c / 3600 ) % 24;
        	var minutes = parseInt( c / 60 ) % 60;
        	var seconds = c % 60;
 
        	var result = (hours < 10 ? "0" + hours : hours) + ":" + (minutes < 10 ? "0" + minutes : minutes) + ":" + (seconds  < 10 ? "0" + seconds : seconds);
 
            
        	$('#timer').html(result);
            if(c == 0 )
			{
                $('#timer').html(result);
                clearTimeout(t);
                //alert('Time up!!!');
                ExamEnd();
                $('#smt').remove();
                $('#timer').remove();
			}
            
            if(c==599 || c==299){
                if(c==599)
                    alert('You have 10 minutes remaining. Exam will end automatically after time up.');
                if(c==299)
                    alert('You have 5 minutes remaining. Exam will end automatically after time up.');
            }
            c = c - 1;
            t = setTimeout(function()
			{
			 timedCount()
			},
			1000);
    /*var t = $.timer(function() {
        timedCount()
		},
		1000,
		true
	);	*/
        
        }
        
        function stopTimer(){
            clearTimeout(t);
        }
    </script>
</body>

</html>