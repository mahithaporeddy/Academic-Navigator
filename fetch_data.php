<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $col1_value = $_POST['col1_value'];

    $sql = "SELECT col2 FROM practice WHERE col1 = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $col1_value);
    $stmt->execute();
    $result = $stmt->get_result();

    $col2Data = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $col2Data[] = $row["col2"];
        }
    } else {
        $col2Data[] = "No related data found";
    }
    $stmt->close();
    $con->close();

    foreach ($col2Data as $data) {
        echo "<p>$data</p>";
    }
}
?>
