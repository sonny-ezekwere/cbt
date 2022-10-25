<!DOCTYPE HTML>
<html>
    <?php
    error_reporting(E_ALL & ~E_NOTICE);
require "admin/config_files/dbmysql.php";
$sql="select * from modules where module_status=1 limit 1";
$ret=select($sql);
if($row=mysqli_fetch_assoc($ret)){
    $logo=$row['module_logo'];
    $moduleid=$row['moduleid'];
}

if($logo=='')
    $logo="default.png";
?>
<head>
<title>Examiner</title>
<link href="css/login.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<!--web-fonts-->
</head>
<body>
    <div id="container">
			<div class="main">
				<div class="login">
					<div>
						<img height="80" width="100" src="dgr/<?php echo $logo;?>">
					</div>
					<h1>Exam Login</h1>
					<div class="login-bottom">
                        <div id="preview"></div>
					<form>
                        <input type="hidden" name="moduleid" id="moduleid" value="<?php echo $moduleid;?>">
						<input type="text" placeholder="Username" name="username" id="username" required=" ">					
						<input type="password" class="password" id="passwd" name="passwd" placeholder="Password" required=" ">						
						<input type="button" id="btn" value="login">
					</form>
					<!--<a href="#"><p>Forgot your password? Click Here</p></a>-->
					</div>
				</div>
			</div>
		<div class="footer">
			<p>&copy 2017 Cinfores Examiner . All rights reserved</a></p>
		</div>
</div>
<script src='admin/assets/js/jquery-2.1.4.min.js'></script>
<script type="text/javascript">
$('#btn').on('click',function(){
 
    $.ajax({
        url: 'admin/config_files/process_login.php',
        type: 'POST',
        data:  {username:$('#username').val(),userpw:$('#passwd').val(),moduleid:$('#moduleid').val()},
        //dataType: json,
    success: function(data, textStatus, jqXHR)
    {
        var json = JSON.parse(data);
        if(json.status=='success'){
            if(json.mode=='admin')
            //$('#preview').html('<p>Account login successful with session ID: '+json.sessionid+'!</p>');
                window.location="admin/index.php?sessionid="+json.sessionid+"&displayname="+json.firstname+"&username="+json.username;
        else
            //$('#preview').html('<p>Account login failed!</p>');
            window.location="exam.php?examno="+json.examno+"&sessionid="+json.sessionid;
            /*$.ajax({
                type: "post",
                url: "exam.php",
                data: {examcat:json.examcategory,examno:json.examno},
                success: function (data) {
                    $('#container').html(data);
                }
            });*/
        }
        else
            $('#preview').html('<p>' + json.msg + '</p>');
    },
    complete: function(){
        //$('#preview').hide();
      },
     error: function(jqXHR, textStatus, errorThrown) 
     {
         $('#preview').html(errorThrown);
     }          
    }); 
})

</script>
    </body>
</html>
