<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>LAMP</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css"/>
    </noscript>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <span class="logo"><img width="64" src="images/logo.svg" alt=""/></span>
        <h1>LAMP</h1>
        <p>LAMP (Linux (Ubuntu), Apache, Mysql & PHP) Stack built with Docker Compose<br/>
            built by <a href="https://github.com/jerfeson">Jerfeson Guerreiro</a></p>
    </header>

    <!-- Nav -->
    <nav id="nav">
        <ul>
            <li><a href="#intro" class="active">Introduction</a></li>
            <li><a target="_blank" href="info.php">PHP INFO</a></li>
            <li><a target="_blank" href="localhost:8080">phpMyAdmin</a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">

        <!-- Introduction -->
        <section id="intro" class="main">
            <div class="spotlight">
                <div class="content">
                    <header class="major">
                        <h2>Your local development environment</h2>
                    </header>
                    <ul>
                        <li><?=apache_get_version() ?></li>
                        <li>PHP <?= phpversion(); ?></li>
                        <li>
                            <?php
                            $link = mysqli_connect("mysql", "root", "root", null);

                            /* check connection */
                            if (mysqli_connect_errno()) {
                                printf("MySQL connecttion failed: %s", mysqli_connect_error());
                            } else {
                                /* print server version */
                                printf("MySQL Server %s", mysqli_get_server_info($link));
                            }
                            /* close connection */
                            mysqli_close($link);
                            ?>
                        </li>
                    </ul>
                </div>
                <span class="image"><img src="images/lamp.jpg" alt=""/></span>
            </div>
        </section>
    </div>
    <!-- Footer -->
    <footer id="footer">
        <p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
    </footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>