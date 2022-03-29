<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Flexguru Admin</title>
    <?php $pageTitle = "Dashboard" ?>
    <?php include APPROOT . '/views/includes/header.php'; ?>

</head>

<body>
    <main class="outer-container height-screen">
        <?php include APPROOT . '/views/includes/sidebar.php'; ?>
        <div class="admin-container admin-container-sidebar-open height-screen">
            <div class="container-fluid">
                <?php include APPROOT . '/views/includes/nav.php'; ?>
            </div>

            <div class="cards-container">
                <?php
                include APPROOT . '/views/includes/card.php';
                ?>

            </div>
            <div class="chart-container">
                <?php
                // include APPROOT . '/views/includes/chart.php';
                ?>
            </div>
        </div>
    </main>
    <?php include APPROOT . '/views/includes/footer.php'; ?>
</body>

</html>