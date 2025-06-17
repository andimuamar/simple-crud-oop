<?php 

require_once("config/config.inc.php");

class users
{
    function list()
    {
        $connect = new connect();
        $conn = $connect->connect_database();

        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        $response = []; // Global Variable
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $response[] = array("id" => $row['id'], "name" => $row['name']);
            }
            return $response;
        } else {
            return false;
        }
        $conn->close();
    }

    function store($data)
    {
        $connect = new connect();
        $conn = $connect->connect_database();

        $sql = "INSERT INTO users (name, password)
        VALUES ('John', 'Doe')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

    function detail()
    {

    }

    function update()
    {

    }

    function delete($data)
    {
        $connect = new connect();
        $conn = $connect->connect_database();

        $sql = "DELETE FROM users WHERE id=".$data['id'];

        if ($conn->query($sql) === TRUE) {
            echo "Delete record successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}