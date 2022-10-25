<?php
include '../../includes/connection.php';
$id = $_GET['id'];
$sql = "SELECT * FROM documents  WHERE id = '$id'";
		$result = $Con->execute ( $sql );
		if (! $result->EOF){
		$priv_id = $result->Fields('id')->Value;
		$pri_name = $result->Fields('doc_name')->Value;
		}
?>
<div class="row">
	<div class="col-lg-12">
		<!-- BEGIN BREADCRUMB -->
		<div class="breadcrumbs new">
			<ul class="breadcrumb">
				<li>
					<a href="#">Home</a>
				</li>
				<li><a href="#">Settings</a></li>
				<li class="active">Update Documents</li>
			</ul>

			<div class="b-right hidden-xs">
				<ul>
					<li><a href="#" title=""><i class="fa fa-signal"></i></a></li>
					<li><a href="#" title=""><i class="fa fa-comments"></i></a></li>
					<li class="dropdown"><a href="#" title="" data-toggle="dropdown"><i class="fa fa-plus"></i><span> Tasks</span></a>
						<ul class="dropdown-menu dropdown-primary dropdown-menu-right">
							<li><a href="#">Add new task</a></li>
							<li><a href="#">Statement</a></li>
							<li><a href="#">Settings</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<!-- END BREADCRUMB -->

		<div class="page-header title">
			<!-- PAGE TITLE ROW -->
			<h1>Settings<span class="sub-title">Documents</span></h1>
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
			<li><button class="btn" style="background-color:#d15050;" onclick="swapStyle('assets/css/themes/style.css')"></button></li>
			<li><button class="btn" style="background-color:#86618f;" onclick="swapStyle('assets/css/themes/style-1.css')"></button></li>
			<li><button class="btn" style="background-color:#ba5d32;" onclick="swapStyle('assets/css/themes/style-2.css')"></button></li>
			<li><button class="btn" style="background-color:#488075;" onclick="swapStyle('assets/css/themes/style-3.css')"></button></li>
			<li><button class="btn" style="background-color:#4e72c2;" onclick="swapStyle('assets/css/themes/style-4.css')"></button></li>
			</ul>

			</div>
		</div> -->
		<!-- /#ek-layout-button -->

	</div><!-- /.col-lg-12 -->
</div><!-- /.row -->
<!-- END PAGE HEADING ROW -->
<div class="row">

	<div class="col-lg-6">



		<div class="portlet">
			<div class="portlet-heading dark">
				<div class="portlet-title">
					<h4>Update Documents</h4>
				</div>
				<div class="portlet-widgets">
					<a data-toggle="collapse" data-parent="#accordion" href="#f-6"><i class="fa fa-chevron-down"></i></a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div id="f-6" class="panel-collapse collapse in">
				<div class="portlet-body">

						<div class="form-group">
							<label>Document</label>
							<input type="text" class="form-control" name="docName" value="<?php echo $pri_name; ?>">
						</div>

							<input type="hidden" class="form-control" name="docID" value="<?php echo $priv_id ; ?>">
						<div id="processDiv"></div>
						<div class="form-actions">
							<button type="button" class="btn btn-primary"
							onclick="showAjax('Page_Form','../includes/ajaxaction1.php?Action=updateDoc','processDiv')"
							>Update</button>
							<button type="submit" class="btn"
							onclick="showAjax('Page_Form','../includes/ajaxaction1.php?Action=cancelDoc','processDiv')"
							>Cancel</button>
						</div>

				</div>
			</div>
		</div>


	</div>



	<div class="col-lg-6">
		<div class="portlet">



				</div>
				<!-- END YOUR CONTENT HERE -->

				</div>
				</div>
