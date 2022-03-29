<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles | Flexguru Admin</title>
    <?php $pageTitle = "Search" ?>
    <?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>
    <main class="outer-container height-screen">
        <?php include APPROOT . '/views/includes/sidebar.php'; ?>
        <div class="admin-container admin-container-sidebar-open height-screen">
            <div class="container-fluid">
                <?php include APPROOT . '/views/includes/nav.php'; ?>
                <div class="search-container">
                    <!-- search form with options -->
                    <form action="<?php echo URLROOT; ?>/search/index" method="post">
                        <div class="form-group">
                            <input type="text" name="search-term" id="search-term" class="form-control">

                            <input type="submit" value="Search" class="button btn btn-primary">
                        </div>
                        <div class="search-options">
                            <div class="search-option">
                                <label class="search-option-label search-option-label-users search-option-label-active" for="search-option-users"><i class="fas fa-users"></i> Users</label>
                                <input type="radio" hidden name="search-option" id="search-option-users" value="users">
                            </div>
                            <div class="search-option">
                                <label class="search-option-label search-option-label-gigs" for="search-option-gigs"><i class="fas fa-briefcase"></i> Gigs</label>
                                <input type="radio" hidden name="search-option" id="search-option-gigs" value="gigs">
                            </div>
                            <div class="search-option">
                                <label class="search-option-label search-option-label-classes" for="search-option-classes"><i class="fas fa-users-class"></i> Classes</label>
                                <input type="radio" hidden name="search-option" id="search-option-classes" value="classes">
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </main>
    <script>
        var searchOptionLabel = document.querySelectorAll('.search-option-label');
        // add event listener to each label using foreach loop
        searchOptionLabel.forEach(function(label) {
            label.addEventListener('click', function() {
                // remove class active from all labels
                searchOptionLabel.forEach(function(label) {
                    label.classList.remove('search-option-label-active');
                });
                // add class active to the clicked label
                this.classList.add('search-option-label-active');
            });
        });
    </script>
    <?php include APPROOT . '/views/includes/footer.php'; ?>
</body>

</html>