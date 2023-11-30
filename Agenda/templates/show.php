<?php
include_once("header.php");
?>
<div id="view-contact-container">

<div class="show p-4">
    <h1 id="main-title"> <?= $onlyContato["Nome"]?></h1>
        
        <p class="bold">CPF:</p>
        <p><?= $onlyContato["Cpf"]?></p>
        <p class="bold">Data de nascimento:</p>
        <p><?= $onlyContato["Data_nasc"]?></p>
        <p class="bold">Endereço:</p>
        <p><?= $onlyContato["Endereco"]?></p>
        <p class="bold">Data inicio:</p>
        <p><?= $onlyContato["Data_inicio"]?></p>
        <p class="bold">Curso:</p>
        <p><?= $onlyContato["Curso"]?></p>
        <p class="bold">Graduação:</p>
        <p><?= $onlyContato["Graduacao"]?></p>
        <p class="bold">Pós graduação:</p>
        <p><?= $onlyContato["Pos_graduacao"]?></p>
        <p class="bold">Carga horária:</p>
        <p><?= $onlyContato["Carga_h"]?></p>
      
    </div>
</div>

<?php include_once("backbtn.php"); ?>

<?php
include_once("footer.php");
?>