<main>
    <div class="form styledTable">
        <form autocomplete="off" id="categoryForm">
            <h2>Add Category</h2>
            <input type="text" id="categoryName" name="categoryName" placeholder="Enter the category..">
            <input type="submit" value="Submit" id="add">
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

            </tbody>
        </table>
        <script>
            $(document).ready(function() {
                populate('api/fetch-category.php', 'post', '#categoryTableBody');
                deleteRow('api/delete-category.php', 'api/fetch-category.php', 'post', '#categoryTableBody');

                $(document).on("click", "#add", function(e) {
                    e.preventDefault();

                    var categoryName = $("#categoryName").val();

                    if (categoryName == "") {
                        showAlertMessage("Error", "Please enter the category name...");
                        return;
                    }
                    
                    $.ajax({
                        url: 'api/insert-category.php',
                        type: 'post',
                        data: {category_name: categoryName},
                        success: function(data) {
                            populate('api/fetch-category.php', 'post', '#categoryTableBody');
                            $("#categoryForm").trigger("reset");

                            if (data == 1) {
                                showAlertMessage("Success", "Category added successfully...");
                            } else {
                                showAlertMessage("Error", "Category already exists...");
                            }
                        }
                    });
                });
            });
        </script>
    </div>
</main>