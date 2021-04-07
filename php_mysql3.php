<?php
//insert data to table mysql in php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbPDO";

try {
    //connect server and database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //insert data into table
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    
    // use exec() because no results are returned
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "New record created successfully, Last inserted ID is: " . $last_id;
}catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>