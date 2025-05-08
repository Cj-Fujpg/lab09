<?php
    require_once "settings.php";
    $dbconn = @mysqli_connect($host, $username, $password, $database);

    if ($dbconn) {
        $query = "SELECT * FROM cars";
        $result = mysqli_query($dbconn, $query);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "Car ID: " . $row['id'] . " - Make: " . $row['make'] . "<br>";
                }
            } else {
                echo "<p>No cars found in the database.</p>";
            }
        } else {
            echo "<p>Error executing query: " . mysqli_error($dbconn) . "</p>";
        }

        mysqli_close($dbconn);
    } else {
        echo "<p>Unable to connect to the db.</p>";
    }
?>