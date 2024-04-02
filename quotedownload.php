<?php
		ini_set('display_errors', 0);	
		include ('database.php');
		
		$quoteid=$_GET['quoteid'];
		$data=$_GET['data'];
		$useremail = $_COOKIE['useremail'];
   
        $createQuery = "create table if not exists downloaddetails(downloadid int not null auto_increment primary key,downquoteid int,downloadcount int,downuseremail varchar(300),downloadon datetime not null default now())";
        mysqli_query($con, $createQuery);
    
		$query = "SELECT * FROM downloaddetails WHERE downquoteid = '".$quoteid."' AND downuseremail = '".$useremail."'";
		$result = mysqli_query($con, $query);
		
    if(mysqli_num_rows($result) > 0) {
        
		$updatequery = "update downloaddetails set downloadcount=downloadcount+1 WHERE downquoteid = '".$quoteid."' AND downuseremail = '".$useremail."'";
		mysqli_query($con, $updatequery);

    } else {
		
        $insertQuery = "INSERT INTO downloaddetails (downquoteid,downloadcount,downuseremail) VALUES ('".$quoteid."',1,'".$useremail."')";
        mysqli_query($con, $insertQuery);
    
    }

?>

