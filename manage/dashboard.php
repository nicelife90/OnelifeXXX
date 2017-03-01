<?php
include $_SERVER['DOCUMENT_ROOT'] . '/lib/loader.php';
include $_SERVER['DOCUMENT_ROOT'] . '/sections/manage/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/sections/manage/menu.php';
core::IdentityVerification();

/**
 * Reset line
 */
if (isset($_GET['reset']) && core::csrf('dashboard') == $_GET['csrf']) {

    //delete images
    $images = $_DB->query("SELECT * FROM girls WHERE id = " . $_GET['line'])->fetch_object();
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $images->img_1)) {
        unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $images->img_1);
    }
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $images->img_1)) {
        unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $images->img_1);
    }
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $images->img_2)) {
        unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $images->img_2);
    }
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $images->img_2)) {
        unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $images->img_2);
    }
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $images->img_3)) {
        unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $images->img_3);
    }
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $images->img_3)) {
        unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $images->img_3);
    }
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $images->img_4)) {
        unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $images->img_4);
    }
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $images->img_4)) {
        unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $images->img_4);
    }
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $images->img_5)) {
        unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $images->img_5);
    }
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $images->img_5)) {
        unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $images->img_5);
    }
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $images->img_6)) {
        unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $images->img_6);
    }
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $images->img_6)) {
        unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $images->img_6);
    }


    //reset query
    $q = "  UPDATE
                `girls`
            SET
                `working` = 0,
                `img_1` = NULL,
                `img_2` = NULL,
                `img_3` = NULL,
                `img_4` = NULL,
                `img_5` = NULL,
                `img_6` = NULL,
                `name` = NULL,
                `age` = NULL,
                `size` = NULL,
                `weight` = NULL,
                `chest` = NULL,
                `hairs` = NULL,
                `eyes` = NULL,
                `quality` = NULL
            WHERE
                `id` = " . $_GET['line'];

    if ($_DB->query($q)) {
        core::setMessage("Opération terminé!", "success");
    }
    else {
        core::setMessage("Une erreur s'est produite : " . $_DB->error, "danger");
    }

}

/**
 * Reset line
 */
if (isset($_GET['on']) && core::csrf('dashboard') == $_GET['csrf']) {

    $q = "  UPDATE
                `girls`
            SET
                `working` = 1
            WHERE
                `id` = " . $_GET['line'];

    if ($_DB->query($q)) {
        core::setMessage("Opération terminé!", "success");
    }
    else {
        core::setMessage("Une erreur s'est produite : " . $_DB->error, "danger");
    }

}

/**
 * Reset line
 */
if (isset($_GET['off']) && core::csrf('dashboard') == $_GET['csrf']) {

    $q = "  UPDATE
                `girls`
            SET
                `working` = 0
            WHERE
                `id` = " . $_GET['line'];

    if ($_DB->query($q)) {
        core::setMessage("Opération terminé!", "success");
    }
    else {
        core::setMessage("Une erreur s'est produite : " . $_DB->error, "danger");
    }

}

/**
 * Get girls from database
 */
$girls = $_DB->query("SELECT * FROM girls");
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h2 class="sub-header">Gestion du personnel</h2>
    <a class="btn btn-success pull-right" target="_blank"
       href="<?php echo core::rootpath() . '/accueil.php'; ?>"><i class="fa fa-eye fa-fw"></i> Voir le site web</a>
    <div class="clearfix"></div>
    <br/>
    <?php
    core::getMessage();
    core::csrf('dashboard', true);
    ?>

    <div class="table-responsive">
        <table class="table table-striped table-condensed">
            <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Âge</th>
                <th>Grandeur</th>
                <th>Poids</th>
                <th>Poitrine</th>
                <th>Yeux</th>
                <th>Cheveux</th>
                <th>Point fort</th>
                <th>En service</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($girl = $girls->fetch_object()) {

                $reset_link = core::rootpath() . '/manage/dashboard.php?reset&csrf=' . core::csrf('dashboard') . '&line=' . $girl->id;
                $on_link = core::rootpath() . '/manage/dashboard.php?on&csrf=' . core::csrf('dashboard') . '&line=' . $girl->id;
                $off_link = core::rootpath() . '/manage/dashboard.php?off&csrf=' . core::csrf('dashboard') . '&line=' . $girl->id;
                $edit_link = core::rootpath() . '/manage/edit.php?girl=' . $girl->id;
                ?>

                <tr>
                    <td><?php echo $girl->id; ?></td>
                    <td><?php echo $girl->name; ?></td>
                    <td><?php echo $girl->age; ?></td>
                    <td><?php echo $girl->size; ?></td>
                    <td><?php echo $girl->weight; ?></td>
                    <td><?php echo $girl->chest; ?></td>
                    <td><?php echo $girl->hairs; ?></td>
                    <td><?php echo $girl->eyes; ?></td>
                    <td><?php echo $girl->quality; ?></td>
                    <td><?php echo core::workingAdmin($girl->working); ?></td>
                    <td>
                        <a class="btn btn-success btn-sm" data-toggle="tooltip" title="Mettre en service"
                           href="<?php echo $on_link; ?>"><i
                                    class="fa fa-arrow-up fa-fw"></i> </a>
                        <a class="btn btn-danger btn-sm" data-toggle="tooltip" title="Mettre en congé"
                           href="<?php echo $off_link; ?>"><i
                                    class="fa fa-arrow-down fa-fw"></i> </a>
                        <a class="btn btn-primary btn-sm" data-toggle="tooltip" title="Modifier la fiche"
                           href="<?php echo $edit_link; ?>"><i
                                    class="fa fa-pencil fa-fw"></i> </a>
                        <a class="btn btn-warning btn-sm confirm" data-toggle="tooltip" title="Supprimer cette fiche"
                           href="<?php echo $reset_link; ?>"><i class="fa fa-trash fa-fw"></i> </a>
                    </td>
                </tr>

                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<script>

    /**
     * Tooltip
     */
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });


    /**
     * Confirm modal
     */
    $("a.confirm").click(function (e) {
        e.preventDefault();
        var href = $(this).attr('href');
        bootbox.confirm({
            title: "Attention!",
            message: "Êtes-vous certain de vouloir remettre la fiche à zéro?",
            buttons: {
                cancel: {
                    className: 'btn-success',
                    label: '<i class="fa fa-times"></i> Annuler'
                },
                confirm: {
                    className: 'btn-danger',
                    label: '<i class="fa fa-check"></i> Continuer'
                }
            },
            callback: function (result) {
                if (result)
                    window.location.href = href;
            }
        });
    });
</script>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/sections/manage/footer.php';
?>
