<html>
<head>
    <meta charset="utf-8">
    <title>All Movies</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>All Movies</body>

<?php
/**
 * Created by PhpStorm.
 * User: 1516734
 * Date: 15/03/2016
 * Time: 10:21
 */
include("databse.php");

$sql= "SELECT * FROM marvelmovies";
$result=mysqli_query($db,$sql);
while($row=$result->fetch_array())
{
    $movietitle=$row['title'];
    echo"<p>".$movietitle."<p>";
}

?>
</html>
