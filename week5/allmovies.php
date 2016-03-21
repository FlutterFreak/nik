<html>
<head>
    <meta charset="utf-8">
    <title>All Movies</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>All Movies</body>

<?php

include("databse.php");

echo "</p>";
$sql_query = "SELECT * FROM marvelmovies where yearReleased < 2010";
$result = $db->query($sql_query);
echo "<p><strong>Before 2010: </strong>";
while($row = $result->fetch_array()){
    // print out fields from row of data
    echo $row['title'] . " | ";
}
?>

</html>
