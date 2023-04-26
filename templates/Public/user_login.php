<?php
include( "database.php" );
session_start();
if(isset($_POST['user_login']))
{
    $x = $_POST[ "username" ];
    $y = $_POST[ "password" ];


$sql = "select * from user_login where username='$x ' and password='$y'";

$result = mysqli_query( $connect, $sql );

//echo "$x";
//echo "$y";

if ( $result->num_rows > 0 )
{
   // echo "$x";
//echo "$y";
    
    $_SESSION["eid"]=$x;
    
    
	if ( $row = $result->fetch_assoc() ) 
    
    {
        	//$_SESSION[ "fname" ] = $row[ "name" ];
          
        if ( $row["role"] == "user")
        

           // header( 'Location:STUDENT/student/home.php' );
            #header( 'Location:test.php' );
            header("file:///C:/Users/user/Desktop/mini%20project/xampp/htdocs/mini%20pro/servex/user_login.php");

            else if ($row["role"]=="admin")
            header('Location:frontpage.html');
        	  // header('Location:ADMIN/admin/index.php');
            
        else if ($row["role"]=="worker")
        	   //header('Location:FACULTY/faculty/facultyindex.php');
                header('Location:frontpage.html');
        
       
         
}
    


        }
else {
	//error message if SQL query fails
	echo "<h3><span style='color:red; '>Invalid User ID & Password. Page Will redirect to Login Page after 3 seconds </span></h3>";
	header( "refresh:3;url=file:///C:/Users/user/Desktop/mini%20project/xampp/htdocs/mini%20pro/servex/user_login.php" );
}
  $connect->close();  

}
?>