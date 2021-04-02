<?php

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $comment = $_POST['comment'];
    $gender = $_POST['gender'];

    if (empty($name) || empty($email) || empty($gender)) {
        header('location:index.php?error');
    } else {
        header("location:index.php?success");
    }

}
