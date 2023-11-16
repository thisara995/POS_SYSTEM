<?php include 'includes/header.php' ;?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User  Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-4">
    <div class="row">
    <div class="col-supplier" style="margin-bottom: 20px;">
    <h1><i class="fa-solid fa-users-gear"></i> Users</h1>
</div>


    <div class="col text-right" style="margin-right:230px;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adduserModal">
    <i class="fas fa-plus-circle"></i> Add User </button>
    </div>

</div>
<div class="container mt-3">
<div class="row justify-content-center">
<div class="card">
<div class="card-body">
    <table id="datatablesSimple" class="table">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add your supplier data rows here -->
                <tr>
                    <td>1</td>
                    <td>Supplier 1</td>
                    <td>ABC</td>
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
            </div>
         </div>
    </div>
</div>

    <!-- Add Supplier Modal -->
    <div class="modal fade" id="adduserModal" tabindex="-1" role="dialog" aria-labelledby="adduserModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="adduserModalLabel"> <i class="fas fa-plus-circle"></i> Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Add your form fields for adding a new supplier here -->
                    <form>

                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Full Name">
                        </div>

                        <div class="form-group">
                            <label for="name">User Name</label>
                            <input type="text" class="form-control" id="uname" placeholder="User Name">
                        </div>
                        <div class="form-group">
                            <label for="address">Password</label>
                            <input type="text" class="form-control" id="password" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label for="selectposition">Position</label>
                            <select class="form-control" id="positon" name="position">
                            <option>---- Select Position ----</option>
                            <option>Cashier</option>
                            <option>Admin</option>
                            <option>Receptionist</option>
                            </select>
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