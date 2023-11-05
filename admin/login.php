
<?php 
// session_start();
// require_once('database.php');
// print_r($_SESSION['admin']['uEmail']);
?>
<!doctype html>
<html lang="eng">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" type="text/css" href="require/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body class=" d-flex flex-column min-vh-100">


  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 

  <div class="container">
  <div class="row d-flex justify-content-center mb-5 ">
    <div class="col-md-4 ">
      <form id="formbgcolor" class="row g-3 needs-validation shadow-lg rounded-2 mt-5 pt-2 " novalidate action="login_process.php" method="POST">
        <h3 class="bg-primary text-light
           text-center mt-4 mb-3 text-uppercase">Login FORM</h3>
        <div class="text-center">
          <img src="images/295128.png" class="rounded-circle shadow-lg bg-light" width="100" alt="image">
        </div>
        <div class="col-md-12">
          <label for="validationCustomUsername" class="form-label">Email</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="email" class="form-control" id="validationCustomUsername" name="email" size="10" aria-describedby="inputGroupPrepend" required>
            <div class="valid-feedback">
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <label for="validationCustom02" class="form-label">Password</label>
          <input type="password" class="form-control" id="validationCustom02" name="password" value="" required>
          <div class="valid-feedback">
          </div>
        </div>
        <div class="col-12 m-2">
          <a class="btn btn-secondary" href="../index.php">Cancel</a>
          <button class="btn btn-primary"  name="submit" type="submit">login</button>
        </div>
      </form>
    </div>
  </div>
</div>
  <script type="text/javascript">
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>
</body>
</html>