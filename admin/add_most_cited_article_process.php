<?php
require_once('database.php');
if (isset($_REQUEST['submit'])) {
    $article_title = $_REQUEST['article_title'];
    $journal_title = $_REQUEST['journal_title'];
    $subject_id = $_REQUEST['subject_id'];
    $year = $_REQUEST['year'];
    $volume = $_REQUEST['volume'];
    $issue = $_REQUEST['issue'];
    $author = $_REQUEST['author'];
    $doi = $_REQUEST['doi'];
    $journal_status = $_REQUEST['journal_status'];
    $stmt = $conn->prepare("INSERT INTO add_most_cited_article(	
            sId,	
            articleTitle,	
            journalTitle,	
            years,	
            volume,	
            issue,	
            author,	
            doi,	
            articleStatus) VALUES (
                :SubjectId,
                :ArticleTitle,
                :JournalTitle,
                :Years,
                :Volume,
                :Issue,
                :Author,
                :Doi,
                :ArticleStatus)");
    $stmt->bindParam(':SubjectId', $subject_id);
    $stmt->bindParam(':ArticleTitle', $article_title);
    $stmt->bindParam(':JournalTitle', $journal_title);
    $stmt->bindParam(':Volume', $volume);
    $stmt->bindParam(':Issue', $issue);
    $stmt->bindParam(':Years', $year);
    $stmt->bindParam(':Author', $author);
    $stmt->bindParam(':Doi', $doi);
    $stmt->bindParam(':ArticleStatus', $journal_status);
    $stmt->execute();
    if ($stmt) {
        header("Location: ../index.php");
    } else {
        echo "not be inserted";
    }

}
?>