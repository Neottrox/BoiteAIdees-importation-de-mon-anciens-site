<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'meuteinfo';
//connect with the database
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $db->query("SELECT * FROM membres WHERE user LIKE '%".$searchTerm."%' ORDER BY user ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['user'];
}
//return json data
echo json_encode($data);
?>