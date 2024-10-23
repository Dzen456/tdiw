<?php
    include_once __DIR__ . "./connectaBD.php";
    $con = connectaBD() or die("Error DB");
    $sql = "select * from graus";

    $result = pg_query($con, $sql);
    $rows = pg_fetch_all($result);
    foreach($rows as $row) {
        echo "<option value = {$row['id']}> {$row['nom']}</option>\n";
    }
?>