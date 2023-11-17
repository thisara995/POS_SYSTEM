
<?php include 'includes/header.php' ;?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['category']) && !empty($_POST['category'])) {
        
        $category = $_POST['category'];
        $stmt = $conn->prepare("INSERT INTO categories (category_name) VALUES (?)");
        if ($stmt) {
            $stmt->bind_param("s", $category);
            if ($stmt->execute()) {
                $success_message = "Category added successfully!";
            } else {
                $error_message = "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            $error_message = "Error in preparing the statement.";
        }
    } else {
        $error_message = "Please fill in the 'category' field ";
    }
}

// Fetching categories from the database
$sql = "SELECT CategoryID, category_name FROM categories"; 
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Category Management</title>
    <!-- Include necessary CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body style="background-color: #d1cdcd;">

<div class="container mt-3">
    <div class="row">
        <div class="col-supplier" style="margin-bottom: 20px;">
            <h1><i class="fas fa-list-alt icon"></i> Categories</h1>
        </div>
       
        <?php
    if (isset($success_message)) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="max-width: 400px; position: fixed; top:65px; right: 10px;">
                '.$success_message.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>';
    }
    else 
    if (isset($error_message)) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="max-width: 400px; position: fixed; top:65px; right: 10px;" >
                '.$error_message.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>';
    }
?>
    <div class="col text-right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCategoryModal" style="margin-right: 230px; margin-top: -30px;">
        <i class="fas fa-plus-circle"></i> Add Category
    </button>
</div>

    </div>
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
                    <table id="datatablesSimple" class="table">
                        <thead>
                            <tr>
                                <th>Category_ID</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row["CategoryID"] . "</td>";
                                    echo "<td>" . $row["category_name"] . "</td>";
                                    echo "<td>
                                            <a href='delete_category_page.html'>
                                                <i class='fas fa-trash btn btn-danger btn-sm'></i>
                                            </a>
                                          </td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='3'>No data found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Category Modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalLabel"><i class="fas fa-plus-circle"></i> Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" autocomplete="off">
                    <div class="form-group">
                        <label for="category">Category Name</label>
                        <input type="text" class="form-control" id="category" name="category" placeholder="Category">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-close"></i> Close</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Include necessary JavaScript libraries -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php  include 'includes/fotter.php';?>

</body>
</html>

<?php
include 'includes/fotter.php';

// Close the database connection after HTML content
$conn->close();
?>

