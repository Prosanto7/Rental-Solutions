	<?php $row = executeQuery("SELECT * FROM posts where post_id = " . $_GET["id"])->fetch_assoc(); ?>
	<main>
		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mb-5 mb-lg-0">
						<article>
							<img loading="lazy" decoding="async" src="images/post/<?php echo $row["post_image"]?>" alt="Post Thumbnail"
								class="w-100">
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