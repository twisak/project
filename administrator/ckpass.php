<?php 
	session_start();
    ini_set('display_errors', 1);
	error_reporting(~0);
	include 'connect.php';
?>


<body>
<?php 
	$username = $_POST['username'];
	$password = $_POST['password'];
    $status = $_POST['status'];
    
	
	if(isset($username)&&($password))
        {
		$sql = "SELECT * FROM tb_personnel WHERE username = '".$username."' AND password = '".$password."'";
		$result = mysqli_query($conn,$sql);
		$numse = mysqli_num_rows($result);	
		if($numse > 0){
			
			while($rsuser = mysqli_fetch_array($result))
			{
				
				 $Username 	= $rsuser['username'];
				 $Userpass 	= $rsuser['password'];
				 $status = $rsuser['status'];
				 
			}
			
				 $_SESSION['username'] 	= $_POST['username'];
			     $_SESSION['password'] 	= $_POST['password'];
				 $_SESSION['status'] 	= $status;
				 
			
			
			
				 switch($status){
				
                     case 'Admin': header('location:http://localhost/project_student/app_backend/dashboard/index.php');
							break;
                         
				     case 'Person': header('location:');
							break;
				
				 default : header("location:login.php?res=username หรือ password ผิดพลาด");
				 			break;
				                }
				
				
			
			}else{
				
				
				header("location:login.php");
			
	
				}
		
	}
    else
            {
			
		echo "<meta http-equiv='refresh' content='0;URL=login.php'>";
		exit();	
			
			}


?>

</body>
