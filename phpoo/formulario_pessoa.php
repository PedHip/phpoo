<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Formulário do carro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <div class="container">
        <h3>Preencha os Dados</h3>
        <form method="post">
            <div class="form-group">
                <label for="nome">nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="idade">idade:</label>
                <input type="date" class="form-control" id="idade" name="idade" required>
            </div>
            <div class="form-group">
                <label for="profissao">profissao:</label>
                <input type="text" class="form-control" id="profissao" name="profissao" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <div>
            <?php
                include 'Pessoa.php';
                if ($_SERVER["REQUEST_METHOD"]=="POST"){
                    $nome = $_POST['nome'];
                    $idade = $_POST['idade'];
                    $profissao = $_POST['profissao'];

                    $pessoa = new Pessoa($nome, $idade, $profissao);
                    echo "Pessoa 1 " .$pessoa->apresentar();
                }
            ?>
        </div>
        
    </div>
</body>
</html>