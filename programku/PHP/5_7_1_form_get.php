<!DOCTYPE HTML>
<html>
   <head> </head>
   <body>
      <form method="get" action="">
      	<input type="text" name="kata"><input type="submit" value="Cari">
      </form>

      <?php
        if(isset($_GET['kata'])){
          echo "Anda sedang mencari kata <b>$_GET[kata]</b>";
        }
      ?>
   </body>
</html>