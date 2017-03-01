<?php
include $_SERVER['DOCUMENT_ROOT'] . '/lib/loader.php';
include $_SERVER['DOCUMENT_ROOT'] . '/sections/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/sections/menu.php';
?>


<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td><img src="asset/images/titre_recrutement.png" width="1000" height="39" border="0"></td>
    </tr>
</table>

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr valign="top">
        <td class="bg-recrutement"><br/>
            <span style="color: #f500c4;">AGENCE ONELIFE XXX</span> est toujours &agrave; la recherche de nouvelles
            beaut&eacute;s
            pour sa client&egrave;le. Les demoiselles d&eacute;sirant<br/>postuler &agrave;
            notre agence doivent &ecirc;tre ag&eacute;es entre 18 et 35 ans, donner une description pr&eacute;cise et ad&eacute;quate
            de<br/>leurs attributs physique, allure en g&eacute;n&eacute;ral.
            Vous pouvez<br/>nous rejoindre en tout temps au
            <?php echo config::get('phone'); ?>.<br/><br/>
            Nous vous contacterons par la suite, afin de fixer un rendez-vous. Nous offrons un taux horaire de<br/>l'heure
            tr&egrave;s comp&eacute;titif ainsi que d'excellentes conditions de travail pour nos demoiselles qui d&eacute;sirent
            offrir<br/>leurs services &acirc; notre client&egrave;le. <br/><br/>Puisque
            nous offrons une gamme de services tr&egrave;s vari&eacute;s nos demoiselles devront sp&eacute;cifier leur
            <br/>exp&eacute;rience de travail dans le domaine de
            l'accompagnement ou tout autres domaines connexes. <br/>
            Au plaisir de recevoir votre canditature. <br><br>
            <span style="color: #ff00cc;">T&eacute;l&eacute;phone :</span> <?php echo config::get('phone'); ?><br/>
            <span style="color: #ff00cc;">Courriel :</span> <a class="pink"
                                                               href="mailto:<?php echo config::get('mail'); ?>"><?php echo config::get('mail'); ?></a>
            <br/><br/>
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

