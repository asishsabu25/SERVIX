<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Homestay Booking</title>
      <link rel="stylesheet" href="booking/css/style.css">
</head>
<body>
  <!DOCTYPE html>
<head>
  <link href='https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
  <link href='https://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>
  <script src='https://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js' type='text/javascript'></script>
</head>
<body>
  <div class='container'>
    <div class='panel panel-primary dialog-panel'>
      <div class='panel-heading'>
        <h5>Homestay Booking</h5>
      </div>
      <div class='panel-body'>
        <form class='form-horizontal' role='form' method="post" action="">
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Package Type</label>
            <div class='col-md-2'>
              <select class='form-control' id='id_package' name="id_package">
                <option>Buisness</option>
                <option >Family</option>
                <option>Tour</option>
                <option>Events</option>
                <option>Holidays</option>
              </select>
            </div>
          </div>
         <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Room Type</label>
            <div class='col-md-2'>
              <select class='form-control' id='id_room' name="id_room">
     <option selected="selected">Deluxe Room</option>
<option>Standard Room</option>
<option>Superior Room</option>
<option>Executive Room</option>
<option>Pacific Room</option>
<option>Pacific Suite</option>
<option>Deluxe Suite</option>
<option>Executive Suite</option>
<option>Presidential Suite</option>
               </select>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Guests</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control col-md-8' id='id_adults' placeholder='18+ years' type='number' name="id_adults">
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_children' placeholder='2-17 years' type='number' name="id_children">
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_children_free' placeholder='&lt; 2 years' type='number' name="id_children_free">
                </div>
              </div>
            </div>
          </div> 
          
         <div class='form-group'>
        
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Check-In</label>
     <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>

                  <input type="date" class='form-control datepicker' id='id_checkin'  placeholder="Check-In" name="Check-In">
                  <!--<span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>-->
                </div>
              </div>        
             <label class='control-label col-md-2' for='id_checkout'>Check-Out</label>
              <div class='col-md-3'>
        <div class='form-group internal input-group'>
                  <input type="date" class='form-control datepicker' id='id_checkout'  placeholder="Check-Out" name="Check-Out">
                  <!--<span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>-->
                </div>
      </div>
            </div>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Equipment type</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <select class='form-control' id='id_equipment' name="id_equipment">
                    <option>Travel trailer</option>
                    <option>Fifth wheel</option>
                    <option>RV/Motorhome</option>
                    <option>Tent trailer</option>
                    <option>Pickup camper</option>
                    <option>Camper van</option>
                  </select>
                </div>
              </div>
              
            </div>
          </div>          
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Comments</label>
            <div class='col-md-6'>
              <textarea class='form-control' id='id_comments' placeholder='Additional Requirements' rows='3' name="id_comments"></textarea>
            </div>
          </div>
          <div class='form-group'>
            <div class='col-md-offset-4 col-md-3'>
              <button class='btn-lg btn-primary' type='submit'>Submit</button>
            </div>
             <div class='col-md-3'>
           
              <button class='btn-lg btn-danger' style='float:right' type='reset' value="submit">Cancel</button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</body>
     <script  src="booking/js/index.js"></script>
</body>



<?php
include_once('../shares/mydatabase.inc');
if(isset($_POST['id_package']))
{

$package=$_POST['id_package'];
$room=$_POST['id_room'];
$guestadult=$_POST['id_adults'];
$guestchildren=$_POST['id_children'];
$guestbaby=$_POST['id_children_free'];
$checkin=$_POST['id_checkin'];
$checkout=$_POST['id_checkout'];
$equipment=$_POST['id_equipment'];
$pets=$_POST['id_pets'];
$comments=$_POST['id_comments'];
$sql="insert into hbooking values('$package','$room','$guestadult','$guestchildren','$guestbaby','$checkin','$checkout','$equipment','$comments')";
setDatas($sql);
}
?>
</html>