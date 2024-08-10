
<!DOCTYPE html>
<html>
<head>
	<title>data base</title>
	<link rel="stylesheet" type="text/css" href="css1.css">
</head>
<body>
<img src="m3.jpg">

      <?php 
              
              
              	$host="localhost";
              	$user="root";
              	$pass="";
              	$db  ="testDb";

              	$conn=mysqli_connect($host, $user, $pass, $db);
             
              	$r=mysqli_query($conn,"select * from emp");
              
              
              
       ?>
      <form method="post">
        <div class="fl">
          
              <label>Employee Number</label>
              <input type="text" name="no" id="no">
              <label>Employee Name</label>
              <input type="text" name="name" id="name">
              <label>Address</label>
              <input type="text" name="Address" id="Address">
              <label>salary</label>
              <input type="text" name="salary" id="salary">
              <input type="submit" name="add" value="add" class="add">
              <input type="submit" name="delet" value="delete" class="delete">
        </div>
      	   <table>
             <tr>
                <th>Employee Number</th>
                <th>Employee Name</th>
                <th>Address</th>
                <th>salary</th>
             </tr> 
              <?php
               
            
                  while ( $row=mysqli_fetch_array($r)) {
          
                    echo "<tr>";
                    echo "<td>" . $row['empno'] ."</td>";
                    echo "<td>" . $row['empname'] ."</td>";
                    echo "<td>" . $row['address'] ."</td>";
                    echo "<td>" . $row['salary'] ."</td>";
                    echo "</tr>";
                    }
                    ?>
                    <?php
                    if (isset($_POST['add'])) {
                  	$number = $_POST['no'];
                  	$name = $_POST['name'];
                  	$address= $_POST['Address'];
                     $sal= $_POST['salary'];
                  	$ma = "insert into emp (empno,empname,address,salary) values ('$number','$name','$address','$sal')";
                  if (mysqli_query($conn,$ma)) {
                  		
                  	} 
                  } 
                  ?>
                  <?php
                  if (isset($_POST['delet'])) {
                  	$number = $_POST['no'];
                  	$name = $_POST['name'];
                  	$address= $_POST['Address'];
                     $sal= $_POST['salary'];
                  	$ma = "delete from emp where empname='$name' or empno='$number'";
                  if (mysqli_query($conn,$ma)) {
                  		//echo "تم إنشاء الحساب بنجاح يمكنك تسجيل الدخول الأن";

                  	} 
                     else
                  {//echo "لم يتم الاضافه";
                  }
                  }
              ?>
           </table>
      </form>

              <form method="post">

                       <button class="btn" type="submit" name="logout" style="width: 50% ">خروج</button>  

              </form>



               <?php 
               
                   require 'auth.php';

                   echo '<h1>Wellcom  :</h1>' . $_SESSION['username'];

                   if (isset($_POST['logout'])){
                    unset($_SESSION['username']);
                    header("Location: login.php");
                    exit();
                   }
                    ?>
                    <script type="text/javascript">
                         
                         var mna=document.getElementById("emp");
                         for (var i = 1; i<mna.rows.length; i++) {
                            mna.rows[i].onclick=function () {
                              document.getElementById("no").value=this.cells[0].innerHTML;
                              document.getElementById("name").value=this.cells[1].innerHTML;
                              document.getElementById("Address").value=this.cells[2].innerHTML;
                              document.getElementById("salary").value=this.cells[3].innerHTML;
                            }
                         }

                    </script>
                  
</body>
</html>