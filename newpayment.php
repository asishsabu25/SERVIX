<?php session_start();
include_once('../shares/mydatabase.inc');
include_once('top.php');
$uname=$_SESSION['user_id'];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
		
	<br><br><br><br><br><br>
	
    <body>
        <center> <h4>Payment Options</h4></center>
                
         <form name="" action="" method="post"> 
	
                    <table align="center">
	                                <label class="col-sm-3 control-label"></label>
					<div class="col-sm-9">
						<div class="templatemo-radio-container">

							<label class="radio templatemo-no-padding-top">
			          			<input type="radio" name="pay" id="optionsRadios1" value="visa"/>
                                                        <img src="visa.png" alt="visa logo"/>
			          			<img src="mastercard.png" alt="mastercard logo"/>
			          			
			          		
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="pay" id="optionsRadios2" value="paypal"/> 
			          			<img src="paypal.png" alt="paypal logo"/>
			          		</label>
						
						</div>
			          	<div class="templatemo-radio-container">
			          		
		          		</div>
			          </div>    

                                        <tr><td><label for="companyname">Card Name:</label> </td><td><input type="text"  name="card_name" class="required input_field" /></td><br>
                                        </tr>
                                        <div class="cleaner h10"></div> 
	
                                        <tr><td><label for="location">Card Number:</label> </td><td><input type="text" required class="validate-subject required input_field" name="card_number" /> </td>
                                        </tr>
                                                      <div class="cleaner h10"></div>
                                                      <tr>
                                                      <td>Expiry:</td>
                                                     
                                                      <td>	<select name="date">
						         		<option>-</option>
										<option value="2014">2014</option>
										<option value="2015">2015</option>
										<option value="2016">2016</option>
										<option value="2017">2017</option>
										<option value="2018">2018</option>
										<option value="2019">2019</option>
										<option value="2020">2020</option>
										<option value="2021">2021</option>
										<option value="2022">2022</option>
										<option value="2023">2023</option>
										<option value="2024">2024</option>
									</select> /
									<select>
										<option>-</option>
									  	<option value="01">01</option>
									  	<option value="02">02</option>
									  	<option value="03">03</option>
									  	<option value="04">04</option>
									  	<option value="05">05</option>
									  	<option value="06">06</option>
									  	<option value="07">07</option>
									  	<option value="08">08</option>
									  	<option value="09">09</option>
									  	<option value="10">10</option>
									  	<option value="11">11</option>
									  	<option value="12">12</option>
                                                                        </select></td>
                                                        </tr>
                                                <tr>
                                          <td>Security Code:</td>
                                          <td><input type="text"  required class="txtinput" name="securitycode"/></td>
                                          <td><img src="cvv2.jpg" alt="cvv2"/></td>
                                          </tr>
										   </tr>
                                                
                                                                       
                                                                        
                                                      <tr>
                                                          <td>
                                                              <input type="submit" name="submit" value="Submit"/>
                                                          </td>
                                                          <td>
                                                              <input type="reset" name="reset" value="Reset"/>
                                                          </td>
                                                      </tr>
                                                      
                                                          </table>
                                       
				</form> 
         
         <?php
           $pay=$_POST['pay']; 
		   if($pay=='visa')
		   {
                    $cno=$_POST['card_number']; 
					
                    $card_name=$_POST['card_name'];  
                  
               


	



if(isset($_POST['card_name']))
{

$sql="select cardno,amount from account where cardno=$cno and userid='$uname'";

$tbl=getDatas($sql);
$amt=$tbl[0][1];


$amt=$amt-1000;


$sql="update `account` set `amount`=$amt where `cardno`=$cno";
setDatas($sql);

echo"Thank you !!!!!!!!!!!!!!!!!!!.You are a valued customer for us.Your Balance is ".$amt;
//echo"T;otal:Rs.".$amt."Thank you for Booking.You are a valued customer for us.Please check your mail";


	}
	}
	else
	{
	
	$cno=$_POST['card_number']; 
					
                    $card_name=$_POST['card_name'];  
                  
               


	



if(isset($_POST['card_name']))
{

$sql="select cardno,amount from account where cardno=$cno and userid='$uname'";

$tbl=getDatas($sql);
$amt=$tbl[0][1];


$amt=$amt-1000;


$sql="update `account` set `amount`=$amt where `cardno`=$cno";
setDatas($sql);


echo"Thank you !!!!!!!!!!!!!!!!!!!.You are a valued customer for us.Your Balance is ".$amt;


	}
	
	
	}
				
				
         ?>
         
         <a href="issuevoucher.php?id9=<?php echo $uname;?>">Print Voucher</a>
    </body>
</html>
