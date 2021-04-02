<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Validation</title>
</head>

<body>
    <h2>Form Validation Example</h2>
    <p>* Reqired filds</p>


    <?php

$msg = '';
if (isset($_GET['error'])) {
    $msg = 'Please fill in the blanks';
    echo '<div>' . $msg . '</div>';
}

if (isset($_GET['success'])) {
    $msg = 'Form is valid';
    echo '<div >' . $msg . '</div>';
}

?>


    <form action="process.php" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="fullname" /> * <br />
        <br />
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="email address" />* <br />
        <br />
        <label for="website">Website</label>
        <input type="text" name="website" placeholder="website" /> <br />
        <br />
        <label for="comment">Comment</label>
        <textarea name="comment" cols="30" rows="10"></textarea> <br />
        <br />
        <label for="gender">Gender</label>
        <input type="radio" name="gender" />Male
        <input type="radio" name="gender" />Female
        <input type="radio" name="gender" />Other * <br />
        <br />
        <button name="send">Submit</button>
    </form>
</body>

</html>