
					<!-- BEGIN PAGE HEADING ROW -->
						<div class="row">
							<div class="col-lg-12">
								<!-- BEGIN BREADCRUMB -->
								<div class="breadcrumbs">
									<ul class="breadcrumb">
										<li>
											<a href="#">Home</a>
										</li>
										<li class="active">Dashboard || <?php //echo 'compemail :'.$_SESSION['compEmail'];//echo $_SESSION['COMBINATION'];  ?></li>
									</ul>


								</div>
								<!-- END BREADCRUMB -->

								<div class="page-header title">
								<!-- PAGE TITLE ROW -->
									<h1>Dashboard <span class="sub-title">Content Overview || <?php //echo implode(',',$_SESSION['privLabel']);  echo "- -".$_SESSION['id']; echo " || ".  implode(',',$_SESSION['chain']); ?></span></h1>
								</div>

								<!-- /#ek-layout-button -->
								<!--<div class="qs-layout-menu">
									<div class="btn btn-gray qs-setting-btn" id="qs-setting-btn">
										<i class="fa fa-cog bigger-150 icon-only"></i>
									</div>
									<div class="qs-setting-box" id="qs-setting-box">

										<div class="hidden-xs hidden-sm">
											<span class="bigger-120">Layout Options</span>

											<div class="hr hr-dotted hr-8"></div>
											<label>
												<input type="checkbox" class="tc" id="fixed-navbar" />
													<span id="#fixed-navbar" class="labels"> Fixed NavBar</span>
											</label>
											<label>
												<input type="checkbox" class="tc" id="fixed-sidebar" />
													<span id="#fixed-sidebar" class="labels"> Fixed NavBar+SideBar</span>
											</label>
											<label>
												<input type="checkbox" class="tc" id="sidebar-toggle" />
													<span id="#sidebar-toggle" class="labels"> Sidebar Toggle</span>
											</label>
											<label>
												<input type="checkbox" class="tc" id="in-container" />
													<span id="#in-container" class="labels"> Inside<strong>.container</strong></span>
											</label>

											<div class="space-4"></div>
										</div>

										<span class="bigger-120">Color Options</span>

										<div class="hr hr-dotted hr-8"></div>

										<label>
											<input type="checkbox" class="tc" id="side-bar-color" />
											<span id="#side-bar-color" class="labels"> SideBar (Light)</span>
										</label>

										<ul>
										<li><button class="btn" style="background-color:#4e72c2;" onclick="swapStyle('../assets/css/themes/style-4.css')"></button></li>

											<<li><button class="btn" style="background-color:#d15050;" onclick="swapStyle('../assets/css/themes/style.css')"></button></li>
											<li><button class="btn" style="background-color:#86618f;" onclick="swapStyle('../assets/css/themes/style-1.css')"></button></li>
											<li><button class="btn" style="background-color:#ba5d32;" onclick="swapStyle('../assets/css/themes/style-2.css')"></button></li>
											<li><button class="btn" style="background-color:#488075;" onclick="swapStyle('../assets/css/themes/style-3.css')"></button></li>
																					</ul>

									</div>
								</div> -->
								<!-- /#ek-layout-button -->

							</div><!-- /.col-lg-12 -->
						</div><!-- /.row -->
					<!-- END PAGE HEADING ROW -->
						<div class="row">
							<div class="col-lg-12" >

								<!-- START YOUR CONTENT HERE -->
									<div class="row">
									<div class="col-lg-9 col-sm-12">

<?php if(isset($_SESSION['ucat']) && $_SESSION['ucat']=='1'){?>
										<div class="row">

											<div class="col-lg-4 col-sm-4">
												<a href="#" class="tile-button btn btn-primary">
													<div class="tile-content-wrapper">
														<i class="fa fa-users"></i>
														<div class="tile-content">
															45
														</div>
														<small>
															Total Applicants
														</small>
													</div>
												</a>
											</div>

											<div class="col-lg-4 col-sm-4">
												<a href="#" class="tile-button btn btn-inverse">
													<div class="tile-content-wrapper">
														<i class="fa fa-folder-open"></i>
														<div class="tile-content">
															5
														</div>
														<small>
															Scholarship Category
														</small>
													</div>
												</a>
											</div>


											<div class="col-lg-4 col-sm-4">
												<a href="#" class="tile-button btn btn-white">
													<div class="tile-content-wrapper">
														<i class="fa fa-calculator text-primary"></i>
														<div class="tile-content text-primary">
															<span>2015</span>
														</div>
														<small>
															Scholarship Session
														</small>
													</div>
												</a>
											</div>


										</div>
										<?php } ?>

										<!-- Server Info Charts .morris -->
										<div class="portlet">
											<div class="portlet-heading inverse">
												<div class="portlet-title">
													<h4><i class="fa fa-line-chart"></i> Scholarship Management System</h4>
												</div>
												<div class="portlet-widgets">
													<a id="daterange" href="javascript:;" class="tooltip-primary" data-placement="top" data-rel="tooltip" title="DateRangePicker"><i class="fa fa-calendar"></i></a>
													<span class="divider"></span>
													<a data-toggle="collapse" data-parent="#accordion" href="#m-charts"><i class="fa fa-chevron-down"></i></a>
												</div>
												<div class="clearfix"></div>
											</div>
											<div id="m-charts" class="panel-collapse collapse in">
												<div class="portlet-body">
													<div class="row">
														<div >
															<!--<h4>CPU percentage today</h4>
															<div class="chart-holder" id="morris-chart-1" style="height: 220px!important; min-height:220px;"></div>-->
															<img src="../assets/images/scholpix.jpg" alt="home pics" class="img-responsive">
														</div>
														<!--<div class="col-sm-3">
															<h4>Resources</h4>
															<hr class="separator" />


															<div class="clearfix">
																<span class="pull-left">Memory</span>
																<small class="pull-right">307.5/1024 GB</small>
															</div>
															<div class="progress progress-mini">
																<div class="progress-bar progress-bar-success" style="width: 30%;"></div>
															</div>


															<div class="clearfix">
																<span class="pull-left">IP Address</span>
																<small class="pull-right">900/1000</small>
															</div>
															<div class="progress progress-mini">
																<div class="progress-bar progress-bar-danger" style="width: 90%;"></div>
															</div>


															<button class="btn btn-sm btn-primary"><i class="fa fa-file-pdf-o"></i>Generate PDF</button>
														</div>-->

													</div>


												</div>
											</div>
										</div>
										<!-- End Server Info Charts .morris -->

										<div class="portlet">
											<div class="portlet-heading inverse">
												<div class="portlet-title">
													<h4><i class="glyphicon glyphicon-sort-by-attributes"></i> Applicant</h4>
												</div>
												<div class="portlet-widgets">
													<a data-toggle="collapse" data-parent="#accordion" href="#jq-spark"><i class="fa fa-chevron-down"></i></a>
												</div>
												<div class="clearfix"></div>
											</div>
											<div id="jq-spark" class="panel-collapse collapse in">
												<div class="portlet-body">
													<div class="row">
														<!--<div class="col-sm-3 col-xs-6 text-center">
															<div class="sparkline-chart">
																<span class="sparkline-bar"></span>
																<a href="#" class="title">CPU</a>
															</div>
														</div>
														<div class="col-sm-3 col-xs-6 text-center">
															<div class="sparkline-chart">
																<span class="sparkline-line"></span>
																<a href="#" class="title">Bandwith Uses</a>
															</div>
														</div>
														<div class="col-sm-3 col-xs-6 text-center">
															<div class="easy-pie-chart" id="easyPieChart-visit" data-percent="76">
																<span class="number">7,397</span>
																<a href="#" class="title">Visits</a>
															</div>
														</div>
														<div class="col-sm-3 col-xs-6 text-center">
															<div class="easy-pie-chart"  id="easyPieChart-bounce" data-percent="80">
																<span class="percent">80</span>
																<a href="#" class="title">Bounce</a>
															</div>
														</div> -->
													</div>
												</div>
											</div>
										</div>
										<!-- End Statics Charts -->



										<!-- Recent Activities -->
										<!--<div class="portlet no-border-bottom">
											<div class="portlet-heading dark">
												<div class="portlet-title">
													<h4><i class="fa fa-list-ul"></i> Recent Activities</h4>
												</div>
												<div class="portlet-widgets">
													<a data-toggle="collapse" data-parent="#accordion" href="#recent"><i class="fa fa-chevron-down"></i></a>
												</div>
												<div class="clearfix"></div>
											</div>
											<div id="recent" class="panel-collapse collapse in">
												<div class="portlet-body no-padding">
													<div class="tc-tabs no-margin">
														<ul class="nav nav-tabs tab-small-button no-padding">
															<li class="active"><a href="#tab14" data-toggle="tab"><i class="fa fa-bell-o bigger-130"></i></a></li>
															<li><a href="#tab15" data-toggle="tab"><i class="fa fa-ticket bigger-130"></i></a></li>
															<li><a href="#tab16" data-toggle="tab"><i class="fa fa-users bigger-130"></i><span class="badge badge-primary">5</span></a></li>
														</ul>

														<div class="tab-content no-padding no-border-left no-border-right no-border-bottom">
															<div class="tab-pane active" id="tab14">
																<ul class="lists">
																	<li>
																		<span class="date">17/7/2014 07:43</span>
																		Cron Job: Starting Updating Product Pricing for Current Exchange Rates
																	</li>
																	<li>
																		<span class="date">17/7/2014 05:45</span>
																		Email Sent to <a href="#">Maris Bradley</a>, answered <a href="#">[Ticket ID: 332335]</a>
																	</li>
																	<li>
																		<span class="date">17/7/2014 02:43</span>
																		Module Suspend Successful - Reason: <a href="#">#827101</a>
																	</li>
																	<li>
																		<span class="date">17/7/2014 23:36</span>
																		Cron Job: Starting Performing Automated Fixed Term Service Terminations
																	</li>
																	<li>
																		<span class="date">18/7/2014 07:39</span>
																		Email Sent to <a href="#">Jack Sparrow</a> (Invoice Payment Confirmation).
																	</li>
																</ul>
															</div>

															<div class="tab-pane" id="tab15">
																<ul class="lists">
																	<li>
																		<span class="icons"><i class="fa fa-envelope"></i></span>
																		<a href="#">#808936</a> - Invoice has been paid please active my server
																	</li>
																	<li>
																		<span class="icons"><i class="fa fa-envelope"></i></span>
																		<a href="#">#857517</a> - New Server's Name Server IPs
																	</li>
																	<li>
																		<span class="icons"><i class="fa fa-envelope"></i></span>
																		<a href="#">#225310</a> - unsuspended reseller dineshrv all account urgent
																	</li>
																	<li>
																		<span class="icons"><i class="fa fa-envelope"></i></span>
																		<a href="#">#597608</a> - Mail Not Received
																	</li>
																	<li>
																		<span class="icons"><i class="fa fa-envelope"></i></span>
																		<a href="#">#597607</a> - Plase update my new mail address
																	</li>
																</ul>
															</div>

															<div class="tab-pane" id="tab16">
																<ul class="lists">
																	<li>
																		<span class="date">17/7/2014</span>
																		<span class="icons"><i class="fa fa-user"></i></span>
																		<a href="#">Elly Martel</a> afiliated by <a href="#">Johan Smith</a>.
																	</li>
																	<li>
																		<span class="date">17/7/2014</span>
																		<span class="icons"><i class="fa fa-user"></i></span>
																		<a href="#">Jack Sparrow</a> afiliated by <a href="#">Johan Smith</a>.
																	</li>
																	<li>
																		<span class="date">17/7/2014</span>
																		<span class="icons"><i class="fa fa-user"></i></span>
																		<a href="#">Maris Bradley</a> afiliated by <a href="#">Johan Smith</a>.
																	</li>
																	<li>
																		<span class="date">17/7/2014</span>
																		<span class="icons"><i class="fa fa-user"></i></span>
																		<a href="#">Roby Roy</a> afiliated by <a href="#">Johan Smith</a>.
																	</li>
																	<li>
																		<span class="date">17/7/2014</span>
																		<span class="icons"><i class="fa fa-user"></i></span>
																		<a href="#">Rohan Jha</a> afiliated by <a href="#">Johan Smith</a>.
																	</li>
																</ul>
															</div>

														</div>

													</div>
												</div>

											</div>
										</div> -->
										<!-- End Recent Activities -->

										<!-- Internal Chat -->
										<!--<div class="portlet">
											<div class="portlet-heading dark">
												<div class="portlet-title">
													<h4><i class="fa fa-comments"></i> Internal Chat</h4>
												</div>
												<div class="portlet-widgets">
													<a href="javascript:;"><i class="fa fa-refresh"></i></a>
													<span class="divider"></span>
													<a data-toggle="collapse" data-parent="#accordion" href="#i-chat"><i class="fa fa-chevron-down"></i></a>
												</div>
												<div class="clearfix"></div>
											</div>
											<div id="i-chat" class="panel-collapse collapse in">
												<div class="portlet-body">
													<div class="in-chat">
														<div class="itemdiv dialogdiv">
															<div class="user">
																<img alt="" src="../assets/images/user-profile-1.jpg" />
															</div>

															<div class="body">
																<div class="time">
																	<i class="fa fa-clock-o"></i> 4 sec
																</div>

																<div class="name">
																	<a href="#">John Smith</a>
																</div>
																<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>

																<div class="tools">
																	<a href="#" class="btn btn-xs btn-primary">
																		<i class="icon-only fa fa-share"></i>
																	</a>
																</div>
															</div>
														</div>

														<div class="itemdiv dialogdiv">
															<div class="user">
																<img alt="" src="../assets/images/user-profile-2.jpg" />
															</div>

															<div class="body">
																<div class="time">
																	<i class="fa fa-clock-o"></i> 38 sec
																</div>

																<div class="name">
																	<a href="#">Elly Martel</a>
																</div>
																<div class="text">Raw denim you probably haven&#39;t heard of them jean shorts Austin.</div>

																<div class="tools">
																	<a href="#" class="btn btn-xs btn-primary">
																		<i class="icon-only fa fa-share"></i>
																	</a>
																</div>
															</div>
														</div>

														<div class="itemdiv dialogdiv">
															<div class="user">
																<img alt="" src="../assets/images/user-profile-1.jpg" />
															</div>

															<div class="body">
																<div class="time">
																	<i class="fa fa-clock-o"></i> 2 min
																</div>

																<div class="name">
																	<a href="#">John Smith</a>
																</div>
																<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>

																<div class="tools">
																	<a href="#" class="btn btn-xs btn-primary">
																		<i class="icon-only fa fa-share"></i>
																	</a>
																</div>
															</div>
														</div>

														<div class="itemdiv dialogdiv">
															<div class="user">
																<img alt="" src="../assets/images/user-profile-2.jpg" />
															</div>

															<div class="body">
																<div class="time">
																	<i class="ace-icon fa fa-clock-o"></i> 3 min
																</div>

																<div class="name">
																	<a href="#">Elly Martel</a>
																</div>
																<div class="text">Raw denim you probably haven&#39;t heard of them jean shorts Austin.</div>

																<div class="tools">
																	<a href="#" class="btn btn-xs btn-primary">
																		<i class="icon-only fa fa-share"></i>
																	</a>
																</div>
															</div>
														</div>

														<div class="itemdiv dialogdiv">
															<div class="user">
																<img alt="" src="../assets/images/user-profile-1.jpg" />
															</div>

															<div class="body">
																<div class="time">
																	<i class="fa fa-clock-o"></i> 4 min
																</div>

																<div class="name">
																	<a href="#">Elly Martel</a>
																</div>
																<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>

																<div class="tools">
																	<a href="#" class="btn btn-xs btn-primary">
																		<i class="icon-only fa fa-share"></i>
																	</a>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="portlet-footer">
													<div class="input-group">
														<input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here ..." />
														<span class="input-group-btn">
															<button class="btn btn-info btn-sm" id="btn-chat"><i class="fa fa-send"></i> Send</button>
														</span>
													</div>
												</div>

											</div>
										</div> -->
										<!-- End Internal Chat -->

									</div><!-- //col-lg-9 -->

									<div class="col-lg-3 col-sm-12">

										<!-- Users List -->
										<div class="portlet">
											<div class="portlet-heading inverse">
												<div class="portlet-title">
													<h4><i class="fa fa-list-alt"></i> Console </h4>
												</div>
												<div class="portlet-widgets">
													<a data-toggle="collapse" data-parent="#accordion" href="#qclients"><i class="fa fa-chevron-down"></i></a>
												</div>
												<div class="clearfix"></div>
											</div>
											<div id="qclients" class="panel-collapse collapse in">
												<div class="portlet-body">
													<input type="search" class="form-control input-sm" id="input-quicklist" placeholder="Search User..." >
													<div class="space-4"></div>

													<div class="quick-list">
														<!--<a href="profile.html">
														<div class="media items no-margin-top">
															<span class="pull-left">
																<img src="../assets/images/user-1.jpg" style="width: 37px;height:37px;" alt="#">
															</span>
															<div class="media-body">
																NITDA<br /><small>ICT Agency</small>
															</div>
															<div class="tools">
																<i class="fa fa-share icon-only"></i>
															</div>
														</div>
														</a>-->
														<a href="#">
														<div class="media items no-margin-top">
															<!--<span class="pull-left">
																<img src="../assets/images/user-1.jpg" style="width: 37px;height:37px;" alt="#">
															</span>-->
															<div class="media-body">
																<img src="../images/imageNITDA3.jpg" alt="#">
															</div>
															<!--<div class="tools">
																<i class="fa fa-share icon-only"></i>
															</div>-->
														</div>
														</a>


													</div>
												</div>
											</div>
										</div>
										<!-- End Users List -->

										<!-- Todo List -->
										<div class="portlet">
											<div class="portlet-heading inverse">
												<div class="portlet-title">
													<h4><i class="fa fa-edit"></i> To Do</h4>
												</div>
												<div class="portlet-widgets">
													<a href="javascript:;"><span class="badge badge-primary">6</span></a>
													<span class="divider"></span>
													<a href="#" class="tooltip-primary" data-placement="left" data-rel="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="portlet-body">
												<!--<ul id="todo-sortlist" class="task-widget list-group task-lists">
													<li class="list-group-item">
														<div class="tcb">
															<label>
																<input type="checkbox" class="tc" id="checkbox" />
																<span id="#checkbox" class="labels">
																	Updating server software <i class="fa fa-warning text-danger"></i>
																</span>
															</label>
														</div>
													</li>
													<li class="list-group-item">
														<div class="tcb">
															<label>
																<input type="checkbox" class="tc" id="checkbox1" />
																<span id="#checkbox1" class="labels">
																	Fixing bugs
																</span>
															</label>
														</div>
													</li>
													<li class="list-group-item">
														<div class="tcb">
															<label>
																<input type="checkbox" class="tc" id="checkbox2" />
																<span id="#checkbox2" class="labels">
																	Upgrading scripts in template
																</span>
															</label>
														</div>
													</li>
													<li class="list-group-item">
														<div class="tcb">
															<label>
																<input type="checkbox" class="tc" id="checkbox3" />
																<span id="#checkbox3" class="labels">
																	Reporting to manager
																</span>
															</label>
														</div>
													</li>
													<li class="list-group-item">
														<div class="tcb">
															<label>
																<input type="checkbox" class="tc" id="checkbox4" />
																<span id="#checkbox4" class="labels">
																	Pending Orders <span class="badge badge-success">3</span>
																</span>
															</label>
														</div>
													</li>
													<li class="list-group-item">
														<div class="tcb">
															<label>
																<input type="checkbox" class="tc" id="checkbox5" />
																<span id="#checkbox5" class="labels">
																	Call to John Smith
																</span>
															</label>
														</div>
													</li>
												</ul>-->
											</div>

											<div class="portlet-footer">
												<div class="input-group">
													<input type="text" class="form-control input-sm" placeholder="Add new Task..." />
													<span class="input-group-btn">
														<button class="btn btn-success btn-sm"><i class="fa fa-plus icon-only"></i></button>
													</span>
												</div>
											</div>

										</div>
										<!-- End Todo List -->


										<!-- Mini Calendar -->
										<!--<div class="portlet hidden-widgets">
											<div class="portlet-heading inverse">
												<div class="portlet-title">
													<h4><i class="fa fa-calendar"></i> Calendar</h4>
												</div>
												<div class="portlet-widgets">
													<a data-toggle="collapse" data-parent="#accordion" href="#mini-calendar"><i class="fa fa-chevron-down"></i></a>
												</div>
												<div class="clearfix"></div>
											</div>
											<div id="mini-calendar" class="panel-collapse collapse in">
												<div class="portlet-body">
													<div id="minicalendar"></div>

													<div class="space-8"></div>

													<div class="notice bg-primary marker-on-top no-margin-bottom">
														<h4>Today's Event</h4>
														<ul class="list-unstyled smaller-90">
															<li>10 Addons Due to Renew</li>
															<li>2 Products/Services Due to Renew</li>
															<li>6 Domains Due to Renew</li>
														</ul>

														<a href="#"><i class="fa fa-plus"></i> Add New Event</a>
													</div>
												</div>
											</div>
										</div> -->
										<!-- End Mini Calendar -->

										<!-- World Map -->
										<!--<div class="portlet hidden-widgets">
											<div class="portlet-heading dark">
												<div class="portlet-title">
													<h4><i class="fa fa-map-marker"></i> Visitors Map</h4>
												</div>
												<div class="portlet-widgets">
													<a data-toggle="collapse" data-parent="#accordion" href="#v-map"><i class="fa fa-chevron-down"></i></a>
												</div>
												<div class="clearfix"></div>
											</div> -->
											<!--
											<div id="v-map" class="panel-collapse collapse in">
												<div class="portlet-body no-padding">
													<div id="visitors-map" style="min-height: 150px!important; height: 150px;"></div>

													<table class="table table-bordered table-striped table-hover tc-table">
														<thead>
														<tr>
															<th>Country</th>
															<th>Online</th>
															<th>Page Views</th>
														</tr>
														</thead>
														<tbody>
															<tr>
																<td><a href="#">USA</a></td>
																<td>209</td>
																<td>239</td>
															</tr>
															<tr>
																<td><a href="#">India</a></td>
																<td>131</td>
																<td>958</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div> -->
										<!-- End World Map -->


									</div><!-- //col-lg-3 -->
								</div>
								<!-- END YOUR CONTENT HERE -->

							</div>
						</div>

				<!-- /#page-wrapper -->






