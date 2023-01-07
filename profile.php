<?php
//include "reusable_components/user_session.php"
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student - Profile</title>
    <!-- Latest compiled and minified Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/f9f6f2f33c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <?php
    // include 'config/database.php';

    // try {
    //     // prepare select query
    //     $query_user = "SELECT * from student WHERE id = :id ";
    //     $stmt_user = $con->prepare($query_user);

    //     $stmt1->bindParam(":id", $_SESSION['user_id']);
    //     // execute our query
    //     $stmt_user->execute();
    //     $row_user = $stmt_user->fetch(PDO::FETCH_ASSOC);

    //     $email_ = $row_user['email'];
    //     $image = $row_user['image'] == NULL ? "images/profile_pic.png" : "images/" . $row_user['image'];
    //     $role = $row_user['role'];
    // }

    // // show error
    // catch (PDOException $exception) {
    //     die('ERROR: ' . $exception->getMessage());
    // }

    ?>
    <?php include "nvgtop.php" ?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Profile</h1>
        </div><!-- End Page Title -->
        <section class="container section">
            <from class="d-flex mt-5" action="<?php //echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
                <div class="col-3 text-center">
                    <img src="<?php //echo $image ?>" width="150px">
                    <input type='file' name='image' class="btn btn-info mt-4 col-10"/>
                    <div class="m-4 text-start">
                        <label for="formGroupExampleInput" class="form-label">Role</label>
                        <input type="text" class="form-control col-10" id="formGroupExampleInput" placeholder="<?php //echo $role ?>" disabled>
                    </div>
                </div>
                <div class="col-9 ms-5">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputUsername" class="form-label">Username</label>
                            <input type="username" class="form-control" id="exampleInputusername" aria-describedby="username" name='username' value="<?php //echo htmlspecialchars(isset($_POST['username']) ? $_POST['username'] : $username_, ENT_QUOTES);  ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Email</label>
                            <input type="Email" class="form-control" id="exampleInputEmail" name='email' value="<?php //echo htmlspecialchars(isset($_POST['email']) ? $_POST['email'] : $email_, ENT_QUOTES);  ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" name='password' id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputcontact" class="form-label">Confirm Password</label>
                            <input type="contact" class="form-control" id="exampleInputcontact">
                        </div>
                        <div class="d-flex mt-5">
                            <button type="submit" class="btn btn-secondary col-4">Update</button>
                            <button type="button" class="btn btn-secondary ms-3 col-4" onclick="window.location.href = 'student_dashboard.php'">Cancel</button>
                        </div>
                    </form>
                </div>
                </div>

        </section>
    </main>

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>