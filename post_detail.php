<?php

    require_once "app/check_session.php";
    $postId = isset($_GET['postId']) ? $_GET['postId'] : 0;

    $templateParams["title"] = "Post detail ${postId}";
    $templateParams["scripts"] = "
        <script src=\"js/post_detail.js\"></script>
        ";
    $templateParams["page"] = "post_detail_page.php";

    require_once "templates/base.php";
