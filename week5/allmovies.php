<html>
<head>
    <meta charset="utf-8">
    <title>All Movies</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>All Movies</body>
<ul>
<?php

include("databse.php");

$sql= "SELECT * FROM marvelmovies";
$result = $db->query($sql);

while($row = $result->fetch_array()){
    // print out fields from row of data
    echo $row['title'] . " | ";
}

?>
</ul>
</html>
