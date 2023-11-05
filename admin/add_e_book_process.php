<?php
require_once('database.php');
if (isset($_REQUEST['submit'])) {
    $book_title = $_REQUEST['book_title'];
    $book_code = $_REQUEST['book_code'];
    $book_Description = $_REQUEST['book_description'];
    $price = $_REQUEST['price'];
    $book_Status = $_REQUEST['book_status'];
    $book_image_url = $_REQUEST['book_cover_url'];
    $books_pdf_url = $_REQUEST['view_more_pdf_url'];
    // $book_cover              =    $_FILES['book_image']['name'];
    // $path1 = $_FILES['book_image']['tmp_name'];
    // move_uploaded_file($path1, "images/" . $book_cover);
    $stmt = $conn->prepare("INSERT INTO add_e_books(	
            bTitle,
            bCode,
            bCover,
            bPdfUrl,
            bPrice,
            bDescription,
            bStatus) VALUES (
                :BookTitle,
                :BookCode,
                :BookCover,
                :BookPdfUrl,
                :Price,
                :BookDescription,
                :BookStatus)");
    $stmt->bindParam(':BookTitle', $book_title);
    $stmt->bindParam(':BookCode', $book_code);
    $stmt->bindParam(':BookCover', $book_image_url);
    $stmt->bindParam(':BookPdfUrl', $books_pdf_url);
    $stmt->bindParam(':Price', $price);
    $stmt->bindParam(':BookDescription', $book_Description);
    $stmt->bindParam(':BookStatus', $book_Status);
    $stmt->execute();
    if ($stmt) {
        header("Location: ../index.php");
        // echo"inserted";
    } else {
        echo "not be inserted";
    }

}
?>