<?php 
$titulo = "Editar Usuário";
include "./cabecalho.php";
include "./conexao.php";

if(isset($_POST) && !empty($_POST))
{
    
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $login = $_POST["login"];
    if(isset($_POST["ativo"]) && $_POST["ativo"] == "on")
    {
        $ativo = 1;
    }
    else
    {
        $ativo = 0;
    }

    $query = "update usuarios set nome = '$nome', login = '$login', ativo = $ativo";
    $query .= " where id = $id";
    $resultado = mysqli_query($conexao,$query);
    if($resultado)
    {
        header("Location: ./usuarios.php?sucesso=Editado com sucesso");
        exit();
    }else{
        ?>
            <div class="alert alert-danger">
                Ocorreu algum erro ao editar
            </div>
        <?php 
    }
}

if(isset($_GET["id"]) && !empty($_GET["id"]) )
{
$query="select id,nome,login,ativo from usuarios where id=".$_GET["id"];
$resultado = mysqli_query($conexao,$query);
$dados = mysqli_fetch_array($resultado);

//echo "<pre>";
//print_r($dados);
//echo "</pre>";
$id = $dados["id"];
$nome = $dados["nome"];
$login = $dados["login"];
$ativo = $dados["ativo"];
}
?>

<div class="row">
    <div class="offset-4 col-md-4 ">
        <h2>Editar usuário</h2>
        <form action="./usuariosEdit.php?id=<?php echo $id; ?>" method="post">
            
            <div class="form-group">
                <label>Id</label>
                    <input type="text"
                            name="id"
                            readonly
                            value="<?php echo $id; ?>"
                            class="form-control"/>
            </div>

            <div class="form-group">
                <label>Nome</label>
                <input type="text"
                        name="nome"
                        value="<?php echo $nome; ?>"
                        class="form-control"/>
            </div>

            <div class="form-group">
                <label>Login</label>
                <input type="text"
                        name="login"
                        value="<?php echo $login; ?>"
                        class="form-control"/>
            </div>

           
            <div class="form-group">
                Ativo: 
                <?php
                    if($ativo == 1)
                    {
                        ?>
                            <input type="checkbox"
                                name="ativo"
                                class="form-check"
                                checked />
                        <?php
                    }else{
                        ?>
                            <input type="checkbox"
                            name="ativo"
                            class="form-check" />
                        <?php
                    } 
                ?>
                

            </div>
            

            <div class="form-group">
                <button type="submit" 
                    class="btn btn-success">
                     Salvar usuário
                </button>
            </div>
        </form>
    </div>
</div>

<?php include "rodape.php"; ?>