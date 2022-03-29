<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions | Flexguru Admin</title>
    <?php $pageTitle = "Classes" ?>
    <?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>
    <main class="outer-container height-screen">
        <?php include APPROOT . '/views/includes/sidebar.php'; ?>
        <div class="admin-container admin-container-sidebar-open height-screen">
            <div class="container-fluid">
                <?php include APPROOT . '/views/includes/nav.php'; ?>
                <div class="class-table-container">
                    <div class="table-container">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    class id
                                </th>
                                <th>
                                    Type
                                </th>
                                <th>
                                    Tutor id
                                </th>
                                <th>
                                    Purchase Date
                                </th>
                                <th>
                                    Deadline
                                </th>
                                <th>
                                    Status
                                </th>

                            </thead>
                            <tbody>
                                <?php foreach ($data['classes'] as $class) { ?>
                                    <tr>
                                        <td class="font-weight-600">
                                            <?php echo $class['id'] ?>
                                        </td>
                                        <td class="font-weight-600">
                                            <?php if ($class['type'] == 'gig') { ?>
                                                <span class="class-type class-type-gig">Gig</span>
                                            <?php } else { ?>
                                                <span class="class-type class-type-ssr">SSR</span>
                                            <?php } ?>

                                        </td>
                                        <td class="font-weight-600">
                                            <?php echo $class['tutid'] ?>
                                        </td>
                                        <td class="font-weight-600">
                                            <?php echo $class['purchasedate'] ?>
                                        </td>
                                        <td class="font-weight-600">
                                            <?php echo $class['deadline'] ?>
                                        </td>
                                        <td class="font-weight-600">
                                            <?php if ($class['status'] == 'completed') { ?>
                                                <span class="status status-active">Completed</span>
                                            <?php } else if ($class['status'] == 'expired') { ?>
                                                <span class="status status-inactive">Expired</span>
                                            <?php } else if ($class['status'] == 'pending') {
                                            ?>
                                                <span class="status status-pending">Pending</span>
                                            <?php } ?>

                                        </td>

                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="class-filter-container">
                        <div class="class-filter">
                            <h3 class="text-primary">Filters</h3>
                            <div class="class-filter-item">
                                <h4>Type : </h4>
                                <div class="filter-button-wrapper">
                                    <button onclick="window.location = 'all';" class="filter <?php if ($data['filter'] == 'all') echo 'filter-active';  ?> class-type class-type-all">All</button>
                                    <button onclick="window.location = 'gig';" class="filter <?php if ($data['filter'] == 'gig') echo 'filter-active';  ?> class-type class-type-gig">Gig</button>
                                    <button onclick="window.location = 'ssr';" class="filter <?php if ($data['filter'] == 'ssr') echo 'filter-active';  ?> class-type class-type-ssr">SSR</button>
                                </div>

                                <h4>Status : </h4>
                                <div class="filter-button-wrapper">
                                    <button onclick="window.location = 'completed';" class="filter <?php if ($data['filter'] == 'completed') echo 'filter-active';  ?> status status-active"><i class="fad fa-check-circle"></i> Completed</button>
                                    <button onclick="window.location = 'expired';" class="filter <?php if ($data['filter'] == 'expired') echo 'filter-active';  ?> status status-inactive"><i class="fad fa-times-circle"></i> Expired</button>
                                    <button onclick="window.location = 'pending';" class="filter <?php if ($data['filter'] == 'pending') echo 'filter-active';  ?> status class-type-ssr"><i class="fad fa-spinner"></i> Pending</button>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

        </div>
    </main>
    <?php include APPROOT . '/views/includes/footer.php'; ?>
</body>

</html>