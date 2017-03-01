<?php
include $_SERVER['DOCUMENT_ROOT'] . '/lib/loader.php';
include $_SERVER['DOCUMENT_ROOT'] . '/sections/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/sections/menu.php';
?>


<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td><img src="<?php echo core::rootpath(); ?>/asset/images/titre-accueil.png" width="1000" height="39"
                 border="0"></td>
    </tr>
</table>

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr valign="top">
        <td class="bg-accueil">
            <br/>
            <span style="color:#f500c4;">AGENCE ONELIFE XXX</span> est une agence offrant des services haut de gamme
            d'accompagnement. <br>Nos demoiselles se déplacent.<br/>Nous garantissons les services et descriptions de
            toutes nos beautés. <br/><br/>
            Nos tarifs peuvent varier selon le besoin de notre clientèle traitée en toute confidentialit&eacute; et
            toujours avec <br/>&la plus grande discrétion. <span style="color:#f500c4">AGENCE ONELIFE XXX</span> offre
            des tarifs très compétitifs et professionnels. <br>Pour plus d'informations, nous vous invitons à
            communiquer avec nous au <u><?php echo config::get('phone'); ?></u>.

        </td>
    </tr>
</table>

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td><img src="<?php echo core::rootpath(); ?>/asset/images/bas.png" width="1000" height="45" border="0"></td>
    </tr>
</table>


<?php
include $_SERVER['DOCUMENT_ROOT'] . '/sections/footer.php';
?>




