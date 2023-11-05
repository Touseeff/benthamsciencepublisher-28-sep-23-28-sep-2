<?php
require_once('database.php');
if (isset($_REQUEST['journal_status_submit'])) {
    $journal_status = $_REQUEST['status'];
    
    $stmt = $conn->prepare("UPDATE add_journal_impacting_science SET journalStatus=:JournalStatus");
    $stmt->execute([':JournalStatus' => $journal_status]);
    if ($stmt) {
        header("Location: ../index.php");
    } else {
        echo "not ok";
    }
} elseif (isset($_REQUEST['most_article_status_submit'])) {
    $article_status = $_REQUEST['article_status'];
    $stmt = $conn->prepare("UPDATE add_most_cited_article SET articleStatus	=:ArticleStatus	");
    $stmt->execute([':ArticleStatus' => $article_status]);
    if ($stmt) {
        header("Location: ../index.php");
    } else {
        echo "not ok";
    }
} elseif (isset($_REQUEST['book_status_submit'])) {
    $book_status = $_REQUEST['book_status'];
    $stmt = $conn->prepare("UPDATE add_e_books SET bStatus	=:BookStatus");
    $stmt->execute([':BookStatus' => $book_status]);
    if ($stmt) {
        header("Location: ../index.php");
    } else {
        echo "not ok";
    }
}
?>