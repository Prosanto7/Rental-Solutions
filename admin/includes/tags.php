<main>
    <div class="form styledTable">
        <form autocomplete="off" action="<?php 
            if (isset($_POST["tagName"]) && isset($_POST["tagName"]) != "") {
                executeQuery("INSERT INTO tags VALUES (null, '" . $_POST["tagName"] . "')");
            }
        ?>" method="POST">
            <h2>Add Tag</h2>
            <input type="text" id="tagName" name="tagName" placeholder="Enter the tag..">
            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="styledTable">
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