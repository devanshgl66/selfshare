<!DOCTYPE html>
<html>
<head>
	<title>Register-Self Share</title>
  <link rel="icon" href="logo.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="registercss.css">

  <?php include 'register2.php' ?>

  <script>
    function ValidateForm(){
      var pass1=document.getElementById('password').value;
      var pass2=document.getElementById('password2').value;
      if(pass1!=pass2){
        alert("Password do not match");
        return false;
      }
    }
  </script>
</head>
<body>
	<div id="login-box">
  <div class="left">
    <h1>Sign up</h1>
    <form  method="post" action="register.php" onsubmit="return ValidateForm()">
      <div <?php if(isset($name_error)): ?> class="form_error" <?php endif?>>
        <input type="text" name="uname" placeholder="Username" required />
        <?php if(isset($name_error)): ?>
          <span><?php echo $name_error; ?></span>
        <?php endif?>
      </div>
      <input type="password" id="password" name="password" placeholder="Password" required />
      <input type="password" id="password2" name="password2" placeholder="Retype password" required />
      <div <?php if(isset($phone_error)): ?> class="form_error" <?php endif;?>>      
        <input type="tel"  name="phno" pattern="[0-9]{10}" title="Enter a valid phone number" placeholder="Phone number" required />
        <?php if(isset($phone_error)):?>
          <span><?php echo $phone_error;?></span>
        <?php endif;?>
      </div>
      <input type="submit" name="signup_submit" value="SIGN ME UP"/>
    </form>
  </div>
  
  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    
    <a href="https://www.facebook.com" target="_blank"><button class="social-signin facebook">Log in with facebook</button></a>
    <a href="https://www.twitter.com" target="_blank"><button class="social-signin twitter">Log in with Twitter</button></a>
    <a href="https://accounts.google.com" target="_blank"><button class="social-signin google">Log in with Google+</button></a>
  </div>
  <div class="or">OR</div>
</div>

</body>
</html>