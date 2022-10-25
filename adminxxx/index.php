
<?php
function _instr($start,$str1,$str2,$mode) {
if ($mode) { $str1=strtolower($str1); $str2=strtolower($str2); }
$retval=strpos($str1,$str2,$start);
return ($retval===false) ? 0 : $retval+1;
}
$mycombination="a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <http-equiv="X-UA-Compatible" content="IE=edge"/>
		<title>Cinfores eSMS</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">



		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/fonts.css">
		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

		<!-- PAGE LEVEL PLUGINS STYLES -->
		<link href="assets/css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
		<link href="assets/css/plugins/morris/morris.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/plugins/datetime/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" href="assets/css/plugins/bootstrap-datepicker/datepicker.css">

		<!-- Tc core CSS -->
		<link id="qstyle" rel="stylesheet" href="assets/css/themes/style.css">

		<!-- jQuery UI CSS -->
		<link rel="stylesheet" href="../includes/jquery-ui.css">

		<!-- Add custom CSS here -->
		<link rel="stylesheet" href="assets/css/only-for-demos.css">
		<link rel="stylesheet" href="assets/css/custom.css">
		<!--<link href="../includes/custom1.css" rel="stylesheet"> -->
		<!--<link rel="stylesheet" href="source/jquery.fancybox.css?v=2.1.5">-->
		<link rel="stylesheet" href="assets/css/PrintArea.css">
					

		<!-- End custom CSS here -->

		<!--[if lt IE 9]>
			<script src="../assets/js/html5shiv.js"></script>
			<script src="../assets/js/respond.min.js"></script>
		<![endif]-->

		<!--[if lte IE 8]>
			<script src="../assets/js/plugins/easypiechart/easypiechart.ie-fix.js"></script>
		<![endif]-->

<style >
.tip {
	BORDER-RIGHT: #666666 1px solid; PADDING-RIGHT: 1px; BORDER-TOP: #666666 1px solid; PADDING-LEFT: 1px; Z-INDEX: 100; LEFT: 90px; VISIBILITY: hidden; PADDING-BOTTOM: 1px; FONT: 10px/12px Arial,Helvetica,sans-serif; BORDER-LEFT: #666666 1px solid; WIDTH: 250px; COLOR: #333333; PADDING-TOP: 1px; BORDER-BOTTOM: #666666 1px solid; POSITION: absolute; TOP: 20px; BACKGROUND-COLOR: #ffffcc; layer-background-color: #ffffcc
}
#t1 {
	WIDTH: 130px
}
#t2 {
	WIDTH: 264px
}
#t3 {
	FONT: bold 14pt verdana,arial,sans-serif; BACKGROUND-COLOR: #ffcccc; layer-background-color: #ffcccc
}

</style>


	</head>

	<body>
		<form name="Page_Form" method="post" id="Page_Form">
			<div id="wrapper">
				<div id="main-container">
					<!-- BEGIN TOP NAVIGATION -->
					<nav class="navbar-top" role="navigation">
						<!-- BEGIN BRAND HEADING -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".top-collapse">
								<i class="fa fa-bars"></i>
							</button>
							<div class="navbar-brand">
								<a href="index.php">
									<!--<img src="../assets/images/logo.png" alt="logo" class="img-responsive">-->
									<img src="images/p.png" alt="logo" class="img-responsive">
								</a>
							</div>
						</div>
						<!-- END BRAND HEADING -->
						<div class="nav-top">
							<!-- BEGIN RIGHT SIDE DROPDOWN BUTTONS -->
							<ul class="nav navbar-right">
								<li class="dropdown">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
										<i class="fa fa-bars"></i>
									</button>
								</li>
								<!--<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-envelope"></i> <span class="badge up badge-primary">2</span></a>
									<!--<ul class="dropdown-menu dropdown-scroll dropdown-messages">
										<li class="dropdown-header">
											<i class="fa fa-envelope"></i> 2 New Messages
										</li>
										<li id="messageScroll">
											<ul class="list-unstyled">
												<li>
													<a href="#">
														<div class="row">
															<div class="col-xs-2">
																<img class="img-circle" src="../assets/images/user-profile-1.jpg" alt="">
															</div>
															<div class="col-xs-10">
																<p>
																	<strong>User Account</strong>: Hi again! I wanted to let you know that the order...
																</p>
																<p class="small">
																	<i class="fa fa-clock-o"></i> 5 minutes ago
																</p>
															</div>
														</div>
													</a>
												</li>

											</ul>
										</li>
										<li class="dropdown-footer">
											<a href="#">
												Read All Messages
											</a>
										</li>
									</ul>
								</li> -->
								<!--
									<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-bell"></i> <span class="badge up badge-success">3</span>
									</a>
									<ul class="dropdown-menu dropdown-scroll dropdown-alerts">
									<li class="dropdown-header">
									<i class="fa fa-bell"></i> 3 New Alerts
									</li>
									<li id="alertScroll">
									<ul class="list-unstyled">
									<li>
									<a href="#">
									<div class="alert-icon bg-info pull-left">
									<i class="fa fa-download"></i>
									</div>
									Downloads <span class="badge badge-info pull-right">16</span>
									</a>
									</li>
									<li>
									<a href="#">
									<div class="alert-icon bg-success pull-left">
									<i class="fa fa-cloud-upload"></i>
									</div>
									Server #8 Rebooted <span class="small pull-right"><strong><em>12 hours ago</em></strong></span>
									</a>
									</li>
									<li>
									<a href="#">
									<div class="alert-icon bg-danger pull-left">
									<i class="fa fa-bolt"></i>
									</div>
									Server #8 Crashed <span class="small pull-right"><strong><em>12 hours ago</em></strong></span>
									</a>
									</li>
									</ul>
									</li>
									<li class="dropdown-footer">
									<a href="#">
									View All Alerts
									</a>
									</li>
									</ul>
								</li> -->
								<!--<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-tasks"></i> <span class="badge up badge-info">7</span>
									</a>
									<ul class="dropdown-menu dropdown-scroll dropdown-tasks">
									<li class="dropdown-header">
									<i class="fa fa-tasks"></i> 10 Pending Tasks
									</li>
									<li id="taskScroll">
									<ul class="list-unstyled">
									<li>
									<a href="#">
									<p>
									Purchase Order #439 <span class="pull-right"><strong>52%</strong></span>
									</p>
									<div class="progress progress-striped">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100" style="width: 52%;"></div>
									</div>
									</a>
									</li>
									<li>
									<a href="#">
									<p>
									March Content Update <span class="pull-right"><strong>14%</strong></span>
									</p>
									<div class="progress">
									<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100" style="width: 14%;"></div>
									</div>
									</a>
									</li>
									<li>
									<a href="#">
									<p>
									Client #42 Data Scrubbing <span class="pull-right"><strong>68%</strong></span>
									</p>
									<div class="progress progress-striped">
									<div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
									</div>
									</a>
									</li>
									<li>
									<a href="#">
									<p>
									PHP Upgrade Server #6 <span class="pull-right"><strong>85%</strong></span>
									</p>
									<div class="progress">
									<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
									</div>
									</a>
									</li>
									<li>
									<a href="#">
									<p>
									Malware Scan <span class="pull-right"><strong>66%</strong></span>
									</p>
									<div class="progress progress-striped active">
									<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width: 66%;"></div>
									</div>
									</a>
									</li>
									</ul>
									</li>
									<li class="dropdown-footer">
									<a href="#">
									View All Tasks
									</a>
									</li>
									</ul>
								</li> -->
								<!--Speech Icon-->
								<!--<li class="dropdown">
									<a href="#" class="speech-button">
									<i class="fa fa-microphone"></i>
									</a>
								</li>-->
								<!--Speech Icon-->
								<li class="dropdown user-box">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<img class="img-circle" src="assets/images/user.jpg" alt=""> <span class="user-info">Sample User</span> <b class="caret"></b>
									</a>
									<ul class="dropdown-menu dropdown-user">
										<!--<li>	<li>
											<a href="#">
											<i class="fa fa-user"></i> User Account
											</a>
											</li>

											<a href="#">
											<i class="fa fa-envelope"></i> My Messages
											</a>
										</li>-->
										<li>
											<a href="#" onclick="showAjax('','pages/change_password.php','contentDiv')">
												<i class="fa fa-tasks"></i> Change Password
											</a>
										</li>

										<li>
											<a href="#" onclick="showAjax('','../includes/ajaxaction.php?Action=logout','logoutDiv')">
												<i class="fa fa-power-off"></i> Logout
											</a>
										</li>
									</ul>
								</li>
								<!--Search Box-->
								<!--
									<li class="dropdown nav-search-icon">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<span class="glyphicon glyphicon-search"></span>
									</a>
									<ul class="dropdown-menu dropdown-search">
									<li>
									<div class="search-box">

									</div>
									</li>
									</ul>
									</li>
								-->

								<!--Search Box-->
								<div id="logoutDiv"></div>
							</ul>
							<!-- END RIGHT SIDE DROPDOWN BUTTONS -->

							<!-- BEGIN TOP MENU -->
							<div class="collapse navbar-collapse top-collapse">
								<!-- .nav -->
								<ul class="nav navbar-left navbar-nav">
									<?php
										if (_instr(0,$mycombination,"e",0) > 0 || _instr(0,$mycombination,"f",0) > 0 || _instr(0,$mycombination,"g",0) > 0 || _instr(0,$mycombination,"h",0) > 0)
										{
										?>
										<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">User Account</a>
											<ul class="dropdown-menu">
												<?php  // WARNING: assuming mycombination is an external function assuming mycombination is an external function assuming mycombination is an external function assuming mycombination is an external function
												}
											?>

											<?php
												if (_instr(0,$mycombination,"e",0) > 0 && _instr(0,$mycombination,"f",0) > 0 && _instr(0,$mycombination,"g",0) > 0)
												{
												?>
												<li><a href="#" onclick='javascript:ShowPage("account.php",null,"contentDiv");return false;'>Manager</a></li>
												<li><a href="#" onclick='javascript:ShowPage("update_user.php",null,"contentDiv");return false;'>Update User</a></li>
												<?php
												}
												if ( _instr(0,$mycombination,"h",0) > 0)
												{
												?>
												<li><a href="#" onclick='javascript:ShowPage("password.php",null,"contentDiv");return false;'>Password</a></li>
												<?php
												}
											?>
										</ul>
									</li>
									<?php  if (_instr(0,$mycombination,"a",0) > 0 || _instr(0,$mycombination,"b",0) > 0 || _instr(0,$mycombination,"c",0) > 0 || _instr(0,$mycombination,"d",0) > 0 || _instr(0,$mycombination,"an",0) > 0)
										{echo'
											<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Configure</a>
											<ul class="dropdown-menu">';
											if (_instr(0,$mycombination,"a",0) > 0 || _instr(0,$mycombination,"b",0) > 0 || _instr(0,$mycombination,"c",0) > 0 || _instr(0,$mycombination,"d",0) > 0 || _instr(0,$mycombination,"an",0) > 0)   {echo'
												';
											} ?>
											<?php
												if (_instr(0,$mycombination,"a",0) > 0)
												{
												?>
												<li><a href="#"  onclick='javascript:ShowPage("addbank.php",null,"contentDiv");return false;'>Bank Details</a></li>
												<?php  // WARNING: assuming mycombination is an external function
												}
											?>

											<?php
												if ($id == "scholar" || $id == "")
												{
													if (_instr(0,GetCompany(),"NDHCD",0) > 0)
													{
													?>
													<li> <a href="#" onclick='javascript:ShowPage("add_tso.php",null,"contentDiv");return false;'>Create/Edit TSO</a></li>
													<li><a href="#" onclick='javascript:ShowPage("delegate_center.php",null,"contentDiv");return false;'>Map Delegates To Center</a></li>
													<?php
													}
													else
													{
													?>
																								<?php
												if (_instr(0,$mycombination,"al",0) > 0)
												{
												?>

													<li><a href="#" onclick='javascript:ShowPage("assign_country.php",null,"contentDiv");return false;' >Map Officer to Country</a></li>
													<?php }
													if (_instr(0,$mycombination,"am",0) > 0){
													?>
													<li><a href="#" onclick='javascript:ShowPage("migrate_awardees2.php",null,"contentDiv");return false;'>Map Awardees to Country</a></li>
													<?php
													}
													}
												}
											?>

											<?php
												if (_instr(0,$mycombination,"aj",0) > 0)
												{
												?>
											<li><a href="#" onclick='javascript:ShowPage("system.php",null,"contentDiv");return false;'>System Settings</a></li>

											<?php
											}
												if (_instr(0,$mycombination,"c",0) > 0)
												{
												?>
											<li><a href="#" onclick='javascript:ShowPage("create_schools.php",null,"contentDiv");return false;'>School/Course</a></li>
											<?php }?>

																						<?php
												if (_instr(0,$mycombination,"ak",0) > 0)
												{
												?>
											<li><a href="#" onclick='javascript:ShowPage("awardeeschool.php",null,"contentDiv");return false;'>Placement/Progression</a></li>
											<?php
											}
												if (_instr(0,GetCompany(),"PTDF",0) > 0 || _instr(0,GetCompany(),"NDHCD",0) > 0)
												{
													if (_instr(0,$mycombination,"c",0) > 0){
													?>
													<li><a href="#" onclick='javascript:ShowPage("course_update.php",null,"contentDiv");return false;'>Update Course</a></li>
													<?php
														}
													if (_instr(0,GetCompany(),"PTDF",0) > 0)
													{
													if (_instr(0,$mycombination,"an",0) > 0){
													?>

													<li><a href="#" onclick='javascript:ShowPage("email_updatex.php",null,"contentDiv");return false;'>Update Awardees Email</a> </li>
													<?php }
													if (_instr(0,$mycombination,"ao",0) > 0){
													?>
													<li><a href="#" onclick='javascript:ShowPage("update_ukcontact.php",null,"contentDiv");return false;'>Update UK Contacts</a></li>
													<?php  // WARNING: assuming GetCompany is an external function
													}
													}
													else
													{
													?>
													<li><a href="#" onclick='javascript:ShowPage("email_updatex.php",null,"contentDiv");return false;'>Update Delegates Email</a></li>
													<?php
													}
												}
											?>

											<?php
												//end if
												if (_instr(0,GetCompany(),"PTDF",0) == 0)
												{
													if (_instr(0,$mycombination,"c",0) > 0)
													{
													?>

													<li><a href="#" onclick='javascript:ShowPage("addcourse.php",null,"contentDiv");return false;'>Add Course</a></li>
													<?php  // WARNING: assuming GetCompany is an external function assuming mycombination is an external function
													}
												}
											?>
									</ul>
								<?php echo '</li>';}?>

								<?php
									if (_instr(0,$mycombination,"v",0) > 0 || _instr(0,$mycombination,"p",0) > 0 || _instr(0,$mycombination,"q",0) > 0) {
									echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Application</a>';?>
									<ul class="dropdown-menu">


                                            <?php
                                        if (_instr(0,$mycombination,"aa",0) > 0)
									{
                                        ?>
                                        <li class="dropdown-submenu"><a href="#">Statistics</a>
										 <ul class="dropdown-menu">

		<li><a href="#"  onclick='javascript:ShowPage("applstat.php",null,"contentDiv");return false;'>Application Statistics </a></li> <!-- menuvoice with href-->
	<?php
if (_instr(0,GetCompany(),"NDHCD",0) > 0)
{
   ?>
	<li><a href="#" onclick='javascript:ShowPage("awardee_stat.php",null,"contentDiv");return false;'>Delegates Statistics</a></li> <!-- menuvoice with js action-->
	<?php  // WARNING: assuming GetCompany is an external function
}
else
{
   ?>
<li>	<a href="#" onclick='javascript:ShowPage("awardee_stat.php",null,"contentDiv");return false;'>Awardees Statistics</a></li> <!-- menuvoice with js action-->
                                             <?php }?>
</ul>
                                            </li>
                                            <?php
                                        }
 ?>

										<?php
											if (_instr(0,$mycombination,"v",0) > 0)
											{
											?>
											<li><a href="#"  onclick='javascript:ShowPage("delpassport.php",null,"contentDiv");return false;'>Delete Passport</a></li>
											<li><a href="#"  onclick='javascript:ShowPage("delfolder.php",null,"contentDiv");return false;'>Delete Document Folder</a></li>
											<?php  // WARNING: assuming mycombination is an external function
											}
                                        if (_instr(0,$mycombination,"ab",0) > 0)
									{
										?>
										<li><a href="#" onclick='javascript:ShowPage("test.php",null,"contentDiv");return false;'>View Documents</a></li>
                                        <?php
                                        }
                                        if (_instr(0,$mycombination,"ac",0) > 0)
									{
                                        ?>
										<li><a href="#" onclick='javascript:ShowPage("Applications/application_manager.php",null,"contentDiv");return false;'>Setup Application</a></li>
                                        <?php }?>
										<!--<ul id="sub-menu">
											<li><a href="#">Application Statistics</a></li>
											<li><a href="#">Awardees Statistics</a></li>
										</ul> -->
									</li>

									<?php
										if (_instr(0,$mycombination,"v",0) > 0)
										{
										?>
										<li><a href="#" onclick='javascript:ShowPage("mails.php",null,"contentDiv");return false;'>Send Mails</a></li>

										<?php }
if (_instr(0,$mycombination,"z",0) > 0)
										{
                                ?>
									<li><a href="#"  onclick="javascript:downloadAppl('<?php
									echo $id; // WARNING: assuming id is an external function ?>')" title="Click to download list of applicants">Application Download</a></li>
									<?php
}
										if (_instr(0,$mycombination,"p",0) > 0)
										{
										?>
										<li><a href="#" onclick='javascript:ShowPage("query.php",null,"contentDiv");return false;'>Query Wizard</a></li>
										<?php  // WARNING: assuming mycombination is an external function
										}
									?>
									<?php
										if (_instr(0,$mycombination,"q",0) > 0)
										{
										?>
										<li><a href="#" onclick='javascript:ShowPage("sql.php",null,"contentDiv");return false;'>SQL Console</a></li>
                                <li><a href="#" onclick='javascript:ShowPage("reset_app.php",null,"contentDiv");return false;'>Reset Application Type</a></li>
										<?php
										}
									?>
									<?php
										if (_instr(0,GetCompany(),"NDHCD",0) > 0)
										{
										?>
										<li><a href="#" onclick="window.open('esms/Chart/weekly-sales3.php','chart_topI','status=yes,scrollbars=yes,resizable=yes,width=1200,height=800');">Report Dashboard</a></li>
										<?php  // WARNING: assuming GetCompany is an external function
										}
									?>
								</ul>
							</li>
							<?php }

							if (_instr(0,$mycombination,"w",0) > 0 || _instr(0,$mycombination,"af",0) > 0 || _instr(0,$mycombination,"ae",0) > 0 || _instr(0,$mycombination,"ag",0) > 0)
							{
							echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Shortlist</a>';?>
							<ul class="dropdown-menu">
								<?php
									if (_instr(0,$mycombination,"af",0) > 0)
									{
										if (_instr(0,GetCompany(),"RSSDA",0) > 0)
										{
										?>
										<li><a href="#" onclick='javascript:ShowPage("assign_statex.php",null,"contentDiv");return false;'>Assign LGA</a></li>
										<?php  // WARNING: assuming mycombination is an external function assuming GetCompany is an external function
										}
										else
										{
                                            if (_instr(0,$mycombination,"af",0) > 0)
									{
										?>

										<li><a href="#" onclick='javascript:ShowPage("assign_statex.php",null,"contentDiv");return false;'>Assign State</a></li>
										<?php
                                            }
										}
									}
									if (_instr(0,$mycombination,"w",0) > 0)
									{
									?>
									<li><a href="#" onclick='javascript:ShowPage("shortlist_1.php",null,"contentDiv");return false;' >Make Shortlist</a></li>


										<?php  // WARNING: assuming mycombination is an external function
										}
                                if (_instr(0,$mycombination,"ae",0) > 0 || _instr(0,$mycombination,"ag",0) > 0)
									{
									?>

<li class="dropdown-submenu"><a href="#">Shortlist</a>

									<ul class="dropdown-menu">
<?php
	if (_instr(0,GetCompany(),"RSSDA",0) > 0)
{
   ?>
                      <li><a href="#" onclick='javascript:ShowPage("shortlist_report.php?action=lga",null,"contentDiv");return false;' >LGA</a></li>
   <?php  // WARNING: assuming GetCompany is an external function
}
else
{
    if (_instr(0,$mycombination,"ae",0) > 0)
									{
   ?>

	<li><a href="#" onclick='javascript:ShowPage("shortlist_report.php?action=state",null,"contentDiv");return false;'>State</a></li>
	<li><a href="#" onclick='javascript:ShowPage("shortlist_report.php?action=zone",null,"contentDiv");return false;'>Zone</a></li>
	<?php
    }
}
                                if (_instr(0,$mycombination,"ag",0) > 0)
									{
 ?>
	<li><a href="#" onclick='javascript:ShowPage("report.php",null,"contentDiv");return false;'>Report Generator</a></li>


<?php }
                                }?>
    </ul>

							</li>
                        </ul></li>

							<?php }
							if (_instr(0,$mycombination,"x",0) > 0 || _instr(0,$mycombination,"y",0) > 0)   {

							echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Migration</a>'; ?>
							<ul class="dropdown-menu">



								<?php
									if (_instr(0,$mycombination,"x",0) > 0)
									{
									?>

									<li><a href="#" onclick='javascript:ShowPage("new_awardee.php?page=admin",null,"contentDiv");return false;'>Add New Awardee</a></li>
									<?php  // WARNING: assuming mycombination is an external function
									}
									if (_instr(0,$mycombination,"y",0) > 0)
									{
									?>

									<li><a href="#" onclick='javascript:ShowPage("verify_list.php",null,"contentDiv");return false;' >View Records</a></li>
									<?php

										if (_instr(0,GetCompany(),"NDHCD",0) > 0)
										{
										?>
										<li><a href="#" onclick='javascript:ShowPage("migrate_awardees.php",null,"contentDiv");return false;'>Migrate Delegates</a></li>
										<li><a href="#" onclick='javascript:ShowPage("query2.php",null,"contentDiv");return false;'>Query Delegates</a></li>


										<?php  // WARNING: assuming GetCompany is an external function
										}
										else
										{
										?>
										<li><a href="#" onclick='javascript:ShowPage("migrate_awardees.php",null,"contentDiv");return false;'>Migrate Awardees</a></li>
										<li><a href="#" onclick='javascript:ShowPage("query2.php",null,"contentDiv");return false;'>Query Awardees</a></li>
										<?php
                                            if (_instr(0,GetCompany(),"PTDF",0) > 0)
									{
                                                ?>
                                <li><a href="#" onclick='javascript:ShowPage("display_oldawardees.php",null,"contentDiv");return false;'>View Old Awardees</a></li>
                                <?php
                                            }
										}
									}
								?>
							</ul>
						</li>
						<?php }
						if (_instr(0,$mycombination,"i",0) > 0 || _instr(0,$mycombination,"j",0) > 0 || _instr(0,$mycombination,"k",0) > 0 || _instr(0,$mycombination,"l",0) > 0 || _instr(0,$mycombination,"m",0) > 0)
						{
						echo '<li class="dropdown" ><a href="#" class="dropdown-toggle" data-toggle="dropdown">Exams</a>';?>
						<ul class="dropdown-menu">
							<?php
								if (_instr(0,$mycombination,"i",0) > 0)
								{
								?>
								<li><a href="#" onclick='javascript:ShowPage("createlocation.php",null,"contentDiv");return false;'>Create Location</a></li>
								<li><a href="#" onclick='javascript:ShowPage("setlocation.php",null,"contentDiv");return false;'>Set Location</a></li>

								<li><a href="#" onclick='javascript:ShowPage("examgroup.php",null,"contentDiv");return false;'>Create Exam Group</a></li>
								<li><a href="#" onclick='javascript:ShowPage("mapgroup.php",null,"contentDiv");return false;'>Map Course to Group</a></li>
								<?php  // WARNING: assuming mycombination is an external function
								} //if instr(GetCompany,"PTDF")>0 then
							?>
							<?php
								if (_instr(0,$mycombination,"j",0) > 0)
								{
								?>
								<li><a href="#" onclick='javascript:ShowPage("addcenter.php",null,"contentDiv");return false;'>Add Center</a></li>
								<?php  // WARNING: assuming mycombination is an external function
								}
							?>
							<?php
								if (_instr(0,$mycombination,"k",0) > 0)
								{
								?>
								<li><a href="#" onclick='javascript:ShowPage("scheduler.php",null,"contentDiv");return false;'>Make Schedule</a></li>
								<?php  // WARNING: assuming mycombination is an external function
								}
							?>
							<?php
								if (_instr(0,$mycombination,"l",0) > 0)
								{
									if (_instr(0,GetCompany(),"PTDF",0) > 0)
									{
									?>

								<!--<li><a href="#" onclick='javascript:ShowPage("list_students.php",null,"contentDiv");return false;'>Enter Scores</a></li> -->
									<?php  // WARNING: assuming mycombination is an external function assuming GetCompany is an external array
									}
									else
									{
									?>
								<!--<li><a href="#" onclick='javascript:ShowPage("entertestscore.php",null,"contentDiv");return false;' >Enter Scores</a></li> -->
									<?php
									}
								}
							?>
							<?php
								if (_instr(0,$mycombination,"m",0) > 0)
								{
									if (_instr(0,GetCompany(),"PTDF",0) > 0)
									{
									?>

						<!--<li><a href="#" onclick='javascript:ShowPage("progress_view.php",null,"contentDiv");return false;'>View Scores</a></li> -->
									<?php  // WARNING: assuming mycombination is an external function assuming GetCompany is an external array
									}
									else
									{
									?>
							<!--		<li><a href="#"  onclick='javascript:ShowPage("entertestscore.php?act=viewrecord",null,"contentDiv");return false;'>View Scores</a></li>-->
									<?php
									}
									if ($id != "gweps")
									{
									?>
									<li><a href="#" onclick='javascript:ShowPage("album.php",null,"contentDiv");return false;'>Photo Album</a></li>
									<?php  // WARNING: assuming id is an external function
									}
								}
							?>
						</ul>
					</li>
					<?php }

					if (_instr(0,$mycombination,"n",0) > 0 || _instr(0,$mycombination,"o",0) > 0)    {
					//echo '<li class="dropdown"><a href="#">News</a>'; ?>
					<!--<ul class="dropdown-menu">-->

						<?php
							if (_instr(0,$mycombination,"n",0) > 0)
							{
							?>
							<!--<li><a href="#" onclick='javascript:ShowPage("news/manage_news.php",null,"contentDiv");return false;'>Add</a></li>-->
							<?php  // WARNING: assuming mycombination is an external function
							}
						?>
				<!--	</ul>
				</li>-->
				<?php }

				if (_instr(0,$mycombination,"r",0) > 0 || _instr(0,$mycombination,"s",0) > 0)    {

				echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Payments</a>'; ?>
				<ul class="dropdown-menu">
					<li><a href="#" onclick='javascript:ShowPage("create_fee.php",null,"contentDiv");return false;'>Create Fees</a></li>
					<li><a href="#" onclick='javascript:ShowPage("config_budget.php",null,"contentDiv");return false;'>Budget</a></li>
					<?php
						if (_instr(0,$mycombination,"r",0) > 0)
						{
							if(_instr(0,GetCompany(),"PTDF",0) > 0 || _instr(0,GetCompany(),"RSSDA",0) > 0 || _instr(0,GetCompany(),"SPDC",0) > 0 || _instr(0,GetCompany(),"NITDA",0) > 0)
							{
							?>
							<li><a href="#" onclick='javascript:ShowPage("payschedule.php",null,"contentDiv");return false;'>Schedule Payment</a></li>
							<li><a href="#" onclick='javascript:ShowPage("approve.php",null,"contentDiv");return false;'>Approve Schedule</a></li>
							<?php  // WARNING: assuming mycombination is an external function assuming GetCompany is an external function assuming GetCompany is an external function assuming GetCompany is an external function
								if (_instr(0,GetCompany(),"PTDF",0) > 0 || _instr(0,GetCompany(),"NITDA",0) > 0 || _instr(0,GetCompany(),"SPDC",0) > 0)
								{
								?>
								<li><a href="#" onclick='javascript:ShowPage("payment_ptdf4.php",null,"contentDiv");return false;'>Enter Payment</a></li>
								<?php  // WARNING: assuming GetCompany is an external function
								}
								else
								{
								?>

								<li><a href="#" onclick='javascript:ShowPage("dopayment.php",null,"contentDiv");return false;'>Enter Payment</a></li>
								<?php
								}
							?>
							<li><a href="#" onclick='javascript:ShowPage("reminder.php",null,"contentDiv");return false;'>Payment Reminder</a></li>
							<li><a href="#" onclick='javascript:ShowPage("expenses.php",null,"contentDiv");return false;'>Enter Expenses</a></li>
							<?php
							}
							else
							{
							?>

							<li class="sub-menu"><a href="#" onclick='javascript:ShowPage("payment.php",null,"contentDiv");return false;'>Enter Payment</a>
								<?php
								}
							}
						?>

						<li class="dropdown-submenu"><a href="#">Payment Report</a>

							<ul class="dropdown-menu">

								<?php
if (_instr(0,$mycombination,"r",0) > 0)
{
  if (_instr(0,GetCompany(),"PTDF",0) > 0 || _instr(0,GetCompany(),"RSSDA",0) > 0 || _instr(0,GetCompany(),"SPDC",0) > 0 || _instr(0,GetCompany(),"NITDA",0) > 0)
  {
     ?>
			<li><a href="#" onclick='javascript:ShowPage("schedulereport.php",null,"contentDiv");return false;'>Schedule Report</a></li>
			<li><a href="#" onclick='javascript:ShowPage("paymentreport2.php",null,"contentDiv");return false;'>Payment Report</a></li>
			<li><a href="#" onclick='javascript:ShowPage("expensesreport.php",null,"contentDiv");return false;'>Expenses Report</a></li>
			<li><a href="#" onclick='javascript:ShowPage("view_schedule.php",null,"contentDiv");return false;'>View/Print Schedule</a></li>
<?php  // WARNING: assuming mycombination is an external function assuming GetCompany is an external function assuming GetCompany is an external function assuming GetCompany is an external function
  }
  else
  {
     ?>
<li><a  onclick='javascript:ShowPage("paymentreport.php",null,"contentDiv");return false;'>Payment Report</a></li>
<?php
  }
}
 ?>

							</ul>

						</li>

					</ul>
				</li>
				<?php }
				//if ( _instr(0,$mycombination,"af",0) > 0)    {

				//echo '<li class="dropdown"><a href="#">Archive</a>'; ?>
				<!--<ul class="dropdown-menu">
					<li><a href="#" >Arhive</a></li>
					<li><a href="#" onclick='javascript:ShowPage("ecfm/default.php",null,"contentDiv");return false;'>Archive Documents</a></li>
				</ul>
			</li>-->
			<?php  //}
		?>
		<!--<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			Components <b class="caret"></b>
			</a>
			<ul class="dropdown-menu">
			<li><a href="elements-ui.html">Elements</a></li>
			<li><a href="button-ui.html">Buttons & Icons</a></li>
			<li><a href="portlet.html">Portlet</a></li>
			<li><a href="jquery-ui.html">jQuery UI</a></li>
			</ul>
		</li> -->
		<!--<li><a href="front/#">FrontEnd <span class="badge badge-primary">New</span></a></li>-->

	</ul><!-- /.nav -->
</div>
<!-- END TOP MENU -->

</div><!-- /.nav-top -->
</nav><!-- /.navbar-top -->
<!-- END TOP NAVIGATION -->


<!-- BEGIN SIDE NAVIGATION -->
<nav class="navbar-side" role="navigation">
	<div class="navbar-collapse sidebar-collapse collapse">

		<!-- BEGIN SHORTCUT BUTTONS -->
		<div class="media">
			<ul class="sidebar-shortcuts">
				<li><a class="btn"><i class="fa fa-user icon-only"></i></a></li>
				<li><a class="btn"><i class="fa fa-envelope icon-only"></i></a></li>
				<li><a class="btn"><i class="fa fa-th icon-only"></i></a></li>
				<li><a class="btn"><i class="fa fa-gear icon-only"></i></a></li>
			</ul>
		</div>
		<!-- END SHORTCUT BUTTONS -->

		<!-- BEGIN FIND MENU ITEM INPUT -->
		<div class="media-search">
			<input type="text" class="input-menu" id="input-items" placeholder="Find...">
		</div>
		<!-- END FIND MENU ITEM INPUT -->

		<ul id="side" class="nav navbar-nav side-nav">
			<!-- BEGIN SIDE NAV MENU -->
			<!-- Navigation category -->
			<li>
				<h4>Navigation</h4>
			</li>
			<!-- END Navigation category -->

			<li>
				<a class="active" href="index.php">
					<i class="fa fa-dashboard"></i> Dashboard
				</a>
			</li>
			<!-- BEGIN COMPONENTS DROPDOWN -->
			<?php if(isset($_SESSION['ucat']) && $_SESSION['ucat']=='1'){
				if(_instr(0,GetCompany(),"NITDA",0) > 0){
			?>
		<!--<li class="panel">
		<a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#components">
		<i class="fa fa-user"></i> Applicant <span class="fa arrow"></span>
		</a>
		<ul class="collapse nav" id="components">
		<li>
		<a href="#" >
		<i class="fa fa-angle-double-right"></i> New Applicant<span class="label label-sm label-primary">New</span>

		</a>
		</li>
		<li>
		<a href="#" onclick="showAjax('','pages/list_applicant.php','contentDiv')">
		<i class="fa fa-angle-double-right"></i> View Applicant
		</a>
		</li>

		</ul>
		</li>-->

		<li class="panel">
	<a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#components">
	<i class="fa fa-user"></i> Awardee Upload <span class="fa arrow"></span>
	</a>
	<ul class="collapse nav" id="components">
	<li>
	<a href="#" onclick="showAjax('','pages/upload_doc1.php','contentDiv')">
	<i class="fa fa-angle-double-right"></i> Upload Documents<span class="label label-sm label-primary">New</span>

	</a>
	</li>
	</ul>
	</li>


		<!--<li class="panel">
		<a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#forms">
		<i class="fa fa-edit"></i> Shortlist <span class="fa arrow"></span>
		</a>
		<ul class="collapse nav" id="forms">
		<li>
		<a href="#" onclick="showAjax('','pages/award.php','contentDiv')">
		<i class="fa fa-angle-double-right"></i> Award Scholarship<span class="label label-sm label-primary">New</span>

		</a>
		</li>
		<li>
		<a href="#" onclick="showAjax('','pages/awardee.php','contentDiv')">
		<i class="fa fa-angle-double-right"></i> View Shortlisted
		</a>
		</li>
		<li>
			<a href="#" onclick="showAjax('','pages/profile.php','contentDiv')">
				<i class="fa fa-angle-double-right"></i> Profile
			</a>
		</li>

		</ul>
		</li>-->
		<li class="panel">
		<a href="#" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#r-pages">
		<i class="fa fa-bar-chart-o"></i> Request <span class="fa arrow"></span>
		</a>
		<ul class="collapse nav" id="r-pages">
		<!--<li>
			<a href="#" onclick="showAjax('','pages/request_list.php','contentDiv')">
				<i class="fa fa-angle-double-right"></i> View Request
			</a>
		</li>-->
		<li>
		<a href="#" onclick="showAjax('','pages/request_listB.php','contentDiv')">
		<i class="fa fa-angle-double-right"></i> View Request
		</a>
		</li>

		<li>
		<a href="#" onclick="showAjax('','pages/group_mandate.php','contentDiv')">
		<i class="fa fa-angle-double-right"></i> View Mandate
		</a>
		</li>
		<!--<li>
			<a href="#" onclick="showAjax('','pages/view_full_mandate.php','contentDiv')">
				<i class="fa fa-angle-double-right"></i> full mandate
			</a>
		</li>-->

		</ul>
		</li>

		<li class="panel">
		<a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#e-pages">
		<i class="fa fa-cogs"></i> Settings <span class="fa arrow"></span>
		</a>
		<ul class="collapse nav" id="e-pages">
		<!--<li>
			<a href="#" onclick="showAjax('','pages/nitda_dept.php','contentDiv')">
				<i class="fa fa-angle-double-right"></i> Manage Department
			</a>
		</li>
		<li>
			<a href="#" onclick="showAjax('','pages/staff_form.php','contentDiv')">
				<i class="fa fa-angle-double-right"></i> Manage User
			</a>
		</li>-->
		<li>
		<a href="#" onclick="showAjax('','pages/documents_2_request.php','contentDiv')">
		<i class="fa fa-angle-double-right"></i> Document/Request
		</a>
		</li>
		<li>
		<a href="#" onclick="showAjax('','pages/privileges.php','contentDiv')">
		<i class="fa fa-angle-double-right"></i> Privileges
		</a>
		</li>

		<!-- <li>
			<a href="#" onclick="showAjax('','pages/pdf_modal_sample.php','contentDiv')">
			<i class="fa fa-angle-double-right"></i> PDF Modal Test
			</a>
		</li>-->
		<li>
		<a href="#" onclick="showAjax('','pages/approval_chain.php','contentDiv')">
		<i class="fa fa-angle-double-right"></i>Approval Chain
		</a>
		</li>

		<!--<li>
			<a href="#" onclick="showAjax('','pages/staff_mandate_Form.php','contentDiv')">
				<i class="fa fa-angle-double-right"></i>mandate sample
			</a>
		</li>-->

		</ul>
		</li>
		<!-- END MORE PAGES DROPDOWN -->

		<!-- BEGIN PAGES DROPDOWN -->
		<li class="panel">
		<a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#pages">
		<i class="fa fa-list"></i> Report <span class="fa arrow"></span>
		</a>
		<ul class="collapse nav" id="pages">
		<li>
		<a href="#">
		<i class="fa fa-angle-double-right"></i> Completed Request
		</a>
		</li>
		<li>
		<a href="#" onclick="showAjax('','pages/upload_doc1.php','contentDiv')">
		<i class="fa fa-angle-double-right"></i> Awardee
		</a>
		</li>

		<!--<li>
			<a href="#" onclick="showAjax('','pages/pdf_modal_sample2.php','contentDiv')">
				<i class="fa fa-angle-double-right"></i> Print Demo
			</a>
		</li>-->


		</ul>
		</li>
				<?php
			}
				}else{  ?>
<!-- beging applicant menu-->
				<?php if(_instr(0,GetCompany(),"NITDA",0) > 0){?>
	<li class="panel">
	<a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#components">
	<i class="fa fa-user"></i> Awardee Upload <span class="fa arrow"></span>
	</a>
	<ul class="collapse nav" id="components">
	<li>
	<a href="#" onclick="showAjax('','pages/upload_doc1.php','contentDiv')">
	<i class="fa fa-angle-double-right"></i> Upload Documents<span class="label label-sm label-primary">New</span>

	</a>
	</li>
	<li>
	<a href="#" onclick="showAjax('','pages/view_doc.php','contentDiv')">
	<i class="fa fa-angle-double-right"></i> View Documents
	</a>
	</li>

	</ul>
	</li>

	<li class="panel">
	<a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#pages">
	<i class="fa fa-user"></i> Awardee Request <span class="fa arrow"></span>
	</a>
	<ul class="collapse nav" id="pages">
	<li>
	<a href="#" onclick="showAjax('','pages/request_form.php','contentDiv')">
	<i class="fa fa-angle-double-right"></i> Make Request<span class="label label-sm label-primary">New</span>

	</a>
	</li>
	<!--<li>
	<a href="#">
	<i class="fa fa-angle-double-right"></i> View Request
	</a>
	</li>-->

	</ul>
	</li>
				<?php }?>
<li class="panel">
<a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#act-pages">
<i class="fa fa-user"></i> Account Information <span class="fa arrow"></span>
</a>
<ul class="collapse nav" id="act-pages">
<li>
						<?php if(_instr(0,GetCompany(),"PTDF",0) > 0){?>
	<a href="#" onclick='javascript:ShowPage("fbindex3.php",null,"contentDiv");return false;'>
	<i class="fa fa-angle-double-right"></i> Account Details<span class="label label-sm label-primary">New</span>

	</a>
							<?php } else {?>
	<a href="#" onclick="showAjax('','pages/account_info.php','contentDiv')">
	<i class="fa fa-angle-double-right"></i> Account Details<span class="label label-sm label-primary">New</span>

	</a>
							<?php }?>
						</li>


						<!--<li>
						<?php if(_instr(0,GetCompany(),"PTDF",0) > 0){?>
	<a href="#" onclick='javascript:ShowPage("fbsearch.php",null,"contentDiv");return false;'>
	<i class="fa fa-angle-double-right"></i> Account Details1<span class="label label-sm label-primary">New</span>

	</a>
							<?php } else {?>
	<a href="#" onclick="showAjax('','pages/account_info.php','contentDiv')">
	<i class="fa fa-angle-double-right"></i> Account Details1<span class="label label-sm label-primary">New</span>

	</a>
							<?php }?>
						</li>-->

						<!--<li>
							<a href="#">
							<i class="fa fa-angle-double-right"></i> View Request
							</a>
						</li>-->

					</ul>
				</li>
				<!-- end applicant menu-->
			<?php } ?>
		</ul>

	</div><!-- /.navbar-collapse -->
</nav><!-- /.navbar-side -->
<!-- END SIDE NAVIGATION -->


<!-- BEGIN MAIN PAGE CONTENT -->
<div id="page-wrapper">
	<input type="hidden" name="mycombination" value="<?php echo $_SESSION ['COMBINATION']; ?>">
	<input type="hidden" name="PinNo" value="<?php echo $_SESSION ['user']; ?>">
	<input type="hidden" name="sessionid" value="<?php echo session_id (); ?>">
	<input type="hidden" name="id" value="<?php echo $_SESSION ['id']; ?>">


	<div id="contentDiv">




		<?php include('pages/default.php'); ?>
	</div>
	<?php //include_once('../footer.php'); ?>
	<div class="footer">
		<div class="footer-inner">
			<!-- basics/footer -->
			<div class="footer-content">
				&copy; 2015 <a href="#">Cinfores Limited</a>, All Rights Reserved.
			</div>
			<!-- /basics/footer -->
		</div>
	</div>
	<button type="button" id="back-to-top" class="btn btn-primary btn-sm back-to-top">
		<i class="fa fa-angle-double-up icon-only bigger-110"></i>
	</button>
</div>





<!-- END MAIN PAGE CONTENT -->

</div>
</div>
</form>
<div id="live-chat-ui">
	<header class="clearfix">
		<a href="#" class="chat-close"><i class="fa fa-times"></i></a>
		<h4>John Doe</h4>
		<span class="chat-message-counter" style="display: inline;">3</span>
	</header>
	<div class="chat" style="display: none;">
		<div class="chat-history">
			<div class="chat-message clearfix">
				<img src="../assets/images/user-3.jpg" alt="" style="width: 37px;height:37px;">
				<div class="chat-message-content clearfix">
					<span class="chat-time">13:35</span>
					<h5>John Doe</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, explicabo quasi ratione odio dolorum harum.</p>
				</div> <!-- end chat-message-content -->
			</div> <!-- end chat-message -->

			<hr class="separator" />

			<div class="chat-message clearfix">
				<img src="../assets/images/user-4.jpg" alt="" style="width: 37px;height:37px;">
				<div class="chat-message-content clearfix">
					<span class="chat-time">13:37</span>
					<h5>Roddy</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, nulla accusamus magni vel debitis numquam qui tempora rem voluptatem delectus!</p>
				</div> <!-- end chat-message-content -->
			</div> <!-- end chat-message -->

			<hr class="separator" />

			<div class="chat-message clearfix">
				<img src="../assets/images/user-5.jpg" alt="" style="width: 37px;height:37px;">
				<div class="chat-message-content clearfix">
					<span class="chat-time">13:38</span>
					<h5>Maris Bradley</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
				</div> <!-- end chat-message-content -->
			</div> <!-- end chat-message -->

			<hr class="separator" />

		</div> <!-- end chat-history -->
		<p class="chat-feedback">Your partner is typing&#65533;</p>

	</div> <!-- end chat -->
</div> <!-- end live-chat -->
<!--

        <script type="text/javascript">
        function displayResult()

        {
            document.getElementById("myTable").insertRow(-1).innerHTML = '<td>Current Employer:</td><td></td><td><input type="text" name="current" id="current" class="ui-state-default ui-corner-all" style="width:364px" /></td>';
            document.getElementById("myTable").insertRow(-1).innerHTML = '<td>Rank /Position held with dates:</td><td></td><td><input type="text" name="rank" id="rank" class="ui-state-default ui-corner-all" style="width:364px" /></td>';
            document.getElementById("myTable").insertRow(-1).innerHTML = '<td>Location City and Country:</td><td></td><td><input type="text" name="location" id="location" class="ui-state-default ui-corner-all" style="width:364px" /></td>';
            document.getElementById("myTable").insertRow(-1).innerHTML = '<td>Sector:</td><td></td><td><select class="ui-state-default ui-corner-all" size=1 id="sector" name="sector"><option></option><option>Oil and gas</option><option>Academia</option><option>Mining</option><option>Mancfacturing</option><option>Military</option><option>Aviation</option><option>Agriculture</option><option>Judiciary</option><option>Polictics</option><option>Banking</option><option>Health</option><option>Environmental</option></select></td>';

        }
        </script> -->

        <style type="text/css">

        .inp {
          background:#f5f5f5;
          border:1px solid #000;
        }

        </style>

<style>
	#main-container {
		background: none;
		padding: 0;
	}
</style>



		<!-- core JavaScript-->
		<script src="../assets/jquery-1.10.1.min.js"></script>

		<!-- <script src="../includes/jquery-1.10.2.js"></script> -->
		<script src="../includes/jquery-ui.js"></script>




		<script src="../assets/js/bootstrap.min.js"></script>
		<script src="../assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<script src="../assets/js/plugins/pace/pace.min.js"></script>

		<!-- PAGE LEVEL PLUGINS JS -->
		<script src="../assets/js/plugins/jqueryui/jquery-ui.custom.min.js"></script>
		<script src="../assets/js/plugins/jqueryui/jquery.ui.touch-punch.min.js"></script>
		<script src="../assets/js/plugins/daterangepicker/moment.js"></script>
		<script src="../assets/js/plugins/daterangepicker/daterangepicker.js"></script>
		<script src="../assets/js/plugins/morris/raphael-min.js"></script>
		<script src="../assets/js/plugins/morris/morris.min.js"></script>
		<script src="../assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
		<script src="../assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
		<script src="../assets/js/plugins/easypiechart/jquery.easypiechart.min.js"></script>
		<script src="../assets/js/plugins/easypiechart/excanvas.compiled.js"></script>
		<script src="../assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
		<script src="../assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>



		<!-- Themes Core Scripts -->
		<script src="../assets/js/main.js"></script>



		<!-- REQUIRE FOR SPEECH COMMANDS -->
		<script src="../assets/js/speech-commands.js"></script>
		<script src="../assets/js/plugins/gritter/jquery.gritter.min.js"></script>

		<!-- initial page level scripts for examples -->
		<script src="../assets/js/plugins/slimscroll/jquery.slimscroll.init.js"></script>
		<!--<script src="../assets/js/home-page.init.js"></script>-->


		<script src="../assets/js/plugins/jquery-sparkline/jquery.sparkline.init.js"></script>
		<script src="../assets/js/plugins/easypiechart/jquery.easypiechart.init.js"></script>
		<script src="../includes/jQryfile.js" type="text/javascript"></script>



		<script src="../assets/js/plugins/footable/footable.min.js"></script>
		<script src="../assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="../assets/js/plugins/datatables/datatables.js"></script>
		<script src="../assets/js/plugins/datatables/datatables.responsive.js"></script>



		<!-- PAGE LEVEL PLUGINS JS FOR PDF Modal -->
		<script src="../assets/js/plugins/bootbox/bootbox.min.js"></script>
		<script src="../assets/js/plugins/gritter/jquery.gritter.min.js"></script>
		<script
		src="../assets/js/plugins/bootstrap-rating/bootstrap-rating-input.min.js"></script>
		<script src="../assets/js/plugins/easypiechart/jquery.easypiechart.min.js"></script>

		<script src="../assets/js/plugins/slimscroll/jquery.slimscroll.init.js"></script>
		<script src="../assets/js/plugins/bootbox/demo-modals.js"></script>



		<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>

<script src="../assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="../assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="../assets/js/plugins/jquery-validation/additional-methods.min.js"></script>

         <script src="../assets/js/plugins/jqueryui/jquery-ui.min.js"></script>
        <script src="../assets/js/plugins/jqueryui/jquery.ui.touch-punch.min.js"></script>
<!--<script src="../js/jquery-1.3.2.js"></script>
	<script src="../js/jqprint.js"></script>-->



<script>


		$(document).ready(function() {
            $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'MM yy',
            onClose: function(dateText, inst) {
                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                $(this).datepicker('setDate', new Date(year, month, 1));
            }
        });
        $( "#datepicker2" ).datepicker({
            showOtherMonths: true,
            selectOtherMonths: false,

        });
        $( "#datepicker3" ).datepicker({
            showOtherMonths: true,
            selectOtherMonths: false,
        });


             $("div.b1").click(function(){

				var mode = $("input[name='mode']:checked").val();
				var close = mode == "popup" && $("input#closePop").is(":checked");
				var extraCss = $("input[name='extraCss']").val();

				var print = "";
				$("input.selPA:checked").each(function(){
					print += (print.length > 0 ? "," : "") + "div.PrintArea." + $(this).val();
				});

				var keepAttr = [];
				$(".chkAttr").each(function(){
					if ($(this).is(":checked") == false )
                    return;

					keepAttr.push( $(this).val() );
				});

				var headElements = $("input#addElements").is(":checked") ? '<meta charset="utf-8" />,<meta http-equiv="X-UA-Compatible" content="IE=edge"/>' : '';

				var options = { mode : mode, popClose : close, extraCss : extraCss, retainAttr : keepAttr, extraHead : headElements };

				$( print ).printArea( options );
			});

		});
	</script>







</body>
</html>
