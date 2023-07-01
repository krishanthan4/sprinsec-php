<?php

// $name = $_POST["name"];
$name = "Kasun";
$connection = new mysqli("localhost","root","abcd1234");
$table = $connection->query("SELECT * FROM `sprinsec_db`.`basic__info` 
INNER JOIN `nav_items` ON `basic__Info`.`id` =`nav_items`.`basic__Info_id`
INNER JOIN `section_items` ON `basic__Info`.`id` = `section_items`.`basic__Info_id` 
INNER JOIN `project_items` ON `basic__Info`.`id` = `project_items`.`basic__Info_id` ");


for ($x=0;$x<$table->num_rows;$x++){
    $response__Object = new stdClass();

$row =  $table->fetch_assoc();

echo ($jsonText);
}
    
    // $response__Object->user="";
// }

?>