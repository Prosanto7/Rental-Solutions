<?php
    require_once('includes/header.php');
    require_once('includes/functions.php');
    require_once('includes/navigation.php');
?>

<main>
    <section class="section">
      <div class="container">
        <div class="row no-gutters-lg">
          <div class="col-12">
            <h2 class="section-title">Latest Posts</h2>
          </div>
          <div class="col-lg-8 mb-5 mb-lg-0">
            <div class="row">
              <?php showHomePagePosts(); ?>
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
      </div>
    </section>
  </main>

<?php    
    require_once('includes/footer.php');
?>