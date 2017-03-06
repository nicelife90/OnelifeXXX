<?php
include $_SERVER['DOCUMENT_ROOT'] . '/lib/loader.php';
include $_SERVER['DOCUMENT_ROOT'] . '/sections/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/sections/menu.php';
?>

    <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td class="babillard">Bienvenue sur ONELIFE!
                <br> VRAIES PHOTOS 100% GARANTIES
                <br><span style="color:#ff0000;"><br>
                CONTACTER NOUS POUR PLUS D'INFORMATIONS.<br/><?php echo config::get('phone'); ?></span></td>
        </tr>
    </table>
    <br/>
    <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <img src="<?php echo core::rootpath(); ?>/asset/images/titre_day.png" width="1000" height="39"
                     border="0">
            </td>
        </tr>
    </table>

<?php

/**
 * Girls Query
 */
$girls_query = $_DB->query("SELECT * FROM girls");
$girls = [];
while ($girl = $girls_query->fetch_object()) {
    $girls[] = $girl;
}
?>

    <!-- b1 -->

    <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="10">
                <img src="<?php echo core::rootpath(); ?>/asset/images/left.png" height="305" border="0">
            </td>

            <!-- G1 -->
            <td width="196"><img
                        src="<?php echo core::rootpath(); ?>/asset/images/<?php echo core::working($girls[0]->working, $girls[0]->img_1); ?>"
                        width="196"
                        height="39" border="0">
                <br>
                <a href="<?php echo core::rootpath(); ?>/<?php echo core::profile(1, $girls[0]->img_1); ?>">
                    <div class="girl-container">
                        <?php echo !is_null($girls[0]->name) ? '<div class="girl-tag">' . $girls[0]->name . '</div>' : null ?>
                        <img src="<?php echo core::rootpath(); ?>/uploads/<?php echo core::baseImg($girls[0]->img_1); ?>"
                             height="302" width="196" border="0">
                    </div>
                </a>
            </td>
            <!-- /G1 -->

            <!-- G2 -->
            <td width="196"><img
                        src="<?php echo core::rootpath(); ?>/asset/images/<?php echo core::working($girls[1]->working, $girls[1]->img_1); ?>"
                        width="196"
                        height="39" border="0">
                <br>
                <a href="<?php echo core::rootpath(); ?>/<?php echo core::profile(2, $girls[1]->img_1); ?>">
                    <div class="girl-container">
                        <?php echo !is_null($girls[1]->name) ? '<div class="girl-tag">' . $girls[1]->name . '</div>' : null ?>
                        <img src="<?php echo core::rootpath(); ?>/uploads/<?php echo core::baseImg($girls[1]->img_1); ?>"
                             height="302" width="196" border="0">
                    </div>
                </a>
            </td>
            <!-- /G2 -->

            <!-- G3 -->
            <td width="196"><img
                        src="<?php echo core::rootpath(); ?>/asset/images/<?php echo core::working($girls[2]->working, $girls[2]->img_1); ?>"
                        width="196"
                        height="39" border="0">
                <br>
                <a href="<?php echo core::rootpath(); ?>/<?php echo core::profile(3, $girls[2]->img_1); ?>">
                    <div class="girl-container">
                        <?php echo !is_null($girls[2]->name) ? '<div class="girl-tag">' . $girls[2]->name . '</div>' : null ?>
                        <img src="<?php echo core::rootpath(); ?>/uploads/<?php echo core::baseImg($girls[2]->img_1); ?>"
                             height="302" width="196" border="0">
                    </div>
                </a>
            </td>
            <!-- /G3 -->

            <!-- G4 -->
            <td width="196"><img
                        src="<?php echo core::rootpath(); ?>/asset/images/<?php echo core::working($girls[3]->working, $girls[3]->img_1); ?>"
                        width="196"
                        height="39" border="0">
                <br>
                <a href="<?php echo core::rootpath(); ?>/<?php echo core::profile(4, $girls[3]->img_1); ?>">
                    <div class="girl-container">
                        <?php echo !is_null($girls[3]->name) ? '<div class="girl-tag">' . $girls[3]->name . '</div>' : null ?>
                        <img src="<?php echo core::rootpath(); ?>/uploads/<?php echo core::baseImg($girls[3]->img_1); ?>"
                             height="302" width="196" border="0">
                    </div>
                </a>
            </td>
            <!-- /G4 -->

            <!-- G5 -->
            <td width="196"><img
                        src="<?php echo core::rootpath(); ?>/asset/images/<?php echo core::working($girls[4]->working, $girls[4]->img_1); ?>"
                        width="196"
                        height="39" border="0">
                <br>
                <a href="<?php echo core::rootpath(); ?>/<?php echo core::profile(5, $girls[4]->img_1); ?>">
                    <div class="girl-container">
                        <?php echo !is_null($girls[4]->name) ? '<div class="girl-tag">' . $girls[4]->name . '</div>' : null ?>
                        <img src="<?php echo core::rootpath(); ?>/uploads/<?php echo core::baseImg($girls[4]->img_1); ?>"
                             height="302" width="196" border="0">
                    </div>
                </a>
            </td>
            <!-- /G5 -->

            <td width="10">
                <img src="<?php echo core::rootpath(); ?>/asset/images/right.png" height="302" border="0">
            </td>
        </tr>
    </table>

    <!-- /b1 -->

    <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <img src="<?php echo core::rootpath(); ?>/asset/images/sep.png" width="1000" height="14" border="0">
            </td>
        </tr>
    </table>

    <!-- b2 -->

    <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="10">
                <img src="<?php echo core::rootpath(); ?>/asset/images/left.png" height="305" border="0">
            </td>

            <!-- G1 -->
            <td width="196"><img
                        src="<?php echo core::rootpath(); ?>/asset/images/<?php echo core::working($girls[5]->working, $girls[5]->img_1); ?>"
                        width="196"
                        height="39" border="0">
                <br>
                <a href="<?php echo core::rootpath(); ?>/<?php echo core::profile(6, $girls[5]->img_1); ?>">
                    <div class="girl-container">
                        <?php echo !is_null($girls[5]->name) ? '<div class="girl-tag">' . $girls[5]->name . '</div>' : null ?>
                        <img src="<?php echo core::rootpath(); ?>/uploads/<?php echo core::baseImg($girls[5]->img_1); ?>"
                             height="302" width="196" border="0">
                    </div>
                </a>
            </td>
            <!-- /G1 -->

            <!-- G2 -->
            <td width="196"><img
                        src="<?php echo core::rootpath(); ?>/asset/images/<?php echo core::working($girls[6]->working, $girls[6]->img_1); ?>"
                        width="196"
                        height="39" border="0">
                <br>
                <a href="<?php echo core::rootpath(); ?>/<?php echo core::profile(7, $girls[6]->img_1); ?>">
                    <div class="girl-container">
                        <?php echo !is_null($girls[6]->name) ? '<div class="girl-tag">' . $girls[6]->name . '</div>' : null ?>
                        <img src="<?php echo core::rootpath(); ?>/uploads/<?php echo core::baseImg($girls[6]->img_1); ?>"
                             height="302" width="196" border="0">
                    </div>
                </a>
            </td>
            <!-- /G2 -->

            <!-- G3 -->
            <td width="196"><img
                        src="<?php echo core::rootpath(); ?>/asset/images/<?php echo core::working($girls[7]->working, $girls[7]->img_1); ?>"
                        width="196"
                        height="39" border="0">
                <br>
                <a href="<?php echo core::rootpath(); ?>/<?php echo core::profile(8, $girls[7]->img_1); ?>">
                    <div class="girl-container">
                        <?php echo !is_null($girls[7]->name) ? '<div class="girl-tag">' . $girls[7]->name . '</div>' : null ?>
                        <img src="<?php echo core::rootpath(); ?>/uploads/<?php echo core::baseImg($girls[7]->img_1); ?>"
                             height="302" width="196" border="0">
                    </div>
                </a>
            </td>
            <!-- /G3 -->

            <!-- G4 -->
            <td width="196"><img
                        src="<?php echo core::rootpath(); ?>/asset/images/<?php echo core::working($girls[8]->working, $girls[8]->img_1); ?>"
                        width="196"
                        height="39" border="0">
                <br>
                <a href="<?php echo core::rootpath(); ?>/<?php echo core::profile(9, $girls[8]->img_1); ?>">
                    <div class="girl-container">
                        <?php echo !is_null($girls[8]->name) ? '<div class="girl-tag">' . $girls[8]->name . '</div>' : null ?>
                        <img src="<?php echo core::rootpath(); ?>/uploads/<?php echo core::baseImg($girls[8]->img_1); ?>"
                             height="302" width="196" border="0">
                    </div>
                </a>
            </td>
            <!-- /G4 -->

            <!-- G5 -->
            <td width="196"><img
                        src="<?php echo core::rootpath(); ?>/asset/images/<?php echo core::working($girls[9]->working, $girls[9]->img_1); ?>"
                        width="196"
                        height="39" border="0">
                <br>
                <a href="<?php echo core::rootpath(); ?>/<?php echo core::profile(10, $girls[9]->img_1); ?>">
                    <div class="girl-container">
                        <?php echo !is_null($girls[9]->name) ? '<div class="girl-tag">' . $girls[9]->name . '</div>' : null ?>
                        <img src="<?php echo core::rootpath(); ?>/uploads/<?php echo core::baseImg($girls[9]->img_1); ?>"
                             height="302" width="196" border="0">
                    </div>
                </a>
            </td>
            <!-- /G5 -->

            <td width="10">
                <img src="<?php echo core::rootpath(); ?>/asset/images/right.png" height="302" border="0">
            </td>
        </tr>
    </table>

    <!-- /b2 -->

    <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <img src="<?php echo core::rootpath(); ?>/asset/images/sep.png" width="1000" height="14" border="0">
            </td>
        </tr>
    </table>


    <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <img src="<?php echo core::rootpath(); ?>/asset/images/bas.png" width="1000" height="45" border="0">
            </td>
        </tr>
    </table>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/sections/footer.php';
?>