<?php require_once './api/api_nsk.php';?>
<?php require_once './api/api_msk.php';?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

        <title>Weather : <?php echo $dt_nsk .'/'. $dt_msk?></title>
    </head>

    <body>
        <?php require_once './view/header.php';?>
        <div class="container  p-4 w-50 border rounded-bottom p-2  ">

            <?php require_once './view/view_nsk.php';?>
            <?php require_once './view/view_msk.php';?>
            <?php require_once './view/view_omsk.php';?>

        </div>
        <?php require_once './view/footer.php';?>

    </body>

</html>