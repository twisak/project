<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
<?php include '../include_title.php'; ?>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	var rows = 1;
	$("#createRows").click(function(){
						var tr = "<tr>";
						tr = tr + "<td><input type='text' name='txtCustomerID"+rows+"' id='txtCustomerID"+rows+"' size='5'></td>";
						tr = tr + "</tr>";
						$('#myTable > tbody:last').append(tr);

						$('#hdnCount').val(rows);
						rows = rows + 1;
		});

		$("#deleteRows").click(function(){
				if ($("#myTable tr").length != 1) {
					 $("#myTable tr:last").remove();
				}
		});

		$("#clearRows").click(function(){
				rows = 1;
				$('#hdnCount').val(rows);
				$('#myTable > tbody:last').empty(); // remove all
		});

	});
</script>
<meta charset=utf-8 />
</head>
<body>
 <center>
 <form action="save.php" id="frmMain" name="frmMain" method="post">
<h1>jQuery Dynamic table input</h1>

<table width="600" border="1" id="myTable">
<!-- head table -->
<thead>
  <tr>
    <td width="91"> <div align="center">CustomerID </div></td>
  </tr>
</thead>
<!-- body dynamic rows -->
<tbody></tbody>
</table>
<br />
<input type="button" id="createRows" value="Add">
<input type="button" id="deleteRows" value="Del">
<input type="button" id="clearRows" value="Clear">
 <center>
 <br>
 <input type="hidden" id="hdnCount" name="hdnCount">
<input type="submit" value="Submit">
 </form>


 <script src="../assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../js/custom.min.js"></script>
</body>
</html>
