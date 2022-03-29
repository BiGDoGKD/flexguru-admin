<div id="sidebar-wrapper" class="sidebar-wrapper animation-all absolute left-0 top-0 height-screen">
    <div class="sidebar">
        <button class="sidebar-close-button "><svg class="sidebar-close-button-svg rotate-180" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none">
                <path fill="white" d="M15.2 10.492l-1.97-1.97-3.21-3.21c-.68-.67-1.84-.19-1.84.77v11.84c0 .96 1.16 1.44 1.84.76l5.18-5.18c.83-.82.83-2.18 0-3.01z"></path>
            </svg></button>
        <h2 class="sidebar-brand">
            Administration
        </h2>
        <div class="sidebar-links">
            <a href="<?php echo URLROOT . '/' ?>" class="<?php if ($pageTitle === "Dashboard") { ?> sidebar-link-active <?php } ?> sidebar-link">

                <i class="fas fa-home"></i>
                <span class="sidebar-link-title">Dashboard</span>
                <!-- <span class="sidebar-link-attension"></span> -->
            </a>

            <a href="<?php echo URLROOT . '/users/' ?>" class="<?php if ($pageTitle === "Users" || $pageTitle === "User") { ?> sidebar-link-active <?php } ?> sidebar-link">
                <i class="fas fa-users"></i>
                <span class="sidebar-link-title">Users</span>
                <!-- <span class="sidebar-link-attension"></span> -->
            </a>

            <a href="<?php echo URLROOT . '/gigs/' ?>" class="<?php if ($pageTitle === "Gigs") { ?> sidebar-link-active <?php } ?> sidebar-link">
                <i class="fas fa-briefcase"></i>
                <span class="sidebar-link-title">Gigs</span>
                <!-- <span class="sidebar-link-attension"></span> -->
            </a>

            <a href="<?php echo URLROOT . '/classes/' ?>" class="<?php if ($pageTitle === "Classes") { ?> sidebar-link-active <?php } ?> sidebar-link">
                <i class="fas fa-users-class"></i>
                <span class="sidebar-link-title">Classes</span>
                <span class="sidebar-link-attension"></span>
            </a>

            <a href="<?php echo URLROOT . '/verify/' ?>" class="<?php if ($pageTitle === "Verify") { ?> sidebar-link-active <?php } ?> sidebar-link">
                <i class="fas fa-badge-check"></i>
                <span class="sidebar-link-title">Verify</span>
                <!-- <span class="sidebar-link-attension"></span> -->
            </a>
        </div>

    </div>
</div>