<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php $pageTitle = "Login" ?>
    <?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body class="light-theme" id="body">
    <!-- <header>
        <nav>
            <div class="dark-toggle" id="drkmodebtn">
                <span slot="dark" class="lightDarkToggle lightsvg">
                    <svg id="lightsvg" class="drklightsvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <g>
                            <path fill="currentColor" d="M502.42 240.5l-94.7-47.3 33.5-100.4c4.5-13.6-8.4-26.5-21.9-21.9l-100.4 33.5-47.41-94.8a17.31 17.31 0 0 0-31 0l-47.3 94.7L92.7 70.8c-13.6-4.5-26.5 8.4-21.9 21.9l33.5 100.4-94.7 47.4a17.31 17.31 0 0 0 0 31l94.7 47.3-33.5 100.5c-4.5 13.6 8.4 26.5 21.9 21.9l100.41-33.5 47.3 94.7a17.31 17.31 0 0 0 31 0l47.31-94.7 100.4 33.5c13.6 4.5 26.5-8.4 21.9-21.9l-33.5-100.4 94.7-47.3a17.33 17.33 0 0 0 .2-31.1zm-155.9 106c-49.91 49.9-131.11 49.9-181 0a128.13 128.13 0 0 1 0-181c49.9-49.9 131.1-49.9 181 0a128.13 128.13 0 0 1 0 181z" class="fk-secondary"></path>
                            <path fill="currentColor" d="M352 256a96 96 0 1 1-96-96 96.15 96.15 0 0 1 96 96z" class="fk-primary"></path>
                        </g>
                    </svg>
                    <svg id="darksvg" class="drklightsvg darksvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="display: none;">
                        <g>
                            <path fill="currentColor" d="M320 32L304 0l-16 32-32 16 32 16 16 32 16-32 32-16zm138.7 149.3L432 128l-26.7 53.3L352 208l53.3 26.7L432 288l26.7-53.3L512 208z" class="fk-secondary"></path>
                            <path fill="currentColor" d="M332.2 426.4c8.1-1.6 13.9 8 8.6 14.5a191.18 191.18 0 0 1-149 71.1C85.8 512 0 426 0 320c0-120 108.7-210.6 227-188.8 8.2 1.6 10.1 12.6 2.8 16.7a150.3 150.3 0 0 0-76.1 130.8c0 94 85.4 165.4 178.5 147.7z" class="fk-primary">

                            </path>
                        </g>
                    </svg>
                </span>
            </div>
        </nav>
    </header> -->
    <section>
        <!-- <div class="leftPanel">
            <h1 class="welcomeTxt">Flexguru Admin</h1>

            <div class="custom-shape-divider-bottom-1629894577">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M741,116.23C291,117.43,0,27.57,0,6V120H1200V6C1200,27.93,1186.4,119.83,741,116.23Z" class="shape-fill"></path>
                </svg>

            </div>
        </div> -->
        <div class="rightPanel">

            <form class="loginForm" action="" method="post" autocomplete="off">
                <h1 class="text-primary welcomeTxt">Felxguru Admin</h1>
                <h2 class="loginFormH2">Log In</h2>
                <!-- <p class="">Flexguru Admin</p> -->
                <!-- <div class="inputInDiv"> -->
                <input class="txtInput" type="text" name="username" id="username" placeholder="Username">
                <!-- </div> -->
                <!-- <div class="inputInDiv"> -->
                <input class="txtInput" type="password" name="username" id="password" placeholder="Password">
                <!-- <a href="#" class="forgotlink">Forgot Password?</a> -->
                <!-- </div> -->
                <input class="btnLogin" type="submit" value="Login">
            </form>
        </div>
    </section>

    <script>
        var val = 0;

        document.getElementById('drkmodebtn').addEventListener('click', function() {
            if (val == 0) {
                val = 1;
                document.getElementById('body').classList.add('dark-theme');
                document.getElementById('body').classList.remove('light-theme');
                document.getElementById('darksvg').style.display = '';
                document.getElementById('lightsvg').style.display = 'none';
            } else {
                val = 0;
                document.getElementById('body').classList.add('light-theme');
                document.getElementById('body').classList.remove('dark-theme');
                document.getElementById('lightsvg').style.display = '';
                document.getElementById('darksvg').style.display = 'none';
            }
        });
    </script>

    <?php include APPROOT . '/views/includes/footer.php'; ?>
</body>

</html>