<!DOCTYPE HTML>
<html>
   <head> </head>
   <body>
      <form method="post" action="">
      	<input type="text" placeholder="Username" name="username"><br>
      	<input type="password" placeholder="Password" name="password"><br>
      	<input type="submit" value="Login">
      </form>

      <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          echo "Username: <b>$_POST[username]</b><br>";
          echo "Password: <b>$_POST[password]</b>";
        }
      ?>
   </body>
</html>