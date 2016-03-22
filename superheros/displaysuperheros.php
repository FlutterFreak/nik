<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Insert Superhero</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<header>
    <h1>The Super-Superhero System </h1>
    <h2>Display all Superheros</h2>
    <p><a href="index.php">Return to home...</a></p>
</header>
<main>
    <?
    include ("db_connect.php");
    $sql_query = "SELECT * FROM superheros";
    $result = $db->query($sql_query);
    while($row = $result->fetch_array())
    {
        $fristname = $row['firstname'];
        $lastname = $row['lastname'];
        $mainsuperpower = $row['mainsuperpower'];
        echo "<article>
                  <h3>{$firstname} {lastname}</h3>
                  <p>This superheros main power is <strong>{mainsuperhero}</strong></p>
                  </article>";

    }
    ?>
    </main>
</body>
</html>

