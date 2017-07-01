<?php
 
function selectDb($pdo){
    $statement=$pdo->prepare('SELECT * FROM mytodo');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS,'task');

 }
 

?>
