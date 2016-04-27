<html> 
<head> 
<basefont face="Arial"> 
</head> 
<body> 

<?php 

$pdo = new PDO("mysql:host=XXXXXXXX;dbname=XXXXX", "XXXXXXX", "XXXXXXXX");
$stmt = $pdo->prepare('
        SELECT actor_id, first_name, last_name 
        FROM actor
        LIMIT 50');
$stmt->execute();

echo "<table cellpadding=10 border=1>"; 

foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $result) {
        echo "<tr>"; 
        echo "<td>".$result['actor_id']."</td>"; 
        echo "<td>" .$result['first_name']."</td>"; 
        echo "<td>".$result['last_name']."</td>"; 
        echo "</tr>"; 
		//$result->MoveNext(); //move on to the next record
} 
echo "</table>"; 

?> 
</body>
</html>