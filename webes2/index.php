<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.scss">
</head>
<body class="styled">
<div class="container">
  <div>
    <h2>Peták Ferenc RD8NQ8</h2>
  </div>
  <p>Adatbázis weboldal</p>
  <div class="box">
     <form class="form-inline m-2" action="create.php" method="POST">
        <label for="name">e-mail:</label>
        <input type="text" class="form-control m-2" id="name" name="name">
        <label for="score">iq:</label>
        <input type="number" class="form-control m-2" id="score" name="score">
        <button type="submit" class="btn btn-primary">Hozzáad</button>
    </form>
    <table class="table">
        <tbody>
        <?php include 'read.php'; ?>
        </tbody>
    </table>
  </div>
</div>
</body>
</html>