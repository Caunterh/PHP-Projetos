<?php

include_once("header.php");

?>
<div class="container">
    <h1 id="main-title">Registrar Professor</h1>
    <form id="create-form"
    action="<?=$BASE_URL?>/../config/processamento.php" method="POST">
    <input type="hidden" name="type" value="create">
    <div class="form-group">
        <label for="name">Nome do contato:</label>
        <input type="text" class="form-control" id="Nome" name="Nome"
        placeholder="digite o nome" required>
    </div>
    <div class="form-group">
        <label for="cpf">CPF:</label>
        <input type="number" class="form-control" id="Cpf" name="Cpf"
        placeholder="digite o CPF" required>
    </div>
    <div class="form-group">
        <label for="data_nasc">Data de nascimento:</label>
        <input type="date" class="form-control" id="Data_nasc" name="Data_nasc"
        placeholder="digite a data de nascimento" required>
    </div>
    <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="text" class="form-control" id="Endereco" name="Endereco"
        placeholder="digite o endereço" required>
    </div>
    <div class="form-group">
        <label for="data_inicio">Data de início:</label>
        <input type="date" class="form-control" id="Data_inicio" name="Data_inicio"
        placeholder="digite a data de início" required>
    </div>
    <div class="form-group">
        <label for="curso">Curso:</label>
        <input type="text" class="form-control" id="Curso" name="Curso"
        placeholder="digite o curso" required>
    </div>
    <div class="form-group">
        <label for="graduacao">Graduação:</label>
        <input type="text" class="form-control" id="Graduacao" name="Graduacao"
        placeholder="digite a graduação" required>
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
        <input type="text" class="form-control" id="Carga_h" name="Carga_h"
        placeholder="digite a carga horária" required>
    </div>
<br>
<button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>
<div class="container" id="view-contact-container">
<?php include_once("backbtn.php"); ?>
<?php

include_once("footer.php");

?>