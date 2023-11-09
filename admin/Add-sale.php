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
    <div class="col-supplier" style="margin-bottom: 20px;">
    <h1> <i class="fas fa-chart-line"></i> Sales</h1>
</div>

<div class="row-search" style="max-width: 600px;">
    <select class="form-control" id="selectMenu">
        <option value="">---Select a Product---</option>
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
    </select>
</div>

<input type="number" name="qty" value="1" min="1" placeholder="Qty" autocomplete="off" style="width: 68px; height:38px; padding-top:6px; padding-bottom: 4px; margin-right: 4px; font-size:15px; background-color: #f0f0f0;" required />
    <div class="col text-right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSupplierModal" style="margin-right:230px;">
    <i class="fas fa-plus-circle"></i> Add </button>
    </div>
</div>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Amount</th>
                    <th>Profit</th>
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
                    <td>
                  <a href="delete_supplier_page.html">
                      <i class="fa fa-close btn btn-danger btn-sm"></i>
                        </a>
                    </td>
                </tr>
                <tr>
			<th> </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<td> Total Amount: </td>
			<td> Total Profit: </td>
		</tr>
			<tr>
				<th colspan="5"><strong style="font-size: 15px; color: #222222;">Total:</strong></th>
				<td colspan="1"><strong style="font-size: 12px; color: #222222;">
                <!-- Add more rows as needed -->
            </tbody>
        </table>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-sm btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
<i class="fas fa-save"></i> SAVE
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h1 class="modal-title fs-5 text-center" id="exampleModalLabel"><center><i class='fas fa-money-bill-alt'></i>   Cash</h1></center>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="customerName" class="form-label">Customer Name</label>
          <input type="text" class="form-control" id="customerName">
        </div>
        <div class="mb-3">
          <label for="cashInput" class="form-label">Cash Input</label>
          <input type="number" class="form-control" id="cashInput">
        </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-close"></i>  Close</button>
        
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