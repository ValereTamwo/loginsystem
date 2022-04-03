<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <center>
    <div class="container">

<form class="well form-horizontal" action="registration.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Registration</b></h2></center></legend><br>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label">
    <?php
        if (isset($_GET['faillure'])) {
            $faillure = $_GET['faillure'];
            echo"<p style = \"color:red;\">".$faillure."</p>";
        }
    ?>
</label>  
</div>
<div class="form-group">
<label class="col-md-4 control-label">First Name</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="firstName" placeholder="First Name" class="form-control"  type="text"require>
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Last Name</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="surName" placeholder="Last Name" class="form-control"  type="text" require>
</div>
</div>
</div>

<!-- <div class="form-group"> 
<label class="col-md-4 control-label">Department / Office</label>
<div class="col-md-4 selectContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
<select name="department" class="form-control selectpicker">
<option value="">Select your Department/Office</option>
<option>Department of Engineering</option>
<option>Department of Agriculture</option>
<option >Accounting Office</option>
<option >Tresurer's Office</option>
<option >MPDC</option>
<option >MCTC</option>
<option >MCR</option>
<option >Mayor's Office</option>
<option >Tourism Office</option>
</select>
</div>
</div>
</div> -->

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">Username</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="user_name" placeholder="Username" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Password</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="password1" placeholder="Password" class="form-control"  type="password" require>
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Confirm Password</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="password2" placeholder="Confirm Password" class="form-control"  type="password" require>
</div>
</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label">E-Mail</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="email" placeholder="E-Mail Address" class="form-control"  type="text" require>
</div>
</div>
</div>


<!-- Text input-->

    <div class="form-group">
        <label class="col-md-4 control-label">Contact No.</label>  
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input name="phone" placeholder="(639)" class="form-control" type="text">
            </div>
        </div>
    </div>

<!-- Select Basic -->

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
</div>
</div>

        <!-- Button -->
<div class="form-group">
    <label class="col-md-4 control-label"></label>
        <div class="col-md-4"><br>
        you have an Acount ? <a href="loginForm.php">SingIn</a>
    </div>
</div>


</fieldset>
</form>
</div>
</div>
    </center><!-- /.container -->

<script src="style.js"></script>
</body>
</html>