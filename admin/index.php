<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" type="text/css" href="../css/admin_main.css">
</head>
<body>
    <div class="wrapper">
        <p class="admin-title">Welcome to admin page</p>
       <?php
       include("./config/config.php");
        include("module/header.php");
        include("module/menu.php");
        include("module/main.php");
        include("module/footer.php");
       ?>
    </div>
</body>
</html>