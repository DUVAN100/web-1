
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Verificación</title>
</head>
<body class="container">

    <form action="validarlog.php" method="post" class="form-control mt-5 card p-3" >
      <h1 class="text-center mt-4">SISTEMA LOGIN</h1>
      <p>identification
        <input type="number" placeholder="Type your identification" name="identification" class="form-control"/>
     </p>
      <p>User or Email 
          <input type="text" placeholder="Tpe your e_mail" name="email" class="form-control"/>
     </p>
      <p>Password
        <input type="password" placeholder="Type your password" name="password" class="form-control"/>
     </p>
      <input class="form-control bg bg-info" type="submit" value="ingresar" />
    </form>
  </body>
</html>

