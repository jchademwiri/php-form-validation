<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Form Validation</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-tittle">

                        <h2 class="text-center py-2">Form Validation Example</h2>
                        <hr>
                    </div>

                    <p class="pl-2"> * Reqired filds</p>


                    <?php

$msg = '';
if (isset($_GET['error'])) {
    $msg = 'Please fill in the blanks.';
    echo '<div class="alert alert-danger">' . $msg . '</div>';
}

if (isset($_GET['success'])) {
    $msg = 'Form is valid.';
    echo '<div class="alert alert-success" >' . $msg . '</div>';
}

?>
                    <div class="card-body">

                        <form action="process.php" method="POST">
                            <label for="name">*Name</label>
                            <input class="form-control mb-2" type="text" name="name" placeholder="fullname" /> *

                            <label for="email">Email</label>
                            <input class="form-control mb-2" type="email" name="email" placeholder="email address" />

                            <label for="website">Website</label>
                            <input class="form-control mb-2" type="text" name="website" placeholder="website" />
                            <label for="comment">Comment</label>
                            <textarea class="form-control mb-2" name="comment"></textarea>
                            <div class="form-check">

                                <label for="gender">Gender</label>
                                <input class="" type="radio" name="gender" /> Male
                                <input class="" type="radio" name="gender" /> Female
                                <input class="" type="radio" name="gender" /> Other *
                            </div>
                            <button class="btn btn-success" name="send">Submit</button>
                        </form>
                    </div>
                </div>
</body>

</html>