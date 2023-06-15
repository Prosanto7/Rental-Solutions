<main>
    <div class="form styledTable">
        <form autocomplete="off" id="tagForm">
            <h2>Add Tag</h2>
            <input type="text" id="tagName" name="tagName" placeholder="Enter the tag..">
            <input type="submit" value="Submit" id="add">
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
            <tbody id="tagTableBody">
                
            </tbody>
        </table>
        <script>
            $(document).ready(function() {
                populate('api/fetch-tag.php', 'post', '#tagTableBody');
                deleteRow('api/delete-tag.php', 'api/fetch-tag.php', 'post', '#tagTableBody');

                $(document).on("click", "#add", function(e) {
                    e.preventDefault();

                    var tagName = $("#tagName").val();

                    if (tagName == "") {
                        showAlertMessage("Error", "Please enter the tag name...");
                        return;
                    }
                    
                    $.ajax({
                        url: 'api/insert-tag.php',
                        type: 'post',
                        data: {tag_name: tagName},
                        success: function(data) {
                            populate('api/fetch-tag.php', 'post', '#tagTableBody');
                            $("#tagForm").trigger("reset");

                            if (data == 1) {
                                showAlertMessage("Success", "Tag added successfully...");
                            } else {
                                showAlertMessage("Error", "Tag already exists...");
                            }
                        }
                    });
                });
            });
        </script>
    </div>
</main>