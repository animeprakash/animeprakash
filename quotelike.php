<?php
		ini_set('display_errors', 0);	
		include ('database.php');
		
		$quoteid=$_GET['quoteid'];
		$data=$_GET['data'];
		$useremail = $_COOKIE['useremail'];
		
        $createQuery = "create table if not exists likedetails(likeid int not null auto_increment primary key,quote_id int,user_email varchar(300),likeon datetime not null default now())";
        mysqli_query($con, $createQuery);
  
    $query = "SELECT * FROM likedetails WHERE quote_id = '".$quoteid."' AND user_email = '".$useremail."'";
    $result = mysqli_query($con, $query);
    
    if(mysqli_num_rows($result) > 0) {
        
        $deleteQuery = "DELETE FROM likedetails WHERE quote_id = '".$quoteid."' AND user_email = '".$useremail."'";
        $delres=mysqli_query($con, $deleteQuery);
		
    } else {
		
        $insertQuery = "INSERT INTO likedetails (quote_id, user_email) VALUES ('".$quoteid."','".$useremail."')";
        $insertres=mysqli_query($con, $insertQuery);

    }

?>

