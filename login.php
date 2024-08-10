
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css2.css" />
</head>
<body>
        <div class="login">
         <form method="post">
         	<div class="log">
              <label for="user">User Name</label>
          	  <input type="text" name="user" id="user" placeholder="User Name" required /><br>
          	  <label for="pass">Password</label>
          	  <input type="password" name="pass" id="pass" placeholder="Password" required /><br>
          	  <button type="submit" name="login">دخول</button>
            </div>
         </form>
        </div>


          <?php 

               require 'db.php';
               session_start();

               if (isset($_POST['login'])) {
               	$user = $_POST['user'];
               	$pass = $_POST['pass'];

               	$ma = "select * from users where username = '$user' && password = '$pass' ";



               	if (mysqli_num_rows(mysqli_query($conn,$ma)) > 0 ) {
               		$_SESSION['username'] = $user;

               		header("Location: check_db.php");

               	}else{
               		echo "إسم المستخدم أو كلمة المرور خطأ";
               	}
               }

          ?>

</body>
</html>