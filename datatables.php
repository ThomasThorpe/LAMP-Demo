<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD Dashboard</title>
	<!-- jQuery Libraries -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- jQueryUI Libraries -->
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	
	<!-- DataTables Libraries -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<!-- Initalise DataTables -->
	<script type="text/javascript">
	$(document).ready(function(){
		var table = $('#datatable').DataTable({
			"ajax" : {
				"url" : 'ajaxfile.php',
				"dataSrc" : ''
			},
			"columns" : [
				{'data' : 'id'},
				{'data' : 'name'},
				{'data' : 'address'},
				{'data' : 'salary'}
			]
		});
		setInterval(function(){
			table.ajax.reload();
		},30000);
	});
	</script>
</head>
<body>
	<p><a href="index.php">Home</a></p>
	<div id="tablediv">
		<table id="datatable" class="display" style="width:100%">
		<thead><tr>
			<th>id</th>
			<th>name</th>
			<th>address</th>
			<th>salary</th>
		</tr></thead>
		<tfoot><tr>
			<th>id</th>
			<th>name</th>
			<th>address</th>
			<th>salary</th>
		</tr></tfoot>
		</table>
	</div>
</body>


</html>
