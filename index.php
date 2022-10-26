<?php 
$titulo = "Página Inicial";
include "./cabecalho.php";?>




<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Email</th>
      <th></th>
      <th></th>
    </tr>
  </thead>

  <tbody>

    <tr>
      <td>1</td>
      <td>Fernéko</td>
      <td>fernando.graciano@fatec.sp.gov.br</td>
      <td><a class="btn btn-warning" >Editar</a> </td>
      <td><a class="btn btn-danger" >Excluir</a> </td>
    </tr>
    
    <?php 
        for($i = 0; $i< 10; $i++)
        {
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td>Nome <?php echo $i; ?></td>
                    <td>email.<?php echo $i; ?>@fatec.sp.gov.br</td>
                    <td><a class="btn btn-warning" >Editar</a> </td>
                    <td><a class="btn btn-danger" >Excluir</a> </td>
                </tr>

            <?php
        }
    ?>

  </tbody>
</table>

<?php include "./rodape.php"; ?>