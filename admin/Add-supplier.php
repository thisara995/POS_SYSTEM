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

    <div class="container mt-3">
    <div class="row">
    <div class="col-supplier" style="margin-bottom: 20px;">
    <h1><i class="fa-solid fa-people-group"></i>  Suppliers</h1>
</div>
<?php
if
(isset($_GET["msg"])) {
    $msg = $_GET["msg"];
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="max-width: 400px; position: fixed; top:65px; right: 10px;">
    '.$msg.'
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>';
}

 elseif (isset($_GET["error"])) {
    $error =$_GET["error"];
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="max-width: 400px; position: fixed; top:65px; right: 10px;" >
    '.$error.'
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>';
}
?>


    <div class="col text-right" style="margin-right:230px;">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSupplierModal">
    <i class="fas fa-plus-circle"></i>  Add Supplier </button>
    </div>
</div>

<div class="container mt-3">
<div class="row justify-content-center">
<div class="card">
<div class="card-body">
<table id="datatablesSimple" class="table">
    <thead>
        <tr>
            <th>Supplier ID</th>
            <th>Name</th>
            <th>Company Name</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th>Action</th>
        </tr>
            </thead>
            <tbody>
                    <?php
                    $sql = "SELECT * FROM suppliers"; // Fixed SQL query
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>'
                                . '<td>' . $row['SupplierID'] . '</td>'
                                . '<td>' . $row['supplier_name'] . '</td>'
                                . '<td>' . $row['company'] . '</td>'
                                . '<td>' . $row['address'] . '</td>'
                                . '<td>' . $row['contact'] . '</td>'
                                . '<td>'
                                . '<button type="button" class="btn btn-success btn-sm editbtn">'
                                . '<i class="fas fa-edit"></i>'
                                . '</button>'
                                . '&nbsp;'
                                . '<button type="button" class="btn btn-danger btn-sm deletebtn">'
                                . '<i class="fas fa-trash-alt"></i>'
                                . '</button>'
                                . '</td>'
                                . '</tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
                    </div>
                    <div>
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
                    <h5 class="modal-title" id="addSupplierModalLabel">  <i class="fas fa-plus-circle"></i> Add Supplier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="supplier_process.php" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label for="name"> Name</label>
                        <input type="text" class="form-control" id="name" name="supname" placeholder="Name">
                    </div>


                    <div class="form-group">
                        <label for="email">Company</label>
                        <input type="text" class="form-control" id="company" name="company" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="supaddress" placeholder="Address">
                    </div>

                    <div class="form-group">
                        <label for="contactNumber">Contact Number</label>
                        <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact Number">
                    </div>

                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-check"></i>&nbsp;  Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-close"></i> Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- Edit Supplier Modal -->
 
<div class="modal fade" id="editsuppliermodal" tabindex="-1" aria-labelledby="editsuppliermodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editsuppliermodalLabel">Edit Supplier</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="supplier_process.php" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label for="name"> Name</label>
                        <input type="hidden" name="update_id" id="update_id">
                        <input type="text" class="form-control" id="supname" name="supname" placeholder="Name">
                    </div>


                    <div class="form-group">
                        <label for="email">Company</label>
                        <input type="text" class="form-control" id="sup_company" name="company" placeholder="Company">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="supaddress" name="supaddress" placeholder="Address">
                    </div>

                    <div class="form-group">
                        <label for="contactNumber">Contact Number</label>
                        <input type="text" class="form-control" id="sup_contact" name="contact" placeholder="Contact Number">
                    </div>

                    <div class="modal-footer">
                    <button type="submit" name="update_data" class="btn btn-primary btn-sm"><i class="fas fa-refresh"></i>&nbsp; Update</button>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal"><i class="fas fa-close"></i>&nbsp;&nbsp;Close</button>
                     </div>
                </form>
                </div>
            </div>
         </div>
        </div>

        <!-- Delete Supplier Modal --->

      
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="deletemodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="deletemodalLabel">Delete Supplier</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="supplier_process.php" method="POST" >
        <input type="hidden" name="delete_id" id="delete_id">
        <h6> Do you want to Delete this Data ?</h6>
      </div>
      <div class="modal-footer">
        <button type="submit" name="delete_data" class="btn btn-primary btn-sm">Ok</button>
        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    $(document).ready(function () {
        $('.editbtn').on('click', function () {
            $('#editsuppliermodal').modal('show');
            var $tr = $(this).closest('tr');
            var data = $tr.find("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#supname').val(data[1]);
            $('#sup_company').val(data[2]);
            $('#supaddress').val(data[3]);
            $('#sup_contact').val(data[4]);
        });
    });
</script>

<script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>

</body>
</html>


<?php  include 'includes/fotter.php';?>