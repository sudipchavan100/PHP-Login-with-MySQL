<?php  
session_start();  
  
if(!$_SESSION['username'])  
{  
  
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?>  
  
<html>  
<head>  
  
    <title>  
        Registration  
    </title>  
</head>  
  
<body>  
<h2>Welcome</h2><br>  
<?php  
echo $_SESSION['username'];  
?>  
  
  
<h2><a href="logout.php">Logout here</a> </h2>  
  
  
</body>  
  
</html>  