<?php include 'includes/header.php' ;?>

<body>

<div class="container-fluid">

    <div class="container mt-2">
        <div class="row">
        <div class="col-supplier" style="margin-bottom: 15px;">
        <h1> <i class="fas fa-chart-line"></i> Sales</h1>
    </div> 
            <div class="card-body">
                <form action="" id="manage-sales">
                    <input type="hidden" name="id" value="">
                    <input type="hidden" name="ref_no" value="">
                    <div class="col-md-12">
                        <div class="row mb-3">
                        <div class="col-md-4">
                        <div class="form-group"> 
                            <label class="control-label pl-2">Customer</label> 
                            <select class="form-control mt-2" id="selectMenu">
                                <option value="">---Select a Customer---</option>
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                            </select>
                        </div>
                        </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="form-group"> 
                                <label class="control-label p1-2">Product</label>
                                <select class="form-control mt-2" id="selectMenu">
                                <option value="">---Select a Product---</option>
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                                </select>
                            </div>
                            </div>

                            <div class="col-md-2">
                            <div class="form-group mt-2"> 
                                <label class="control-label">Qty</label>
                                <input type="number" class="form-control text-right" step="any" id="qty">
                            </div>
                            </div>

                            <div class="col-md-2">
                            <div class="form-group" style="margin-top: 3px;">
                                <label class="control-label">&nbsp;</label>
                                <button class="btn btn-primary" type="button" id="add_list" style="margin-top: 28px;">
                                <i class="fas fa-plus-circle"></i> Add to List
                                </button>

                            </div>
                        </div>

        <div class="container mt-3">
        <div class="card">
            <div class="card-body">
            <div class="row">
            <div class="card-body">
    <table class="table table-bordered" id="list">
        <colgroup>
            <col width="30%">
            <col width="10%">
            <col width="25%">
            <col width="25%">
            <col width="10%">
        </colgroup>
        <thead>
            <tr>
                <th class="text-center">Product</th>
                <th class="text-center">Qty</th>
                <th class="text-center">Price</th>
                <th class="text-center">Amount</th>
                <th class="text-center"></th>
            </tr>
        </thead>
        <tbody>
            <tr class="item-row">
                <td class="text-center"></td>
                <td class=""></td>
                <td class=""></td>
                <td class=""></td>
                <td class="text-center">
                <buttob class="btn btn-sm btn-danger" onclick = "rem_list($(this))"><i class="fa fa-trash"></i></buttob>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th class="text-end" colspan="3">Total</th>
                <th class="text-right tamount"></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div>
</div>
</div>
<div class="row">
<div class="d-flex justify-content-center mt-2">
    <button class="btn btn-primary" type="button" id="pay" data-bs-toggle="modal" style="width:900px; position: relative; top: -20px;" data-bs-target="#pay_modal">Pay</button>
</div>




    <!-- Modal -->
    <div class="modal fade" id="pay_modal" tabindex="-1" aria-labelledby="payModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                <div class="container-fluid">
					      		<div class="form-group">
					      			<label for="" class="control-label">Customer Name</label>
					      			<input type="text" name="tamount" value="" class="form-control text-right" readonly="">
					      		</div>
					      		<div class="form-group">
					      			<label for="" class="control-label">Cash</label>
					      			<input type="number" name="amount_tendered" value="0" min="0" class="form-control text-right" >
					      		</div>
					      	</div>
					      </div>
					      <div class="modal-footer">
					        <button type="button"  class="btn btn-primary" id='submit' onclick="$('#manage-sales').submit()"> 
                            <i class="fas fa-money-bill-alt"></i> Save</button>

                            <script>
                                 
                                document.getElementById("submit").onclick = function() {
                                window.location.href = 'preview_invoice.php';
                                };
                            </script>
                            
					        <button type="button" class="btn btn-danger" data-dismiss="modal">   <i class="fas fa-times-circle"></i>Cancel</button>
					      </div>
					      </div>
					    </div>
					        </div>
				                </form>
			                        </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
<?php  include 'includes/fotter.php';?>