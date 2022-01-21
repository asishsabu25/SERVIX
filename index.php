<?php include('../allhead.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="">
                        <h2>student registration form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="fname">Name :</label>
                                <input type="text" name="fname" id="fname" required/>
                            </div>
                            <div class="form-group">
                                <label for="lname">Last Name :</label>
                                <input type="text" name="lname" id="lname" required/>
                            </div>
                        </div>
                        <div class="textarea">
                            <label for="address">Address :</label>
                            <textarea class="" name="addrs" id="addrs" style="position: relative; margin: 0px 0px 23px; width: 500px; height: 101px;" required></textarea>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                     <!--   <div class="form-row">
                            <div class="form-group">
                                <label for="Course">Course :</label>
                                <div class="form-select">
                                    <select name="course" id="course">
                                        <option value=""></option>
                                        <option value="MCA">MCA</option>
                                        <option value="MTECH">MTECH</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city">District :</label>
                                <div class="form-select">
                                    <select name="dis" id="dis">
                                        <option value=""></option>
                                        <option value="losangeles">Los Angeles</option>
                                        <option value="washington">Washington</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label for="birth_date">DOB :</label>
                            <input type="date" name="dob" id="dob">
                        </div>
                        <div class="form-group">
                            <label for="course">Course :</label>
                            <div class="form-select">
                                <select name="course" id="course">
                                    <option value=""></option>
                                    <option value="computer">Computer Operator & Pragramming Assistant</option>
                                    <option value="desiger">Designer</option>
                                    <option value="marketing">Marketing</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phno">Contact Number :</label>
                            <input type="tel" name="phno" id="phno " required/>
                        </div>
                       
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" id="email" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" name="pass" id="pass" />
                        </div>
                        <div class="form-submit">
                            <input type="reset" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>