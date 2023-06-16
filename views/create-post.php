<main>
    <div class="container">
        <h2 class="text-center mt-5">Create Post</h2>
        <form autocomplete="off" class="form" method="POST" enctype="multipart/form-data" id="postForm">
            <label class="form-label mt-3">Post Title</label>
            <input type="text" class="form-control" placeholder="Enter your post title..." name="post_title" id="postTitle">
            
            <div class="input-group mt-3">
                <label>Post Category</label>
                <select class="form-control" id="postCategories" name='post_category_id'>
                    <!-- Will Be Loaded using JQuery -->
                </select>
            </div>

            <label class="form-label mt-3">Post Image</label>
            <input type="file" class="form-control" name="post_image" id="postImage">
            
            <label class="form-label mt-3">Post Tags</label>
            <input type="text" class="form-control" placeholder="Enter your post tags seperated by comma" name="post_tags" id="postTags">
            
            <label class="form-label mt-3">Post Content</label>
            <textarea class="form-control" placeholder="Enter your post content" name="post_content" id="postContent" cols="30" rows="10"></textarea>
            
            <input class="btn btn-primary mt-3" type="submit" name="create_post" id="create" value="Publish Post">
        </form>

        <div>
            <p id="output"></p>
        </div>

        <script>
            $(document).ready(function() {
                populate('api/fetch-category.php', 'post', '#postCategories');

                $(document).on("click", "#create", function(e) {
                    e.preventDefault();

                    if ($("#postTitle").val() == "") {
                        showAlertMessage("Error", "Please enter the post title...");
                        return;
                    } 

                    if ($("#postTags").val() == "") {
                        showAlertMessage("Error", "Please enter the post tags...");
                        return;
                    } 

                    if ($("#postContent").val() == "") {
                        showAlertMessage("Error", "Please enter the post content...");
                        return;
                    } 

                    var form = new FormData(document.getElementById('postForm'));
                    //append files
                    var file = document.getElementById('postImage').files[0];
                    if (file) {   
                        form.append('postImage', file);
                    }

                    $.ajax({
                        url: 'api/create-post.php',
                        type: 'post',
                        data: form,
                        cache: false,
                        contentType: false, //must, tell jQuery not to process the data
                        processData: false,
                        success: function(data) {
                            if (data == 1) {
                                showAlertMessage("Success", "Post added successfully...");
                            } else {
                                showAlertMessage("Error", "Post could not be added...");
                            }
                        }
                    });
                });
            });
        </script>
    </div>
</main>