<main>
    <div class="form styledTable">
        <form autocomplete="off" action="<?php 
            if (isset($_POST["categoryName"]) && isset($_POST["categoryName"]) != "") {
                executeQuery("INSERT INTO categories VALUES (null, '" . $_POST["categoryName"] . "')");
            }
        ?>" method="POST">
            <h2>Add Category</h2>
            <input type="text" id="categoryName" name="categoryName" placeholder="Enter the category..">
            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="styledTable">
        <h2>All Categories</h2>
        <table id="categoryTable">
            <thead>
                <tr>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="categoryTableBody">
                <?php //showCategoryTable(); ?>

            </tbody>
        </table>
        <script>
            $(document).ready(function() {
                populate();
                function populate() {
                    $.ajax({
                        url:'includes/fetch-category.php',
                        type:'post',
                        success:function(data) {
                            $("#categoryTableBody").html(data);
                        }
                    });
                }
                
                $(document).on("click", "#delete", function() {
                    var id = $(this).data("id");
                    console.log(id);
                })

            })
        </script>
    </div>
</main>