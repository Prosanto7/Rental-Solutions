<?php $row = executeQuery("SELECT * FROM posts where post_id = " . $_GET["id"])->fetch_assoc(); ?>

<main>
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<article>
						<img loading="lazy" decoding="async" src="images/post/<?php echo $row["post_image"] ?>" alt="Post Thumbnail" class="w-100">
						<ul class="post-meta mb-2 mt-4">
							<li class="mr-3">
								<img src="images/date.png" alt="Date" width="20px"> <span><?php echo getFormattedDate($row["post_date"]) ?></span>
							</li>
							<li class="mr-3">
								<img src="images/time.png" alt="Date" width="20px"> <span><?php echo showTimeDifference($row["post_date"]) ?> ago</span>
							</li>
							<li>
								<img src="images/category.png" alt="Category" width="20px"> <span><?php echo getCategoryByID($row["post_category_id"]) ?></span>
							</li>
						</ul>
						<h1 class="my-3"><?php echo $row["post_title"] ?></h1>

						<ul class="post-meta mb-4">
							<?php showTags($row["post_tags"]) ?>
						</ul>

						<div class="content text-left">
							<p><?php echo $row["post_content"] ?></p>
						</div>
					</article>

					<section class="mt-5">
						<h2>Comments</h2>
						<div class="card">
							<?php if(isset($_SESSION["user_id"])) { ?>
							<div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
								<div class="d-flex flex-start w-100">
									<div class="form-outline w-100">
										<textarea class="form-control" id="textArea" rows="4" style="background: #fff;"></textarea>
									</div>
								</div>
								<div class="float-end mt-2 pt-1">
									<button type="button" id="postCommentButton" class="btn btn-primary btn-sm">Post comment</button>
									<button type="button" id="cancelButton" class="btn btn-outline-primary btn-sm">Cancel</button>
								</div>
							</div>
							<?php } ?>

							<div class="card-body" id="commentSection">
								<!-- Will be loaded using JQuery -->
							</div>
						</div>
					</section>
					
					<script>
						$(document).ready(function() {
							populate('api/fetch-comment-for-a-post.php?id=<?php echo $_GET["id"] ?>', 'post', '#commentSection');
							deleteRow('api/delete-comment.php', 'api/fetch-comment-for-a-post.php?id=<?php echo $_GET["id"] ?>', 'post', '#commentSection');

							$(document).on("click", "#cancelButton", function(e) {
								$('textarea').val('');
							});

							$(document).on("click", "#postCommentButton", function(e) {
								var comment = $("textArea").val();

								if (comment == "") {
									showAlertMessage("Error", "Please enter some comments...");
									return;
								}

								$.ajax({
									url: 'api/insert-comment.php?id=<?php echo $_GET["id"] ?>',
									type: 'post',
									data: {
										comment: comment
									},
									success: function(data) {
										populate('api/fetch-comment-for-a-post.php?id=<?php echo $_GET["id"] ?>', 'post', '#commentSection');
										$('textarea').val('');
									}
								});
							});
						});
					</script>
				</div>

				<div class="col-lg-4">
					<div class="widget-blocks">
						<div class="row">
							<div class="col-lg-12 col-md-6">
								<div class="widget">
									<h2 class="section-title mb-3">Similar Posts</h2>
									<div class="widget-body">
										<div class="widget-list">
											<?php showSimilarPosts(); ?>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-6">
								<div class="widget">
									<h2 class="section-title mb-3">Tags</h2>
									<div class="widget-body">
										<ul class="widget-list">
											<?php showAllTags(); ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>