<?php
//completa
    include_once __DIR__ . "./connectaBD.php";
    $con = connectaBD() or die("Error DB");
    $sql = "select * from graus where grau=$grau";
    if (isset($_REQUEST["grau"]))
    {
        $grau = $_REQUEST["grau"];
    }
    else {
        $grau = 1;
    }
    
    $result = pg_query($con, $sql);
    $rows = pg_fetch_all($result);
    foreach($rows as $row) {
        echo "<option value = {$row['id']}> {$row['nom']}</option>\n";
    }
?>
