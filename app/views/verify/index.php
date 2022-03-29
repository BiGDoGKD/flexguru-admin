<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify | Flexguru Admin</title>
    <?php $pageTitle = "Verify" ?>
    <?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>
    <main class="outer-container height-screen">
        <?php include APPROOT . '/views/includes/sidebar.php'; ?>
        <div class="admin-container admin-container-sidebar-open height-screen">
            <div class="container-fluid">
                <?php include APPROOT . '/views/includes/nav.php'; ?>
                <div class="verify-table-container">
                    <div class="table-container">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Tutor Id
                                </th>
                                <th>
                                    Subjects
                                </th>
                                <th>
                                    Workplace
                                </th>
                                <th>
                                    occupation
                                </th>
                                <th>
                                    Qualification
                                </th>
                                <th>
                                    files
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Verified
                                </th>
                            </thead>
                            <tbody>

                                <?php foreach ($data['verify'] as $verifyItem) { ?>
                                    <tr>
                                        <td class="font-weight-600 td-tutid text-primary">
                                            <a href="<?php echo URLROOT . "/user/" . $verifyItem['userid'] ?>"><?php echo $verifyItem['tutid'] ?></a>
                                        </td>
                                        <td class="font-weight-600 td-subject">
                                            <div class="verify-subjects">
                                                <!-- split subjects from , -->
                                                <?php $subjects = explode(',', $verifyItem['subjects']); ?>
                                                <?php foreach ($subjects as $subject) { ?>
                                                    <span class="badge "><?php echo $subject ?></span>
                                                <?php } ?>
                                            </div>
                                        </td>
                                        <td class="font-weight-600 td-workplace ">
                                            <?php echo $verifyItem['workplace'] ?>
                                        </td>
                                        <td class="font-weight-600 ">
                                            <?php echo $verifyItem['occupation'] ?>
                                        </td>
                                        <td class="font-weight-600 ">
                                            <?php echo $verifyItem['qualification'] ?>
                                        </td>
                                        <td class="font-weight-600 td-download text-primary">
                                            <a href="<?php echo $verifyItem['file'] ?>" download><i class="fal fa-file-download"></i> Download</a>
                                        </td>

                                        <td class="">
                                            <span class="status status-pending mr-2">Pending</span>
                                            <?php if ($verifyItem['status'] == 'pending') { ?>
                                                <button class="action action-accept" onclick="modalAcceptTutor(<?php echo  $verifyItem['tutid'] ?>)"><i class="fas fa-check"></i></button>
                                                <button class="action action-reject" onclick="modalDeclineTutor(<?php echo  $verifyItem['tutid'] ?>)"><i class="fas fa-times"></i></button>
                                            <?php } ?>

                                        </td>
                                        <td>
                                            <input class="input-check" type="checkbox" name="verified" false style="pointer-events: none;" <?php echo ($verifyItem['verified']) ? 'checked' : ''; ?> />
                                        </td>

                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>

        </div>
    </main>
    <?php
    include APPROOT . '/views/includes/modals/modal-accept-tutor.php';
    ?>
    <?php
    include APPROOT . '/views/includes/modals/modal-decline-tutor.php';
    ?>
    <?php include APPROOT . '/views/includes/footer.php'; ?>
</body>

</html>