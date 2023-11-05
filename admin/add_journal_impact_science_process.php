<?php
require_once('database.php');
if (isset($_REQUEST['submit'])) {
    $journal_Name = $_REQUEST['journal_name'];
    $journal_Description = $_REQUEST['journal_description'];
    $impact_Factor = $_REQUEST['impact_factor'];
    $journal_Code = $_REQUEST['journal_code'];
    $current = $_REQUEST['current'];
    $journal_Status = $_REQUEST['journal_status'];
    $journal_Image_URL = $_REQUEST['journal_image_url'];
    $journal_Pdf_URL = $_REQUEST['journal_pdf_url'];
    $jour_Code    =$_REQUEST['j_code'];
    $stmt = $conn->prepare("INSERT INTO add_journal_impacting_science(	
            journalName,
            journalImageUrl,
            journalPdfUrl,
            journalCode,		
            impactFactor,
            journalDescription,
            current,	
            Jcode,
            journalStatus) VALUES (
                :JournalName,
                :JournalImage,
                :journalPdfFlyer,
                :journalCode,
                :ImpactFactor,
                :journalDescription,
                :Current,
                :JCode,
                :JournalStatus)");
    $stmt->bindParam(':JournalName', $journal_Name);
    $stmt->bindParam(':JournalImage', $journal_Image_URL);
    $stmt->bindParam(':journalPdfFlyer', $journal_Pdf_URL);
    $stmt->bindParam(':journalCode', $journal_Code);
    $stmt->bindParam(':ImpactFactor', $impact_Factor);
    $stmt->bindParam(':journalDescription', $journal_Description);
    $stmt->bindParam(':Current', $current);
    $stmt->bindParam(':JCode', $jour_Code);
    $stmt->bindParam(':JournalStatus', $journal_Status);
    $stmt->execute();
    if ($stmt) {
        // echo "inserted";
        header("Location: ../index.php");
    } else {
        echo "not be inserted";
    }

}
?>