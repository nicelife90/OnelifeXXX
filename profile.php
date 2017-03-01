<?php
include $_SERVER['DOCUMENT_ROOT'] . '/lib/loader.php';
include $_SERVER['DOCUMENT_ROOT'] . '/sections/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/sections/menu.php';

/**
 * Query
 */
$girl = $_DB->query("SELECT * FROM girls WHERE id = '" . $_GET['girl'] . "'")->fetch_object();

if (!is_object($girl)) {
    header("Location: " . core::rootpath() . '/accueil.php');
    exit;
}



?>


<script type="text/javascript">
    i1 = new Image;
    i1.src = "<?php echo core::rootpath();?>/uploads/<?php echo core::img($girl->img_2); ?>";
    i2 = new Image;
    i2.src = "<?php echo core::rootpath();?>/uploads/<?php echo core::img($girl->img_3); ?>";
    i3 = new Image;
    i3.src = "<?php echo core::rootpath();?>/uploads/<?php echo core::img($girl->img_4); ?>";
    i4 = new Image;
    i4.src = "<?php echo core::rootpath();?>/uploads/<?php echo core::img($girl->img_5); ?>";
    i5 = new Image;
    i5.src = "<?php echo core::rootpath();?>/uploads/<?php echo core::img($girl->img_6); ?>";</SCRIPT>

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td class="bg-certifion">Nous certifions que tous nos escortes sont agées de 18 ans et plus et que toutes les
            photos affichées sur ce site son celles de nos modèles.
        </td>
    </tr>
</table>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td class="bg-info">INFORMATION POUR <span style="font-size: 15px;"><?php echo $girl->name; ?></span></td>
    </tr>
</table>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr valign="top">
        <td width="15"><img src="<?php echo core::rootpath(); ?>/asset/images/left-side.png" height="579" border="0"
                            ALT=""></td>
        <td width="520">
            <table width="520" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="08"></td>
                </tr>
            </table>
            <table width="520" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr valign="top">
                    <td height="180" bgcolor="#333333">
                        <table class="description" width="520" border="0" align="center" cellpadding="5"
                               cellspacing="0">
                            <tr valign="top">
                                <th width="90">Âge :</th>
                                <td width="90"><?php echo $girl->age; ?></td>
                                <th width="90">Point fort :</th>
                                <td><?php echo $girl->quality; ?></td>
                            </tr>
                            <tr valign="top">
                                <th>Grandeur :</th>
                                <td><?php echo $girl->size; ?></td>
                            </tr>
                            <tr valign="top">
                                <th>Poids :</th>
                                <td><?php echo $girl->weight; ?></td>
                            </tr>
                            <tr valign="top">
                                <th>Poitrine :</th>
                                <td><?php echo $girl->chest; ?></td>
                            </tr>
                            <tr valign="top">
                                <th>Yeux :</th>
                                <td><?php echo $girl->eyes; ?></td>
                            </tr>
                            <tr valign="top">
                                <th>Cheveux :</th>
                                <td><?php echo $girl->hairs; ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table width="520" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="08"></td>
                </tr>
            </table>
            <table width="520" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td><img src="<?php echo core::rootpath(); ?>/uploads/<?php echo core::img($girl->img_1); ?>"
                             width="165" height="215"
                             border="0"></td>
                    <td><img src="<?php echo core::rootpath(); ?>/asset/images/12.png" width="12" height="215"
                             border="0"></td>
                    <td onMouseOver="nomimage1.src=i1.src"
                        onMouseOut="nomimage1.src='<?php echo core::rootpath(); ?>/uploads/<?php echo core::img($girl->img_1); ?>'">
                        <img
                                src="<?php echo core::rootpath(); ?>/uploads/<?php echo core::img($girl->img_2); ?>"
                                width="165" height="215"
                                border="0"></td>
                    <td><img src="<?php echo core::rootpath(); ?>/asset/images/13.png" width="13" height="215"
                             border="0"></td>
                    <td onMouseOver="nomimage1.src=i2.src"
                        onMouseOut="nomimage1.src='<?php echo core::rootpath(); ?>/uploads/<?php echo core::img($girl->img_1); ?>'">
                        <img
                                src="<?php echo core::rootpath(); ?>/uploads/<?php echo core::img($girl->img_3); ?>"
                                width="165" height="215"
                                border="0"></td>
                </tr>
            </table>
            <table width="520" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="10" bgcolor="#000000"></td>
                </tr>
            </table>
            <table width="520" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td onMouseOver="nomimage1.src=i3.src"
                        onMouseOut="nomimage1.src='<?php echo core::rootpath(); ?>/uploads/<?php echo core::img($girl->img_1); ?>'">
                        <img
                                src="<?php echo core::rootpath(); ?>/uploads/<?php echo core::img($girl->img_4); ?>"
                                width="165" height="215"
                                border="0"></td>
                    <td><img src="<?php echo core::rootpath(); ?>/asset/images/12.png" width="13" height="215"
                             border="0"></td>
                    <td onMouseOver="nomimage1.src=i4.src"
                        onMouseOut="nomimage1.src='<?php echo core::rootpath(); ?>/uploads/<?php echo core::img($girl->img_1); ?>'">
                        <img
                                src="<?php echo core::rootpath(); ?>/uploads/<?php echo core::img($girl->img_5); ?>"
                                width="165" height="215"
                                border="0"></td>
                    <td><img src="<?php echo core::rootpath(); ?>/asset/images/13.png" width="13" height="215"
                             border="0"></td>
                    <td onMouseOver="nomimage1.src=i5.src"
                        onMouseOut="nomimage1.src='<?php echo core::rootpath(); ?>/uploads/<?php echo core::img($girl->img_1); ?>'">
                        <img
                                src="<?php echo core::rootpath(); ?>/uploads/<?php echo core::img($girl->img_6); ?>"
                                width="165" height="215"
                                border="0"></td>
                </tr>
            </table>
        </td>
        <td width="465"><img src="<?php echo core::rootpath(); ?>/uploads/<?php echo core::img($girl->img_1); ?>"
                             width="455" height="650"
                             border="0" hspace="0" vspace="0"
                             name="nomimage1" alt=""></td>
    </tr>
</table>


<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td><img src="<?php echo core::rootpath(); ?>/asset/images/bas.png" width="1000" height="45" border="0">
        </td>
    </tr>
</table>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/sections/footer.php';
?>

