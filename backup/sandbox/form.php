<?php

$conn = new mysqli($servernaam, $servergb, $serverww, $naamdb);

?>

</head>
<body>

<?php include_once 'dbgg.php' ?>

<?php

if (isset($_POST['save'])) {
    $sql = "INSERT INTO klanten (voornaam, tussenvoegsel, achternaam)
    VALUES ('" . $_POST["voornaam"] . "','" . $_POST["tussenvoegsel"] . "','" . $_POST["achternaam"] . "')";

    $result = mysqli_query($conn, $sql);
}

?>

<form action="form.php" method="post">
    <label id="first"> First name:</label><br/>
    <input type="text" name="voornaam"><br/>

    <label id="first"> tussenvoegsel:</label><br/>
    <input type="text" name="tussenvoegsel"><br/>


    <label id="first">Achternaam</label><br/>
    <input type="text" name="achternaam"><br/>

    <button type="submit" name="save">save</button>

</form>

</body>
</html>

