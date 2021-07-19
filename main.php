<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Encuesta Bebidas</title>
  <!-- BOOSTRAP 4 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
  <div class="contain row  m-0 p-0 vh-100">
    <form action="encuest.php" method="post" class="col-3 mt-5 ml-1 h-50 bg-light border border-secondary">
      <div class="contain m-0 p-1">
        <div class="form-group mt-4">
          <label for="name">Name</label>
          <input type="text" class="form-control text-center" name="name" autofocus id="name" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="genero">Genero</label>
          <input type="text" name="genero" id="genero" class="form-control text-center" placeholder="Genero">
        </div>
        <div class="form-group">
          <label for="codigo">Codigo</label>
          <input type="password" name="codigo" id="codigo" placeholder="Codigo" class="form-control text-center">
        </div>
        <button class="btn btn-outline-success col" name="btnRegister">Registrar Encuesta</button>
      </div>
    </form>
    <section class="col-8 bg-white">
      <table class="table mt-3 table-bordered">
        <thead class="table-primary text-center">
          <th>Femenino</th>
          <th>Masculino</th>
        </thead>
        <tbody>
          <tr>
            <td class="text-center font-weight-bold text-primary">             
              <?php  
                include("encuest.php");
                error_reporting(0);
                echo $_COOKIE["contfemenino"]; 
              ?> 
            </td>

            <td class="text-center font-weight-bold text-primary">
            <?php  
                include("encuest.php");
                error_reporting(0);
                echo $_COOKIE["contmasculino"]; 
              ?>
            </td>

          </tr>
        </tbody>
      </table>
    </section>
  </div>











  <!-- SCRIPT BOOSTRAP -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
    crossorigin="anonymous"></script>
</body>

</html>