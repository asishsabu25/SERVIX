<?php
include( "database.php" );
session_start();
if(isset($_POST['submit']))
{
    $x = $_POST[ "email" ];
$y = $_POST[ "password" ];


$sql = "select * from login where username='$x ' and password='$y'";

$result = mysqli_query( $connect, $sql );

// echo "$x";
// echo "$y";

if ( $result->num_rows > 0 )
{
   // echo "$x";
//echo "$y";
    
    $_SESSION["eid"]=$x;
    
    
	if ( $row = $result->fetch_assoc() ) 
    
    {
        	//$_SESSION[ "fname" ] = $row[ "name" ];
          
        if ( $row["role"] == "user")
        

            header( 'Location:customer/index.php' );
            #header( 'Location:test.php' );
            //header('Location:frontpage.html');

            else if ($row["role"]=="admin")
           // header('Location:frontpage.html');
        	   header('Location:admin/index.php');
            
        else if ($row["role"]=="worker")
        	   header('Location:worker/index.php');
               // header('Location:frontpage.html');
        
       
         
}
    


        }
else {
	//error message if SQL query fails
	echo "<h3><span style='color:red; '>Invalid User ID & Password. Page Will redirect to Login Page after 3 seconds </span></h3>";
	header( "refresh:3;url=log.html" );
}
  $connect->close();  

}
?>