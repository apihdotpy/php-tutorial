<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qama";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['userid'])) {
        $userids = $_POST['userid'];
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        try {
            $conn->beginTransaction();
            foreach ($userids as $key => $value) {
                $conn->exec("INSERT INTO users (user_id, userid) VALUES (NULL, '$value')");
            }
            $conn->commit();
            echo "New records created successfully";
        } catch (PDOException $e) {
            $conn->rollback();
            echo "Error: " . $e->getMessage();
        }

    }
}


