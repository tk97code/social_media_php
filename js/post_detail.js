let url = new URL(window.location.href);
let postId = url.searchParams.get("postId");
const postContainer = $(".post-container");
const postImageContainer = $(".post-image-container");

function getPostInfo(postId) {
    $.post("./post_requests_handler.php", { getPostInfo: true, postId: postId }, function (post) {
        console.log(post);
        let postImage = $('#post-image-container' + postId);
        if (postImage !== null) {
            postImage.src = "data:image/jpeg;base64," + image;
          }
    }, "json");
}

function getPostImage(postId) {
    $.post("./post_requests_handler.php", { getPostImages: true, postId: postId }, function (iamge) {
        console.log(iamge);
    }, "json");
}

function getPostComments(postId) {
    $.post("./post_requests_handler.php", { getPostComments: true, postId: postId }, function (comments) {
        console.log(comments);
    }, "json");
}

function getPostLikesNumber() {
    $.post("./post_requests_handler.php", { getPostLikesNumber: true, postId: postId }, function (count) {
        console.log(count);
    }, "json");
}

function showPostDetail(postId) {
    getPostInfo(postId);
    getPostImage(postId);
    getPostComments(postId);
    getPostLikesNumber(postId);
} 

showPostDetail(postId);
