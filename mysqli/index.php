<?php

// Definisco le costanti per la connessione
define("DB_SERVERNAME", "localhost");
define("DB_USERNAME", "root"); // voi mettete root
define("DB_PASSWORD", "root"); // voi mettete root
define("DB_NAME", "university"); // voi mettete university
define('DB_PORT', '3306');

//Stabilisco connessione con il db
$connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

//verifico la connessione
if ($connection && $connection->connect->error) {
    echo "Connection failed: " . $connection->connect_error;
    die();
} else {
    echo "Connection succesful: Go!";
}

//eseguo una query per testare la connessione
$sql = "SELECT * FROM departments";
$result = $connection->query($sql);
/* var_dump($result); */

//verifico se ci sono risultati e li mostro ciclando al loro interno
if ($result && $result->num_rows > 0) {
    //cicliamo tra i risultati e li mostriamo a schermo
    //var_dump($result->fetch_assoc());
    while ($department = $result->fetch_array()) {
        ?>
            <h1><?= $department['id'] . " - " . $department['name']; ?></h1>
            <ul>
                <li><?= "Indirizzo: " . $department['address']; ?></li>
                <li><?= "Telefono: " . $department['phone']; ?></li>
                <li><?= "Email: " . "<a>" . $department['email'] . "</a>"; ?></li>
                <li><?= "Sito Web: " . "<a>" . $department['website'] . "</a>"; ?></li>
                <li><?= "Capodipartimento: " . $department['head_of_department']; ?></li>

            </ul>
        <?php
    }
} elseif ($result) {
    echo 'Nessun Risultato';
} else {
    echo 'Errore Query';
}

//chiudo la connessione
$connection->close();

?>

