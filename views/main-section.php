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
        <ul class="pagination" id="paginationPortion">
        </ul>
        <script>
          $(document).ready(function() {
            $.ajax({
              url: 'api/prepare-pagination.php?no=<?php if (isset($_GET["no"])) { echo $_GET["no"]; } else { echo 1; }?>',
              type: 'post',
              data: {width: screen.width, count: <?php global $postCount; echo $postCount;?>},
              success: function(data) {
                $('#paginationPortion').html(data);
              }
            });
          });
        </script>
      </div>
    </div>
  </section>
</main>