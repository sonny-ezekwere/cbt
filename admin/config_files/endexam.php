
<style>
@import url(https://fonts.googleapis.com/css?family=Patua+One|Open+Sans);
* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  /*background: #353a40;*/
    background: #e0e0e0;
}

table {
  border-collapse: separate;
  background: #fff;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  margin: 50px auto;
  -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
}

thead {
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
}

thead th {
  font-family: 'Patua One', cursive;
  font-size: 16px;
  font-weight: 400;
  color: #fff;
  text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5);
  text-align: left;
  padding: 20px;
  /*background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzY0NmY3ZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzRhNTU2NCIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');*/
  background-size: 100%;
  /*background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #646f7f), color-stop(100%, #4a5564));
  background-image: -moz-linear-gradient(#646f7f, #4a5564);
  background-image: -webkit-linear-gradient(#646f7f, #4a5564);
  background-image: linear-gradient(#646f7f, #4a5564);*/
  background: #09c;
  border-top: 1px solid #858d99;
}
thead th:first-child {
  -moz-border-radius-topleft: 5px;
  -webkit-border-top-left-radius: 5px;
  border-top-left-radius: 5px;
}
thead th:last-child {
  -moz-border-radius-topright: 5px;
  -webkit-border-top-right-radius: 5px;
  border-top-right-radius: 5px;
}

tbody tr td {
  font-family: 'Open Sans', sans-serif;
  font-weight: 400;
  color: #5f6062;
  font-size: 13px;
  padding: 20px 20px 20px 20px;
  border-bottom: 1px solid #e0e0e0;
}

tbody tr:nth-child(2n) {
  background: #f0f3f5;
}

tbody tr:last-child td {
  border-bottom: none;
}
tbody tr:last-child td:first-child {
  -moz-border-radius-bottomleft: 5px;
  -webkit-border-bottom-left-radius: 5px;
  border-bottom-left-radius: 5px;
}
tbody tr:last-child td:last-child {
  -moz-border-radius-bottomright: 5px;
  -webkit-border-bottom-right-radius: 5px;
  border-bottom-right-radius: 5px;
}

tbody:hover > tr td {
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=50);
  opacity: 0.5;
  /* uncomment for blur effect */
  /* color:transparent;
  @include text-shadow(0px 0px 2px rgba(0,0,0,0.8));*/
}

tbody:hover > tr:hover td {
  text-shadow: none;
  color: #2d2d2d;
  filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
  opacity: 1;
}
</style>

        
    
<?php
    error_reporting(E_ALL & ~E_NOTICE);
    require "dbmysql.php";
    $exno=$_POST['examno'];
    $exstring=json_decode($_POST['exstring']);
    $answered=array();
    $correctans=array();
    $looper=array();
    $looper2=array();
    $subj=array();
        
    $sql="select concat(surname,', ',firstname) as candname from candidates_list where exam_number='$exno'";
    $ret=select($sql);
    if($row2=mysqli_fetch_assoc($ret)){
        $candname=$row2['candname'];
    }

?>
<table>
    <thead>
        <tr><th colspan="4">Your Score (<?php echo $candname;?>)</th></tr>
        <tr>
            <th>Subject</th>
            <th>Correct Answer</th>
            <th>Wrong Answer</th>
            <th>Omitted</th>
        </tr>
    </thead>
    <tbody>
<?php

    $i=0;
    $sql="select * from results where examno='$exno'";
    $ret=select($sql);
    if($row=mysqli_fetch_assoc($ret)){
        
        $correct=json_decode($row['correct']);
        $subjects=json_decode($row['subjects']);
    }

foreach($subjects as $key=>$value){
   $subj[$i]=$key;
    //echo "key=".$key."<br/>";
    $i++;
}
//echo var_dump($subjects);
//exit();
  /*  foreach($correct as $key=>$value){
        $i=0;
        foreach($value as $keys=>$values){
        $looper[$keys]=$values;
        }
        array_push($correctans,$looper);
        unset($looper);
    }
*/
//echo json_decode($correct);
//exit();
  foreach($correct as $key=>$value){
        //$vll=json_decode($value);
         foreach($value as $keys=>$values){
        $looper[$keys]=$values;
        }
        array_push($correctans,$looper);
        unset($looper);
    }

    foreach($exstring as $key=>$value){
        $vl=json_decode($value);
         foreach($vl as $keys=>$values){
        $looper2[$keys]=$values;
        }
        array_push($answered,$looper2);
        unset($looper2);
    }
$sql="update results set answered='".json_encode($answered)."' where examno='$exno'";
$ret=update($sql);

$iscorrect=0;
$iswrong=0;
$isomitted=0;
$totalscore=0;
$numsubject=sizeof($correctans);
for($n=0;$n<=intval($numsubject)-1;$n++){
    $numopts=sizeof($correctans[$n]);
    for($p=0;$p<=intval($numopts)-1;$p++){
       if($correctans[$n][$p]===$answered[$n][$p]){
           $iscorrect++;
       }
        else
        {
            if($answered[$n][$p]===0)
                $isomitted++;
            else
                $iswrong++;
        }
    }
    $totalscore+=$iscorrect;
    $sql="update results set score".($n+1)."='$iscorrect' where examno='$exno'";
    $ret=update($sql);
    $sql="select * from subjects where subject_code='$subj[$n]' limit 1";
    $ret=select($sql);
    if($row=mysqli_fetch_assoc($ret))
        $subjname=$row['subject_name'];
    ?>
        <tr>
            <td><?php echo $subjname; ?></td>
            <td><?php echo $iscorrect; ?></td>
            <td><?php echo $iswrong; ?></td>
            <td><?php echo $isomitted; ?></td>
        </tr>
        <?php
    $iscorrect=0;
    $iswrong=0;
    $isomitted=0;
}
$sql="update results set totalscore='$totalscore',examend=now() where examno='$exno'";
$ret=update($sql);
if($ret==1){
    $sqll="update candidates_list set sessionid=null where exam_number='$exno'";
    $retx=update($sqll);
    //echo "Scores entered successfully! Your score is: ".$totalscore;
}
//else
    //echo "Unable to save score!";


    
    ?>
        <tr><td>Total Score:</td><td style="font-size:16"><strong><?php echo $totalscore; ?></strong></td><td></td><td></td></tr>
</tbody>
</table>