<!-- post-template.php -->
<!-- <?php
// Assuming you pass the postId via GET
$postId = isset($_GET['postId']) ? $_GET['postId'] : 0;

// Fetch the post or render the template based on postId
// For example, you might query the database here based on $postId
?> -->

<!-- <div class="post" id="post-<?php echo $postId; ?>">
    <h2>Post <?php echo $postId; ?></h2>
    <h2>Post Title: <?php echo $posts[$postId]; ?> </h2>
    <p>This is the content of post <?php echo $postId; ?></p>
</div> -->

<?php

    require_once "app/check_session.php";
    $postId = isset($_GET['postId']) ? $_GET['postId'] : 0;

    $templateParams["title"] = "Post detail ${postId}";
    $templateParams["scripts"] = "
        <script src=\"js/post_detail.js\"></script>
        ";
    $templateParams["page"] = "post_detail_page.php";

    require_once "templates/base.php";
