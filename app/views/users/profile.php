<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $user = $data['user']; ?>
    <?php $pageTitle = "User" ?>
    <title>User | Flexguru Admin</title>
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
                <div class="user-container-wrapper">
                    <div class="user-container">
                        <div class="user-avatar">
                            <img src="<?php echo $user['avatar'] ?>" alt="avatar" class="user-avatar-img">
                        </div>
                        <div class="user-main-info">
                            <h1><?php echo $user['name'] ?></h1>
                            <p class="user-info-username text-primary">@<?php echo $user['username'] ?></p>

                        </div>
                    </div>
                    <div class="user-info">
                        <p><span class="">Email : </span><?php echo $user['email'] ?></p>
                        <p><span class="">Tel No : </span><?php echo $user['telephone'] ?></p>
                        <p><span class="">Role : </span><?php if ($user['role'] == 'tu') { ?>
                                <span class="role role-tu"><i class="fas fa-chalkboard-teacher"></i> Tutor</span>
                            <?php } elseif ($user['role'] == 'st') { ?>
                                <span class="role role-st"><i class="far fa-graduation-cap"></i> Student</span>
                            <?php } elseif ($user['role'] == 'af') { ?>
                                <span class="role role-af"><i class="far fa-briefcase"></i> Affiliate marketer</span>
                            <?php } ?>
                        </p>
                        <p><span class="">Subscription : </span>
                            <?php if ($user['subscription'] == 'yes') { ?>
                                <span class="subscription subscription-yes"> Yes</span>
                            <?php } else { ?>
                                <span class="subscription subscription-no"> No</span>
                            <?php } ?>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <?php include APPROOT . '/views/includes/footer.php'; ?>
</body>

</html>