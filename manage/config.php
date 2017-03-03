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
    <h2 class="sub-header">Gestion des configurations</h2>

    <?php
    core::getMessage();
    core::csrf('config', true);

    ?>
    <form action="<?php echo core::rootpath() . '/manage/config.php'; ?>" method="post"
          enctype="multipart/form-data">
        <input type="hidden" name="csrf" value="<?php echo core::csrf('config'); ?>">
        <div class="panel panel-primary">
            <div class="panel-heading"><strong>Générale</strong></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="phone">Téléphone</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user-circle fa-fw"></i> </span>
                            <input class="form-control" id="phone" type="text" name="phone"
                                   value="<?php echo config::get('phone'); ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="mail">Courriel</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i> </span>
                            <input class="form-control" id="mail" type="text" name="mail"
                                   value="<?php echo config::get('mail'); ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="input-group">
                            <input class="btn btn-success btn-lg" type="submit" name="save" value="Sauvegarder"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
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

    /**
     * File browser handle
     */
    function HandleBrowse(browser) {
        var fileinput = document.getElementById(browser);
        fileinput.click();
    }

    function Handlechange(browser, input) {
        var fileinput = document.getElementById(browser);
        var textinput = document.getElementById(input);
        textinput.value = fileinput.value;
    }
</script>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/sections/manage/footer.php';
?>
