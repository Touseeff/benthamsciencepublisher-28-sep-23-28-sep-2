<?php 

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require_once('database.php');
if($_SESSION['admin']){

  ?>
<!doctype html>
<html lang="en">
<head>

<!-- data table start -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<!-- data table end -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 
  <style type="text/css">
    ul li a:hover {
      background-color: black;
    }
  </style>
</head>
<body>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
  crossorigin="anonymous"></script>
  <script>
    </script>
  <?php
  require_once("sidebar.php");
  // require_once("../url.php");
  ?>
  <?php
  if (isset($_REQUEST['deshboard'])) {
    require_once("deshboard.php");
  } elseif (isset($_REQUEST['add_web_header'])) {
    require_once("add_web_header.php");
  } elseif (isset($_REQUEST['edit'])) {
    require_once("edit.php");
  } elseif (isset($_REQUEST['add__cited_most_article_subject_list'])) {
    require_once("add__cited_most_article_subject_list.php");
  } elseif (isset($_REQUEST['add_most_cited_article'])) {
    require_once("add_most_cited_article.php");
  } elseif (isset($_REQUEST['article_update'])) {
    require_once("article_update.php");
  } elseif (isset($_REQUEST['add_e_book'])) {
    require_once("add_e_book.php");
  } else {
    require_once("add_journal_impact_science.php");
    // echo "Tray again";
  }
  ?>
</body>
<script>
  <script>
  (function () {
    'use strict'
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
})()
<?php
}
else{
  // echo ("<script LANGUAGE='JavaScript'>
  // window.alert('Login First');
  // window.location.href='login.php';
  // </script>");
  header("Location:login.php");
}
?>

</script>
</script>
<script>
new DataTable('#example');

</script>
</html>