<?php
    require_once "setting.php"
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
    if ($conn) {

        $query = "SELECT * FROM cars";
        $result = mysqli_query($dbconn, $query);
        if ($result){...}
        else {...}
        ...
        mysqli_close($dbconn);
    } else echo "<p>Unable to connect to the db.</p>";
?>