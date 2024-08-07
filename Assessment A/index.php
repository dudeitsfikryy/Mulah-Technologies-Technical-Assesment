<?php

$conn = mysqli_connect("localhost", "root", "", "title_aggregator");
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>
            TITLE AGGREGATOR
        </h1>
        <p>Mashable</p>
    </header>
        <?php
        $sql = "SELECT title, url, date from mashable";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <a href=<?php echo $row["url"] ?>><h4><?php echo $row["title"] ?></h4></a><br>
                <?php
            }
        }
    ?>
</body>

</html>