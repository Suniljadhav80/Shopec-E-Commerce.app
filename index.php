<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register / Login</title>
    <link rel="stylesheet" href="Assets/css/style.css">
</head>
<body>
       <div class="form">
<div style="padding-top: 11.5%">
        <div class="r_1">
           <h1 style="text-align: center;">Sign Up</h1><br>
            
           
           <form action="index.php" method="POST">
                 <input type="text" placeholder="Username" name="uid" id="bt"><br>
                 
                <br><input type="text" placeholder="Name" name="uname"><br>
               
                  <br><input type="text" placeholder="Phone Number" name="uphone"><br>
                
                 <br><input type="password" placeholder="Password" name="upassword"><br>
                
                 <br> <input type="password" placeholder="Re-Enter Password" name="upass"><br>
                 
                 <br> <input type="checkbox" id="check"><label style="font-size: 14px;"> I agree to these<span class="term">Term &Conditions</span></label><br>
    
                  <br><input type="submit" value="Sign Up" class="sign_up">
    
    
                </form>
               
               <div class="login">
               <h4 class="member">Already a member? </h4> <label for=""> &NonBreakingSpace;<a href="Assets/pages/login.html" class="here"> Login Here</a></label>
               </div>
           </div>
       </div>
           <!-- php start -->
           <?php
           $servername="localhost";
           $username="root";
           $password="Suniljad@123";
           $dbname="users";

           $conn=new mysqli($servername,$username,$password,$dbname);
           
           if($conn->connect_error){
               die("connection fail");
           }
          @$id=$_POST['uid'];
          @$name=$_POST['uname'];
          @$phone=$_POST['uphone'];
          @$password=$_POST['upassword'];
          @$re_pass=$_POST['upass'];


          $sql="INSERT INTO `users`.`data` (`id`, `name`, `phone`, `password`, `re_pass`) VALUES (' $id', ' $name', ' $phone', ' $password', '$re_pass')";
if($conn->query($sql)==true)
{
    echo "Sign Up Successfully";
}
else{
    echo "error";
}
$conn->close();
?>
<!-- php end -->
 </body>
</html>