<?php
    $conn = mysqli_connect('localhost', 'root', '', 'invo');
    if (connect_error()) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    $query = "DELETE FROM stock WHERE id = '$_POST['id']'";
    $res = mysqli_query($conn, $query);
    if($res === false) {
        die(mysqli_error($conn));
    }
    while($row = mysqli_fetch_assoc($res)) {
        echo $row['qty'];
    }
    ?>