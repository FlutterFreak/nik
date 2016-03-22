<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Superhero System</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<header>
<h1>The Superhero System </h1>
<h2>Superhero Home page</h2>
</header>
<p>What would you like to choose</p>
<ul>
    <li><a href="insertSuperhero.php">Insert a superhero</a></li>
    <li><a href="displaySuperhero.php">Display all superheros</a></li>
    <li><a href="battle.php">Insert a battle</a></li>
    <li><a href="displayBattles.php">Display all battles</a></li>
    <ul>
        <?
        include ("db_connect.php");
        $sql_query = "SELECT * FROM superheros";
        $result = $db->query($sql_query);
        while($row = $result->fetch_array())
        {
            $fristname = $row['firstname'];
            $lastname = $row['lastname'];
            $id = $row['superheroID'];
            echo "<li><a href='displaybattles.php?id={$id}'> Battles for {$firstname} {$lastname} </a></li>";
        }
        ?>
        </ul>

</ul>
</body>
</html>
