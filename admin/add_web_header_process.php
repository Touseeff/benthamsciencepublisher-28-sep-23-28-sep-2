<?php
require_once('database.php');

if (isset($_REQUEST['submit'])) {
    $header_title = $_REQUEST['title'];
    $header_Description = $_REQUEST['header_description'];
    $header_Status = $_REQUEST['header_status'];
    $header_image              =    $_FILES['header_image']['name'];
    $path1 = $_FILES['header_image']['tmp_name'];
    move_uploaded_file($path1, "images/" . $header_image);
    $stmt = $conn->prepare("INSERT INTO add_web_header(	
            	hTitle,
                hImage,
                hDescription,
                hStatus	) VALUES (
                :HeaderTitle,
                :HeaderImage,
                :HeaderDescription,
                :HeaderStatus)");
    $stmt->bindParam(':HeaderTitle', $header_title);
    $stmt->bindParam(':HeaderImage', $header_image);
    $stmt->bindParam(':HeaderDescription', $header_Description);
    $stmt->bindParam(':HeaderStatus', $header_Status);
    $stmt->execute();
    if ($stmt) {
        header("Location: ../index.php");
        // echo "inserted";
    } else {
        echo "not be inserted";
    }

}
?>