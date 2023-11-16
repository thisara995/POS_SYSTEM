<?php include 'includes/header.php' ;?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Supplier Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-2">
    <div class="row">
    <div class="col-supplier" style="margin-bottom: 20px;">
    <h1> <i class="fas fa-chart-bar"></i>  Sales Report</h1>
    <a href="another_destination_page.html" class="btn btn-secondary" style="margin-left:950px;">
    <i class="fas fa-print"></i> Print
    </a>
</div>

<div style="display: flex; justify-content: space-between; align-items: center; margin-top: -30px;">
    <div style="display: flex; margin-left:200px;">
        <div>
            <strong>From :</strong>
            <input type="date" style="width: 223px; height: 35px; color: #222;" name="d1" class="tcal" value="" />
        </div>
        <div style="margin-left: 20px;">
            <strong>To :</strong>
            <input type="date" style="width: 223px; height: 35px; color: #222;" name="d2" class="tcal" value="" />
        </div>
    </div>
</div>

<div class="col text-right" style="margin-right:230px; margin-top: -35px;">
    <a href="your_destination_page.html" class="btn btn-primary">
        <i class="fa-solid fa-magnifying-glass"></i> Search
    </a>
</div>

</div>
<div style="font-weight:bold; text-align:center; font-size:14px; margin-top: 10px; ">
    Sales Report from&nbsp;ssssssssssssssssssssto sfffffsfssssssssss&nbsp;
</div>

<div class="container mt-3">
<div class="row justify-content-center">
<div class="card">
<div class="card-body">
    <table id="datatablesSimple" class="table">
                    <thead>
                        <tr>
                            <th>Sale ID</th>
                            <th>Date</th>
                            <th>Customer Name</th>
                            <th> Total Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                            <tbody>
                                <!-- Add your supplier data rows here -->
                                <tr>
                                    <td>2023-11-01</td>
                                    <td>ohn Doe</td>
                                    <td>$150.50</td>
                                    <td>123 Main St</td>
                                    <td>
                                        <a href="delete_supplier_page.html">
                                        <i class="fas fa-eye btn btn-primary btn-sm"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                    </table>
                  </div>
             </div>
         </div>
    </div>
</div>



    <!-- Add Supplier Modal -->
    <div class="modal fade" id="addSupplierModal" tabindex="-1" role="dialog" aria-labelledby="addSupplierModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSupplierModalLabel">Add Supplier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Add your form fields for adding a new supplier here -->
                    <form>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <label for="name">Company Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label for="contactNumber">Contact Number</label>
                            <input type="text" class="form-control" id="contactNumber" placeholder="Contact Number">
                        </div>
                        <div class="form-group">
                            <label for="note">Note</label>
                            <textarea class="form-control" id="note" rows="1"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
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