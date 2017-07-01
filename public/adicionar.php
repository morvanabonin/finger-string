<?php
    $settings = require __DIR__ . '/../configs/settings.php';
    $settings = $settings["settings"];

    function getConnection($settings) {;
        $dbh = new PDO("mysql:host={$settings['db']['host']};dbname={$settings['db']['dbname']}",
            $settings['db']['user'],
            $settings['db']['pass']);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
    }

    $db = getConnection($settings);

    $titulo = $_POST['titulo'];
    $ano = $_POST['ano'];
    $descricao = $_POST['descricao'];


    /*insert($titulo, $ano, $descricao) {

    }*/

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<table align="center" width="100%">
    <tr>
        <td>
            <h1 align="center">FORMULARIO DE CADASTRO</h1>
        </td>
    </tr>
    <tr>
        <td align="center">
            <form action="adicionar.php" method="POST">
                Titulo: <input type="text" name="titulo" size="40"><br><br>

                Ano: <input type="date" name="ano" maxlength="10" size="40"><br><br>

                Descrição: <input type="text" name="descricao" maxlength="11" size="40"><br><br>


                <br>Tipo:
                <select name="tipo">
                    <option value="acao"> Ação</option>
                    <option value="comedia" selected> Comédia</option>
                    <option value="aventura" selected> Aventura</option>
                    <option value="desenho" selected> Desenho</option>
                    <option value="romance" selected> Romance</option>

                </select>
                <br><br><input type="submit" value="Enviar">
                <input type="reset" value ="Limpar dados">
            </form>
        </td>
    </tr>
</table>

</body>
</html>