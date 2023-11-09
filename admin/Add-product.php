<?php include 'includes/header.php' ;?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Product Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-4">
    <div class="row">
    <div class="col-supplier" style="margin-bottom: 20px;">
    <h1>  <i class="fas fa-list-alt icon"></i> Products</h1>
</div>


    <div class="form-group" style="max-width:500px;">
        <input type="text" class="form-control" id="searchInput" placeholder="Search Product ...">
    </div>

    <div class="col text-right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSupplierModal" style="margin-right:230px;">
    <i class="fas fa-plus-circle"></i>  Add Product </button>
    </div>
</div>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Item Code</th>
                    <th>Item Name</th>
                    <th>Category</th>
                    <th>Supplier</th>
                    <th>Date Arrival</th>
                    <th>Expire Date</th>
                    <th>Original Price</th>
                    <th>Selling Price</th>
                    <th>Qty</th>
                    <th>Qty Left</th>
                    <th>Total</th>
                    <th>Action</th>
                 
                </tr>
            </thead>
            <tbody>
                <!-- Add your supplier data rows here -->
                <tr>
                    <td>1</td>
                    <td>Supplier 1</td>
                    <td>ABC</td>
                    <td>123 Main St</td>
                    <td>555-1234</td>
                    <td>Notes</td>
                    <td>1</td>
                    <td>Supplier 1</td>
                    <td>ABC</td>
                    <td>123 Main St</td>
                    <td>12,000</td>
                    <td>
                         <a href="edit_supplier_page.html">
                         <i class="fas fa-edit btn btn-info btn-sm" data-toggle="modal"
                         data-target="#editSupplierModal"></i>
                        </a>

                        <a href="delete_supplier_page.html">
                        <i class="fas fa-trash btn btn-danger btn-sm"></i>
                         </a>
                    </td>

                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
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
             <form>

        <div class="form-group">
            <label for="itemCode">Item Code</label>
            <input type="text" class="form-control" id="itemCode" placeholder="Item Code">
        </div>

        <div class="form-group">
            <label for="itemName">Item Name</label>
            <input type="text" class="form-control" id="itemName" placeholder="Item Name">
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control" id="category">
                <option value="category1">Category 1</option>
                <option value="category2">Category 2</option>
                <!-- Add more categories as needed -->
            </select>
        </div>

        <div class="form-group">
            <label for="dateArrival">Date Arrival</label>
            <input type="date" class="form-control" id="dateArrival">
        </div>

        <div class="form-group">
            <label for="expireDate">Expire Date</label>
            <input type="date" class="form-control" id="expireDate">
        </div>

        <div class="form-group">
            <label for="sellingPrice">Selling Price</label>
            <input type="text" class="form-control" id="sellingPrice" placeholder="Selling Price">
        </div>

        <div class="form-group">
            <label for="originalPrice">Original Price</label>
            <input type="text" class="form-control" id="originalPrice" placeholder="Original Price">
        </div>

        <div class="form-group">
            <label for="supplier">Supplier</label>
            <input type="text" class="form-control" id="supplier" placeholder="Supplier">
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" class="form-control" id="quantity" placeholder="Quantity">
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