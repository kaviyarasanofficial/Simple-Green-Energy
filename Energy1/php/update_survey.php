<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract form data
    $surveyDateTime = $_POST['surveyDateTime'];
    $surveyorSelect = $_POST['surveyorSelect'];
    $heatingSource = $_POST['heatingSource'];
    $isHeatingSourceOld = $_POST['isHeatingSourceOld'];
    $propertyOwnership = $_POST['propertyOwnership'];
    $benefit = $_POST['benefit'];
    $property = $_POST['property'];
    $bedroom = $_POST['bedroom'];
    $wall = $_POST['wall'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $addressLine1 = $_POST['addressLine1'];
    $addressLine2 = $_POST['addressLine2'];
    $city = $_POST['city'];
    $postcode = $_POST['postcode'];
    $reference = $_POST['reference'];

    define('DB_HOST', 'localhost');
    define('DB_USERNAME', 'rectubmx_simplegreen');
    define('DB_PASSWORD', '3N2h0DEwaDJ#');
    define('DB_NAME', 'rectubmx_simplegreenenergy');
    
    
    
    // Establish a database connection
    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    

    // Prepare and execute an SQL query to update the data
 $sql = "UPDATE surveyor SET
        workdatatime = '$surveyDateTime',
        heatingSource = '$heatingSource',
        isHeatingSourceOld = '$isHeatingSourceOld',
        propertyOwnership = '$propertyOwnership',
        benefit = '$benefit',
        property = '$property',
        bedroom = '$bedroom',
        wall = '$wall',
        CustomerfirstName = '$firstName',
        CustomerlastName = '$lastName',
        Customeremail = '$email',
        Customerphone = '$phone',
        CustomeraddressLine1 = '$addressLine1',
        CustomeraddressLine2 = '$addressLine2',
        Customercity = '$city',
        Customerpostcode = '$postcode',
        Customerreference = '$reference'
         WHERE surveyoremail = '$surveyorSelect'"; // Replace your_table_name and your_record_id

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
