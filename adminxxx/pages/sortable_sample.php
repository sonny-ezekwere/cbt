<link rel="stylesheet" href="/resources/demos/style.css">
<style>
	#sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
	#sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1em; }
	#sortable li span { position: absolute; margin-left: -1.3em; }
</style>
<script>
	$(function() {
		$( "#sortable" ).sortable();
		$( "#sortable" ).disableSelection();
	});
</script>
<!-- BEGIN PAGE HEADING ROW -->
<div class="row">
	<div class="col-lg-12">
		<!-- BEGIN BREADCRUMB -->
		<div class="breadcrumbs">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Components</a></li>
				<li class="active">Approval Process</li>
			</ul>

			<div class="b-right hidden-xs">
				<ul>
					<li><a href="#" title=""><i class="fa fa-signal"></i></a></li>
					<li><a href="#" title=""><i class="fa fa-comments"></i></a></li>
					<li class="dropdown"><a href="#" title="" data-toggle="dropdown"><i
					class="fa fa-plus"></i><span> Tasks</span></a>
					<ul class="dropdown-menu dropdown-primary dropdown-menu-right">
						<li><a href="#">Add new task</a></li>
						<li><a href="#">Statement</a></li>
						<li><a href="#">Settings</a></li>
					</ul></li>
				</ul>
			</div>
		</div>
		<!-- END BREADCRUMB -->

		<div class="page-header title">
			<!-- PAGE TITLE ROW -->
			<h1>
				Configure Approval Process
			</h1>
		</div>


	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- END PAGE HEADING ROW -->

<div class="row space-2x">
	<div class="col-lg-12">

		<!-- START YOUR CONTENT HERE -->
		<div class="row">
			<div class="col-md-6">
				<div class="portlet" style="">
					<div class="portlet-heading dark">
						<div class="portlet-title">
							<h4>Configure Approval Process</h4>
						</div>
						<div class="portlet-widgets">
							<a data-toggle="collapse" data-parent="#accordion" href="#f-6"><i class="fa fa-chevron-down"></i></a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div id="f-6" class="panel-collapse collapse in">
						<div class="portlet-body">
							<h3>Default Approval Procedure</h3>
							<p>Click and drag to re-order. You can also drag an item out of the list.</p>
							<ul id="sortable">
								<li class="ui-state-default">DG</li>
								<li class="ui-state-default">HR</li>
								<li class="ui-state-default">CAO</li>
								<li class="ui-state-default">AO</li>
								<li class="ui-state-default">CAO</li>
								<li class="ui-state-default">LD</li>
								<li class="ui-state-default">CAO</li>
								<li class="ui-state-default">HR</li>
								<li class="ui-state-default">DG</li>
								<li class="ui-state-default">AUDIT</li>
								<li class="ui-state-default">DG</li>
								<li class="ui-state-default">DFA</li>
								<li class="ui-state-default">ACA</li>
								<li class="ui-state-default">DFA</li>
								<li class="ui-state-default">DG</li>
							</ul>
							<br/><br/>

							<div class="form-actions" style="margin-left:20px;">
								<button type="submit" class="btn btn-primary" id="view_order">Save</button>
								<a href="#" onclick="showAjax('','pages/sortable_sample.php','contentDiv')" class="btn">Reset</a>
							</div>

							<hr>
							<h3>Add Official</h3>
							<p>Click on a button to add an official to the list</p>
							<div style="">
								<button class="btn btn-primary add_official" value="DG">DG</button>
								<button class="btn btn-primary add_official" value="HR">HR</button>
								<button class="btn btn-primary add_official" value="CAO">CAO</button>
								<button class="btn btn-primary add_official" value="AO">AO</button>
								<button class="btn btn-primary add_official" value="LD">LD</button>
								<button class="btn btn-primary add_official" value="AUDIT">AUDIT</button>
								<button class="btn btn-primary add_official" value="DFA">DFA</button>
								<button class="btn btn-primary add_official" value="ACA">ACA</button>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="portlet" style="">
					<div class="portlet-heading dark">
						<div class="portlet-title">
							<h4>Configure Approval Process</h4>
						</div>
						<div class="portlet-widgets">
							<a data-toggle="collapse" data-parent="#accordion" href="#f-6"><i class="fa fa-chevron-down"></i></a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div id="f-6" class="panel-collapse collapse in">
						<div class="portlet-body">
							<h3>Add Official</h3>
							<p>Click on a button to add an official to the list</p>
							<div style="">
								<button class="btn btn-primary add_official" value="DG">DG</button>
								<button class="btn btn-primary add_official" value="HR">HR</button>
								<button class="btn btn-primary add_official" value="CAO">CAO</button>
								<button class="btn btn-primary add_official" value="AO">AO</button>
								<button class="btn btn-primary add_official" value="LD">LD</button>
								<button class="btn btn-primary add_official" value="AUDIT">AUDIT</button>
								<button class="btn btn-primary add_official" value="DFA">DFA</button>
								<button class="btn btn-primary add_official" value="ACA">ACA</button>
							</div>

						</div>
					</div>
				</div>


			</div>
			<form action="save_order.php" method="POST" style="display: none;">
				<input name="new_order" value="" type="hidden" />
			</form>

			<!-- END YOUR CONTENT HERE -->
		</div>
	</div>
	<script>
		jQuery(document).ready(function() {

			$("#view_order").click(function() {
				var data = "";

				$("#sortable li").each(function(i, el){
					var p = $(el).text().replace(" ", "_");
					data += $(el).index()+" = "+p+", ";
				});

				$("form > [name='new_order']").val(data.slice(0, -1));
				alert(data);
				//$("form").submit();
				//in save_order.php, you can parse the POST variable "new_order" and get the orders of DG, CAO, etc.
			});

			$('#sortable').sortable({
				receive: function(event, ui) {
					sortableIn = 1;
				},
				over: function(e, ui) { sortableIn = 1; },
				out: function(e, ui) { sortableIn = 0; },
				beforeStop: function(e, ui) {
					if (sortableIn == 0) {
						ui.item.remove();
					}
				}
			});


			$(".add_official").click(function (e) {
				e.preventDefault();
				var text = $(this).val();
				var $li = $("<li class='ui-state-default'/>").text(text);
				$("#sortable").append($li);
				$("#sortable").sortable('refresh');
			});


		});


	</script>
