<?php
    require_once "setting.php"
    $dbconn = @mysqli_connect($host, $user, $pwd, $sql_db);
    if ($dbconn) {

        $query = "SELECT * FROM cars";
        $result = mysqli_query($dbconn, $query);
        if ($result){...}
        else {...}
        ...
        mysqli_close($dbconn);
    } else echo "<p>Unable to connect to the db.</p>";
?>

<?php
require_once("settings.php");

if (isset($_GET['model'])) {
    $model = mysqli_real_escape_string($conn, $_GET['model']);
    $sql = "SELECT * FROM cars WHERE model LIKE '%$model%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>ID</th><th>Make</th><th>Model</th><th>Price</th><th>Year</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['car_id'] . "</td>";
            echo "<td>" . $row['make'] . "</td>";
            echo "<td>" . $row['model'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['yom'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "🚫 No matching cars found.";
    }
} else {
    echo "Please enter a model to search.";
}

mysqli_close($conn);
?>