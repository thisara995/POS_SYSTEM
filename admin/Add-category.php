<?php include 'includes/header.php' ;?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Category Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background-color:#d1cdcd;">

    <div class="container mt-4">
    <div class="row">
    <div class="col-supplier" style="margin-bottom: 20px;">
    <h1><i class="fas fa-list-alt icon"></i> Categories</h1>
</div>

    <div class="col text-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSupplierModal"  style="margin-right:230px;">
        <i class="fas fa-plus-circle"></i> Add Category
        </button>
    </div>

    </div>
    <div class="container mt-3">
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
            <!-- Add your category data rows here -->
            <tr>
                <td>Category 1</td>
                <td>Category 1</td>
                <td>
                    <a href="delete_category_page.html">
                        <i class="fas fa-trash btn btn-danger btn-sm"></i>
                    </a>
                </td>
            </tr>
            <!-- Add more rows as needed -->
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
                    <h5 class="modal-title" id="addSupplierModalLabel"><i class="fas fa-plus-circle"></i> Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
             <form>
        <div class="form-group">
            <label for="itemCode">Category Name</label>
            <input type="text" class="form-control" id="itemCode" placeholder="Category">
        </div>
    </form>
</div>

        <div class="modal-footer">
        <button type="button" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-close"></i>  Close</button>
           
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