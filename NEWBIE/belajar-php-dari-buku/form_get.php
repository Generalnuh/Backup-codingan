<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Get</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="kata">
        <input type="submit" value="cari">
    </form>
    <?php
    if(isset($_GET['kata'])){
        echo "Anda Sedang Mencari kata <b>$_GET[kata]</b>";
    }
    ?>
</body>
</html>