<main>
  <section class="section">
    <div class="container">
      <div class="row no-gutters-lg">
        <div class="col-12">
          <h2 class="section-title">Latest Posts</h2>
        </div>
        <div class="col-lg-8 mb-5 mb-lg-0">
          <div class="row">
            <?php
            if (isset($_POST["searchKeyword"])) {
              showHomePagePosts($_POST["searchKeyword"], "search");
            } else if (isset($_GET["category"])) {
              showHomePagePosts($_GET["category"], "category");
            } else if (isset($_GET["tag"])) {
              showHomePagePosts($_GET["tag"], "tag");
            } else if (isset($_GET["no"])) {
              showHomePagePosts($_GET["no"], "pageNo");
            } else {
              showHomePagePosts(1, "pageNo");
            }
            ?>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="widget-blocks">
            <div class="row">
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
      <hr>
      <div>
        <nav aria-label="Page navigation example">
          <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <?php 
              global $postCount;
              for ($i = 1; $i <= $postCount; $i++) {
                echo "<li class='page-item'><a class='page-link' href='index.php?page=home&no={$i}'>{$i}</a></li>";
              }
            ?>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </section>
</main>