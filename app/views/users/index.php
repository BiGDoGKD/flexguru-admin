<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users | Flexguru Admin</title>
    <?php $pageTitle = "Users" ?>
    <?php include APPROOT . '/views/includes/header.php'; ?>
    <style>

    </style>
</head>

<body>
    <main class="outer-container height-screen">
        <?php include APPROOT . '/views/includes/sidebar.php'; ?>
        <div class="admin-container admin-container-sidebar-open height-screen">
            <div class="container-fluid">
                <?php include APPROOT . '/views/includes/nav.php'; ?>
                <div class="user-table-container">
                    <div class="table-container">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Telephone
                                </th>
                                <th>
                                    Role
                                </th>
                                <th>
                                    Subscription
                                </th>

                            </thead>
                            <tbody>
                                <?php foreach ($data['users'] as $user) { ?>
                                    <tr>
                                        <td class="table-data-user">
                                            <img src="<?php echo $user['avatar'] ?>" alt="avatar" class="avatar-img">
                                            <div class="table-data-user-text">

                                                <a href="<?php echo URLROOT . "/user/" . $user['id'] ?>">
                                                    <p class="text-primary "><?php echo $user['name'] ?></p>
                                                </a>
                                                <span><?php echo '@' . $user['username'] ?></span>
                                            </div>

                                        </td>
                                        <td class="font-weight-600">
                                            <?php echo $user['email'] ?>
                                        </td>
                                        <td class="font-weight-600">
                                            <?php echo $user['telephone'] ?>
                                        </td>
                                        <td class="font-weight-600">
                                            <?php if ($user['role'] == 'tu') { ?>
                                                <span class="role role-tu"><i class="fas fa-chalkboard-teacher"></i> Tutor</span>
                                            <?php } elseif ($user['role'] == 'st') { ?>
                                                <span class="role role-st"><i class="far fa-graduation-cap"></i> Student</span>
                                            <?php } elseif ($user['role'] == 'af') { ?>
                                                <span class="role role-af"><i class="far fa-briefcase"></i> Affiliate marketer</span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php if ($user['subscription'] == 'yes') { ?>
                                                <span class="subscription subscription-yes"> Yes</span>
                                            <?php } else { ?>
                                                <span class="subscription subscription-no"> No</span>
                                            <?php } ?>
                                        </td>

                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="user-filter-container">
                        <div class="user-filter">
                            <h3 class="text-primary">Filters</h3>
                            <div class="user-filter-item">
                                <h4>Role : </h4>
                                <div class="filter-button-wrapper">
                                    <button onclick="window.location = 'all';" class="filter <?php if ($data['filter'] == 'all') echo 'filter-active';  ?> role role-all">All</button>
                                    <button onclick="window.location = 'tutor';" class="filter <?php if ($data['filter'] == 'tu') echo 'filter-active';  ?> role role-tu"><i class="fas fa-chalkboard-teacher"></i> Tutor</button>
                                    <button onclick="window.location = 'student';" class="filter <?php if ($data['filter'] == 'st') echo 'filter-active';  ?> role role-st"><i class="far fa-graduation-cap"></i> Student</button>
                                    <button onclick="window.location = 'affiliate';" class="filter <?php if ($data['filter'] == 'af') echo 'filter-active';  ?> role role-af"><i class="far fa-briefcase"></i> Affiliate marketer</button>
                                </div>

                                <h4>Subscription : </h4>
                                <div class="filter-button-wrapper">
                                    <button onclick="window.location = 'sub-yes';" class="filter <?php if ($data['filter'] == 'sub-yes') echo 'filter-active';  ?> subscription subscription-yes"> Yes</button>
                                    <button onclick="window.location = 'sub-no';" class="filter <?php if ($data['filter'] == 'sub-no') echo 'filter-active';  ?> subscription subscription-no"> No</button>
                                </div>
                            </div>
                        </div>
                        <div class="user-pie-chart">
                            <h3 class="text-primary">User Summery</h3>
                            <div class="user-pie-chart-container">

                                <canvas id="user-pie-chart"></canvas>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </main>
    <script>
        var usersFromBackend = <?php echo json_encode($data['users']); ?>;
        console.log(usersFromBackend);
        const getUserCount = (type) => {
            let count = 0;
            usersFromBackend.forEach(user => {
                if (user.role == type) {
                    count++;
                }
            });
            return count;
        }
        var userPieChart = document.getElementById('user-pie-chart').getContext('2d');
        var userPieChartData = {
            labels: ['Tutor', 'Student', 'Affiliate marketer'],
            datasets: [{
                data: [getUserCount('tu'), getUserCount('st'), getUserCount('af')],
                backgroundColor: ['#6200ff7b', '#ff7b0087', '#00f7ff7b'],
                hoverBackgroundColor: ['#6200ff', '#ff7b00', '#00f7ff'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        };
        var userPieChartOptions = {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        };
        var userPieChartChart = new Chart(userPieChart, {
            type: 'doughnut',
            data: userPieChartData,
            options: userPieChartOptions
        });
    </script>
    <?php include APPROOT . '/views/includes/footer.php'; ?>
</body>

</html>