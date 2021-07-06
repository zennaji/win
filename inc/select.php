<?php 

///  Data halen vanaf de database 
$sql_s = 'SELECT * FROM users ORDER BY RAND() LIMIT 1 ';  // LIMIT 1 betekent haal gewoon een, als je die weg haalt dan haalt die van alles. ORDER BY RAND() BETEKENT HAAL RANDOM ELEMENTEN
//de variable sql_s connecten met de connect naar de databae. dus (conn variable),
$result = mysqli_query($conn, $sql_s);
// informatie van de aanroepen 
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>