<?php
$mongo = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$dbName = "dbusers";
$collectionName = "users";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $age = $_POST['age'];

    $user = [
        'name' => $name,
        'contact' => $contact,
        'age' => $age];

    $bulk = new MongoDB\Driver\BulkWrite();
    $bulk->insert($user);
    $mongo->executeBulkWrite("$dbName.$collectionName", $bulk);

    header("Location: /index.html");
    exit();
}
?>
