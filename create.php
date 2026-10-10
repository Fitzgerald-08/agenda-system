<?php

include('db.php');

if (isset($_POST['create'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO tasks_app (title, description) VALUES ('$title', '$description');";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("[!] Query failed...");
    }

    $_SESSION['message'] = "Task saved successfully";
    $_SESSION['message_type'] = "success";

    header('Location: index.php');
}

?>