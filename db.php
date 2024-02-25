<?php
    $pdo = new PDO('slqite:publicidad.db');

    $statement = $pdo->query("SELECT * FROM Publicidad");

    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

    var_dump($rows)

?>