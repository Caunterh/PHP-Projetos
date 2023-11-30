<?php
include_once("conexao.php");
include_once("url.php");
$data = $_POST;
if (!empty($data)) {
    if ($data["type"] === "create") {
        try {
            echo "criar dado";
            $nome = $data["Nome"];
            $cpf = $data["Cpf"];
            $data_nasc = $data["Data_nasc"];
            $endereco = $data["Endereco"];
            $data_inicio = $data["Data_inicio"];
            $curso = $data["Curso"];
            $graduacao = $data["Graduacao"];
            $pos_graduacao = $data["Pos_graduacao"];
            $carga_h= $data["Carga_h"];




            $query = "INSERT INTO professores (Nome, Cpf, Data_nasc, Endereco, Data_inicio, Curso, Graduacao, Pos_graduacao, Carga_h) VALUES (:nome, :cpf, :data_nasc, :endereco, :data_inicio, :curso, :graduacao, :pos_graduacao, :carga_h)";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":cpf", $cpf);
            $stmt->bindParam(":data_nasc", $data_nasc);
            $stmt->bindParam(":endereco", $endereco);
            $stmt->bindParam(":data_inicio", $data_inicio);
            $stmt->bindParam(":curso", $curso);
            $stmt->bindParam(":graduacao", $graduacao);
            $stmt->bindParam(":pos_graduacao", $pos_graduacao);
            $stmt->bindParam(":carga_h", $carga_h);
            $stmt->execute();

        } catch (PDOException $e) {
            $erro = $e->getMessage();
            echo $erro;
        }
        header("Location:" . $BASE_URL . "/../templates/index.php");
    } else if ($data["type"] === "edit") {
        try {
            $nome = $data["nome"];
            $idPost = $data["id"];
            $cpf = $data["Cpf"];
            $data_nasc = $data["Data_nasc"];
            $endereco = $data["Endereco"];
            $data_inicio = $data["Data_inicio"];
            $curso = $data["Curso"];
            $graduacao = $data["Graduacao"];
            $pos_graduacao = $data["Pos_graduacao"];
            $carga_h = $data["Carga_h"];

            $query = "UPDATE professores SET
                                        nome=:nome,
                                        cpf=:cpf,
                                        data_nasc=:data_nasc,
                                        endereco=:endereco,
                                        data_inicio=:data_inicio,
                                        curso=:curso,
                                        graduacao=:graduacao,
                                        pos_graduacao=:pos_graduacao,
                                        carga_h=:carga_h

                        WHERE id=:idPost";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":idPost", $idPost);
            $stmt->bindParam(":cpf", $cpf);
            $stmt->bindParam(":data_nasc", $data_nasc);
            $stmt->bindParam(":endereco", $endereco);
            $stmt->bindParam(":data_inicio", $data_inicio);
            $stmt->bindParam(":curso", $curso);
            $stmt->bindParam(":graduacao", $graduacao);
            $stmt->bindParam(":pos_graduacao", $pos_graduacao);
            $stmt->bindParam(":carga_h", $carga_h);
            $stmt->execute();
        } catch (PDOException $e) {
            $erro = $e->getMessage();
            echo $erro;
        }
        header("Location:" . $BASE_URL . "/../templates/index.php");
    } else if ($data["type"] === "delete") {
        try {
            $idDelete = $data["id"];
            $query = "DELETE FROM professores WHERE id=:idDelete";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":idDelete", $idDelete);
            $stmt->execute();
        } catch (PDOException $e) {
            $erro = $e->getMessage();
            echo $erro;
        }
        header("Location:" . $BASE_URL . "/../templates/index.php");
    } //end if delete
} else {
    $id;
    if (!empty($_GET)) {
        $id = $_GET["id"];
    }
    if (!empty($id)) {
        $query = "SELECT * FROM professores WHERE id= :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $onlyContato = $stmt->fetch(); // retorna apena a linha referente ao id
    } else {
        $query = "SELECT * FROM professores";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $AllContatos = [];
        $AllContatos = $stmt->fetchAll(); // retorna todas as linhas para a variavel
    }
} //end post
?>