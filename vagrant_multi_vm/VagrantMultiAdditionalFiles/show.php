<?php

// first DB에 연결
$username = 'root';
$password = 'rootpass';
$dsn = 'mysql:host=192.168.3.6;dbname=formresponses';

try{
	$db = new PDO($dsn, $username, $password);
	$result=FALSE;

    $query = "SELECT * FROM response";

    $stmt = $db->query($query);
    
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
    echo "<table border='1'>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>email</th>
    </tr>";

    foreach($rows as $row) {
        echo "<tr>";
        echo "<td>".$row['firstname']."</td>";
        echo "<td>".$row['lastname']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "</tr>";

        //printf("{$row['firstname']} {$row['secondname']} {$row['email']}\n");
    }

} catch(PDOException $ex) {
	echo $ex->getMessage();
}

echo "</table>";

// second DB에 연결
$username = 'root';
$password = 'rootpass';
$dsn2 = 'mysql:host=192.168.3.7;dbname=formresponses';

try{
	$db = new PDO($dsn2, $username, $password);
	$result=FALSE;

    $query = "SELECT * FROM response";

    $stmt = $db->query($query);
    
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
    echo "<table border='2'>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>email</th>
    </tr>";

    foreach($rows as $row) {
        echo "<tr>";
        echo "<td>".$row['firstname']."</td>";
        echo "<td>".$row['lastname']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "</tr>";

        //printf("{$row['firstname']} {$row['secondname']} {$row['email']}\n");
    }

} catch(PDOException $ex) {
	echo $ex->getMessage();
}

echo "</table>";
?>
