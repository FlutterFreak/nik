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
    <h2>Record a Battle</h2>
    <p><a href="index.php">Return to home...</a></p>
</header>
<main>
    <form action="insertbattle.php" method="post">
        <p>Select the superhero that fought in this battle</p><select name="superhero">
            <?
            include ("db_connect.php");
            $sql_query = "SELECT * FROM superheros";
            $result = $db->query($sql_query);
            while($row = $result->fetch_array())
            {
            $fristname = $row['firstname'];
            $lastname = $row['lastname'];
            $superheroID = $row['superheroID'];
            echo "<option value='{superheroID}'>{$firstname} {lastname}</option>";
            ?>
        </select><br>
        <input type="text" name="villian" placeholder="Villian Faught"><br>
        <input type="submit" text="Record Battle">
        </form>
    </main>
</body>
</main>
</html>
