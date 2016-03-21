<html>
<head>
    <meta charset="utf-8">
    <title>Movies after 2010</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>Movies after 2010</body>
<?php
/**
 * Created by PhpStorm.
 * User: 1516734
 * Date: 15/03/2016
 * Time: 10:22
 */
include("databse.php");

$sq1= "SELECT * FROM marvelmovies Where yearReleased >= 2010";
$result=mysqli_query($db,$sql);
while($row=$result->fetch_array())
{
    $movietitle=$row['title'];
    echo"<p>".$movietitle."<p>";
}
?>
</html>

