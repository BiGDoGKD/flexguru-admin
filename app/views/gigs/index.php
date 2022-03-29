<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gigs | Flexguru Admin</title>
    <?php $pageTitle = "Gigs" ?>
    <?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>
    <main class="outer-container height-screen">
        <?php include APPROOT . '/views/includes/sidebar.php'; ?>
        <div class="admin-container admin-container-sidebar-open height-screen">
            <div class="container-fluid">
                <?php include APPROOT . '/views/includes/nav.php'; ?>
                <div class="gig-table-container">
                    <div class="table-container">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Gig Id
                                </th>
                                <th>
                                    Title
                                </th>
                                <th>
                                    Description
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Subject
                                </th>
                                <th>
                                    Lesson
                                </th>
                                <th>
                                    Actions
                                </th>
                            </thead>
                            <tbody>

                                <?php foreach ($data['gigs'] as $gig) { ?>
                                    <tr>
                                        <td class="font-weight-600">
                                            <?php echo $gig['id'] ?>

                                        </td>
                                        <td class="font-weight-600 td-title">
                                            <?php echo $gig['title'] ?>
                                        </td>
                                        <td class="td-description text-gray">
                                            <?php echo $gig['description'] ?>
                                        </td>
                                        <td class="text-gray">
                                            <?php echo $gig['subject'] ?>
                                        </td>
                                        <td class="text-gray">
                                            <?php echo $gig['lesson'] ?>
                                        </td>
                                        <td class="font-weight-600">
                                            <?php if ($gig['status'] == 'active') { ?>
                                                <span class="status status-active">Active</span>
                                            <?php } elseif ($gig['status'] == 'inactive') { ?>
                                                <span class="status status-inactive">Inactive</span>
                                            <?php } elseif ($gig['status'] == 'pending') { ?>
                                                <span class="status status-pending">Pending</span>
                                            <?php } ?>
                                        </td>

                                        <td>
                                            <?php if ($gig['status'] == 'pending') { ?>
                                                <button class="action action-accept" onclick="modalActivateGig(<?php echo  $gig['id'] ?>)"><i class="fas fa-check"></i></button>
                                                <button class="action action-reject" onclick="modalDeleteGig(<?php echo  $gig['id'] ?>)"><i class="fas fa-times"></i></button>
                                            <?php } ?>

                                        </td>

                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="gig-filter-container">
                        <div class="gig-filter">
                            <h3 class="text-primary">Filters</h3>
                            <div class="gig-filter-item">
                                <h4>Status : </h4>
                                <div class="filter-button-wrapper">
                                    <button onclick="window.location = 'all';" class="filter <?php if ($data['filter'] == 'all') echo 'filter-active';  ?> status status-all">All</button>
                                    <button onclick="window.location = 'active';" class="filter <?php if ($data['filter'] == 'active') echo 'filter-active';  ?>  status status-active"><i class="fad fa-check-circle"></i> Active</button>
                                    <button onclick="window.location = 'inactive';" class="filter <?php if ($data['filter'] == 'inactive') echo 'filter-active';  ?> status status-inactive"><i class="fad fa-times-circle"></i> Inactive</button>
                                    <button onclick="window.location = 'pending';" class="filter <?php if ($data['filter'] == 'pending') echo 'filter-active';  ?> status status-pending"><i class="fas fa-spinner"></i> Pending</button>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="gig-pie-chart">
                            <h3 class="text-primary">Gigs Summery</h3>
                            <div class="gig-pie-chart-container">

                                <canvas id="gig-pie-chart"></canvas>
                            </div>
                        </div> -->

                    </div>

                </div>
            </div>

        </div>
    </main>
    <?php
    include APPROOT . '/views/includes/modals/modal-accept-gig.php';
    ?>
    <?php
    include APPROOT . '/views/includes/modals/modal-decline-gig.php';
    ?>
    <?php include APPROOT . '/views/includes/footer.php'; ?>
</body>

</html>