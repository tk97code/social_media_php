var postDetail, postImage, postComments, postCountLike; 
let url = new URL(window.location.href);
let postId = url.searchParams.get("postId");

function getPostDetail(postId) {
    $.post("./post_requests_handler.php", { getPostDetail: true, postId: postId }, function (post) {
        console.log(post);
        postDetail = post;
    }, "json");

    $.post("./post_requests_handler.php", { getPostImages: true, postId: postId }, function (iamge) {
        console.log(iamge);
        postImage = iamge;
    }, "json");

    $.post("./post_requests_handler.php", { getPostComments: true, postId: postId }, function (comments) {
        console.log(comments);
        postComments = comments;
    }, "json");

    $.post("./post_requests_handler.php", { getPostLikesNumber: true, postId: postId }, function (count) {
        console.log(count);
        postCountLike = count;
    }, "json");
}

getPostDetail(postId);
console.log(postDetail + "\n" + postImage + "\n" + postComments + "\n" + postCountLike + "\n")