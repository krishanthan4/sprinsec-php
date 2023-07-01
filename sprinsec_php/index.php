<?php 
 header("Access-Control-Allow-Origin: *");

$connection =new mysqli("localhost","root","abcd1234","sprinsec_db");

const queries = [
 "SELECT * FROM `services_items`","SELECT * FROM `social_media`",
    "SELECT * FROM `academy_item` INNER JOIN `courses` ON `courses`.`Academy_Item_id` =`academy_item`.`id`",
    "SELECT * FROM `prices` INNER JOIN `price_info` ON `price_info`.`Prices_id` =`Prices`.`id`",
   "SELECT * FROM `project_items`","SELECT * FROM `store_items`"
  ];
  
$i =0;
do {
    $query = $connection->query(queries[$i]);

    if ($query) {
        while ($row = $query->fetch_assoc()) {
            $response_obj[] = $row;
        }
    } else {
        echo "Error executing query: " . $connection->error;
    }

    $i++;
} while ($i < count(queries));

$response = new stdClass();
$response->respose_Array = $response_obj;

echo(json_encode($response));
?>