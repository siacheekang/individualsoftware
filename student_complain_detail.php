<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student - Dahboard</title>
    <!-- Latest compiled and minified Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/f9f6f2f33c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/student.css" rel="stylesheet">
</head>

<body>
    <?php include "student_nvgtop.php" ?>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Complaint Form</h1>
        </div><!-- End Page Title -->
        <section class="container section">
            <div class="overflow-auto ">
                <div class="d-flex align-items-center justify-content-center border-bottom border-2 pb-2">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center p-2">
                        <div class="border border-3 border-dark rounded-circle fs-3 d-flex align-items-center justify-content-center circle">1</div>
                        <div class="pt-1">Pending</div>
                    </div>
                    <!-- https://freebiesupply.com/blog/css-arrows/ -->
                    <i class="fa-solid fa-arrow-right-long fa-3x pb-3 px-2"></i>
                    <div class="d-flex flex-column align-items-center justify-content-center text-center p-2">
                        <div class="border border-3 border-dark rounded-circle fs-3 d-flex align-items-center justify-content-center circle"><i class="fa-solid fa-check "></i></div>
                        <div class="pt-1">Keep in View</div>
                    </div>
                    <i class="fa-solid fa-arrow-right-long fa-3x pb-3 px-2"></i>
                    <div class="d-flex flex-column align-items-center justify-content-center text-center p-2">
                        <div class="border border-3 border-dark rounded-circle fs-3 d-flex align-items-center justify-content-center circle"></i>3</div>
                        <div class="pt-1">Active</div>
                    </div>
                    <i class="fa-solid fa-arrow-right-long fa-3x pb-3 px-2"></i>
                    <div class="d-flex flex-column align-items-center justify-content-center text-center p-2">
                        <div class="border border-3 border-dark rounded-circle fs-3 d-flex align-items-center justify-content-center circle"></i>4</div>
                        <div class="pt-1">Closed</div>
                    </div>
                </div>
            </div>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
                <div class="row d-flex align-items-center my-3">
                    <div class="col-4 py-2">Detail</div>
                    <div class="col-8 py-2 border border-3 rounded">Detail word</div>
                </div>
                <div class="row my-3">
                    <div class="col-4 py-2">Photo/Video:</div>
                    <div class="col-8 py-2 border border-3 rounded"><img src="images/no_people_img.png" alt="" width="100px"></div>
                </div>
                <div class="row d-flex align-items-center my-3">
                    <div class="col-4 py-2">Executive</div>
                    <div class="col-8 py-2 border border-3 rounded">Ali</div>
                </div>
                <div class="row d-flex align-items-center my-3">
                    <div class="col-4 py-2">Current Status:</div>
                    <div class="col-8 py-2 px-0">
                        <div class="btn <?php if ($status == "pending" || $status == "keep_in_view") {
                                            echo "btn-waring";
                                        } else if ($status == "active") {
                                            echo "btn-success";
                                        } else {
                                            echo "btn-secondary";
                                        } ?>"><?php switch ($status) {
                        case "pending":
                            echo "Pending";
                            break;
                        case "keep_in_view":
                            echo "Keep in View";
                            break;
                        case "active":
                            echo "Active";
                            break;
                        default:
                            echo "Closed";
                    } ?></div>
                    </div>
                </div>
                <div class="row d-flex align-items-center my-3 border-bottom border-2 pb-3">
                    <div class="col-4 py-2">Date</div>
                    <div class="col-8 py-2 border border-3 rounded">2020</div>
                </div>
                <div class="row d-flex align-items-center my-3">
                    <div class="col-4 py-2">Notes</div>
                    <div class="col-8 py-2 border border-3 rounded">Ali</div>
                </div>
            </form>
        </section>
    </main>

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>