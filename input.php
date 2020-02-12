<!DOCTYPE html>
<html>
<head>
</head>
<title>
</title>
<body>
    

<?php ?>
  <form action="input.php" method="get">

     Name:<br> <input type="text" name="username">
      
 <br>
   Num1:<br><input type="number" name="num1"><br>
   Num2:<br><input type="number" name="num2"><br>
   Age:<br> <input type="number" name="age">
     <br><input type="submit">
     </form>
     <br>
     Your name is <?php echo $_GET["username"]?>
    <br> Your age is <?php echo $_GET["age"] ?>

    ANSWER: <?php echo$_GET["num1"]+$_GET["num2"]?>
<br>
<form action="input.php" method="post">
PASSWORD: <br><input type= "password" name="password">
<br> <Input type ="submit">
</form>
<br> Your password is <?php echo $_POST["password"]?>
    
  </body>
  </html>
 