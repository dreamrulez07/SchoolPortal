<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Select whom to pay</title>

<!-- Bootstrap Core CSS -->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- DataTables CSS -->
<link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css'/>
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>


<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<?php
//print_r($_FILES);
$uploaded = false;
$tmpName = $_FILES['csv']['tmp_name'];

$csvAsArray = array_map('str_getcsv', file($tmpName));
if (isset($_FILES['csv']))
{
	$uploaded = true;
}
//echo $uploaded;

//echo $tmpName;

print_r($csvAsArray);
/*if ( isset($_POST["submit"]) ) {

	if ( isset($_FILES["file"])) {

		//if there was an error uploading the file
		if ($_FILES["file"]["error"] > 0) {
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";

		}
		else {
			//Print file details
			echo "Upload: " . $_FILES["file"]["name"] . "<br />";
			echo "Type: " . $_FILES["file"]["type"] . "<br />";
			echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
			echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

			//if file already exists
			if (file_exists("upload/" . $_FILES["file"]["name"])) {
				echo $_FILES["file"]["name"] . " already exists. ";
			}
			else {
				//Store file in directory "upload" with the name of "uploaded_file.txt"
				$storagename = "uploaded_file.txt";
				move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $storagename);
				echo "Stored in: " . "upload/" . $_FILES["file"]["name"] . "<br />";
			}
		}
	} else {
		echo "No file selected <br />";
	}
}*/
?>

<body>

<div id="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.html">SB Admin v2.0</a>
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
<i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
</a>
<ul class="dropdown-menu dropdown-messages">
<li>
<a href="#">
<div>
<strong>John Smith</strong>
<span class="pull-right text-muted">
<em>Yesterday</em>
</span>
</div>
<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
</a>
</li>
<li class="divider"></li>
<li>
<a href="#">
<div>
<strong>John Smith</strong>
<span class="pull-right text-muted">
<em>Yesterday</em>
</span>
</div>
<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
</a>
</li>
<li class="divider"></li>
<li>
<a href="#">
<div>
<strong>John Smith</strong>
<span class="pull-right text-muted">
<em>Yesterday</em>
</span>
</div>
<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
</a>
</li>
<li class="divider"></li>
<li>
<a class="text-center" href="#">
<strong>Read All Messages</strong>
<i class="fa fa-angle-right"></i>
</a>
</li>
</ul>
<!-- /.dropdown-messages -->
</li>
<!-- /.dropdown -->
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
<i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
</a>
<ul class="dropdown-menu dropdown-tasks">
<li>
<a href="#">
<div>
<p>
<strong>Task 1</strong>
<span class="pull-right text-muted">40% Complete</span>
</p>
<div class="progress progress-striped active">
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
<span class="sr-only">40% Complete (success)</span>
</div>
</div>
</div>
</a>
</li>
<li class="divider"></li>
<li>
<a href="#">
<div>
<p>
<strong>Task 2</strong>
<span class="pull-right text-muted">20% Complete</span>
</p>
<div class="progress progress-striped active">
<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
<span class="sr-only">20% Complete</span>
</div>
</div>
</div>
</a>
</li>
<li class="divider"></li>
<li>
<a href="#">
<div>
<p>
<strong>Task 3</strong>
<span class="pull-right text-muted">60% Complete</span>
</p>
<div class="progress progress-striped active">
<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
<span class="sr-only">60% Complete (warning)</span>
</div>
</div>
</div>
</a>
</li>
<li class="divider"></li>
<li>
<a href="#">
<div>
<p>
<strong>Task 4</strong>
<span class="pull-right text-muted">80% Complete</span>
</p>
<div class="progress progress-striped active">
<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
<span class="sr-only">80% Complete (danger)</span>
</div>
</div>
</div>
</a>
</li>
<li class="divider"></li>
<li>
<a class="text-center" href="#">
<strong>See All Tasks</strong>
<i class="fa fa-angle-right"></i>
</a>
</li>
</ul>
<!-- /.dropdown-tasks -->
</li>
<!-- /.dropdown -->
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
<i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
</a>
<ul class="dropdown-menu dropdown-alerts">
<li>
<a href="#">
<div>
<i class="fa fa-comment fa-fw"></i> New Comment
<span class="pull-right text-muted small">4 minutes ago</span>
</div>
</a>
</li>
<li class="divider"></li>
<li>
<a href="#">
<div>
<i class="fa fa-twitter fa-fw"></i> 3 New Followers
<span class="pull-right text-muted small">12 minutes ago</span>
</div>
</a>
</li>
<li class="divider"></li>
<li>
<a href="#">
<div>
<i class="fa fa-envelope fa-fw"></i> Message Sent
<span class="pull-right text-muted small">4 minutes ago</span>
</div>
</a>
</li>
<li class="divider"></li>
<li>
<a href="#">
<div>
<i class="fa fa-tasks fa-fw"></i> New Task
<span class="pull-right text-muted small">4 minutes ago</span>
</div>
</a>
</li>
<li class="divider"></li>
<li>
<a href="#">
<div>
<i class="fa fa-upload fa-fw"></i> Server Rebooted
<span class="pull-right text-muted small">4 minutes ago</span>
</div>
</a>
</li>
<li class="divider"></li>
<li>
<a class="text-center" href="#">
<strong>See All Alerts</strong>
<i class="fa fa-angle-right"></i>
</a>
</li>
</ul>
<!-- /.dropdown-alerts -->
</li>
<!-- /.dropdown -->
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
</a>
<ul class="dropdown-menu dropdown-user">
<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
</li>
<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
</li>
<li class="divider"></li>
<li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>
<!-- /.dropdown-user -->
</li>
<!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation">
<div class="sidebar-nav navbar-collapse">
<ul class="nav" id="side-menu">
<li class="sidebar-search">
<div class="input-group custom-search-form">
<input type="text" class="form-control" placeholder="Search...">
<span class="input-group-btn">
<button class="btn btn-default" type="button">
<i class="fa fa-search"></i>
</button>
</span>
</div>
<!-- /input-group -->
</li>
<li>
<a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
</li>
<li>
<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
<ul class="nav nav-second-level">
<li>
<a href="flot.html">Flot Charts</a>
</li>
<li>
<a href="morris.html">Morris.js Charts</a>
</li>
</ul>
<!-- /.nav-second-level -->
</li>
<li>
<a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
</li>
<li>
<a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
</li>
<li>
<a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
<ul class="nav nav-second-level">
<li>
<a href="panels-wells.html">Panels and Wells</a>
</li>
<li>
<a href="buttons.html">Buttons</a>
</li>
<li>
<a href="notifications.html">Notifications</a>
</li>
<li>
<a href="typography.html">Typography</a>
</li>
<li>
<a href="icons.html"> Icons</a>
</li>
<li>
<a href="grid.html">Grid</a>
</li>
</ul>
<!-- /.nav-second-level -->
</li>
<li>
<a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
<ul class="nav nav-second-level">
<li>
<a href="#">Second Level Item</a>
</li>
<li>
<a href="#">Second Level Item</a>
</li>
<li>
<a href="#">Third Level <span class="fa arrow"></span></a>
<ul class="nav nav-third-level">
<li>
<a href="#">Third Level Item</a>
</li>
<li>
<a href="#">Third Level Item</a>
</li>
<li>
<a href="#">Third Level Item</a>
</li>
<li>
<a href="#">Third Level Item</a>
</li>
</ul>
<!-- /.nav-third-level -->
</li>
</ul>
<!-- /.nav-second-level -->
</li>
<li>
<a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
<ul class="nav nav-second-level">
<li>
<a href="blank.html">Blank Page</a>
</li>
<li>
<a href="login.html">Login Page</a>
</li>
</ul>
<!-- /.nav-second-level -->
</li>
</ul>
</div>
<!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>

<div id="page-wrapper">
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">Tables</h1>
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
DataTables Advanced Tables
</div>
<!-- /.panel-heading -->
<div class="panel-body">
<!-- /.table-responsive -->
<table width="600">
<form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method="post" enctype="multipart/form-data">

<?php
if($uploaded)
{
 echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">';
echo '
                                <thead>
                                    <tr>';
	echo "<th>Paid</th>";
	echo "<th>Mode</th>";

$headerRow = $csvAsArray[0];
foreach($headerRow as $cell)
{
	echo "<th>".$cell."</th>";
}
                               echo '</tr>
                                </thead>
                                <tbody>
	';
$count = 0;
foreach($csvAsArray as $row)
{
	if ($count == 0)
	{
		$count++;
		continue;
	}
	if ($count % 2 == 0)
		echo '<tr>';
	else
		echo '<tr>';

	echo "<td><input type='checkbox'/></td>";
	echo "<td></td>";
	foreach ($row as $cell)
	{
		echo '<td>';
		echo $cell;
		echo '</td>';
	}
	echo '</tr>';

	$count++;
}
echo '</tbody></table>';
}
?>



<tr>
<td width="20%">Select file</td>
<td width="80%"><input type="file" name="csv" id="file" /></td>
</tr>

<tr>
<td>Submit</td>
<td><input type="submit" name="submit" /></td>
</tr>

</form>
</table>
<!--div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="modalform" style="position: absolute; height: auto; width: 350px; top: 303.636px; left: 130.5px; display: block;" aria-labelledby="ui-id-1"-->
			<form id="modalform" style="display:none">
			Select phone number column:
			<select name="selectPhone">
			<?php
				foreach($csvAsArray[0] as $cell)
				{
					echo '<option value="'.$cell.'">'.$cell.'</option>'; 
				}
			?>
			</select>
			<br/>
			<br/>
			Select amount column:
			<select name="selectAmount">
			<?php
				foreach($csvAsArray[0] as $cell)
				{
					echo '<option value="'.$cell.'">'.$cell.'</option>'; 
				}
			?>
			</select>
</form>
				</div>
</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</table>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
$(document).ready(function() {
		$('#dataTables-example').DataTable({
buttons: [
'csvHtml5'
],
responsive: true
});
		});
</script>
<?php
$columnsSelected=false;
if ($uploaded == true)
{
	echo '<script>
			$("#modalform").dialog({ //Shows dialog
				height: 350,
				width: 350,
				modal: true,
				autoOpen: false,
				buttons: {
					"Cancel": function() {
						$(this).dialog("close");
					},
					"Save": function() {
						$(this).dialog("close");
					}}
				});
		$(document).ready(function() {
				 // executes when HTML-Document is loaded and DOM is ready
				$("#modalform").dialog("open");
				 });
</script>

';
}
?>
</body>

</html>
