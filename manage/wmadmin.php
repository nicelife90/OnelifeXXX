<?php
include $_SERVER['DOCUMENT_ROOT'] . '/lib/loader.php';
include $_SERVER['DOCUMENT_ROOT'] . '/sections/manage/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/sections/manage/menu.php';
core::IdentityVerification();


/**
 * Save
 */
if (isset($_POST['save']) && core::csrf('config') == $_POST['csrf']) {

    if (
        config::set('phone', $_POST['phone']) &&
        config::set('mail', $_POST['mail'])
    ) {
        core::setMessage("La mise à jour est terminé!", "success");
    }
    else {
        core::setMessage("Une erreur s'est produite : " . $_DB->error, "danger");
    }

}

?>


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h2 class="sub-header">Gestion des courriels</h2>

    <?php
    core::getMessage();
    core::csrf('config', true);

    ?>

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    Gestion
                </div>
                <div class="panel-body">
                    <table class="table table-condensed table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Utilisateur</th>
                            <th>Mot de passe</th>
                            <th>Gestion</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>onelifexxx@onelifexxx.com</td>
                            <td>Onel!fe213!</td>
                            <td><a class="btn btn-primary btn-sm" href="http://wmadmin.onelifexxx.com" target="_blank"><i
                                            class="fa fa-cog fa-fw"></i> Ouvrir la gestion</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Utilisation
                </div>
                <div class="panel-body">
                    <table class="table table-condensed table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Utilisateur</th>
                            <th>Mot de passe</th>
                            <th>Gestion</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>onelifexxx@onelifexxx.com</td>
                            <td>Onel!fe213!</td>
                            <td><a class="btn btn-primary btn-sm" href="http://webmail.onelifexxx.com" target="_blank"><i
                                            class="fa fa-cog fa-fw"></i> Ouvrir la webmail</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<script>

    /**
     * Tooltip
     */
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

</script>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/sections/manage/footer.php';
?>
