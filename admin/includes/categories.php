<main>
    <div class="posts">
        <h2>All Categories</h2>
        <table id="categoryTable">
            <thead>
                <tr>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php showCategoryTable(); ?>
            </tbody>
        </table>
    </div>

    <div class="posts">
        <h2>All Tags</h2>
        <table id="tagTable">
            <thead>
                <tr>
                    <th>Tag ID</th>
                    <th>Tag Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php showTagTable(); ?>
            </tbody>
        </table>
    </div>
</main>