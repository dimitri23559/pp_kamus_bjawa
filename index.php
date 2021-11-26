<?php
require 'function.php';


// $bahasa = query($conn, "SELECT * FROM tranlate");

// require 'function.php';


$bahasa = mysqli_query($conn, "SELECT * FROM tranlate ");

if( isset($_POST["cari"])) {
    $bahasa = cari($_POST["keyword"]);
}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="style.css">
    <title>kamus bahasa jawa</title>
</head>
<body>
        
    


<center>
<h1>KAMUS BAHASA JAWA</h1>
</center>

<center>
<form action="" method="post" >
       <input type="text" name="keyword" autofocus placeholder="luru kalimat" autocomplete="off">
       <button type="submit" name="cari">luru</button>
   </form>

<table border="1" cellpadding="7" cellspacing="0" width="600px">
    <tr>
        <th bgcolor="#64B5F6" width="6px" > no</th>
        <th bgcolor="#42A5F5" colspan="7">krama</th>
        <th bgcolor="#2196F3" colspan="7">ngoko</th>
    </tr>
    <?php  foreach( $bahasa as $row ) : ?>
    <tr>
        <td bgcolor="" colspan=""><?= $row["id"]; ?></td>
        <td bgcolor="" colspan="7"><?= $row["krama"]; ?></td>
        <td bgcolor="" colspan="7"><?= $row["ngoko"]; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</center>



</body>
</html>