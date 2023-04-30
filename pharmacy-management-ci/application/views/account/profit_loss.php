<?php

// if ($msg == "main") {
// 	$msg = "";
// } elseif ($msg == "empty") {
// 	$msg = "Please fill out all required fields";
// } elseif ($msg == "created") {
// 	$msg = "Created Successfully";
// } elseif ($msg == "edit") {
// 	$msg = "Edited Successfully";
// } elseif ($msg == "delete") {
// 	$msg = "Deleted Successfully";
// }
?>
<!-- /.Breadcrumb -->
<section id="breadcrumb">
	<div class="container" id="no_print3">
		<ol class="breadcrumb">
			<li><a href="http://localhost/php/" >OCR</a></li>
		</ol>
	</div>
</section>

<!-- /.container
<section id="main">
	<div class="container">

		<div class="row">
			<div class="col-md-3" id="no_print2">
				<div class="list-group">
					<a href="#" class="list-group-item active main-color-bg">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> OCR</a>
					</div>
			</div>
			<div class="col-md-9" id="no_print1">
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title"> OCR</h3>
					</div>

					<div class="panel-body">

						
							<div class="row">
								<div class="col-sm-4" style="margin-top: 17px;">
									<button type="button" class="pull-left btn btn-primary" id="search_report">Upload</button>
								</div>
							</div>
						<h4>To be added</h4>
						</div>
					</div> -->
				<!-- </div>
			</div> -->
			<!-- /.Panel 2nd -->
			<!-- <div class="col-md-12" >
				<div class="panel panel-default" >
					<div class="panel-heading"> -->
<!--							<h3 class="panel-title">Profit-Loss</h3>-->

					<!-- </div>
					<div class="panel-body" id="show_report">

					</div>

				</div>
			</div>
		</div> 
		</div> 
</section> -->


<!-- <script type="text/javascript">
	$("#search_report").click(function () {
		var date_from = $('#date_from').val();
		var date_to = $('#date_to').val();
		var product = $('#product').val();
		var post_data = {
			'date_from': date_from, 'date_to': date_to, 'medicine_name_id': product
		};
		console.log(post_data);
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>Get_ajax_value/get_product_profit_loss_info",
			data: post_data,
			success: function (data) {
				$('#show_report').html(data);
			}
		});
	});
</script> -->
