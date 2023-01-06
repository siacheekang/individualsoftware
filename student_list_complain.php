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
    <link href="css/sidebar_nvg.css" rel="stylesheet">
    <style>
        .fa-eye:hover {
            color: red;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="border-dark border-bottom py-2">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div>Dashboard</div>
            <div class="d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-bell fa-2x pe-2"></i>
                <div>Username</div>
                <img src="images/no_people_img.png" alt="" class="rounded" width="30px">
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="d-flex py-4">Sent:</div>
        
        <div class="overflow-auto">
            <table class='table table-hover table-responsive table-bordered'>
                <tr>
                    <th>Title</th>
                    <th>Executive</th>
                    <th>Status</th>
                    <th>Last Updated</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>Executive</td>
                    <td>Status</td>
                    <td>Last Updated</td>
                    <td><i class="fa-solid fa-eye fa-2x"></i></td>
                </tr>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>