<html>
<head>
    <meta charset="utf-8">
    <title>After 2010</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>After2010</body>

<?php

include("databse.php");

echo "</p>";
$sql_query = "SELECT * FROM marvelmovies where yearReleased >= 2010";
$result = $db->query($sql_query);
echo "<p><strong>After 2010: </strong>";
while($row = $result->fetch_array()){
    // print out fields from row of data
    echo $row['title'] . " | ";
}

?>

</html>
