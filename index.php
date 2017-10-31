<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!--<link rel="stylesheet" type="text/css" href="css/foundation.css">-->
		<link rel="stylesheet" type="text/css" href="css/datatables.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/db_load_controller.js"></script>
		<script src="js/datatables.js"></script>
	</head>
	<title>
		Test
	</title>
	<body>
		<div class="container">
			<div class="row" >
				<div class="col-md-12">

					<div>
    					<p>&nbsp;</p>
    				</div> 
					<div id="banner">
						<img alt="banner" src="images/banner.png" class="banner">
					</div>
					<img src="images/seal.png" alt="DHS Seal" id="seal">
					<h1 id="DHS">DEPARTMENT OF HOMELAND SECURITY</h1>
					<h2 id="cbp">U.S. Custom and Border Protection</h2>
					<div id="banner">
						<img alt="banner" src="images/banner.png" class="banner">
					</div>
					<div>
    					<p>&nbsp;</p>
    				</div> 
    				<h3 id="forms">Forms Database</h3>
    				<div class="row">
    					<div class="col-md-12">
    						<a href="" class="toggle-vis" data-column="2">Abolished | </a>
    						<a href="" class="toggle-vis" data-column="3">Serialized | </a>
    						<a href="" class="toggle-vis" data-column="4">Usage Type | </a>
    						<a href="" class="toggle-vis" data-column="5">NDC Distribution | </a>
    						<a href="" class="toggle-vis" data-column="6">Last Refresh Date | </a>
    						<a href="" class="toggle-vis" data-column="8">Program Office | </a>
    						<a href="" class="toggle-vis" data-column="10">POC Secondary Email | </a>
    						<a href="" class="toggle-vis" data-column="11">OMB Control Number | </a>
    						<a href="" class="toggle-vis" data-column="12">OMB Expiration</a>
    					</div>
    				</div>
				</div>
			</div>

				<table id="forms_db_table" class="table" >
					<thead>
						<tr>
							<th>Form Number</th>
							<th>Form Title</th>
							<th>Abolished</th>
							<th>Serialized</th>
							<th>Usage Type</th>
							<th>NDC Distribution</th>
							<th>Last Refresh Date</th>
							<th>CBP Office of Control</th>
							<th>Program Office</th>
							<th>POC Email</th>
							<th>POC Secondary Email</th>
							<th>OMB Control Number</th>
							<th>OMB Expiration</th>
						</tr>
					</thead>
				</table>
			
		</div>
	</body>
</html>








