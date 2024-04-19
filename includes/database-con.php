<?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "project_db";

        $conn = new mysqli($server, $username, $password, $database);  //use to establish a connection to the database

        if ($conn->connect_error) {  // if there is no connection to the database it will give you a connection error
                trigger_error($db->connect_error);
        }