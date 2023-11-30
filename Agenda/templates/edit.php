<?php
include_once("header.php");
?>
<div class="container">
    <?php include_once("backbtn.php"); ?>
    <h1 id="main-title">Editar Contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>/../config/processamento.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $onlyContato['id'] ?>">
        <div class="form-group">
            <label for="nome">Nome do contato:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="digite o nome" value="<?= $onlyContato['Nome'] ?>" required>
        </div>
        
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="number" class="form-control" id="Cpf" name="Cpf" placeholder="digite o CPF" value="<?= $onlyContato['Cpf'] ?>" required>
        </div>
        <div class="form-group">
            <label for="data_nasc">Data de nascimento:</label>
            <input type="date" class="form-control" id="Data_nasc" name="Data_nasc" placeholder="digite a data de nascimento" value="<?= $onlyContato['Data_nasc'] ?>" required>
        </div>
        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <input type="text" class="form-control" id="Endereco" name="Endereco" placeholder="digite o endereço" value="<?= $onlyContato['Endereco'] ?>" required>
        </div>
        <div class="form-group">
            <label for="data_inicio">Data de início:</label>
            <input type="date" class="form-control" id="Data_inicio" name="Data_inicio" placeholder="digite a data de início" value="<?= $onlyContato['Data_inicio'] ?>" required>
        </div>
        <div class="form-group">
            <label for="curso">Curso:</label>
            <input type="text" class="form-control" id="Curso" name="Curso" placeholder="digite o curso" value="<?= $onlyContato['Curso'] ?>" required>
        </div>
        <div class="form-group">
            <label for="graduacao">Graduação:</label>
            <input type="text" class="form-control" id="Graduacao" name="Graduacao" placeholder="digite a graduação" value="<?= $onlyContato['Graduacao'] ?>" required>
        </div>
        <div class="form-group">
        <div class="form-group">
        <label for="graduacao">Pós Graduação:</label>
        <select name="Pos_graduacao">
        <option value="Mestrado">Mestrado</option>
        <option value="Doutorado">Doutorado</option>
        <option value="Pós Doutorado">Pós Doutorado</option>
        <option value="Residência">Residência</option>
        <option value="Lato Sensu">Lato Sensu</option>
        <option value="Stricto Sensu">Stricto Sensu</option>
        </select>
    </div>
        </div>
        <div class="form-group">
            <label for="carga_h">Carga horária:</label>
            <input type="text" class="form-control" id="Carga_h" name="Carga_h" placeholder="digite a carga horária" value="<?= $onlyContato['Carga_h'] ?>" required>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
<?php
include_once("footer.php");
?>