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

    <div class="container mt-4">
    <div class="row">
    <div class="col-supplier" style="margin-bottom: 15px;">
    <h1> <i class="fas fa-chart-line"></i> Sales</h1>
</div> 

<div class="col text-right">
    <button type="button" class="btn btn-primary" style="margin-right:230px;" id="addSalesBtn">
        <i class="fas fa-plus-circle"></i> Add Sales
    </button>
</div>
<script>
    document.getElementById('addSalesBtn').addEventListener('click', function() {
        // Redirect to another page
        window.location.href = 'sales.php';
    });
</script>

</div>
<div class="container mt-3">
<div class="row justify-content-center">
<div class="card">
<div class="card-body">
    <table id="datatablesSimple" class="table">
        <thead>
            <tr>
            <th>#</th>
            <th>Date</th>
            <th>Reference</th>
            <th>Customer</th>
            <th>Action</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="delete_supplier_page.html">
                        <i class="fas fa-trash btn btn-danger btn-sm"></i>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
<?php  include 'includes/fotter.php';?>