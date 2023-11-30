<?php
include_once("header.php");
?>

<div class="container">
    <div class="container-fluid text-center">
        <h1 id="main-title">Professores</h1>
    </div>
    <?php if (count($AllContatos) > 0): ?>

        <table class="table" id="contacts-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($AllContatos as $contato): ?>
                    <tr>
                        <td scope="row">
                            <?= $contato["id"] ?>
                        </td>
                        <td scope="row">
                            <?= $contato["Nome"] ?>
                        </td>
                        <td scope="row">
                            <?= $contato["Curso"] ?>
                        </td>
                        <td class="actions">
                            <a href="<?= $BASE_URL ?>/show.php?id=<?= $contato["id"] ?>"><i
                                    class="fas fa-eye check-icon"></i></a>
                            <a href="<?= $BASE_URL ?>/edit.php?id=<?= $contato["id"] ?>"><i
                                    class="fas fa-edit edit-icon"></i></a>
                            <form class="delete-form" action="<?= $BASE_URL ?>/../config/processamento.php" method="POST">
                                <input type="hidden" name="type" value="delete">
                                <input type="hidden" name="id" value="<?= $contato["id"] ?>">
                                <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                            </form>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
    <?php else: ?>
        <p id="empty-list-text">Não há professores Registrados.
            <a href="<?= $BASE_URL ?>/create.php">Clique aqui para registrar um Professor</a>

        </p>
    <?php endif; ?>
</div>



<?php
include_once("footer.php");
?>