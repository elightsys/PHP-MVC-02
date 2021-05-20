<?php
defined('__ROOT_URL__') OR exit('No direct script access allowed');
require_once (__ROOT_APP__ . '/views/_inc/header.php');
?>

<body class="d-flex flex-column h-100">
<?php
	require_once (__ROOT_APP__ . '/views/_inc/navbar.php');
?>
	<!-- Begin page content -->
	<main role="main" class="flex-shrink-0">
		<div class="container mb-4">
			<h1 class="mt-5"><?=$data['title']?></h1>
			<p class="lead"></p>
			
			<table id="server_side" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>First name</th>
						<th>Last name</th>
						<th>Position</th>
						<th>Office</th>
						<th>Start date</th>
						<th>Salary</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>First name</th>
						<th>Last name</th>
						<th>Position</th>
						<th>Office</th>
						<th>Start date</th>
						<th>Salary</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</main>

<?php
	require_once (__ROOT_APP__ . '/views/_inc/footer.php');
	require_once (__ROOT_APP__ . '/views/_inc/script.php');
?>

</body>
</html>