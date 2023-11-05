<?php
require_once('database.php');
// echo "fdfdf";
// echo "<pre>";
// print_r($_REQUEST);
// die();
// print_r($_FILES);
"</pre>";
if (isset($_REQUEST['submit'])) {
    $subject_article = $_REQUEST['subject_Article'];
    $stmt = $conn->prepare("INSERT INTO add_subject_list(	
            sTitle
            ) VALUES (
            :SubjectTitle)");
    $stmt->bindParam(':SubjectTitle', $subject_article);
    $stmt->execute();
    if ($stmt) {
        // echo "inserted";
        header("Location: ../index.php");
    } else {
        echo "not be inserted";
    }
}

?>