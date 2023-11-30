<?php
session_start();
include 'config/dbcon.php';

// customer Added code segment

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    if (empty($name) || empty($address) || empty($email) || empty($contact)) {
        header("Location: Add-customers.php?error=Please fill all fields");
        exit(); // Add exit to prevent further execution after redirection
    }

    // Ensure proper SQL syntax and concatenate values using commas
    $sql = "INSERT INTO customers (name, contact, address, email) VALUES ('$name', '$contact', '$address', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        
        header("Location: Add-customers.php?msg=Customer Added successfully !");
        exit(); // Add exit to prevent further execution after redirection
    } else {
        header("Location: Add-customers.php?error=Record Not Added !");
        exit(); // Add exit to prevent further execution after redirection
    }
    
    $conn->close();
}
?>


<?php
if(isset($_POST['update_data'])) {
    $id = $_POST['update_id'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $email = $_POST['email'];

   
    $query = "UPDATE customers SET name='$name', contact='$contact', address='$address', email='$email' WHERE customer_id='$id'";
    $query_run = mysqli_query($conn, $query);
 

    if($query_run) 
    {
        header("Location: Add-customers.php?msg=Customer Data record update successfuly !");
        exit();
    } 
        
    else {
        header("Location: Add-customers.php?error=Data not update !");
        exit();
    }
   
}
?>

<?php
if(isset($_POST['delete_data']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM customers WHERE customer_id ='$id'";
    $query_run = mysqli_query($conn,$query);

    if ($query_run)
    {
        header("Location: Add-customers.php?msg=Data Deleted !");
        exit();
    }
    else 
    {
        header("Location: Add-customers.php?error=Data not Deleted !");
        exit();
    }
}

