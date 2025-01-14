<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipho | <?php echo $templateParams["title"]; ?></title>
    <link rel="icon" type="image/x-icon" href="resources/icons/favicon.ico">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Noto Sans'>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <header>
        <h1><a href="./index.php"><img id="lipho-logo" src="resources/icons/foreground.png" alt="Lipho logo" /></a>&nbsp;-&nbsp;<?php echo $templateParams["title"]; ?></h1>
    </header>
    <main>
        <?php
        if (isset($templateParams["page"])) {
            require_once "app/pages/" . $templateParams["page"];
        }
        ?>
    </main>
    <div id="snackbar"></div>
    <footer>
        <div class="navbar">
            <a href="index.php" title="Home Page" <?php if ($templateParams["title"] == "Home") {
                                                        echo "class=\"current-page\"";
                                                    } ?>><span class="fa-regular fa-house"></span></a>
            <a href="search.php" title="Search Page" <?php if ($templateParams["title"] == "Search") {
                                                            echo "class=\"current-page\"";
                                                        } ?>><span class="fa-regular fa-magnifying-glass"></span></a>
            <a href="create_post.php" title="Create Post Page" <?php if ($templateParams["title"] == "Create Post") {
                                                                    echo "class=\"current-page\"";
                                                                } ?>><span class="fa-regular fa-plus"></span></a>
            <a href="notifications.php" title="Notifications Page" <?php if ($templateParams["title"] == "Notifications") {
                                                                        echo "class=\"current-page\"";
                                                                    } ?>>
                <span class="fa-regular fa-bell">
                    <span id="notifications-badge" class="notifications-badge"></span>
                </span>
            </a>
            <a href="profile.php" title="Profile Page" <?php if ($templateParams["title"] == "Profile") {
                                                            echo "class=\"current-page\"";
                                                        } ?>><span class="fa-regular fa-user"></span></a>
        </div>
    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<!-- <script src=""></script> -->
<script src="js/push-notifications.js"></script>
<?php
if (isset($templateParams["scripts"])) {
    echo $templateParams["scripts"];
}
?>
</html>
