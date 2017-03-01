<?php
include $_SERVER['DOCUMENT_ROOT'] . '/lib/loader.php';
include $_SERVER['DOCUMENT_ROOT'] . '/sections/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/sections/menu.php';
?>


<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td><img src="asset/images/titre_reservation.png" width="1000" height="39" border="0"></td>
    </tr>
</table>

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr valign="top">
        <td class="bg-reservation"><br/><br/><br/>
            Le tarif varie selon le modèle et l’emplacement du client.<br/><br/>
            Pour réservations, veuillez téléphoner au <?php echo config::get('phone'); ?>
        </td>
    </tr>
</table>

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td><img src="asset/images/bas.png" width="1000" height="45" border="0"></td>
    </tr>
</table>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/sections/footer.php';
?>

