<?php
    include('connect.php');

    function create($table, $data) {
        global $conn;

        $sql = "INSERT INTO $table SET ";

        $i = 0;
        foreach ($data as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " $key=?";
            } else {
                $sql = $sql . ", $key=?";
            }
            $i++;
        }

        //preparing SQL stmt
        $stmt = $conn->prepare($sql);
    
        //binding of data
        $values = array_values($data);
        $types = str_repeat('s', count($values));
        $stmt->bind_param($types, ...$values);

        //execute complete stmt
        $stmt->execute();
        $id = $stmt->insert_id;
        return $id;  
    }

    function dd($value) {
        echo "<pre>", print_r($value, true), "</pre>";
        die();
    }

?>