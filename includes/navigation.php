<header class="navigation">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light px-0">
            <a class="navbar-brand order-1 py-0" href="index.php">
                <img loading="prelaod" decoding="async" class="img-fluid" src="images/logo.png" alt="Rental Solutions" width="150px">
            </a>
            <div class="navbar-actions order-3 ml-0 ml-md-4">
                <button aria-label="navbar toggler" class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <form action="index.php" method="POST" class="search order-lg-3 order-md-2 order-3 ml-auto">
                <input id="search-query" name="searchKeyword" type="search" placeholder="Search..." autocomplete="off">
            </form>

            <div class="collapse navbar-collapse text-center order-lg-2 order-4" id="navigation">
                <ul class="navbar-nav mx-auto mt-3 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu"> 
                            <?php showAllCategories() ?>
                        </div>
                    </li>
                    <?php if (!isset($_SESSION["user_id"])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=registration">Registration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=admin">Admin</a>
                        </li>
                    <?php } else {?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=create-post">Create Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=comments">Comments</a>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </nav>
    </div>
</header>