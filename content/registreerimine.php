<?php
require_once("konf.php");
if(isSet($_REQUEST["sisestusnupp"])){
    $kask=$yhendus->prepare(
        "INSERT INTO jalgrattaeksam(eesnimi, perekonnanimi) VALUES (?, ?)");
    $kask->bind_param("ss", $_REQUEST["eesnimi"], $_REQUEST["perekonnanimi"]);
    $kask->execute();
    $yhendus->close();
    //header("Location: $_SERVER[PHP_SELF]?lisatudeesnimi=$_REQUEST[eesnimi]");
    //exit();
    $lisatudeesnimi=$_REQUEST["eesnimi"];
}
?>

<h1>Registreerimine</h1>
<?php
if(isSet($lisatudeesnimi)){
    echo "<div id='success'>Lisati $lisatudeesnimi</div>";
}
?>
<form action="?page=registreerimine" method= "post">
    <dl>
        <dt>Eesnimi:</dt>
        <dd><input type="text" name="eesnimi" /></dd>
        <dt>Perekonnanimi:</dt>
        <dd><input type="text" name="perekonnanimi" /></dd>
        <dt><input type="submit" name="sisestusnupp" value="sisesta" /></dt>
    </dl>
</form>
</body>
