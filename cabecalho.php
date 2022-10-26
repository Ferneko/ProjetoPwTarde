<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ; ?></title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <style>
        /* div {
            border: 2px solid red;
        } */
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">

    <img src="./imagens/logoPHP.png" alt="Bootstrap" width="90" height="48">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">
            Home
        </a>
        </li>

        <li class="nav-item">
          <a href="./usuarios.php" class="nav-link active" aria-current="page" >
            Usuários
        </a>
        </li>
      

      </ul>
      
    </div>
  </div>
</nav>
<div class="container">
