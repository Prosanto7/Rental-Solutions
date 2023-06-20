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
							<div class="card-body" id="commentSection">
								<div>
									<h3 class="text-primary mb-1">Lily Coleman</h3>
									<p class="text-muted small mb-0">
										Shared publicly - Jan 2020
									</p>
								</div>

								<p class="mt-3 mb-4 pb-2">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
								</p>

								

								<div>
									<h3 class="text-primary mb-1">Lily Coleman</h3>
									<p class="text-muted small mb-0">
										Shared publicly - Jan 2020
									</p>
								</div>

								<p class="mt-3 mb-4 pb-2">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
								</p>

								<div class="ml-5">
									<p> <b class="text-primary">Author:</b> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem expedita culpa similique quos at ipsum voluptatum molestias cupiditate recusandae explicabo, assumenda aliquam eveniet doloribus dolores deleniti tenetur, quidem corporis eius?</p>
								</div>
							</div>

							<div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
								<div class="d-flex flex-start w-100">
									<div class="form-outline w-100">
										<textarea class="form-control" id="textAreaExample" rows="4" style="background: #fff;"></textarea>
									</div>
								</div>
								<div class="float-end mt-2 pt-1">
									<button type="button" class="btn btn-primary btn-sm">Post comment</button>
									<button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
								</div>
							</div>
						</div>
					</section>
					<script>
						$(document).ready(function() {
                            populate('api/fetch-comment-for-a-post.php?id=<?php echo $_GET["id"] ?>', 'post', '#commentSection');
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