<?php include 'includes/header.php' ;?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Product Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    /* Define custom colors for icons */
    .view-icon { color: green; }
    .edit-icon { color: blue; }
    .delete-icon { color: red; }
  </style>
</head>

<body>

    <div class="container mt-3">
    <div class="row">
    <div class="col-supplier" style="margin-bottom: 20px;">
    <h1>  <i class="fas fa-list-alt icon"></i> Products</h1>
</div>


    <div class="col text-right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSupplierModal" style="margin-right:230px;">
    <i class="fas fa-plus-circle"></i>  Add Product </button>
    </div>
    
    </div>
    <div class="container mt-3">
    <div class="row justify-content-center">
    <div class="card">
    <div class="card-body">
    <table id="datatablesSimple" class="table">
                        <thead>
                            <tr>
                                <th>SKU</th>
                                <th>Category</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Supplier</th>
                                <th>Supplied Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Existing row -->
                            <tr>
                                <td>1</td>
                                <td>Supplier 1</td>
                                <td>ABC</td>
                                <td>123 Main St</td>
                                <td>555-1234</td>
                                <td>Notes</td>
                                <td>ABC</td>
                                <td>
                                <a href="view-page.html">
                                    <i class="fas fa-eye view-icon"></i> <!-- View Icon -->
                                </a>

                                <a href="edit-page.html">
                                    <i class="fas fa-edit edit-icon"></i> <!-- Edit Icon -->
                                </a>

                                <a href="delete-action.html">
                                    <i class="fas fa-trash-alt delete-icon"></i> <!-- Delete Icon -->
                                </a>

                                </td>
                                </tr>
                            <!-- Add more rows here if needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Add Product Modal -->

    <div class="modal fade" id="addSupplierModal" tabindex="-1" role="dialog" aria-labelledby="addSupplierModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSupplierModalLabel"><i class="fas fa-plus-circle"></i>  Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
             <form action="" method="POST" autocomplete="off">

        <div class="form-group">
            <label for="itemCode">SKU</label>
            <input type="text" class="form-control" id="SKU" placeholder="SKU">
        </div>

        <div class="form-group">
    <label for="category">Category</label>
    <select class="form-control" id="category" name="category">
    <option value="">-------- Select Category ----------</option>
    <?php 
    // Fetch categories from the database
    $categoriesQuery = $conn->query("SELECT * FROM categories ORDER BY category_name ASC");

    // Check if categories are fetched successfully
    if ($categoriesQuery && $categoriesQuery->num_rows > 0) {
        // Loop through fetched categories and create options
        while ($row = $categoriesQuery->fetch_assoc()) {
            $categoryId = $row['CategoryID'];
            $categoryName = $row['category_name'];
            // Output option with category ID as value and category name as display text
            echo "<option value='$categoryId'>$categoryName</option>";
        }
    } else {
        echo "<option value=''>No categories found</option>";
    }
    ?>
</select>

</div>



        <div class="form-group">
            <label for="itemName">Product Name</label>
            <input type="text" class="form-control" id="product" name= "product" placeholder="Product Name">
        </div>

    

        <div class="form-group">
            <label for="sellingPrice">Price</label>
            <input type="text" class="form-control" id="price" placeholder="Selling Price">
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" class="form-control" id="quantity" placeholder="Quantity">
        </div>

        <div class="form-group">
            <label for="supplier">Supplier</label>
            <input type="text" class="form-control" id="supplier" placeholder="Supplier">
        </div>
       
        <div class="form-group">
            <label for="supplier">Supplied Date</label>
            <input type="date" class="form-control" id="supplier" placeholder="Supplier">
        </div>

    </form>


        <div class="modal-footer">
        <button type="button" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-close"></i>  Close</button>
            
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Edit Supplier Modal -->
    <div class="modal fade" id="editSupplierModal" tabindex="-1" role="dialog" aria-labelledby="editSupplierModalLabel"
        aria-hidden="true">
        <!-- Similar structure as add modal, but for editing a supplier -->
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>


<?php  include 'includes/fotter.php';?>