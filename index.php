<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css2.css">
</head>
<body>
         <div class="login">
          <form method="post">
          	<div class="log">
          	  <label for="user">User Name</label>
          	  <input type="text" name="user" id="user" placeholder="User Name" required /><br>
          	  <label for="pass">Password</label>
          	  <input type="password" name="pass" id="pass" placeholder="Password" required /><br>
          	  <label for="email">Email</label>
          	  <input type="email" name="email" id="email" placeholder="Email" required /><br>
          	  <button type="submit" name="signup">إنشاء حساب جديد  </button><br><br>
          	  <button type="submit" name="log" style="color: #fff;"><a href="login.php">تسجيل الدخول  </a></button>
          	</div>
          </form>
         </div>
             
              
           <?php 
                  // for call the file database connect

                  require 'db.php';

                    
                  if (isset($_POST['signup'])) {
                  	$user = $_POST['user'];
                  	$pass = $_POST['pass'];
                  	$email= $_POST['email'];

                  	$ma = "insert into users (username,password,email) values ('$user','$pass','$email')";

                  	if (mysqli_query($conn,$ma)) {
                  		echo "تم إنشاء الحساب بنجاح يمكنك تسجيل الدخول الأن";

                  	}
                   

                    
                  }
                 

                  
                  
           ?>
 

          
</body>
</html>