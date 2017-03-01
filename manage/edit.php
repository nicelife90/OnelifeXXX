<?php
include $_SERVER['DOCUMENT_ROOT'] . '/lib/loader.php';
include $_SERVER['DOCUMENT_ROOT'] . '/sections/manage/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/sections/manage/menu.php';
core::IdentityVerification();


/**
 * Save
 */
if (isset($_POST['save']) && core::csrf('edit') == $_POST['csrf']) {


    do {

        /**
         * Get images data
         */
        $girl = $_DB->query("SELECT * FROM girls WHERE id = " . $_GET['girl'])->fetch_object();


        /**
         * Image 1
         */
        if ($girl->img_1 != $_POST['img1']) {

            //upload
            $result = upload::image('img1');
            if ($result['exit_code'] == 0) {
                $img1 = $result['file_name'];
            }
            else {
                core::setMessage(implode("<br/>", $result['file_name']), 'danger');
                break;
            }

            try {

                //generate small and big image from original
                image::generateSmall($img1, 'small_' . $img1);
                image::generateBig($img1, 'big_' . $img1);

                //delete original image
                unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $img1);

                //delete old image
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $girl->img_1)) {
                    unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $girl->img_1);
                }
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $girl->img_1)) {
                    unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $girl->img_1);
                }

            } catch (Exception $ex) {
                core::setMessage($ex->getMessage(), 'danger');
                break;
            }
        }
        else {
            $img1 = $_POST['img1'];
        }


        /**
         * Image 2
         */
        if ($girl->img_2 != $_POST['img2']) {

            $result = upload::image('img2');
            if ($result['exit_code'] == 0) {
                $img2 = $result['file_name'];
            }
            else {
                core::setMessage(implode("<br/>", $result['file_name']), 'danger');
                break;
            }

            try {

                //generate small and big image from original
                image::generateSmall($img2, 'small_' . $img2);
                image::generateBig($img2, 'big_' . $img2);

                //delete original image
                unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $img2);

                //delete old image
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $girl->img_2)) {
                    unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $girl->img_2);
                }
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $girl->img_2)) {
                    unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $girl->img_2);
                }

            } catch (Exception $ex) {
                core::setMessage($ex->getMessage(), 'danger');
                break;
            }
        }
        else {
            $img2 = $_POST['img2'];
        }


        /**
         * Image 3
         */
        if ($girl->img_3 != $_POST['img3']) {

            $result = upload::image('img3');
            if ($result['exit_code'] == 0) {
                $img3 = $result['file_name'];
            }
            else {
                core::setMessage(implode("<br/>", $result['file_name']), 'danger');
                break;
            }

            try {

                //generate small and big image from original
                image::generateSmall($img3, 'small_' . $img3);
                image::generateBig($img3, 'big_' . $img3);

                //delete original image
                unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $img3);

                //delete old image
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $girl->img_3)) {
                    unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $girl->img_3);
                }
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $girl->img_3)) {
                    unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $girl->img_3);
                }

            } catch (Exception $ex) {
                core::setMessage($ex->getMessage(), 'danger');
                break;
            }
        }
        else {
            $img3 = $_POST['img3'];
        }


        /**
         * Image 4
         */
        if ($girl->img_4 != $_POST['img4']) {

            $result = upload::image('img4');
            if ($result['exit_code'] == 0) {
                $img4 = $result['file_name'];
            }
            else {
                core::setMessage(implode("<br/>", $result['file_name']), 'danger');
                break;
            }

            try {

                //generate small and big image from original
                image::generateSmall($img4, 'small_' . $img4);
                image::generateBig($img4, 'big_' . $img4);

                //delete original image
                unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $img4);

                //delete old image
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $girl->img_4)) {
                    unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $girl->img_4);
                }
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $girl->img_4)) {
                    unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $girl->img_4);
                }

            } catch (Exception $ex) {
                core::setMessage($ex->getMessage(), 'danger');
                break;
            }
        }
        else {
            $img4 = $_POST['img4'];
        }


        /**
         * Image 5
         */
        if ($girl->img_5 != $_POST['img5']) {

            $result = upload::image('img5');
            if ($result['exit_code'] == 0) {
                $img5 = $result['file_name'];
            }
            else {
                core::setMessage(implode("<br/>", $result['file_name']), 'danger');
                break;
            }

            try {

                //generate small and big image from original
                image::generateSmall($img5, 'small_' . $img5);
                image::generateBig($img5, 'big_' . $img5);

                //delete original image
                unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $img5);

                //delete old image
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $girl->img_5)) {
                    unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $girl->img_5);
                }
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $girl->img_5)) {
                    unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $girl->img_5);
                }

            } catch (Exception $ex) {
                core::setMessage($ex->getMessage(), 'danger');
                break;
            }
        }
        else {
            $img5 = $_POST['img5'];
        }


        /**
         * Image 6
         */
        if ($girl->img_6 != $_POST['img6']) {

            $result = upload::image('img6');
            if ($result['exit_code'] == 0) {
                $img6 = $result['file_name'];
            }
            else {
                core::setMessage(implode("<br/>", $result['file_name']), 'danger');
                break;
            }

            try {

                //generate small and big image from original
                image::generateSmall($img6, 'small_' . $img6);
                image::generateBig($img6, 'big_' . $img6);

                //delete original image
                unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $img6);

                //delete old image
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $girl->img_6)) {
                    unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/small_' . $girl->img_6);
                }
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $girl->img_6)) {
                    unlink($_SERVER['DOCUMENT_ROOT'] . '/uploads/big_' . $girl->img_6);
                }

            } catch (Exception $ex) {
                core::setMessage($ex->getMessage(), 'danger');
                break;
            }
        }
        else {
            $img6 = $_POST['img6'];
        }


        /**
         * Prepare data
         */
        $size = $_POST['ft'] . "'" . $_POST['in'];
        $weight = $_POST['weight'] . ' Lbs';
        $chest = $_POST['chest'] . $_POST['letter'];
        $age = trim($_POST['age']) . ' ans';


        /**
         * Prepare query
         */
        $q = "  UPDATE
                    `girls`
                SET
                    `img_1` = '" . $_DB->escape_string($img1) . "',
                    `img_2` = '" . $_DB->escape_string($img2) . "',
                    `img_3` = '" . $_DB->escape_string($img3) . "',
                    `img_4` = '" . $_DB->escape_string($img4) . "',
                    `img_5` = '" . $_DB->escape_string($img5) . "',
                    `img_6` = '" . $_DB->escape_string($img6) . "',
                    `name` = '" . $_DB->escape_string($_POST['name']) . "',
                    `age` = '" . $_DB->escape_string($_POST['age']) . "',
                    `size` = '" . $_DB->escape_string($size) . "',
                    `weight` = '" . $_DB->escape_string($weight) . "',
                    `chest` = '" . $_DB->escape_string($chest) . "',
                    `hairs` = '" . $_DB->escape_string($_POST['hair']) . "',
                    `eyes` = '" . $_DB->escape_string($_POST['eye']) . "',
                    `quality` = '" . $_DB->escape_string($_POST['quality']) . "'
                WHERE
                    `id` = " . $_GET['girl'];

        if ($_DB->query($q)) {
            core::setMessage("La fiche a correctement été sauvegardée!", "success");
        }
        else {
            core::setMessage("Une erreur s'est produite : " . $_DB->error, "danger");
        }

        break;

    } while (0);
}

?>


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h2 class="sub-header">Gestion du personnel (Édition)</h2>
    <a class="btn btn-success btn-sm pull-right" href="<?php echo core::rootpath() . '/manage/dashboard.php'; ?>"><i
                class="fa fa-arrow-left fa-fw"></i> Retour à la liste</a>
    <div class="clearfix"></div>
    <br/>
    <?php
    core::getMessage();
    core::csrf('edit', true);


    /**
     * Get girl data
     */
    $girl = $_DB->query("SELECT * FROM girls WHERE id = " . $_GET['girl'])->fetch_object();

    /**
     * Size
     */
    if (isset($girl->size) && !empty($girl->size)) {
        $ft = explode("'", $girl->size)[0];
        $in = explode("'", $girl->size)[1];
    }

    /**
     * Weight
     */
    if (isset($girl->weight) && !empty($girl->weight)) {
        $weight = substr($girl->weight, 0, -3);
    }

    /**
     * Chest
     */
    if (isset($girl->chest) && !empty($girl->chest)) {
        $chest = substr($girl->chest, 0, -1);
        $chest_letter = substr($girl->chest, strlen($girl->chest) - 1);
    }

    /**
     * Age
     */
    if (isset($girl->age) && !empty($girl->age)) {
        $age = explode(" ", $girl->age)[0];
    }

    ?>
    <form action="<?php echo core::rootpath() . '/manage/edit.php?' . $_SERVER['QUERY_STRING']; ?>" method="post"
          enctype="multipart/form-data">
        <input type="hidden" name="csrf" value="<?php echo core::csrf('edit'); ?>">
        <div class="panel panel-primary">
            <div class="panel-heading"><strong>Générale</strong></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="name">Nom</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user-circle fa-fw"></i> </span>
                            <input class="form-control" id="name" type="text" name="name"
                                   value="<?php echo isset($girl->name) && !empty($girl->name) ? $girl->name : null ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="age">Âge</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i> </span>
                            <input class="form-control" id="age" type="text" name="age"
                                   value="<?php echo isset($age) && !empty($age) ? $age : null ?>">
                            <span class="input-group-addon">ans </span>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="ft">Pied</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-id-card-o fa-fw"></i> </span>
                            <input class="form-control" id="ft" type="text" name="ft"
                                   value="<?php echo isset($ft) && !empty($ft) ? $ft : null ?>">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <label for="in">Pouce</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-id-card-o fa-fw"></i> </span>
                            <input class="form-control" id="in" type="text" name="in"
                                   value="<?php echo isset($in) && !empty($in) ? $in : null ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="weight">Poid</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-balance-scale fa-fw"></i> </span>
                            <input class="form-control" id="weight" type="text" name="weight"
                                   value="<?php echo isset($weight) && !empty($weight) ? $weight : null ?>">
                            <span class="input-group-addon">Lbs </span>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="chest">Poitrine (Chiffre)</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-sort-numeric-asc fa-fw"></i> </span>
                            <input class="form-control" id="chest" type="text" name="chest"
                                   value="<?php echo isset($chest) && !empty($chest) ? $chest : null ?>">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <label for="letter">Poitrine (Lettre)</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-sliders fa-fw"></i> </span>
                            <select class="form-control" id="letter" name="letter">
                                <option value=""></option>
                                <option value="A" <?php echo isset($chest_letter) && !empty($chest_letter) && $chest_letter == 'A' ? 'selected' : null ?>>
                                    A
                                </option>
                                <option value="B" <?php echo isset($chest_letter) && !empty($chest_letter) && $chest_letter == 'B' ? 'selected' : null ?>>
                                    B
                                </option>
                                <option value="C" <?php echo isset($chest_letter) && !empty($chest_letter) && $chest_letter == 'C' ? 'selected' : null ?>>
                                    C
                                </option>
                                <option value="D" <?php echo isset($chest_letter) && !empty($chest_letter) && $chest_letter == 'D' ? 'selected' : null ?>>
                                    D
                                </option>
                                <option value="E" <?php echo isset($chest_letter) && !empty($chest_letter) && $chest_letter == 'E' ? 'selected' : null ?>>
                                    E
                                </option>
                                <option value="F" <?php echo isset($chest_letter) && !empty($chest_letter) && $chest_letter == 'F' ? 'selected' : null ?>>
                                    F
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="eye">Couleur des yeux</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-eye fa-fw"></i> </span>
                            <input class="form-control" id="eye" type="text" name="eye"
                                   value="<?php echo isset($girl->eyes) && !empty($girl->eyes) ? $girl->eyes : null ?>">
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="hair">Couleur des cheveux</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i> </span>
                            <input class="form-control" id="hair" type="text" name="hair"
                                   value="<?php echo isset($girl->hairs) && !empty($girl->hairs) ? $girl->hairs : null ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="quality">Point fort</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-diamond fa-fw"></i> </span>
                            <input class="form-control" id="quality" type="text" name="quality"
                                   value="<?php echo isset($girl->quality) && !empty($girl->quality) ? $girl->quality : null ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading"><strong>Images</strong></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="img1">Profile 1</label>
                        <input type="file" id="browse2" name="img1" style="display: none"
                               onChange="Handlechange('browse2', 'img1');"/>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-picture-o fa-fw"></i></span>
                            <input class="form-control" id="img1" type="text" name="img1"
                                   value="<?php echo isset($girl->img_1) && !empty($girl->img_1) ? $girl->img_1 : null ?>"
                                   readonly/>
                            <span class="input-group-btn">
                            <input class="btn btn-primary" type="button" value="Parcourir"
                                   onclick="HandleBrowse('browse2');"/>
                        </span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="img2">Profile 2</label>
                        <input type="file" id="browse3" name="img2" style="display: none"
                               onChange="Handlechange('browse3', 'img2');"/>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-picture-o fa-fw"></i></span>
                            <input class="form-control" id="img2" type="text" name="img2"
                                   value="<?php echo isset($girl->img_2) && !empty($girl->img_2) ? $girl->img_2 : null ?>"
                                   readonly/>
                            <span class="input-group-btn">
                            <input class="btn btn-primary" type="button" value="Parcourir"
                                   onclick="HandleBrowse('browse3');"/>
                        </span>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="img3">Profile 3</label>
                        <input type="file" id="browse4" name="img3" style="display: none"
                               onChange="Handlechange('browse4', 'img3');"/>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-picture-o fa-fw"></i></span>
                            <input class="form-control" id="img3" type="text" name="img3"
                                   value="<?php echo isset($girl->img_3) && !empty($girl->img_3) ? $girl->img_3 : null ?>"
                                   readonly/>
                            <span class="input-group-btn">
                            <input class="btn btn-primary" type="button" value="Parcourir"
                                   onclick="HandleBrowse('browse4');"/>
                        </span>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="img4">Profile 4</label>
                        <input type="file" id="browse5" name="img4" style="display: none"
                               onChange="Handlechange('browse5', 'img4');"/>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-picture-o fa-fw"></i></span>
                            <input class="form-control" id="img4" type="text" name="img4"
                                   value="<?php echo isset($girl->img_4) && !empty($girl->img_4) ? $girl->img_4 : null ?>"
                                   readonly/>
                            <span class="input-group-btn">
                            <input class="btn btn-primary" type="button" value="Parcourir"
                                   onclick="HandleBrowse('browse5');"/>
                        </span>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="img5">Profile 5</label>
                        <input type="file" id="browse6" name="img5" style="display: none"
                               onChange="Handlechange('browse6', 'img5');"/>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-picture-o fa-fw"></i></span>
                            <input class="form-control" id="img5" type="text" name="img5"
                                   value="<?php echo isset($girl->img_5) && !empty($girl->img_5) ? $girl->img_5 : null ?>"
                                   readonly/>
                            <span class="input-group-btn">
                            <input class="btn btn-primary" type="button" value="Parcourir"
                                   onclick="HandleBrowse('browse6');"/>
                        </span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="img6">Profile 6</label>
                        <input type="file" id="browse7" name="img6" style="display: none"
                               onChange="Handlechange('browse7', 'img6');"/>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-picture-o fa-fw"></i></span>
                            <input class="form-control" id="img6" type="text" name="img6"
                                   value="<?php echo isset($girl->img_6) && !empty($girl->img_6) ? $girl->img_6 : null ?>"
                                   readonly/>
                            <span class="input-group-btn">
                            <input class="btn btn-primary" type="button" value="Parcourir"
                                   onclick="HandleBrowse('browse7');"/>
                        </span>
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

                            <a class="btn btn-primary btn-lg" target="_blank"
                               href="<?php echo core::rootpath() . '/profile.php?girl=' . $girl->id; ?>">Voir le
                                profile</a>
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
