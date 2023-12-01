<?php
session_start();
include 'config/dbcon.php';

if (isset($_POST['submit'])) {
    $supname = $_POST['supname'];
    $supaddress = $_POST['supaddress'];
    $company = $_POST['company'];
    $contact = $_POST['contact'];

    if (empty($supname) || empty($supaddress) || empty($company) || empty($contact)) {
        header("Location: Add-suppliers.php?error=Please fill all fields");
        exit(); // Add exit to prevent further execution after redirection
    }

    // Ensure proper SQL syntax and concatenate values using commas
    $sql = "INSERT INTO suppliers (supplier_name, company, address, contact) VALUES ('$supname', '$company', '$supaddress', '$contact')";
    
    if ($conn->query($sql) === TRUE) {
        
        header("Location: Add-supplier.php?msg=Supplier Added successfully !");
        exit(); // Add exit to prevent further execution after redirection
    } else {
        header("Location: Add-supplier.php?error=Record Not Added !");
        exit(); // Add exit to prevent further execution after redirection
    }
    
    $conn->close();
}

?>

<?php

if(isset($_POST['update_data'])) {
  $id = $_POST['update_id'];
  $sup_name = $_POST['supname'];
  $company = $_POST['company'];
  $address = $_POST['supaddress'];
  $contact = $_POST['contact'];

$query = "UPDATE suppliers SET supplier_name = '$sup_name', company = '$company', address = '$address' , contact = '$contact' WHERE SupplierID = '$id'";
$query_run = mysqli_query ($conn,$query);

if($query_run)
{
   header("Location: Add-supplier.php?msg= Supplier Data record update successfuly !");
   exit();
}

else
 {
   header("Location: Add-supplier.php?error= Data not update !");
   exit();
 }
  
 }
  
?>

<?php

if(isset($_POST['delete_data']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM suppliers WHERE SupplierID ='$id'";
    $query_run = mysqli_query($conn,$query);

    if ($query_run) {
        header("Location: Add-supplier.php?msg=Supplier Data deleted successfully");
        exit();
    } else {
        echo "Error deleting category: " . mysqli_error($conn);
        exit();
    }
} else {
    header("Location:Add-supplier.php?error= Error deleting supplier !");
    exit();
}
?>