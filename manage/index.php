<?php
include $_SERVER['DOCUMENT_ROOT'] . '/lib/loader.php';


/**
 * User already logged
 */
if (isset($_SESSION['user'])) {

    header('Location: ' . core::rootpath() . '/manage/dashboard.php');
    exit;

}


/**
 * User loggin
 */
else {

    if (isset($_POST['login'])) {


        /**
         * CAPTCHA CONFIG
         */
        define("CAPTCHA_URL", "https://www.google.com/recaptcha/api/siteverify");
        define("CAPTCHA_PRIVATE", "6LclpBYUAAAAAJDl0TeUXlCUTir6izSDBvtVi-lM");


        /**
         * VALIDATE CAPTCHA RESPONSE
         */
        $captcha_data = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : null;
        $captcha_response = file_get_contents(CAPTCHA_URL . "?secret=" . CAPTCHA_PRIVATE . "&response=" . $captcha_data . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
        $captcha_response = json_decode($captcha_response);

        if (!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response']) || $captcha_response->success != 1) {
            $error_msg = '<div class="alert alert-danger" role="alert"><i class="fa fa-times-circle"></i> Le reCAPTCHA est invalide.</div>';
        }


        /**
         * VALIDATE ACCOUNT
         */
        else {


            /**
             * DEFINE ACCOUNT INFO
             */
            $accountName = $_DB->escape_string($_POST['username']);
            $accountPass = $_DB->escape_string($_POST['password']);


            /**
             * VALIDATE USER NAME
             */
            $user_qry = $_DB->query("SELECT COUNT(*) AS ucount FROM `account` WHERE `username`='" . $accountName . "'")->fetch_object();
            if ($user_qry->ucount < 1) {
                $error_msg = '<div class="alert alert-danger" role="alert"><i class="fa fa-times-circle"></i> Nom d\'utilisateur invalide.</div>';
            }


            /**
             * VALIDATE PASSWORD
             */
            else {

                $pwd_hash = sha1(strtoupper($accountName) . ":" . $accountPass);
                $login = $_DB->query("SELECT `password_hash` FROM `account` WHERE `username`='" . strtoupper($accountName) . "'")->fetch_assoc();


                /**
                 * LOGIN IS OK
                 */
                if (strtoupper($login['password_hash']) == strtoupper($pwd_hash)) {


                    /**
                     * CREATE SESSION
                     */
                    $_SESSION['user'] = [
                        'username' => $accountName,
                        'password' => $pwd_hash,
                    ];


                    /**
                     * REDIRECT TO DASHBOARD
                     */
                    header('Location: ' . core::rootpath() . '/manage/dashboard.php');
                    exit;
                }


                /**
                 * WRONG PASSWORD
                 */
                else {
                    $error_msg = '<div class="alert alert-danger" role="alert"><i class="fa fa-times-circle"></i> Mot de passe invalide</div>';
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agence d'escorte et d'accompagnement à Montréal - OneLife xxx</title>
    <link rel="icon" type="image/png" href="<?php echo core::rootpath(); ?>/asset/images/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo core::rootpath(); ?>/asset/images/favicon.ico">
    <meta name="keywords" content="rencontre, sexe, escort, modèle, escorte, Montréal, fête, femme, fille, luxe">
    <meta name="description" content="SERVICE D’ESCORTE DE GRANDE CLASSE">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://use.fontawesome.com/24e949c2bb.js"></script>
    <style>
        body {
            padding-top: 15px;
            font-size: 12px
        }

        .main {
            max-width: 320px;
            margin: 0 auto;
        }

        .login-or {
            position: relative;
            font-size: 18px;
            color: #aaa;
            margin-bottom: 10px;
            padding-bottom: 10px;
        }

        .hr-or {
            background-color: #cdcdcd;
            height: 1px;
        }

        h3 {
            text-align: center;
            line-height: 300%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">

        <div class="main">

            <h3>Centre d'administration</h3>

            <div class="login-or">
                <hr class="hr-or">
            </div>
            <?php
            if (isset($error_msg)) {
                echo $error_msg;
                unset($error_msg);
            }
            ?>
            <form action="<?php echo core::rootpath() . $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group">
                    <label for="inputUsernameEmail">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="inputUsernameEmail" name="username">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Mot de passe</label>
                    <input type="password" class="form-control" id="inputPassword" name="password">
                </div>
                <div class="g-recaptcha" data-sitekey="6LclpBYUAAAAAL98fwylnIxoTVuSfgddLQn8a9Dt"></div>
                <br/>
                <button type="submit" class="btn btn btn-primary" name="login">
                    Connexion
                </button>
            </form>

        </div>

    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>