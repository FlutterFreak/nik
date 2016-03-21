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

echo "</p>";
$sql_query = "SELECT * FROM marvelmovies where yearReleased < 2010";
$result = $db->query($sql_query);
echo "<p><strong>Before 2010: </strong>";
while($row = $result->fetch_array()){
// print out fields from row of data
echo $row['title'] . " | ";
?>
</html>

